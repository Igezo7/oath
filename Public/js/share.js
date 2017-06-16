/**
 * Created by igezo on 2017/6/16.
 */

wx.config({
    appId: 'wx07b5bba626c00d2c',  //公众号的 appID
    timestamp: '<?php echo $wx["timestamp"];?>',  //生成签名的时间戳
    nonceStr: '<?php echo $wx["noncestr"];?>',  //生成签名的随机字符串
    signature: '<?php echo $wx["signature"];?>',  //生成的签名
    jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'onMenuShareQZone'
    ]
});