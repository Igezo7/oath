<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>重温入党誓词</title>
    <link rel="stylesheet" href="/oath/Public/css/index.css">
    <script>
        !function(a,b){function c(){var b=f.getBoundingClientRect().width;b/i>540&&(b=540*i);var c=b/10;f.style.fontSize=c+"px",k.rem=a.rem=c}var d,e=a.document,f=e.documentElement,g=e.querySelector('meta[name="viewport"]'),h=e.querySelector('meta[name="flexible"]'),i=0,j=0,k=b.flexible||(b.flexible={});if(g){console.warn("将根据已有的meta标签来设置缩放比例");var l=g.getAttribute("content").match(/initial\-scale=([\d\.]+)/);l&&(j=parseFloat(l[1]),i=parseInt(1/j))}else if(h){var m=h.getAttribute("content");if(m){var n=m.match(/initial\-dpr=([\d\.]+)/),o=m.match(/maximum\-dpr=([\d\.]+)/);n&&(i=parseFloat(n[1]),j=parseFloat((1/i).toFixed(2))),o&&(i=parseFloat(o[1]),j=parseFloat((1/i).toFixed(2)))}}if(!i&&!j){var p=(a.navigator.appVersion.match(/android/gi),a.navigator.appVersion.match(/iphone/gi)),q=a.devicePixelRatio;i=p?q>=3&&(!i||i>=3)?3:q>=2&&(!i||i>=2)?2:1:1,j=1/i}if(f.setAttribute("data-dpr",i),!g)if(g=e.createElement("meta"),g.setAttribute("name","viewport"),g.setAttribute("content","initial-scale="+j+", maximum-scale="+j+", minimum-scale="+j+", user-scalable=no"),f.firstElementChild)f.firstElementChild.appendChild(g);else{var r=e.createElement("div");r.appendChild(g),e.write(r.innerHTML)}a.addEventListener("resize",function(){clearTimeout(d),d=setTimeout(c,300)},!1),a.addEventListener("pageshow",function(a){a.persisted&&(clearTimeout(d),d=setTimeout(c,300))},!1),"complete"===e.readyState?e.body.style.fontSize=12*i+"px":e.addEventListener("DOMContentLoaded",function(){e.body.style.fontSize=12*i+"px"},!1),c(),k.dpr=a.dpr=i,k.refreshRem=c,k.rem2px=function(a){var b=parseFloat(a)*this.rem;return"string"==typeof a&&a.match(/rem$/)&&(b+="px"),b},k.px2rem=function(a){var b=parseFloat(a)/this.rem;return"string"==typeof a&&a.match(/px$/)&&(b+="rem"),b}}(window,window.lib||(window.lib={}));
    </script>
</head>
<body>
    <div class="container">
        <div class="cover alert" style="display: none;">
            <div class="alert-box">
                <div class="alert-icon">
                    <img src="/oath/Public/img/fIcon.png" alt="">
                </div>
                <p class="alert-info a-info-1">亲！未输入名字或者名字太长啦，请重新输入</p>
                <div class="alert-confirm">确定</div>
            </div>
        </div>
        <div class="header">
            <div class="flag">
                <img src="/oath/Public/img/flag.png" alt="">
            </div>
        </div>
        <div class="content-words">
            <img src="/oath/Public/img/content.png" alt="">
        </div>
        <form action="<?php echo U('index/test');?>" method="post" class="form">
            <div class="input-name">
                <textarea name="cardname" class="names" placeholder="输入姓名生成属于自己入党誓言"></textarea>
            </div>
            <div class="build-btn">
                <button>
                    <div class="btn-inner">马上生成<span class="icon"></span></div>
                </button>
            </div>
        </form>
    </div>
</body>
<script src="/oath/Public/js/index.js"></script>
</html>