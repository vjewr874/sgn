$(function () {

});

//订单倒计时
var maxtime = 5 * 60; //
var state = true; //
function CountDown() {
    if (maxtime >= 0) {
        minutes = Math.floor(maxtime / 60);
        seconds = Math.floor(maxtime % 60);
        msg = "距离结束还有" + minutes + "分" + seconds + "秒";
        document.getElementById('minute_show').innerText = minutes + "分";
        document.getElementById('second_show').innerText = seconds + "秒";
        /*if (maxtime == 1 * 60) alert("订单还有1分钟失效");
        */
        --maxtime;
    } else {
        clearInterval(timers);
        state = false;
        document.getElementById('imgCode2').src = '/static/zzpay/img/qrcode_timeout.png';
        document.getElementById('imgCode3').src = '/static/zzpay/img/qrcode_timeout.png';
        if (window.confirm('订单已失效，是否重新生成')) {
            window.location.reload();
            return true;
        } else {
            return false;
        }
    }
}

timers = setInterval("CountDown()", 1000);

//循环执行，每隔20秒钟执行一次showalert（）
//window.setInterval(showalert, 5000);

function showalert() {
    var orderId = document.getElementById("orderId").value;
    if (orderId != null && orderId != "undefined") {
        checkPayResult(orderId);
    }
}

var timer = null;
var count = 5;
timer = setInterval(function () {
    if (state == true) {
        count--;
        $('.resultMsg').text(count + '秒后自动获取支付结果');
        if (count <= 0) {
            count = 5
            $('.resultMsg').text('5秒后自动获取支付结果');
        }
    } else {
        clearInterval(timer)
    }
}, 1000);

/*支付状态查询，不建议这种写法。只是为了简单版本演示
1、请api接入
2、在您的服务端请求支付状态查询
3、js页面请求您自己服务端的付款状态查询接口
*/
function checkPayResult(orderId) {
    $
        .ajax({
            url: "https://admin.zhanzhangfu.com/order/onlinePayFindResult?orderId=" + orderId,
            dataType: "json",
            type: "post",
            success: function (obj) {
                if (obj.code == "10001") {
                    //支付完成，定时器关闭
                    clearInterval(timer)
                    document.getElementById('imgCode2').src = '/static/zzpay/img/qrcode_paysuccess.jpg';
                    document.getElementById('imgCode3').src = '/static/zzpay/img/qrcode_paysuccess.jpg';
                    if (window.confirm('支付成功')) {
                        window.location.reload();
                        //alert("确定");
                        return true;
                    } else {
                        //alert("取消");
                        return false;
                    }
                } else if (obj.code == "10003") {
                    if (window.confirm('订单已经失效，是否重新生成订单')) {
                        //alert("确定");
                        window.location.reload();
                        return true;
                    } else {
                        //alert("取消");
                        return false;
                    }
                } else {
                }
            },
            error: function (obj) {
                alert("未知异常,稍后重试！");
            }
        });
}








