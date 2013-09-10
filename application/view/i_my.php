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

</head>
    
<body style="overflow-x:hidden;background:#C58C84;" >
    <?php echo $url=substr(current_url(),-1); if($url=='k'){echo "腾讯";?>


 <table cellspacing="0" cellpadding="0" class="tfm" id="profilelist">
       <tr>
       <th用户头像</th>
           <td><img src="<?php  echo $data['u_img'];//echo $user['figureurl_2'];?>" /></td>
       </tr>
<tr>
<th>会员名</th>
    <td><p><?php echo $data['username']; //echo $user['nickname'];?></p></td>


</tr>

<tr>
<th>所在组</th>
    <td><p><?php  echo $data['name']; //echo $user_message->useradmin;//echo $user['nickname'];?></p></td>
<th>不可修改</th>

</tr>

<tr >
<th >真实姓名:</th>
<td>未填</td>
</tr>
<tr >
<th >性别:</th>
<td >
    <p><?php echo $data['gender_demo'];//echo $user_message->gender_demo;//echo $user['gender'];?></p></td>


<tr >
<th >邮箱:</th>
<td>
<p >未填</p></td>
</tr>

<tr >
<th >情感状态:</th>
<td >
未填</td>
</tr>

<tr >
<th >血型:</th>
<td >
未填</td>
</tr>
<tr>
<td >

<button  class="btn btn-danger bind4" /><strong>修改个人资料</strong></button>

</td>
</tr>
</table>

</div>





<?php }elseif($url=='y'){echo "新浪";?>
    <?php foreach ($user_message->result() as $user_message){print_r($user_message); ?>
    <?php echo $user_message->useradmin;//=$user_message['screen_name']?>,您好！ 
	<h2 align="left">发送新微博</h2>
	<form action="" >
		<input type="text" name="text" style="width:300px" />
		<input type="submit" />
	</form>

<table cellspacing="0" cellpadding="0" >
 <tr>
       <td><img src="<?php echo $user_message->u_img;;?>" /></td>
       </tr>
<tr>
<th>会员名</th>
    <td><p><?php echo $user_message->useradmin; //=$user_message['screen_name'];?></p>用来登录本站</td>

</tr><tr ">
<th >居住地:</th>
<td ">
    <p ><? //=$user_message['name'];?></p></td>
</tr>
<tr >
<th >性别:</th>
    <td><p><?php echo $user_message->gender_demo; //=$user_message['gender']="男";?></p></td>
</tr>

<tr >
<th >会员组:</th>
<td>
    <p ><?php echo $user_message->name; //=$user_message['location'];?></p></td>
</tr>


<tr>
<td >
<a href="
<?php echo site_url('login/delete_session');?>
" class="btn btn-danger bind4" /><strong>退出登录</strong></button>

</td>
</tr>
</table>

<?php }}?>


<script type="text/javascript" src="style/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="style/js/myjs/i_my.js"></script>


    
</body>
</html>
<?php //}else{redirect('home/index');}?>
