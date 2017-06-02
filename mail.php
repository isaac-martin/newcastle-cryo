<?php



$dataWrp = json_decode($_POST['data']);
$dataSnd = [];


foreach ($dataWrp as $data) {
  $itmLbl = $data->{"name"};
  $dataSnd[$itmLbl] = $data->{"value"};
}

var_dump($dataSnd);



$msg_phone = $dataSnd['phone'];
$msg_email = strip_tags($dataSnd['email']);
$msg_firstName = $dataSnd['firstName'];
$msg_lastName = $dataSnd['lastName'];
$msg_enquiry =  $dataSnd['enquiry'];

  $template = '<html><head><meta name="viewport" content="width=device-width"><title>Appointment Email Request</title><style>ii a[href] {color: #424141;} gs li {margin-left: 0px;} .aBn {border-bottom: 1px solid #424141;}</style></head><body><table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #ffffff;" bgcolor="#ffffff"><tr><td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top;" valign="top"> </td><td class="container" style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; display: block; max-width: 580px; width: 100% !important; margin: 0 auto; padding: 0;" valign="top"><div class="content" style="box-sizing: border-box; display: block; max-width: 580px; margin: 0 auto; padding: 0;"><span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0; font-size: 16px !important;">Newcastle Cryo - New Contact Request</span><table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; border-radius: 0 !important; border-left-width: 0 !important; border-right-width: 0 !important; background-color: #ffffff;" bgcolor="#ffffff"><tr><td class="wrapper" style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; box-sizing: border-box; padding: 10px;" valign="top"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top;" valign="top"><p style="font-family: sans-serif; font-size: 16px !important; font-weight: normal; color: #424141; margin: 0 0 15px; padding: 0;">Hi there,</p><p style="font-family: sans-serif; font-size: 16px !important; font-weight: normal; color: #424141; margin: 0 0 15px; padding: 0;">A contact request has been submitted to the website.</p>';$template .='<li style="list-style-type: none; margin-left: 0!important; padding: 0; text-decoration: none!important; color: #424141!important;">'.$msg_email.' <br /> '.$msg_phone.'</li></ul>';
  $template .='<h3 style="color: #424141; font-family: sans-serif; font-weight: 700; line-height: 1.4; text-transform: capitalise; margin: 10px 0;">Form Details</h3>';
  $template .='<ul style="font-family: sans-serif; font-size: 16px !important; font-weight: normal; color: #424141; margin: 0 0 15px; padding: 0; list-style:none;"><li style="list-style-type: none; margin-left: 5px; padding: 0;">'.$msg_firstName. '&nbsp;' .$msg_lastName.'</li><li style="list-style-type: none; margin-left: 5px; padding: 0;">'.$msg_phone.' <br /> '.$msg_email.'</li><li style="list-style-type: none; margin-left: 5px; padding: 0;">'.$msg_enquiry.'</li></ul></p><table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;"><tbody><tr><td align="left" style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; padding-bottom: 15px;" valign="top"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100% !important;"><tbody><tr><td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; border-radius: 5px; text-align: center; background-color: #424141;" align="center" bgcolor="#8942B2" valign="top"> <a style="color: #ffffff!important; text-decoration: none!important; font-family: sans-serif; text-transform: capitalise; border-radius: 5px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px !important; font-weight: bold; width: 100% !important; background-color: #039be5; margin: 0; padding: 12px 25px; border: 1px solid #039be5;" href="mailto:'.$msg_email.'" target="_blank" >Reply To Request</a> </td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table></div></td><td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top;" valign="top"> </td></tr></table></body></html>';
  // echo $template;

  // send email
  // $to = 'contact@isaacmartin.co';
  $to = 'contact@newcastlecryo.com.au';

  $subject = 'Contact Request From Website';

  $headers = "From: " . strip_tags('noreply@newcastlecryo.com.au') . "\r\n";
  $headers .= "Reply-To: ". ($msg_email) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  mail($to, $subject, $template, $headers);

  echo "sent";
  ?>
