<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout()
    {
        $carts = session('cart', []);
        if (empty($carts)) {
            return redirect()->route('home.index')->with('error', 'Giỏ hàng trống!');
        }

        $paymentMethods = PaymentMethod::where('is_active', 1)->get();

        return view('clients.checkout', compact('carts', 'paymentMethods'));
    }

    public function checkCoupon(Request $request)
    {
        if (auth()->check()) {

        }

        $coupon = Coupon::where('code', $request->coupon)->first();

        return response()->json(['coupon' => $coupon], 200);
    }

    public function payment(Request $request)
    {
        if (auth()->check()) {

        }

        $data = [
            'user_id' => auth()->id() ?? null,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'province_code' => $request->province_code,
            'district_code' => $request->district_code,
            'ward_code' => $request->ward_code,
            'address_detail' => request()->address_detail,
            'shipping_address' => request()->address_detail,
            'total_amount' => request()->total_amount,
            'discount_amount' => request()->discount_amount ? request()->discount_amount : 0,
            'coupon_id' => $request->coupon_id ?? null,
//            'status' => 'Pending',
            'payment_method_id' => PaymentMethod::where('code', request()->payment_method)->first()->id,
//            'payment_status' => 'Pending',
            'shipping_provider_id' => $request->shipping_provider_id ?? null,
            'tracking_code' => request()->tracking_code ?? null,
            'shipping_fee' => $request->shipping_fee ?? 0,
            'note' => $request->note,
        ];


        $order = Order::create($data);


        if ($request->payment_method === 'VNPAY') {
            return $this->processOnlinePayment($order);
        }

        session()->forget('cart');

        return redirect()->route('order.success', $order->id);
    }


    private function processOnlinePayment(Order $order)
    {
        // Cấu hình cổng thanh toán (ví dụ với VNPAY)
        $vnp_TmnCode = "VE6K2G0A";
        $vnp_HashSecret = "2YZEFBP627O8ZXMP8H5XH0YWF19QXCV1";
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('payment.callback');

        $vnp_TxnRef = $order->id . '_' . time();
        $vnp_OrderInfo = "Thanh toan don hang #$order->id";
        $vnp_Amount = $order->total_amount * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => "billpayment",
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;

        return redirect($vnp_Url);
    }

    public function paymentCallback(Request $request)
    {
        $orderId = explode('_', $request->vnp_TxnRef)[0];

        $order = Order::findOrFail($orderId);


        // Xác minh tính hợp lệ của response từ VNPAY
        $vnp_HashSecret = "2YZEFBP627O8ZXMP8H5XH0YWF19QXCV1";
        $inputData = array();
        foreach ($request->all() as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $hashData = "";
        $i = 0;
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);

        if ($secureHash === $vnp_SecureHash && $request->vnp_ResponseCode == '00') {
            $order->update([
                'payment_status' => 'Completed',
                'status' => 'Processing'
            ]);

            session()->forget('cart');

            return redirect()->route('order.success', $order->id);
        }

        return redirect()->route('order.failed');
    }

    public function orderSuccess(Request $request)
    {
        $order = Order::where('id', request('id'))->first();

        return view('clients.success', compact('order'));
    }
}
