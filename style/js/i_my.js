
/* i_my.js
 * 专用
 #my  bind3   1级 个人资料 bind4 2级
 #bind  #my_mm   1级 密码安全
 #my_d  bind1  1级  / .my_mm 跳转到密码 2级  .my_bind2 解绑 2级  .close隐藏 和关闭 3级
 
 读代码能不能快点啊........
 
 * 
 */

$(document).ready(function() {
	

    
    $("#bind").attr('style','display:none;');
	$("#bind3").attr('style','');
	$("#my").addClass('active');
	$("#my_mm,#my_d").removeClass('active');
   
    
    $("#my_mm , .my_mm").on('click',function(){
       
	$("#bind1,#bind3,#bind4").attr('style','display:none;');
	$("#bind").attr('style','');
	$("#my_mm").addClass('active');
	$("#my_d,#my").removeClass('active');
	});
	
	$("#my_d").on('click',function(){
	$("#bind,#bind3,.bind2,#bind4,.close").attr('style','display:none;');
	$("#bind1,.my_bind2").attr('style','');
	$("#my_d").addClass('active');
	$("#my_mm,#my").removeClass('active');
	});
	

	
	$(".my_bind2").on('click',function(){
	$("#bind ,#bind3,#bind4").attr('style','display:none;');
	$(".bind2,.close").attr('style','');
	$("#my_d").addClass('active');
	$("#my_mm ,#my").removeClass('active');
	});
	
	$(".close").on('click',function(){
	$("#bind,.bind2 ,.close ,#bind3 ").attr('style','display:none;');
	$(" .my_bind2").attr('style','')
	});
	
	$("#my").on('click',function(){
	$(" #bind ,#bind1,#bind4").attr('style','display:none;');
	$("#bind3").attr('style','');
	$("#my").addClass('active');
	$("#my_mm,#my_d").removeClass('active');
	});
	
	$(".bind4").on('click',function(){
	$(" #bind ,#bind1,#bind3").attr('style','display:none;');
	$("#bind4").attr('style','');
	$("#my").addClass('active');
	$("#my_mm,#my_d").removeClass('active');    
	});
    


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
});
