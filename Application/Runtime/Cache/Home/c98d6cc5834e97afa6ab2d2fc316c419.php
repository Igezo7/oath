<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>快来生成你的入团誓词名片吧！</title>
    <link rel="stylesheet" href="/oath/Public/css/content.css">
    <script>
        !function(a,b){function c(){var b=f.getBoundingClientRect().width;b/i>540&&(b=540*i);var c=b/10;f.style.fontSize=c+"px",k.rem=a.rem=c}var d,e=a.document,f=e.documentElement,g=e.querySelector('meta[name="viewport"]'),h=e.querySelector('meta[name="flexible"]'),i=0,j=0,k=b.flexible||(b.flexible={});if(g){console.warn("将根据已有的meta标签来设置缩放比例");var l=g.getAttribute("content").match(/initial\-scale=([\d\.]+)/);l&&(j=parseFloat(l[1]),i=parseInt(1/j))}else if(h){var m=h.getAttribute("content");if(m){var n=m.match(/initial\-dpr=([\d\.]+)/),o=m.match(/maximum\-dpr=([\d\.]+)/);n&&(i=parseFloat(n[1]),j=parseFloat((1/i).toFixed(2))),o&&(i=parseFloat(o[1]),j=parseFloat((1/i).toFixed(2)))}}if(!i&&!j){var p=(a.navigator.appVersion.match(/android/gi),a.navigator.appVersion.match(/iphone/gi)),q=a.devicePixelRatio;i=p?q>=3&&(!i||i>=3)?3:q>=2&&(!i||i>=2)?2:1:1,j=1/i}if(f.setAttribute("data-dpr",i),!g)if(g=e.createElement("meta"),g.setAttribute("name","viewport"),g.setAttribute("content","initial-scale="+j+", maximum-scale="+j+", minimum-scale="+j+", user-scalable=no"),f.firstElementChild)f.firstElementChild.appendChild(g);else{var r=e.createElement("div");r.appendChild(g),e.write(r.innerHTML)}a.addEventListener("resize",function(){clearTimeout(d),d=setTimeout(c,300)},!1),a.addEventListener("pageshow",function(a){a.persisted&&(clearTimeout(d),d=setTimeout(c,300))},!1),"complete"===e.readyState?e.body.style.fontSize=12*i+"px":e.addEventListener("DOMContentLoaded",function(){e.body.style.fontSize=12*i+"px"},!1),c(),k.dpr=a.dpr=i,k.refreshRem=c,k.rem2px=function(a){var b=parseFloat(a)*this.rem;return"string"==typeof a&&a.match(/rem$/)&&(b+="px"),b},k.px2rem=function(a){var b=parseFloat(a)/this.rem;return"string"==typeof a&&a.match(/px$/)&&(b+="rem"),b}}(window,window.lib||(window.lib={}));
    </script>
</head>
<body>
    <div class="container">
        <div class="loading">
            <div class="loader">
                <div class="loader-inner line-spin-fade-loader">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="loader-text">正在加载中...</div>
        </div>
        <div class="alert" style="display: none;">
            <div class="alert-box">
                <div class="alert-icon">
                    <img src="/oath/Public/img/aIcon.png" alt="">
                </div>
                <p class="alert-info a-info-1">亲！你的入党誓词名片已生成。</p>
                <p class="alert-info a-info-2">赶紧长按图片保存并分享吧～</p>
                <div class="alert-confirm">确定</div>
            </div>
        </div>
        <div class="inner" style="display: none;">
            <img src="/oath/Public/cache/<?php echo ($text); echo ($time); ?>.jpg" alt="">
        </div>
    </div>
</body>
<script src="/oath/Public/js/content.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
    wx.config({

        debug:true,// 是否开启调试模式

        appId:'<?php echo ($wxconfig["appId"]); ?>',// 必填，微信号AppID

        timestamp:'<?php echo ($wxconfig["timestamp"]); ?>',// 必填，生成签名的时间戳

        nonceStr:'<?php echo ($wxconfig["nonceStr"]); ?>',// 必填，生成签名的随机串

        signature:'<?php echo ($wxconfig["signature"]); ?>',// 必填，签名，见附录1

        jsApiList:['onMenuShareTimeline',//分享到朋友圈

            'onMenuShareAppMessage',//分享给朋友

            'onMenuShareQQ'//分享到QQ

        ]// 必填，需要使用的JS接口列表，所有JS接口列表见附录2

    });

    wx.ready(function(){

        var options ={

            title:'亲，快来生成你的入党誓词名片吧！以青春的名义，重温入团誓词！',// 分享标题

            link:'<?php echo ($wxconfig["url"]); ?>',// 分享链接，记得使用绝对路径

            imgUrl:'/oath/Public/img/index.png',// 分享图标，记得使用绝对路径

            desc:'我们是五月的花海 用青春拥抱时代 我们是初升的太阳 用生命点燃未来！',// 分享描述

            success:function(){

                console.info('分享成功！');

// 用户确认分享后执行的回调函数

            },

            cancel:function(){

                console.info('取消分享！');

// 用户取消分享后执行的回调函数

            }

        }

        wx.onMenuShareTimeline(options);// 分享到朋友圈

        wx.onMenuShareAppMessage(options);// 分享给朋友

        wx.onMenuShareQQ(options);// 分享到QQ

    });
</script>
</html>