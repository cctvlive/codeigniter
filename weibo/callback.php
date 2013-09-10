<?php
session_start();

include_once( 'config.php' );
include_once( 'saetv2.ex.class.php' );

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

if (isset($_REQUEST['code'])) {
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = WB_CALLBACK_URL;
	try {
		$token = $o->getAccessToken( 'code', $keys ) ;
	} catch (OAuthException $e) {
	}
}

if ($token) {
	$_SESSION['token'] = $token;
	setcookie( 'weibojs_'.$o->client_id, http_build_query($token) );
?>
<!-- 授权完成,<a href="weibolist.php">进入你的微博列表页面</a><br /> -->
<script type="text/javascript">
//setTimeout(function(){location='http://phpoop.sinaapp.com/index.php/load/weibolist'},'-1')//这里是指停留5秒后跳转到主页 
setTimeout(function(){location='http://phpoop.sinaapp.com/index.php/load/i_my'},'-1')//这里是指停留5秒后跳转到主页 
</script> 
<?php
} else {
?>
<!-- 授权失败。 -->
<script type="text/javascript">
//setTimeout(function(){location='http://phpoop.sinaapp.com/index.php/load/weibolist'},'-1')//这里是指停留5秒后跳转到主页 
setTimeout(function(){location='http://phpoop.sinaapp.com/index.php/load/qw'},'1')//这里是指停留5秒后跳转到主页 
</script> 
<?php
}
?>
