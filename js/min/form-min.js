!function($,a,e){$.fn.forms=function(){var a;$("#contact").submit(function(e){e.preventDefault(),a=$(this).serializeArray(),a=JSON.stringify(a),console.log(a),$().ajaxForm()}),$.fn.ajaxForm=function(){jQuery.ajax({type:"POST",url:templateDir+"/mail.php",data:{data:a},success:function(a){$("#contact").fadeOut(1e3,function(){$("#form-message").append("<h3>Thanks, a member of staff will be in touch shortly</h3>"),$("#form-message").fadeIn(1e3)})},fail:function(a){$("#form-message").append("<h3>There Was an Issue With your Form Submission - Please try again</h3>"),$("#form-message").fadeIn(1e3)}})}}}(jQuery,this);