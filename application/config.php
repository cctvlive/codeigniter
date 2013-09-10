//申请到的appid
$config["qq_appid"]    = "100501411";
//$config["qq_appid"]    = "";
//申请到的appkey
$config["qq_appkey"]   = "0b2eaddd13b82f3806357f9eb6d74061";
//$config["qq_appkey"]   = "";
//QQ登录成功后跳转的地址,请确保地址真实可用，否则会导致登录失败。
//$config["qq_callback"] = "http://www.phpoop.sinaapp.com/oauth/qqcallback";
$config["qq_callback"] = "http://www.phpoop.sinaapp.com/load/qqcallback";
// $config["qq_callback"] = "http://www.phpoop.sinaapp.com/load/i_my";


//QQ授权api接口.按需调用
//  $config["qq_scope"] = "get_user_info";//取得空间资料

$config["qq_scope"] = 'get_info';//取得登陆用户资料.财付通收货地址

/* End of file config.php */
/* Location: ./application/config/config.php */


$config["WB_AKEY"]    = "112447102";
/*$config["qq_appid"]    = "";*/
/*申请到的appkey*/
$config["WB_SKEY"]   = "61261417951edf6818aa2e3d2aeff342";
/*$config["qq_appkey"]   = "";*/
/*微博登录成功后跳转的地址,请确保地址真实可用，否则会导致登录失败。回调地址只能使用绝对地址,不能使用类/方法的形式*/
$config["WB_CALLBACK_URL"] = 'http://phpoop.sinaapp.com/weibo/callback.php';
// $config["WB_CALLBACK_URL"] = 'http://phpoop.sinaapp.com/application/views/load/callback.php';
