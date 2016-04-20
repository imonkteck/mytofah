// JavaScript Document

function validatelogin(path)
{
	
	var username=$("#username").val();
	var pass=$("#password").val();
	
	var link_url = path+"index.php/Logincheck/adminlogin?useremail="+username+"&password="+pass;
	//alert(link_url);
	$.ajax({
		url: link_url,
		success: function(data) {
		           
					 var myobj = eval('('+data+')');
					 $("#error").html(myobj.a);
					 $(".form-control").addClass( "has-error" );
					 $(".input-group-addon").addClass( "has-error" );
					 if(myobj.b==1)
					 {
						  $('.form-control').addClass('has-success').removeClass('has-error');
						  $('.input-group-addon').addClass('has-success').removeClass('has-error');
						 window.location= path+"admin/home";
						
					 }
				
			
			}
		
		
		});
	return false;
	
}






function signup_validation()
{
	var username = document.getElementById('username').value;
	var firstname = document.getElementById('firstname').value;
	var lastname = document.getElementById('lastname').value;
	var emailid = document.getElementById('emailid').value;
	var password = document.getElementById('password').value;
	var confimPass = document.getElementById('confimPass').value;
	var url = document.getElementById('url').value;
	
	if(username=='')
	{
		document.getElementById('username').style.borderColor='red';
		return false;
	}
	
	else if(firstname=='')
	{
		document.getElementById('firstname').style.borderColor='red';
		return false;
	}
	else if(lastname=='')
	{
		document.getElementById('lastname').style.borderColor='red';
		return false;
	}
	else if(emailid=='')
	{
		document.getElementById('emailid').style.borderColor='red';
		return false;
	}
	else if(password=='')
	{
		document.getElementById('password').style.borderColor='red';
		return false;
	}
	else if(confimPass=='')
	{
		document.getElementById('confimPass').style.borderColor='red';
		return false;
	}
		
}


function valid_username(url)
{
	
	var username = document.getElementById('username').value;
	var path = url+"ajax/checkvalid_username";
	$.ajax({
		
		data:{'name':username},
		url:path,
		type:'POST',
		success: function(data)
		{
		  if(data==1)
		  {
		  	
			$('#username-error').html('Someone already have that username. Try another?');
		  	document.getElementById('username').value='';
		  	document.getElementById('username').focus();
		  }else{
		    $('#username-error').html('');
		  }
		}
	});
}

function valid_email(url)
{
	
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
   

	var email = document.getElementById('emailid').value;
	if(!re.test(email)){
	  $('#emailid-error').html('Please enter valid email id');
	  document.getElementById('emailid').value='';
	  document.getElementById('emailid').focus();
	}else{
	var path = url+"ajax/checkvalid_email";
	   $('#emailid-error').html('');
	$.ajax({
		
		data:{'email':email},
		url:path,
		type:'POST',
		success: function(data)
		{
			
		  if(data==1)
		  {
		  	 $('#emailid-error').html('This email is already registerd with us. Try Another?');
		  	 document.getElementById('emailid').value='';
		  	 document.getElementById('emailid').focus();
		  }else{
			  $('#emailid-error').html('');
		  }
		}
	});
	}
}

function checkpass()
{
	var password = document.getElementById('password').value;
	var confimPass = document.getElementById('confimPass').value;
	if(password!=confimPass)
	{
		$('#conf-error').html('Passwords do not match.');
		document.getElementById('confimPass').value='';
	    document.getElementById('confimPass').focus();
	}else{
		$('#conf-error').html('');
	}
}

function login_checkemail(url)
{
	var email = document.getElementById('email').value;
	var path = url+"ajax/login_email";
	$.ajax({
		
		data:{'email':email},
		url:path,
		type:'POST',
		success: function(data)
		{
			
		  if(data==0)
		  {
		  	 $('#email-error').html('Please enter correct Email or username.');
			 document.getElementById('email').value='';
		  	 document.getElementById('email').focus();
		  }else{
		    $('#email-error').html('');
		  }
		}
	});
	
}

function login_checkepass(url)
{
	var email = document.getElementById('email').value;
	var pass = document.getElementById('pass').value;
	var path = url+"ajax/login_pass";
	$.ajax({
		
		data:{'email':email,'pass':pass},
		url:path,
		type:'POST',
		success: function(data)
		{
			
		  if(data==0)
		  {
		  	 $('#pass-error').html('Password is incorrect.');
		  	 document.getElementById('pass').value='';
		  	 document.getElementById('pass').focus();
		  }else{
		    $('#pass-error').html('');
		  }
		}
	});
}

function login_check(url){
    
    var email = $('#email').val();
    var pass = $('#pass').val();
    if(email=='')
    {
        document.getElementById('email').style.borderColor='red';
    }
    else if(email !='' && pass=='')
    {
        document.getElementById('pass').style.borderColor='red';
    }
    else
    {
        var path = url+'ajax/logincheck';
        $.ajax({
        url:path,
        data:{'Email':email,'Pass':pass,'Login':1},
        type:'POST',
        success:function(data){
            if(data==0)
            {
               
				$('#email-error').html('This email is not verified.');
                document.getElementById('email').value='';
                document.getElementById('email').focus();
                document.getElementById('pass').value='';
                  
            }else{
			   window.location= url+"user";
			}
        }
      })
    }
    
}

function personal_info(){
	
	
    var name = document.getElementById('name').value;
	var spouse_name = document.getElementById('spouse_name').value;
	var wedding_date = document.getElementById('wedding_date').value;
	var email = document.getElementById('email').value;
	var venue = document.getElementById('venue').value;
	var contact_no = document.getElementById('contact_no').value;
	var summary = document.getElementById('summary').value;
	var days = document.getElementById('days').value;
	var url = document.getElementById('url').value;
	
	var path = url+'ajax/personal_info';
		
	if(name=='' && spouse_name=='' && wedding_date=='' && email=='' &&  contact_no==''){

	  document.getElementById('name').style.borderColor='red';
	  document.getElementById('spouse_name').style.borderColor='red';
	  document.getElementById('wedding_date').style.borderColor='red';
	  document.getElementById('email').style.borderColor='red';
	  document.getElementById('contact_no').style.borderColor='red';
	}
	
	else if(name=='')
	{
		document.getElementById('name').style.borderColor='red';
		return false;
	}
	
	else if(spouse_name=='')
	{
		document.getElementById('spouse_name').style.borderColor='red';
		return false;
	}
	else if(wedding_date=='')
	{
		document.getElementById('wedding_date').style.borderColor='red';
		return false;
	}
	else if(email=='')
	{
		document.getElementById('email').style.borderColor='red';
		return false;
	}
	else if(contact_no=='')
	{
		document.getElementById('contact_no').style.borderColor='red';
		return false;
	}
	else{
	 $.ajax({
                 data:{'name':name,'spouse_name':spouse_name,'wedding_date':wedding_date,'email':email,'venue':venue,'contact_no':contact_no,'summary':summary,'days':days},
                 url:path,
                 type:'POST',
                 success:function(data)
                 {
                    $('#homeli').removeClass('active');
	                $('#giftli').addClass('active');
	                $('#home').removeClass('active in');
	                $('#gift-repository').addClass('active in');
                 }
         });
	 
	}
	

}

function continue_active(){
    $('#homeli').removeClass('active');
    $('#giftli').removeClass('active');
	$('#home').removeClass('active in');
	$('#gift-repository').removeClass('active in');
	$('#finalize').addClass('active');
	$('#messages').addClass('active in');
	
}

function itme_info()
{
  	
	var itemname = document.getElementById('item').value;
	var cost = document.getElementById('cost').value;
	var weburl = document.getElementById('weburl').value;
	var item_specification = document.getElementById('item_specification').value;
	var url = document.getElementById('url').value;
	var path = url+'ajax/item_info';
	
	
	if(itemname=='')
	{
		document.getElementById('item').style.borderColor='red';
		return false;
	}
	
	else if(cost=='')
	{
		document.getElementById('cost').style.borderColor='red';
		return false;
	}
	else if(url=='')
	{
		document.getElementById('wedding_date').style.borderColor='red';
		return false;
	}
	else{
	    $.ajax({
			  url:path,
			  data:{'itemname':itemname,'cost':cost,'weburl':weburl,'item_specification':item_specification,'itemset':1},
			  type:'POST',
			  success:function(data){
				  if(data == 1){
			        $('#gift-refresh').load(url+'user/index #gift-refresh');
					
					$('#myModal').modal('toggle');
					document.getElementById('item').value='';
					document.getElementById('cost').value='';
					document.getElementById('weburl').value='';
					document.getElementById('item_specification').value='';
					
					$('#homeli').removeClass('active');
	                $('#giftli').addClass('active');
	                $('#home').removeClass('active in');
	                $('#gift-repository').addClass('active in');
				  }
			  }
		});
	}
	
	
}

function validate_text(id){
 if($('#'+id).val() == ''){
   $('#'+id).css('border-color','red');
 }else{
   $('#'+id).css('border-color','');
 }
}

function valid_email(id){
   
  if($('#'+id).val()!=''){ 
   var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var email = document.getElementById(id).value;
	if(!re.test(email)){
	  $('#emailid-error').html('Please enter valid email id');
	  document.getElementById(id).value='';
	  document.getElementById(id).focus();
	  $('#emailid-error').css('color','red');
	}else{
	   $('#emailid-error').html('');
	  $('#emailid-error').css('color','');
	}
  }
}

function valid_contact(id){
 var re = /^\d*(?:\d{1,2})?$/;
 if($('#'+id).val()!=''){
 var contact = document.getElementById(id).value;
	if(!re.test(contact)){
	  $('#contact-error').html('Please enter number');
	  document.getElementById(id).value='';
	  document.getElementById(id).focus();
	  $('#contact-error').css('color','red');
	}else if(contact.length<=10){
	   $('#contact-error').html('Please enter atleast 10 numbers');
	  document.getElementById(id).value='';
	  document.getElementById(id).focus();
	  $('#contact-error').css('color','red');
	}else{
	  $('#contact-error').html('');
	   $('#contact-error').css('color','');
	}
 }
 
}

function valid_url(id){ 
if($('#'+id).val()!=''){
	var url = $('#'+id).val()
var re = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
 if (!re.test(url)) { 
     $('#url-error').html('Please enter valid url');
	  document.getElementById(id).value='';
	  document.getElementById(id).focus();
	  $('#url-error').css('color','red');
  }else{
	   $('#url-error').html('');
	  $('#url-error').css('color','');
  }
 }
}

function valid_cost(id){

 
 if($('#'+id).val()!=''){
	var cost = $('#'+id).val()
 
  var re = /^\d*(?:\.\d{1,2})?$/;
 if (!re.test(cost)) { 
     $('#item-cost').html('Please enter digits');
	  document.getElementById(id).value='';
	  document.getElementById(id).focus();
	  $('#item-cost').css('color','red');
  }else{
	  $('#item-cost').html('');
	  $('#item-cost').css('color','');
  }
 }
}

function giftclick()
{
       var name = document.getElementById('name').value;
       var spouse_name = document.getElementById('spouse_name').value;
       var wedding_date = document.getElementById('wedding_date').value;
       var email = document.getElementById('email').value;
       var venue = document.getElementById('venue').value;
       var contact_no = document.getElementById('contact_no').value;
       var summary = document.getElementById('summary').value;
          
       if(name=='' && spouse_name=='' && wedding_date=='' && email=='' && venue=='' &&  contact_no==''){

         document.getElementById('name').style.borderColor='red';
         document.getElementById('spouse_name').style.borderColor='red';
         document.getElementById('wedding_date').style.borderColor='red';
         document.getElementById('email').style.borderColor='red';
         document.getElementById('venue').style.borderColor='red';
         document.getElementById('contact_no').style.borderColor='red';
       }
       
       else if(name=='')
       {
               document.getElementById('name').style.borderColor='red';
               return false;
       }
       
       else if(spouse_name=='')
       {
               document.getElementById('spouse_name').style.borderColor='red';
               return false;
       }
       else if(wedding_date=='')
       {
               document.getElementById('wedding_date').style.borderColor='red';
               return false;
       }
       else if(email=='')
       {
               document.getElementById('email').style.borderColor='red';
               return false;
       }
       else if(venue=='')
       {
               document.getElementById('venue').style.borderColor='red';
               return false;
       }
       else if(contact_no=='')
       {
               document.getElementById('contact_no').style.borderColor='red';
               return false;
       }

}


function active()
{
       var url = document.getElementById('url').value;
       var path = url+'ajax/insert_registrydata';
       $.ajax({
              url:path,
              data:{'regitration':1},
              type:'POST',
              success:function(data){
				  if(data == 1){
                   window.location= url+"user";  
				  }
              }
                         
       });
}

$(function() {
	$( "#wedding_date" ).datepicker({
			minDate : new Date()
	});
});