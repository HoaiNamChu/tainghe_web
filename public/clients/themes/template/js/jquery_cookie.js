jQuery.cookie = function (e, n, o) {
    if (1 < arguments.length && (null === n || "object" != typeof n)) {
        if (o = jQuery.extend({}, o), null === n && (o.expires = -1), "number" == typeof o.expires) {
            var t = o.expires, r = o.expires = new Date;
            r.setDate(r.getDate() + t)
        }
        return document.cookie = [encodeURIComponent(e), "=", o.raw ? String(n) : encodeURIComponent(String(n)), o.expires ? "; expires=" + o.expires.toUTCString() : "", o.path ? "; path=" + o.path : "", o.domain ? "; domain=" + o.domain : "", o.secure ? "; secure" : ""].join("")
    }
    var i, p = (o = n || {}).raw ? function (e) {
        return e
    } : decodeURIComponent;
    return (i = new RegExp("(?:^|; )" + encodeURIComponent(e) + "=([^;]*)").exec(document.cookie)) ? p(i[1]) : null
};
