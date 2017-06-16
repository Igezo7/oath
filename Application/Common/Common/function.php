<?php
/**
 * Created by PhpStorm.
 * User: igezo
 * Date: 2017/6/16
 * Time: 23:49
 */
if(!function_exists('wx_share_init')){

    function wx_share_init(){

        $wxconfig = array();

        vendor('Wxshare.class#jssdk');

        $config = APP_DEBUG ? C("WECHAT_SDK_TEST"): C("WECHAT_SDK");//这里配置了微信公众号的AppId和AppSecret

        $jssdk =new JSSDK($config['APPID'], $config['APPSECRET']);

        $wxconfig = $jssdk->GetSignPackage();

        return $wxconfig;

    }

}