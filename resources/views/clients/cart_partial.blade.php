<form id="cart">
    <table class="md-tbl text-20">
        <thead class="md-tbl__thead text-14">
        <tr>
            <th class="md-tbl__th">Tên sản phẩm</th>
            <th class="md-tbl__th md-tbl__th--min">Giá</th>
            <th class="md-tbl__th md-tbl__th--min">Số lượng</th>
            <th class="md-tbl__th md-tbl__th--min">Thành tiền</th>
            <th class="md-tbl__th md-tbl__th--min">Xoá</th>
        </tr>
        </thead>
        @php( $totalCart = 0 )
        <tbody class="md-tbl__body">
        @if(count($cart))
            @foreach($cart as $key => $item)
                <tr class="md-tbl__tr item_r{{$key}}">
                    <td class="md-tbl__td md-tbl__td--left">
                        <a class="media align-items-center link-unstyled"
                           href="{{ $item['product']->image }}">
                            <div class="iwrap-56 border rounded mr-30" style="width: 110px;">
                                <img src="{{ $item['product']->image }}"
                                     onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'" alt="Thieaudio Monarch MKIII">
                            </div>
                            <div class="media-body">{{ $item['product']->name }}</div>
                        </a>
                    </td>
                    <td class="md-tbl__td md-tbl__td--min" id="price_r{{$key}}" data-price="{{ $item['product']->productVariants[0]->price }}"> {{ number_format($item['product']->productVariants[0]->price) }}
                        VNĐ
                        <input type="hidden" name="btnUpdate" value="Cập nhật giỏ hàng">
                    </td>
                    <td class="md-tbl__td md-tbl__td--min">
                        <div class="input-group input-group-sm flex-nowrap">
                                <span class="input-group-prepend js-number-btn" data-plus="-1">
                                    <span class="input-group-text">
                                        <i class="fa fa-minus"></i>
                                    </span>
                                </span>
                            <input class="form-control text-center js-number-value quantity" id="quantity_r{{$key}}"
                                   data-itemid="{{$key}}" type="text" name="quantity[{{$key}}][]" value="{{ $item['quantity'] }}" min="1" size="1"
                                   style="width: 40px;" readonly="">
                            <span class="input-group-append js-number-btn" data-plus="1">
                                    <span class="input-group-text">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </span>
                        </div>
                    </td>
                    <td class="md-tbl__td md-tbl__td--min">
                        <span id="total_r{{$key}}" class="total_r_item" data-val="{{ $item['product']->productVariants[0]->price * $item['quantity'] }}">{{ number_format($item['product']->productVariants[0]->price * $item['quantity']) }}</span> VNĐ
                    </td>
                    <td class="md-tbl__td md-tbl__td--min">
                        <a class="text-dark" href="javascript:removeCartItem({{ $key }},'item_r{{$key}}');">
                            <i class="fa fa-window-close"></i>
                        </a>
                    </td>
                </tr>
                @php($totalCart += $item['product']->productVariants[0]->price * $item['quantity'])
            @endforeach
        @else
            <tr class="md-tbl__tr">
                <td class="md-tbl__td md-tbl__td--left" colspan="5">
                    <div class="md-tbl__card">
                        Bạn chưa chọn sản phẩm nào!
                    </div>
                </td>
            </tr>
        @endif
        </tbody>
    </table>
</form>
<div class="md-cart__text">
    <div class="md-cart__total">Tổng tiền: <span id="total">{{ number_format($totalCart) }}</span> VNĐ</div>
</div>
<div class="md-cart__btnwrap">
    <a class="md-cart__btn eff-btn-filter rounded" href="javascript:;" data-dismiss="modal">Tiếp tục mua hàng</a>
    <a class="md-cart__btn md-cart__btn--red eff-btn-filter rounded" href="/gui-don-hang">Thanh toán</a>
</div>

<script>
    numberInput('.js-number-value');
    $('.js-number-btn').on('click', function () {
        var plus = $(this).data('plus');
        var input = $(this).siblings('.js-number-value');
        var value = input.val();
        var newValue = parseInt(value) + plus;
        if (newValue > 0) {
            input.val(newValue);
            input.trigger('change');
        }
        return false;
    });

    $(".quantity").change(function () {
        update_cart_price(this);
    });
</script>

