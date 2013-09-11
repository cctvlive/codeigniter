<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>用户资料</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="">
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<base href="<?php echo  base_url();?>" />
 <style type="text/css">@import "style/css/bootstrap.min.css" </style>
<link type="text/css" href="style/css/333.css" rel="stylesheet" charset="utf-8">

</head>
    
<body style="overflow-x:hidden;background:#C58C84;" >
   <!-- 导航 -->
<div class="container-fluid">
<div class="row-fluid">
    <div class="span12">
<ul class="nav nav-tabs">
 
   <li id="my"><a>个人资料</a></li>
   <li id="my_mm" class="active"><a >密码安全</a></li>
   <li id="my_d"><a>账号绑定</a></li>

</ul>
</div>

<div class="span10" id="bind">
<!-- 密码安全 -->

<!--don't close the div here-->

<?php $sex_my=$data['type']; if($sex_my==1){?>
<p class="bbda pbm mbm">您目前使用的是<b style="color: #fff;"  >本站</b>帐号，您可以在这里修改独立密码，只有设置了独立密码后本站需要填写密码的相应功能才可使用</p>
<?php }elseif($sex_my==2){?>
<p class="bbda pbm mbm">您目前使用的是<b style="color: #fff;"  >腾讯</b>帐号绑定本站，您可以在这里设置独立密码，只有设置了独立密码后本站需要填写密码的相应功能才可使用</p>
 <?php }elseif($sex_my==3){?>
 <p class="bbda pbm mbm">您目前使用的是<b style="color: #fff;"  >新浪</b>帐号绑定本站，您可以在这里设置独立密码，只有设置了独立密码后本站需要填写密码的相应功能才可使用</p>
  <?php }?> 
<form  class="form-horizontal" method="post"  action= "<?php echo site_url('updata/i_my_mima');?>" >
<input type="hidden" value="<?php echo $data['key_id']; //=$query->u_id;?>" name="usesr_id" />
<table summary="个人资料" cellspacing="0" cellpadding="0" class="tfm">
 <div class="control-group">
    <label class="control-label" for="newpassword">密码:</label>
    <div class="controls">
<input type="password" name="newpassword"   placeholder="password" value=""  id="newpassword" />

<p class="d">如不需要更改密码，此处请留空 ,请不要操作这里</p>
</div></div>



<tr><td>
<div class="control-group">
    <label class="control-label" for="newpassword2">确认新密码:</label>
    <div class="controls">
          <input type="password" name="newpassword2"   placeholder="password" value="" id="newpassword2"/>
          <p class="d">如不需要更改密码，此处请留空,请不要操作这里 </p>
</div></div>
</td></tr>

<tr id="contact"><td>
<div class="control-group">
    <label class="control-label" for="email">Email:</label>
    <div class="controls">
<input type="text" name="emailnew" id="email"  placeholder="Email:" value=""  />
<p class="d">
<i class="icon-envelope"></i>
 <span >新邮箱(<?php echo $data['email'];?>)等待验证中...</span>

<br />
系统已经向该邮箱发送了一封验证激活邮件，请查收邮件，进行验证激活。<br>
如果没有收到验证邮件，您可以更换一个邮箱，或者
<a href="home" >
重新接收验证邮件</a>

</p>

</div></div>
</td></tr>


<tr><td>
<div class="control-group">
    <label class="control-label"></label>
    <div class="controls">
<input class="btn btn-danger"  type="submit" value="保存" />
</div></div>
</td></tr>
</table>

</form>

</div>


</div> 
<!-- 10span -->

<!-- 10span -->

<div class="span10" id="bind1" style="display:none;">
<!--don't close the div here--><p class="pbm bbda xi1">
<?php 
$sex_my=$data['type']; if($sex_my==2){?>
您已将帐号 <strong><?php echo $data['username']; //=$user['nickname']?></strong> 与<b style="color: #fff;"  >QQ</b>号码绑定</p>
<?php } elseif($sex_my==3){?><p class="pbm bbda xi1">
您已将帐号 <strong><?php echo $data['username']; ?></strong> 与<b style="color: #fff;"  >新浪通行证</b>绑定</p>
<?php }?>
<form  form_id="up_my_type" class="form-horizontal" method="post" >
<input type="hidden" name="uid" value="<?//=$query->uid;?>">
<table cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th>绑定设置</th>
<td>
    <?php 
$sex_my=$data['type']; if($sex_my==2){?>
<label for="ispublisht"><input type="checkbox" id="ispublisht" name="qq" class="pc" value="2" checked="checked" /> 发表主题和回复时默认转播到腾讯微博</label>
<?php } elseif($sex_my==3){?>
<label for="ispublisht"><input type="checkbox" id="ispublisht" name="sina" class="pc" value="3" checked="checked" /> 发表主题和回复时默认转播到新浪微博</label>
<?php }?> 
</td>
</tr>
<tr>
<th></th>
<td>
<input type="hidden" name="op" value="config"/>
<button type="button"  class="btn btn-danger submit" form_id="up_my_type" submit_url=""  redirect="" ><strong>保存设置</strong></button>
  
    </td>
</tr>
</table>
</form>
<h2>
<a class=" my_mm btn btn-danger">为单独登录站点创建登录密码</a>
</h2>
<br />
    
    
    <?php  if($data['status']==0){?>
    <h2>
<a class=" my_bind2 btn btn-danger">解除已绑定帐号？</a>
<a class="close btn btn-danger"  style="display:none;" data-dismiss="alert"><b style="color: #fff;">取消操作 &times;</b></a>
</h2>

<div class="bind2"  style="display:none;">
<form  method="post" name="status" action= "<?php echo site_url('updata/i_my_status');?>" >
<div class="ptm pbm">
<?php

$sex_my=$data['type']; if($sex_my==2){?>
<p class="lead">您当前使用<b style="color: #fff;"  >腾讯QQ</b>帐号绑定到 <b style="color: red;"  >悦优谱</b>中国官方网站  </p> 
<?php }elseif($sex_my==0){?>
<p class="lead">您当前使用<b style="color: #fff;"  >本站会员</b>帐号绑定到 <b style="color: yellow;"  >悦优谱</b>中国官方网站  </p>
 <?php }elseif($sex_my==3){?>
 <p class="lead">您当前使用<b style="color: #fff;"  >新浪微博</b>帐号绑定到 <b style="color: blue;"  >悦优谱</b>中国官方网站  </p>
 <?php }?> 
</div>
<table cellspacing="0" cellpadding="0" class="tfm">
<tr><td><input type="hidden" name="status" value="1"/><input type="hidden" name="user_id" value="<?php echo $data['key_id'];?>" /><input type="submit" class="btn btn-danger" value="确认解除" /></td></tr>
</table>

</form>
</div>
    <?php }elseif($data['status']==1){?>
    
    <h2>
<a class=" my_bind2 btn btn-danger">未绑定帐号？</a>
<a class="close btn btn-danger"  style="display:none;" data-dismiss="alert"><b style="color: #fff;">取消操作 &times;</b></a>
</h2>

<div class="bind2"  style="display:none;">
<form  method="post" name="status" action= "<?php echo site_url('updata/i_my_status_two');?>" >
<div class="ptm pbm">
<?php

$sex_my=$data['type']; if($sex_my==2){?>
<p class="lead">您确认使用当前<b style="color: #fff;"  >腾讯QQ</b>帐号绑定到 <b style="color: red;"  >悦优谱</b>中国官方网站?</p> 
<?php }elseif($sex_my==0){?>
<p class="lead">您当前未使用<b style="color: #fff;"  >本站会员</b>帐号绑定到 <b style="color: yellow;"  >悦优谱</b>中国官方网站<string class="btn btn-danger "> 如需绑定请按提示操作....</string></p>
 <?php }elseif($sex_my==3){?>
    <p class="lead">您确认使用当前<b style="color: #fff;"  >新浪微博</b>帐号绑定到 <b style="color: blue;"  >悦优谱</b>中国官方网站?</p>
 <?php }?> 
</div>
<table cellspacing="0" cellpadding="0" class="tfm">
<tr><td><input type="hidden" name="status" value="0"/><input type="hidden" name="user_id" value="<?php echo $data['key_id'];?>" /><input type="submit" class="btn btn-danger" value="确认绑定" /></td></tr>
</table>

</form>
</div>
    <?php }?>

</div></div>

<!-- ------------------------- -->
<div class="span10" id="bind4" style='display:none;'>
<form nmae="u_my_ima"  method="post" action= "<?php echo site_url('updata/i_my');?>">
<input type="hidden" value="<?php echo $data['username'];//=$query->uid;?>" name="uid" />
<table cellspacing="0" cellpadding="0" >
<tr><th>用户名:</th><td><p><?php echo $data['username']; //=$user['nickname'];?></p></td><td>&nbsp;</td>

<tr ><th >性别</th><td><select name="gender" ><option value="n">保密</option><option value="m" selected="selected">男</option><option value="f">女</option></select><div class="rq mtn" id="showerror_gender"></div><p class="d"></p></td>

<tr><th>邮箱(找回密码):</th><td><input type="text" name="email"  value="" /></td></tr>

<tr><th>联系你的方式:(手机)</th><td><input type="text" name="mode" value=""  /></td></tr>

    <tr><td> <input class="btn btn-danger "  type="submit" value="保存" /></td></tr>
</table>
</form>
</div>
<!-- ------------ -->
<div class="span10" id="bind3" style='display:none;'>
<table cellspacing="0" cellpadding="0" >
<tr><td><img src="<?php  echo $data['u_img']; //=$user['figureurl_qq_2'];?>" /></td></tr>
    <tr><th>会员名:</th><td><p><?php echo $data['username']; //=$user['nickname'];?></p></td></tr>
    <tr><th>密码:</th><td><p><?php echo $data['passwd']; //=$user['nickname'];?></p></td></tr>
<tr ><th >性别:</th><td><p><?php echo $data['gender_demo'];//=$user['gender'];?></p></td></tr>
<tr ><th >会员组:</th><td><p ><?php echo $data['name'];//=$query->name;?></p></td></tr>
<tr ><th >邮箱:</th><td><p><?php echo $data['email'];//=$user['gender'];?></p></td></tr>
<tr ><th >手机:</th><td><p><?php echo $data['mode'];//=$user['gender'];?></p></td></tr>
<tr><td ><button  class="btn btn-danger bind4" ><strong>修改个人资料</strong></button></td></tr>
</table>

</div>
<!-- ------------- -->


<!-- 分布 -->


<script type="text/javascript" src="style/js/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="style/js/myjs/i_my.js"></script>


    
</body>
</html>
<?php //}else{redirect('home/index');}?>
