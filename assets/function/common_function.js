$('.numfg').on('keypress', function(e) {
  keys = ['0','1','2','3','4','5','6','7','8','9']
  return keys.indexOf(event.key) > -1
});

$(function(){
  $('#regiusername').bind('input', function(){
    $(this).val(function(_, v){
      return v.replace(/\s+/g, '');
    });
  });
});

$('.charfg').on('keypress', function (event) {
    var regex = new RegExp("^[a-zA-Z]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
       event.preventDefault();
       return false;
    }
});


$('.nospace').keyup(function(e){
	if (e.which === 32) {
		//alert('No space are allowed in usernames');
		var str = $(this).val();
		str = str.replace(/\s/g,'');
		$(this).val(str);            
	}
}).blur(function() {
	var str = $(this).val();
	str = str.replace(/\s/g,'');
	$(this).val(str);            
});

$(document).ready(function(){
	$("input").focus(function(){
		var id=this.id;
		$("#"+id+"Err").html('');
		$("#"+id).css('border','1px solid #ccc');
	});
	$("select").focus(function(){
		var id=this.id;
		$("#"+id+"Err").html('');
		$("#"+id).css('border','1px solid #ccc');
	});
	$("textarea").focus(function(){
		var id=this.id;
		$("#"+id+"Err").html('');
		$("#"+id).css('border','1px solid #ccc');
	});
});

$('.digit-group').find('input').each(function() {
	$(this).attr('maxlength', 1);
	$(this).on('keyup', function(e) {
		var parent = $($(this).parent());
		
		if(e.keyCode === 8 || e.keyCode === 37) {
			var prev = parent.find('input#' + $(this).data('previous'));
			
			if(prev.length) {
				$(prev).select();
			}
		} else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
			var next = parent.find('input#' + $(this).data('next'));
			
			if(next.length) {
				$(next).select();
			} else {
				if(parent.data('autosubmit')) {
					parent.submit();
				}
			}
		}
	});
});

function changestatus(basePath,rowid,obj,id,module)
{
	var status = $("#"+rowid).val();
	var tagstatus = $(obj).html();
	
	if(basePath=="")
	{
		var basePath = $('#baseurl').val();
	}
	
	if(status!="")
	{
		$.ajax({
			url: basePath+"ajax/changestatus",
			data: {'status':status, 'id':id, 'module':module}, 
			type: "post",
			success: function(data){
				//alert(data);
				status = data.trim();
				$("#"+rowid).val(status);
			}
      	});
	}
}


function changefeaturedsts(basePath,rowid,obj,id,module)
{
	var status = $("#"+rowid).val();
	var tagstatus = $(obj).html();
	
	if(status!="")
	{
		$.ajax({
			url: basePath+"ajax/changefeaturedsts",
			data: {'status':status, 'id':id, 'module':module}, 
			type: "post",
			success: function(data){
				//alert(data);
				
				if(module == 'service' && data == 'limitexceed')
				{	
					$('.alertbox').html('<div class="alert alert-danger">You can\'t set featured more than six! </div>');
					$('.alertbox').show('slide');
										
					setTimeout(function(){ location.reload(); $('.alertbox').fadeOut('slow'); }, 3000);
				}
				else if(module == 'product' && data == 'limitexceed')
				{
					$('.alertbox').html('<div class="alert alert-danger">You can\'t set featured more than six! </div>');
					$('.alertbox').show('slide');
										
					setTimeout(function(){ location.reload(); $('.alertbox').fadeOut('slow'); }, 3000);
				}
				else
				{
					status = data.trim();			
					$("#"+rowid).val(status);
				}
			}
      	});
	}
}

function check(input)
{
	if (input.value != document.getElementById('password').value) 
	{
		input.setCustomValidity('Password Must be Matching.');
	}
	else
	{
		// input is valid -- reset the error message
		input.setCustomValidity('');
	}
}

function myFunction(id,obj)
{
	if(id=="")
	{
		var id = "password";
	}
	var x = document.getElementById(id);
	if (x.type === "password")
	{
		$(obj).removeClass('fa-eye');
		$(obj).addClass('fa-eye-slash');
		x.type = "text";
	} else {
		
		$(obj).removeClass('fa-eye-slash');
		$(obj).addClass('fa-eye');
		x.type = "password";
	}
}


function checkemail(baseurl)
{
	var error = "";
	//var email_pattern_match = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var email_pattern_match = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
	
	var email = $('#email').val();
	
	var thisvalue = $('#email').val();
	if (thisvalue == "") {
		$('#email').css("border-color","red");
		$('#emailcheckloader').html('<div class="alert alert-danger">Enter Your Email!</div>');
		error = 1;
	}
	if (!email_pattern_match.test($('#email').val()) && thisvalue!="") {
		$('#email').css("border-color","red");
		$('#emailcheckloader').html('<div class="alert alert-danger">Invalid Email Format!</div>');
		error = 1;
	}
	
	if(error!=1)
	{
		$.ajax({
			type: "POST",
			url: baseurl+'ajax/checkemail',
			data: {'email':email},
			beforeSend: function() {
				//$('#emailcheckloader').html('<div><img src="'+baseurl+'assets/loader.gif" /></div>');
			},
			success: function(result){
			
				if(result=='found' && result!="")
				{
					$('#email').val('');
					//$('#emailcheckloader').html('<div class="alert alert-danger">Email Id Already Exist!</div>');
					
					SnackBar({
						fixed: true,
						message: "Email Id Already Exist!",
						status: "danger",
						position: "tr"
					});
				}
			},

		});
		
	}
	
	setTimeout(function(){ $('#emailcheckloader').html('');}, 3000);
	return false;
}

function scrollOnBox(Obj)
{
	$('html, body').animate({
		scrollTop: $(Obj).offset().top
	}, 1000);
}

function resendPassword(basePath,clientid)
{
	if(!confirm('Are You Sure! You Want To Resend Password')) return false;
	
	$.ajax({
		url: basePath+'ajax/resendPassword',
		data: {'clientid':clientid},
		type: "post",
		beforeSend: function() {
			$('#rePassmsgloader').html('<img src="'+basePath+'assets/loader.gif" style="width: 50px;" />');
		},
		success: function(result){
			//alert(data);
			if(result=='fail' && result!="")
			{
				$('#rePassmsgloader').html('<div class="alert alert-danger">Something Went Wrong, Please Try Again Later!</div>');
			}
			else
			{
				
				$('#rePassmsgloader').html('<div class="alert alert-success">Password Sent Successfully !</div>');
			}
			setTimeout(function(){ $('#rePassmsgloader').html(''); }, 2000);
		}
	});
	
}

function reverifyemail(basePath,clientid)
{
	if(!confirm('Are You Sure! You Want To Resend Verification Email')) return false;
	
	$.ajax({
		url: basePath+'ajax/reverifyemail',
		data: {'clientid':clientid},
		type: "post",
		beforeSend: function() {
			$('#rePassmsgloader').html('<img src="'+basePath+'assets/loader.gif" style="width: 50px;" />');
		},
		success: function(result){
			//alert(data);
			if(result=='fail' && result!="")
			{
				$('#rePassmsgloader').html('<div class="alert alert-danger">Something Went Wrong, Please Try Again Later!</div>');
			}
			else
			{	
				$('#rePassmsgloader').html('<div class="alert alert-success">Verification Mail Sent Successfully !</div>');
			}
			setTimeout(function(){ $('#rePassmsgloader').html(''); }, 2000);
		}
	});
	
}


function registration(basePath)
{
	var error = '';
	var email_pattern_match = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var phone_pattern_match = /^[0-9]+$/;
	
	var usertype = $('#user_type').val();
	if (usertype == "GUIDE" || usertype == "REVIEWER" || usertype == "RECRUITER")
	{
	
	    var thisvalue = $('#phone').val();
	    if (thisvalue == "")
	    {
		    $('#phone').css("border-color","red");
		    $('#phoneErr').html('Enter Phone Number!');
		    error = 1;
	    }
	    
	    if (!phone_pattern_match.test($('#phone').val()) && thisvalue !="")
	    {
		    $('#phone').css("border-color","red");
		    $('#phoneErr').html('Invalid Phone');
		    error = 1;
	    }
	}
	
	var thisvalue = $('#name').val();
	if (thisvalue == "")
	{
		$('#name').css("border-color","red");
		$('#nameErr').html('Enter First Name!');
		error = 1;
	}
	
	var thisvalue = $('#email').val();
	if (thisvalue == "")
	{
		$('#email').css("border-color","red");
		error = 1;
	}
	if (!email_pattern_match.test($('#email').val()) && thisvalue!="")
	{
		$('#email').css("border-color","red");
		SnackBar({
			fixed: true,
			message: "Invalid Email Id!",
			status: "danger",
			position: "tr"
		});
		error = 1;
	}
	
	var thisvalue = $('#password').val();
	if (thisvalue == "")
	{
		$("#password").css("border-color","red");
		error = 1;
	}
	
	var thisvalue = $('#cpassword').val();
	if (thisvalue == "")
	{
		$("#cpassword").css("border-color","red");
		error = 1;
	}
	
	if ($('#cpassword').val() != $('#password').val())
	{
		$("#cpassword").css("border-color","red");
		SnackBar({
			fixed: true,
			message: "Password Mismatch!",
			status: "danger",
			position: "tr"
		});
		error = 1;
	}
	
	var thisvalue1 = $('#captchabx_codeBox1').val();
    var thisvalue2 = $('#captchabx_codeBox2').val();
    var thisvalue3 = $('#captchabx_codeBox3').val();
    var thisvalue4 = $('#captchabx_codeBox4').val();
    var str2 = thisvalue1 + thisvalue2 + thisvalue3 + thisvalue4;
    if(str2 == "")
    {
        $('#captchaErr').html('You can\'t leave Captcha Code');
        error = 1;
    }
    if(str2 != $("#captcha").val() && str2 != "")
    {
        $('#captchaErr').html('Invalid captcha code!');
        error = 1;
    }
	
	if(error!=1)
	{
	    $('#captchaErr').html('');
		var fd = new FormData($('#registerForm')[0]);
		
		$.ajax({
			url: basePath+'ajax/registration',
			data: fd,
			contentType: false,
			cache: false,
			processData:false,
			type: "post",
			beforeSend: function() {
				$('#msgloader').html('<img src="'+basePath+'assets/loader.gif" style="width: 100px;" />');
			},
			success: function(result){
			    //return false;
				//alert(result);
				$('#msgloader').html('');
				if(result=='exist' && result!="")
				{
					SnackBar({
						fixed: true,
						message: "You are already registered with us from this Email ID!",
						status: "danger",
						position: "tr"
					});
				}
				else
				{
					SnackBar({
						fixed: true,
						message: "Congratulation! You are successfully registered with us.",
						status: "success",
						position: "tr"
					});
					setTimeout(function(){ window.location.href=basePath+'sign-in'; }, 3000);
				}
				
			}
      	});
	}
	
	return false;
}

function loginuser(basePath,redirecurl = null)
{
	var error = "";
	var email_pattern_match = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	var useremail 	 = $('#useremail').val();
	var userpassword = $('#userpassword').val();
	
	var thisvalue = $('#useremail').val();
	if (thisvalue == "") {
		error = 1;
	}
	var thisvalue = $('#useremail').val();
	if (!email_pattern_match.test($('#useremail').val()) && thisvalue != "") {
		SnackBar({
			fixed: true,
			message: "Invalid Email Format!",
			status: "danger",
			position: "tr"
		});
		error = 1;
	}
	
	var thisvalue = $('#username').val();
	if (thisvalue == "")
	{
		$('#username').css("border-color","red");
		error = 1;
	}
	
	var thisvalue = $('#userpassword').val();
	if (thisvalue == "") {
		/* $('#userpassword').css("border-color","red");
		$('#userpasswordErr').html('Please Enter Your Password!'); */
		error = 1;
	}
	
	if(error!=1)
	{
		$.ajax({
			type: "POST",
			url: basePath+'ajax/loginuser',
			data: {'useremail':useremail,'userpassword':userpassword},
			beforeSend: function() {
				$('#loginmsgloader').html('<img src="'+basePath+'assets/loader.gif" style="width: 50px;" />');				
			},
			success: function(result){
			    //alert(result);
				//return false;	
				if(result=='error' && result!="")
				{
					SnackBar({
						fixed: true,
						message: "Invalid login credentials or your account is inactive!",
						status: "danger",
						position: "tr"
					});
				}
				else
				{
				    $('input:text').val('');
					$('input:password').val('');
					
					if(result!='' && result=='GUIDE')
					{
						SnackBar({
							fixed: true,
							message: "Please wait, we are directing you to Dashboard",
							status: "success",
							position: "tr"
						});
					 setTimeout(function(){ window.location.href = basePath+"guide"; }, 1000);
						
					}
					else if(result=='REVIEWER' && result!="")
					{
					    SnackBar({
						    fixed: true,
						    message: "Please wait, we are directing you to Dashboard",
						    status: "success",
						    position: "tr"
					       });
						
					    setTimeout(function(){ window.location.href = basePath+"reviewer"; }, 3000);
					}
					else if(result=='RECRUITER' && result!="")
					{
					    SnackBar({
						    fixed: true,
						    message: "Please wait, we are directing you to Dashboard",
						    status: "success",
						    position: "tr"
					       });
						
					    setTimeout(function(){ window.location.href = basePath+"recruiter"; }, 3000);
					}
					else{
					    
					     SnackBar({
						    fixed: true,
						    message: "Please wait, we are directing you to Dashboard",
						    status: "success",
						    position: "tr"
					       });
						
					    setTimeout(function(){ window.location.href = basePath+"account"; }, 3000);
					}
					
				}
				setTimeout(function(){ $('#loginmsgloader').html(''); }, 1000);
			},
		});
		
	}
	else
	{
		SnackBar({
			fixed: true,
			message: "Please enter your credentials!",
			status: "danger",
			position: "tr"
		});
	}
	
	return false;
}

function myprofileupdate(baseurl)
{
	var error = "";
	
	var thisvalue = $('#profile_picture').val();
	if (thisvalue == "" && $('#old_profile_picture').val()=='') {
		$('#profile_picture').css("border-color","red");
		error = 1;
	}
	
	var thisvalue = $('#name').val();
	if (thisvalue == "") {
		$('#name').css("border-color","red");
		error = 1;
	}
	
	var thisvalue = $('#phone').val();
	if (thisvalue == "") {
		$('#phone').css("border-color","red");
		error = 1;
	}
	
	var thisvalue = $('#areaofresearch').val();
	if (thisvalue == "") {
		$('#areaofresearch').css("border-color","red");
		error = 1;
	}
	
	var thisvalue = $('#address').val();
	if (thisvalue == "") {
		$('#address').css("border-color","red");
		error = 1;
	}
	
	/* var thisvalue = $('#areaofresearch').val();
	if (thisvalue == "") {
		$('#areaofresearch').css("border-color","red");
		error = 1;
	}
	
	var thisvalue = $('#phd_status').val();
	if (thisvalue == "") {
		$('#phd_status').css("border-color","red");
		error = 1;
	}
	
	var thisvalue = $('#city').val();
	if (thisvalue == "") {
		$('#city').css("border-color","red");
		error = 1;
	}
	var thisvalue = $('#pincode').val();
	if (thisvalue == "") {
		$('#pincode').css("border-color","red");
		error = 1;
	} */
	
	
	if(error!=1)
	{
		var fd = new FormData($('#myprofileupdatefrm')[0]);
		
		$.ajax({
			type: "POST",
			url: baseurl+'ajax/myprofileupdate',
			data: fd,
			contentType: false,
			cache: false,
			processData:false,
			beforeSend: function() {
				$('#profilemsgloader').html('<img src="'+baseurl+'assets/loader.gif" style="width: 50px;" />');
			},
			success: function(result){
				if(result=='error' && result!="")
				{
					SnackBar({
						fixed: true,
						message: "Something went wrong please try again later!",
						status: "danger",
						position: "tr"
					});
				}
				else
				{
					SnackBar({
						fixed: true,
						message: "Profile Info. Updated Successfully!",
						status: "success",
						position: "tr"
					});
				}
				setTimeout(function(){ $('#profilemsgloader').html(''); window.location.href = baseurl+'profile'; }, 2000);
			},

		});
	}
	else
	{
		SnackBar({
			fixed: true,
			message: "All fields are mandatory!",
			status: "danger",
			position: "tr"
		});
	}
	
	return false;
}

function udpatePassword(basePath,username)
{
	var error = '';
	var password_pattern_match = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{10,}$/;
	var username = username.toLowerCase();
	var arrusername = username.split(' ');
	
	
	var thisvalue = $('#oldpassword').val();
	if (thisvalue == "")
	{
		$("#oldpassword").css("border-color","red");
		$("#oldpasswordErr").html("Enter Old Password");
		error = 1;
	}
	
	var thisvalue = $('#password').val();
	if (thisvalue == "")
	{
		$("#password").css("border-color","red");
		$("#passwordErr").html("Enter Password");
		error = 1;
	}
	
	if (thisvalue != "")
	{
		for(i=0; i<arrusername.length; i++)
		{
			var textposition = thisvalue.indexOf(arrusername[i]);
			
			if(textposition>=0)
			{
				$("#password").css("border-color","red");
				SnackBar({
					fixed: true,
					message: "Password can't be your first name or last name!",
					status: "danger",
					position: "tr"
				});
				return false;
			}
		}
	}
	
	var username = username.toLowerCase().replace(/\b[a-z]/g, function(letter) {
		return letter.toUpperCase();
	});
	var arrusername = username.split(' ');
	
	if (thisvalue != "")
	{
		for(i=0; i<arrusername.length; i++)
		{
			var textposition = thisvalue.indexOf(arrusername[i]);
			
			if(textposition>=0)
			{
				$("#password").css("border-color","red");
				SnackBar({
					fixed: true,
					message: "Password can't be your first name or last name!",
					status: "danger",
					position: "tr"
				});
				return false;
			}
		}
	}
	
	if (!password_pattern_match.test($('#password').val()) && thisvalue!="")
	{
		$("#password").css("border-color","red");
		SnackBar({
			fixed: true,
			message: "Password should be minimum ten characters, at least one uppercase letter, one lowercase letter, one number and one special character!",
			status: "danger",
			position: "tr"
		});
		return false;
	}
	
	var thisvalue = $('#password_confirm').val();
	if (thisvalue == "")
	{
		$("#password_confirm").css("border-color","red");
		$("#password_confirmErr").html("Enter Confirm Password");

		error = 1;
	}
	if($("#password").val()!=$("#password_confirm").val() && $("#password").val()!="")
	{
		$("#password_confirm").css("border-color","red");
		SnackBar({
			fixed: true,
			message: "Password does not match",
			status: "danger",
			position: "tr"
		});
		error = 1;
	}
	
	if(error!=1)
	{
		$.ajax({
			url: basePath+'ajax/udpatepassword',
			data: $('#passwordupdfrm').serialize(),
			type: "post",
			beforeSend: function() {
				$('#msgloader').html('<img src="'+basePath+'assets/loader.gif" style="width: 100px;" />');
			},
			success: function(result){
				//alert(data);
				if(result=='invalid' && result!="")
				{
					SnackBar({
						fixed: true,
						message: "Invalid Old Password!",
						status: "danger",
						position: "tr"
					});
				}
				else if(result=='fail' && result!="")
				{
					SnackBar({
						fixed: true,
						message: "Something Went Wrong, Please Try Again Later!",
						status: "danger",
						position: "tr"
					});
				}
				else
				{
					SnackBar({
						fixed: true,
						message: "Password Updated Successfully !",
						status: "success",
						position: "tr"
					});
				}
				setTimeout(function(){ $('#msgloader').html(''); }, 3000);
			}
      	});
	}
	
	return false;
}

function changepassword(baseurl)
{
	var error = '';

	var thisvalue = $('#oldpassword').val();
	if (thisvalue == "") {
		$('#oldpassword').css("border-color","red");
		$('#oldpasswordErr').html('Enter Old Password!');
		error = 1;
	}
	
	
	var username = $('#username').val();	
	
	var username = username.toLowerCase();
	var arrusername = username.split(' ');
	
	var thisvalue = $('#newpassword').val();
	if (thisvalue == "") {
		$('#newpassword').css("border-color","red");
		//$('#newpasswordErr').html('Enter New Password!');
		
		SnackBar({
			fixed: true,
			message: "Enter New Password!",
			status: "danger",
			position: "tr"
		});
		error = 1;
		return false;
	}
	
	if (thisvalue != "")
	{
		for(i=0; i<arrusername.length; i++)
		{
			var textposition = thisvalue.indexOf(arrusername[i]);
			
			if(textposition>=0)
			{
				$("#newpassword").css("border-color","red");
				//$("#newpasswordErr").html("Password can't be your first name or last name!");
				setTimeout(function(){ $('#newpasswordErr').html(''); }, 8000);
				SnackBar({
					fixed: true,
					message: "Password can't be your first name or last name!",
					status: "danger",
					position: "tr"
				});
				error = 1;
				return false;
			}
		}
	}
	
	var username = username.toLowerCase().replace(/\b[a-z]/g, function(letter) {
		return letter.toUpperCase();
	});
	var arrusername = username.split(' ');
	
	if (thisvalue != "")
	{
		for(i=0; i<arrusername.length; i++)
		{
			var textposition = thisvalue.indexOf(arrusername[i]);
			
			if(textposition>=0)
			{
				$("#newpassword").css("border-color","red");
				//$("#newpasswordErr").html("Password can't be your first name or last name!");
				setTimeout(function(){ $('#newpasswordErr').html(''); }, 8000);
				SnackBar({
					fixed: true,
					message: "Password can't be your first name or last name!",
					status: "danger",
					position: "tr"
				});
				error = 1;
				return false;
			}
		}
	}
	
	var password_pattern_match = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{10,}$/;

	if (!password_pattern_match.test($('#newpassword').val()) && thisvalue!="")
	{
		$("#newpassword").css("border-color","red");
		//$("#newpasswordErr").html("Password should be minimum ten characters, at least one uppercase letter, one lowercase letter, one number and one special character!");
		setTimeout(function(){ $('#newpasswordErr').html(''); }, 8000);
		SnackBar({
			fixed: true,
			message: "Password should be minimum ten characters, at least one uppercase letter, one lowercase letter, one number and one special character!",
			status: "danger",
			position: "tr"
		});
		error = 1;
		return false;
	}
	
	var thisvalue = $('#confpassword').val();
	if (thisvalue == "") {
		$('#confpassword').css("border-color","red");
		//$('#confpasswordErr').html('Enter Confirm Password!');
		SnackBar({
			fixed: true,
			message: "Enter Confirm Password!",
			status: "danger",
			position: "tr"
		});
		error = 1;
		return false;
	}
	
	var thisvalue = $('#confpassword').val();
	if (thisvalue != $('#newpassword').val() && $('#confpassword').val()!="") {
		$('#confpassword').css("border-color","red");
		//$('#confpasswordErr').html('Confirm Password Not Matched!');
		SnackBar({
			fixed: true,
			message: "Confirm Password Not Matched!",
			status: "danger",
			position: "tr"
		});
		error = 1;
		return false;
	}
	
	
	if(error!=1)
	{
	
		$.ajax({
			type: "POST",
			url: baseurl+'ajax/changepassword',
			data: $('#changepasswordfrm').serialize(),
			dataType:'json',
			type: "post",
			beforeSend: function() {
				
				$('#passwordloader').html('<div class="badge badge-warning">Please Wait...</div>');
			},
			success: function(data){
				$('#passwordloader').html('');
				if(data.status=='success')
				{	
					SnackBar({
						fixed: true,
						message: "Password Reset Successfully!",
						status: "success",
						position: "tr"
					});
					
					setTimeout(function(){ window.location.href= baseurl+'sign-in' }, 2000);
				}
				else if(data.status=='error')
				{	
					SnackBar({
						fixed: true,
						message: "Invalid User!",
						status: "danger",
						position: "tr"
					});
				}
				else
				{	
					SnackBar({
						fixed: true,
						message: "Something went wrong  try again later!",
						status: "danger",
						position: "tr"
					});
				}
			},

		});
	
	}
	
	return false;
}


function passwordview(inputid) {
  var x = document.getElementById(inputid);
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function forgetpassword(basePath)
{	
	var error = "";
	var email_pattern_match = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	var email 	 = $('#usremail').val();
	
	var thisvalue = $('#usremail').val();
	if (thisvalue == "") {
		SnackBar({
			fixed: true,
			message: "Enter your registered email!",
			status: "danger",
			position: "tr"
		});
		error = 1;
	}
	
	var thisvalue = $('#usremail').val();
	if (!email_pattern_match.test($('#usremail').val()) && thisvalue != "") {
		SnackBar({
			fixed: true,
			message: "Invalid Email Format!",
			status: "danger",
			position: "tr"
		});
		error = 1;
	}
	
	if(error!=1)
	{
		$.ajax({
			type: "POST",
			url: basePath+'ajax/forgetpassword',
			data: {'email':email},
			beforeSend: function() {
				// setting a timeout
				$('#forgetloader').html('<div style="text-align: center;"><img src="'+basePath+'assets/loader.gif" /></div>');
			},
			success: function(result){
				
				if(result=='error' && result!="")
				{
					$('#forgetloader').html('<div class="alert alert-danger">Invalid Email ID!</div>');
					SnackBar({
						fixed: true,
						message: "Invalid Email ID!",
						status: "danger",
						position: "tr"
					});
				}
				else
				{
					$('input:text').val('');
					
					SnackBar({
						fixed: true,
						message: "We Have Send An Email, Please Check Your Inbox Of Registered Email!",
						status: "success",
						position: "tr"
					});
				}
				setTimeout(function(){ $('#forgetloader').html(''); }, 2000);
			},
		});
	}
	return false;
}

function udpateconsultation_sts(basePath)
{
	var fd = new FormData($('#bookingstatusupdate')[0]);
	var comment = $('#comment').val();
	
	if(comment!="")
	{
		$.ajax({
			url: basePath+'ajax/udpateconsultation_sts',
			data: fd,
			dataType:'json',
			type: "post",
			contentType: false,
			cache: false,
			processData:false,
			beforeSend: function() {
				$('#msgloader').html('<img src="'+basePath+'assets/loader.gif" style="width: 40px;" />');
			},
			success: function(data){
				
				if(data.status=='success')
				{
					SnackBar({
						fixed: true,
						message: "Consultation status updated successfully!",
						status: "success",
						position: "tr"
					});
					
					setTimeout(function(){ location.reload(); }, 3000);
				}
				else if(data.status=='fail')
				{
					SnackBar({
						fixed: true,
						message: "Something went wrong!",
						status: "danger",
						position: "tr"
					});
				}
				
				$('#msgloader').html('');
			}
		});
	}
	else
	{
		SnackBar({
			fixed: true,
			message: "Please enter comments",
			status: "danger",
			position: "tr"
		});
	}
	return false;
}
	

$('#filterdays').change(function(){
	if($(this).val()=='Custom')
	{
		$('.customdatebx').show('slow');
	}
	else
	{
		$('.customdatebx').hide('slow');
		$('.customdatefld').val('');
	}
});


function readimgURL(input,id, viewtype='')
{
	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
		$('#'+id).attr('src', e.target.result);
		
		if(viewtype!="")
		{
			var img = new Image();
			img.onload = function() {
				//alert(this.width + 'x' + this.height);
				if(this.width > 200 && this.height > 200)
				{
					$('#logosizeErr').show();
					$("#logo").val('');
				}
				else
				{
					$('#logosizeErr').hide();
				}
			}
			img.src = e.target.result;
		}
	}
	
	reader.readAsDataURL(input.files[0]); // convert to base64 string
	}
}




$(".edit-pr").click(function() {
	$('.profilebox').toggle();
});	


function filterSearch (basePath)
{
	var keyword = $('#search').val();
	var fd = new FormData($('#filterfrm')[0]);
	
	$.ajax({
		url: basePath+'ajax/filterSearch',
		data: fd,
		contentType: false,
		cache: false,
		processData:false,
		type: "post",
		beforeSend: function() {
			$('.listdata').html('<img src="'+basePath+'assets/loader.gif" style="width: 40px;" />');
		},
		success: function(data)
		{
			result = data.trim();

			if(result!="")
			{
				$('.listdata').html(result);
			}
			else
			{
				$('.listdata').html('<div class="alert alert-danger">No result found!</div>');
			}
			
			}
	});
	
	return false;
}


function sendEnquiry(basePath)
{
	var error="";
	var str1 = $('#txtCaptchaDiv').html();
    var str2 = $('#captcha').val();

	var filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	var thisvalue = $('#send_name').val();
	if (thisvalue == "")
	{
		$("#send_name").css("border-color","red");
		//$("#send_nameErr").html("Please enter your name");
		error=1;
	}
	
	
	var thisvalue = $('#send_email_id').val();
	if (thisvalue == "")
	{
	$("#send_email_id").css("border-color","red");
	//$("#send_email_idErr").html("Please enter your email id");
	error=1;
	}
	else if (!filter.test($("#send_email_id").val())) {
	$("#send_email_id").css("border-color","#e85445")
	//$("#send_email_idErr").html("Email address is invalid.")
	error=1;
	}
	
	var thisvalue = $('#send_mobile').val();
	if (thisvalue == "")
	{
	$("#send_mobile").css("border-color","red");
	//$("#send_mobileErr").html("Please enter your mobile no.");
	error=1;
	}
	
	var thisvalue = $('#captcha').val();
	if (thisvalue == "")
	{
	$("#captcha").css("border-color","#e85445")
	//$("#captchaErr").html("This value is required.")
	error=1;
	}
	else if (str1 != str2)
	{
	$("#captcha").css("border-color","#e85445")
	//$("#captchaErr").html("Captcha code did not match.")
	error=1;
	}
	
	if(error!=1)
	{
		var fd = new FormData($('#rqstfrm')[0]);
		
		$.ajax({
			url: basePath+'ajax/sendEnquiry',
			data: fd,
			contentType: false,
			cache: false,
			processData:false,
			type: "post",
			beforeSend: function() {
				$('#enqmsgloader').html('<img src="'+basePath+'assets/loader.gif" style="width: 40px;" />');
			},
			success: function(result){
				//alert(data);
				if(result=='exist' && result!="")
				{
					//$('#enqmsgloader').html('<div class="alert alert-danger">You Have Already Sent An Enquiry On This Software!</div>');
					SnackBar({
						fixed: true,
						message: "You Have Already Sent An Enquiry On This School!",
						status: "warning",
						position: "tr"
					});
				}
				else if(result=='fail' && result!="")
				{
					//$('#enqmsgloader').html('<div class="alert alert-danger">Something Went Wrong, Please Try Again Later!</div>');
					SnackBar({
						fixed: true,
						message: "Something Went Wrong, Please Try Again Later!",
						status: "danger",
						position: "tr"
					});
				}
				else
				{
					$('input:text').val('');
					$('textarea').val('');
					//$('#enqmsgloader').html('<div class="alert alert-success">Message Sent Successfully!</div>');
					SnackBar({
						fixed: true,
						message: "Message Sent Successfully!",
						status: "success",
						position: "tr"
					});
					setTimeout(function(){ location.reload(); }, 3000);
				}
				
				setTimeout(function(){ $('#enqmsgloader').html(''); }, 3000);
				
			}
		});
	
	}
		
	return false;
}

function getCodeBoxElement(index, id_prefix) {
  return document.getElementById(id_prefix + index);
}

function onKeyUpEvent(index, event, id_prefix) {
  const eventCode = event.which || event.keyCode;
  if(getCodeBoxElement(index, id_prefix).value.length === 1) {
    if(index !== 4) {
      getCodeBoxElement(index + 1, id_prefix).focus();
    } else {
      getCodeBoxElement(index, id_prefix).blur();
      // Submit code
      console.log('submit code ');
    }
  }
  if(eventCode === 8 && index !== 1) {
    getCodeBoxElement(index - 1, id_prefix).focus();
  }
}

function onFocusEvent(index, id_prefix) {
  for(item = 1; item < index; item++) {
    const currentElement = getCodeBoxElement(item, id_prefix);
    if(!currentElement.value) {
      currentElement.focus();
      break;
    }
  }
}

function checkPasswordMatch()
{
    var password = $("#password").val();
    var confirmPassword = $("#cpassword").val();
    if (password != confirmPassword)
        $("#CheckPasswordMatch").html("Passwords does not match!");
    else
        $("#CheckPasswordMatch").html('');
}
  
$(document).ready(function(){  
$("#password").keyup(checkPasswordMatch);
$("#cpassword").keyup(checkPasswordMatch);
});

function validateaddnewjob(baseurl)
{
	var error = "";
	var email_pattern_match = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var regurl = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;	
	var phone_pattern_match = /^[0-9]+$/;
	
	var thisvalue = $('#company_name').val();
	if (thisvalue == "") {
		$('#company_name').css("border-color","red");
		error = 1;
	}
	if(regurl.test($("#company_name").val()))
    {
      $('#company_name').css("border-color","red");
      error = 1;
    }
	
	var thisvalue = $('#company_email').val();
	if (thisvalue == "") {
		$('#company_email').css("border-color","red");
		error = 1;
	}
	if (!email_pattern_match.test($('#company_email').val()) && thisvalue!="") {
		$('#company_email').css("border-color","red");
		error = 1;
	}
	
	var thisvalue = $('#country').val();
	if (thisvalue == "") {
		$('#country').css("border-color","red");
		error = 1;
	}
	
	var thisvalue = $('#state').val();
	if (thisvalue == "") {
		$('#state').css("border-color","red");
		error = 1;
	}
	if(regurl.test($("#state").val()))
    {
      $('#state').css("border-color","red");
      error = 1;
    }
	
	var thisvalue = $('#city').val();
	if (thisvalue == "") {
		$('#city').css("border-color","red");
		error = 1;
	}
	if(regurl.test($("#city").val()))
    {
      $('#city').css("border-color","red");
      error = 1;
    }
	
	 var thisvalue = $('#company_website_url').val();
	if (thisvalue == "") {
		$('#company_website_url').css("border-color","red");
		error = 1;
	}
	
	var thisvalue = $('#job_profile').val();
	if (thisvalue == "") {
		$('#job_profile').css("border-color","red");
		error = 1;
	}
	if(regurl.test($("#job_type").val()))
    {
      $('#job_profile').css("border-color","red");
      error = 1;
    }
	
	var thisvalue = $('#job_type').val();
	if (thisvalue == "") {
		$('#job_type').css("border-color","red");
		error = 1;
	}
	
	var thisvalue = $('#experience').val();
	if (thisvalue == "") {
		$('#experience').css("border-color","red");
		error = 1;
	}
	var thisvalue = $('#salary').val();
	if (thisvalue == "") {
		$('#salary').css("border-color","red");
		error = 1;
	} 

    var thisvalue = $('#skills').val();
	if (thisvalue == "") {
		$('#skills').css("border-color","red");
		error = 1;
	} 
	
	var thisvalue = $('#job_profile_description').val();
	if (thisvalue == "") {
		$('#job_profile_description').css("border-color","red");
		error = 1;
	} 
	if(regurl.test($("#job_profile_description").val()))
    {
      $('#job_profile_description').css("border-color","red");
      error = 1;
    }
	
	
	if(error!=1)
	{
		var fd = new FormData($('#addnewjobfrm')[0]);
		
		$.ajax({
			type: "POST",
			url: baseurl+'ajax/addnewjob',
			data: fd,
			contentType: false,
			cache: false,
			processData:false,
			beforeSend: function() {
				$('#addnewjobmsgloader').html('<img src="'+baseurl+'assets/loader.gif" style="width: 50px;" />');
			},
			success: function(result){
				if(result=='error' && result!="")
				{
					SnackBar({
						fixed: true,
						message: "Something went wrong please try again later!",
						status: "danger",
						position: "tr"
					});
				}
				else
				{
					SnackBar({
						fixed: true,
						message: "Job Added Successfully!",
						status: "success",
						position: "tr"
					});
				}
				setTimeout(function(){ $('#addnewjobmsgloader').html(''); window.location.href = baseurl+'posted-job'; }, 2000);
			},

		});
	}
	else
	{
		SnackBar({
			fixed: true,
			message: "All fields are mandatory!",
			status: "danger",
			position: "tr"
		});
	}
	
	return false;
}
    
