// JavaScript Document

// contact form
$(document).ready(function() {
	$('form#form').submit(function() {
	$('form#form .error').remove();
	var hasError = false;
    var contentError = false;
    var showError = false;
	
    $('.requiredField').each(function() {
	if(jQuery.trim($(this).val()) == '') {
    var labelText = $(this).prev('label').text();
    // $(this).parent().append('<span class="error" style="color:red">检查输入信息'+labelText+'\\</span> ');
    contentError = true;
    $(this).addClass('inputError');
    hasError = true;
    } else if(($(this).hasClass('email'))&&(!showError)) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(!emailReg.test(jQuery.trim($(this).val()))) {
    var labelText = $(this).prev('label').text();
    // $(this).parent().append('<span class="error" style="color:yellow">邮箱格式不正确\\</span>');
    $(this).parent().append('<span class="error" style="font-size: 15px; color:yellow; border:#FFF solid 2px;border-radius:5px; width:300px; margin:10px 10px; padding:5px 30px; background:red;">邮箱格式不正确</span> ');
    $(this).parent().append('<span class="error" style=" font-size: 15px; color:none; border: solid 0px;border-radius:5px; width:100%; margin:10px 10px; padding:5px 33px; background:none;"></span>');
    $(this).addClass('inputError');
    hasError = true;
    showError = true;
    }
    }
    else if(($(this).hasClass('phone'))&&(!showError)) {
    var phoneReg = /^1[3|4|5|8][0-9]\d{8}$/;
    if(!phoneReg.test(jQuery.trim($(this).val()))) {
    var labelText = $(this).prev('label').text();
    // $(this).parent().append('<span class="error" style="color:yellow">邮箱格式不正确\\</span>');
    $(this).parent().append('<span class="error" style="font-size: 15px; color:yellow; border:#FFF solid 2px;border-radius:5px; width:300px; margin:10px 10px; padding:5px 30px; background:red;">联系电话错误</span> ');
    $(this).parent().append('<span class="error" style=" font-size: 15px; color:none; border: solid 0px;border-radius:5px; width:100%; margin:10px 10px; padding:5px 33px; background:none;"></span>');
    $(this).addClass('inputError');
    hasError = true;
    showError = true;
    }
    }
    else if(($(this).hasClass('college'))&&(!showError)) {
    var idReg = /^[UumM][2][0][0-9]\d{6}$/;
    if(!idReg.test(jQuery.trim($(this).val()))) {
    var labelText = $(this).prev('label').text();
    // $(this).parent().append('<span class="error" style="color:yellow">邮箱格式不正确\\</span>');
    $(this).parent().append('<span class="error" style="font-size: 15px; color:yellow; border:#FFF solid 2px;border-radius:5px; width:300px; margin:10px 10px; padding:5px 30px; background:red;">学号错误</span> ');
    $(this).parent().append('<span class="error" style=" font-size: 15px; color:none; border: solid 0px;border-radius:5px; width:100%; margin:10px 10px; padding:5px 33px; background:none;"></span>');
    $(this).addClass('inputError');
    hasError = true;
    showError = true;
    }
    }
    });

    if(contentError)
    {
        $(this).append('<span class="error" style=" font-size: 15px; color:yellow; border:#FFF solid 2px;border-radius:5px; width:100%; margin:10px 10px; padding:5px 30px; background:red;">报名内容不完整</span>');
    }

    if(!hasError) {
    $('form#form input.submit').fadeOut('normal', function() {
    $(this). parent().append('');
    });
    $(this).append('<span class="error" style=" font-size: 15px; color:blue; border:#FFF solid 2px;border-radius:5px; width:100%; margin:10px 30px; padding:10px 30px; background:pink;">报名成功</span>');
    // var formInput = $(this).serialize();
    // $.post($(this).attr('action'),formInput, function(data){
    // $('form#form').slideUp("fast", function() {
    // $(this).before('<div class="success">报名成功</div>');
    // });
    // });
    // $('#form').fadeOur('normal');
    // // sleep(500);
    // function sleep(n) {
    // var start = new Date().getTime();
    // while(true)  if(new Date().getTime()-start > n) break;
    // }
    // sleep(4000);
    // return true;

    return true;
    }
    return false;
    });

});