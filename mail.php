<?php



$dataWrp = json_decode($_POST['data']);
$dataSnd = [];


foreach ($dataWrp as $data) {
  $itmLbl = $data->{"name"};
  $dataSnd[$itmLbl] = $data->{"value"};
}

// var_dump($dataSnd);


//
// $msg_phone = $dataSnd['phone'];
// $msg_email = strip_tags($dataSnd['email']);
// $msg_firstName = $dataSnd['firstName'];
// $msg_lastName = $dataSnd['lastName'];
// $msg_enquiry =  $dataSnd['enquiry'];
//
//
// $template = '<html><head><meta name="viewport" content="width=device-width"><title>Appointment Email Request</title><style>ii a[href] {color: #424141;} gs li {margin-left: 0px;} .aBn {border-bottom: 1px solid #424141;}</style></head><body><table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #ffffff;" bgcolor="#ffffff"><tr><td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top;" valign="top"> </td><td class="container" style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; display: block; max-width: 580px; width: 100% !important; margin: 0 auto; padding: 0;" valign="top"><div class="content" style="box-sizing: border-box; display: block; max-width: 580px; margin: 0 auto; padding: 0;"><span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0; font-size: 16px !important;">Prudence Consulting - New Booking Request</span><table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; border-radius: 0 !important; border-left-width: 0 !important; border-right-width: 0 !important; background-color: #ffffff;" bgcolor="#ffffff"><tr><td class="wrapper" style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; box-sizing: border-box; padding: 10px;" valign="top"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top;" valign="top"><p style="font-family: sans-serif; font-size: 16px !important; font-weight: normal; color: #424141; margin: 0 0 15px; padding: 0;">Hi there,</p><p style="font-family: sans-serif; font-size: 16px !important; font-weight: normal; color: #424141; margin: 0 0 15px; padding: 0;">A booking request has been submitted to the website.</p>';
// $template .='<h3 style="color: #424141; font-family: sans-serif; font-weight: 700; line-height: 1.4; text-transform: capitalise; margin: 10px 0;">Report Types</h3><p></p>';
// $template .='<h3 style="color: #424141; font-family: sans-serif; font-weight: 700; line-height: 1.4; text-transform: capitalise; margin: 10px 0;">Company Details</h3><ul style="font-family: sans-serif; font-size: 16px !important; font-weight: normal; color: #424141; margin: 0 0 15px; padding: 0; list-style-type:none;">';
// $template .='<li style="list-style-type: none; margin: 0; padding: 0;"><br /></li>';
// $template .='<li style="list-style-type: none; margin-left: 0!important; padding: 0; text-decoration: none!important; color: #424141!important;">'.$msg_email.' <br /> '.$msg_phone.'</li></ul>';
// $template .='<h3 style="color: #424141; font-family: sans-serif; font-weight: 700; line-height: 1.4; text-transform: capitalise; margin: 10px 0;">Client Details</h3>';
// $template .='<ul style="font-family: sans-serif; font-size: 16px !important; font-weight: normal; color: #424141; margin: 0 0 15px; padding: 0; list-style:none;"><li style="list-style-type: none; margin-left: 5px; padding: 0;">'.$msg_first_name. '&nbsp;' .$msg_last_name.'</li><li style="list-style-type: none; margin-left: 5px; padding: 0;"></li><li style="list-style-type: none; margin-left: 5px; padding: 0;"><br /> </li><li style="list-style-type: none; margin-left: 5px; padding: 0;"></li></ul>';
// $template .='<h3 style="color: #424141; font-family: sans-serif; font-weight: 700; line-height: 1.4; text-transform: capitalise; margin: 10px 0;">Appointment Details</h3><p style="font-family: sans-serif; font-size: 16px !important; font-weight: normal; color: #424141; margin: 0 0 15px; padding: 0;">Date:</p><p style="font-family: sans-serif; font-size: 16px !important; font-weight: normal; color: #424141; margin: 0 0 15px; padding: 0;">Extra Infromation: '.$msg_enquiry.'</p><table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;"><tbody><tr><td align="left" style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; padding-bottom: 15px;" valign="top"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100% !important;"><tbody><tr><td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; border-radius: 5px; text-align: center; background-color: #424141;" align="center" bgcolor="#8942B2" valign="top"> <a style="color: #ffffff!important; text-decoration: none!important; font-family: sans-serif; text-transform: capitalise; border-radius: 5px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px !important; font-weight: bold; width: 100% !important; background-color: #8942B2; margin: 0; padding: 12px 25px; border: 1px solid #424141;" href="mailto:'.$msg_email.'" target="_blank" >Reply To Request</a> </td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table></div></td><td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top;" valign="top"> </td></tr></table></body></html>';
//



// var_dump($dataSnd);
$msg_name = $dataSnd['name'];
$msg_email = strip_tags($dataSnd['email']);
$msg_phone = $dataSnd['phone'];
$msg_animal = $dataSnd['animal'];
$msg_animalName = $dataSnd['animal-name'];
$msg_toy = $dataSnd['toy'];
$msg_day = $dataSnd['day'];
$msg_month = $dataSnd['month'];
$msg_year = $dataSnd['year'];
$msg_time = $dataSnd['time'];

$msg_date = date("l jS F Y", mktime(0, 0, 0, $msg_day, $msg_month, $msg_year));

if($msg_time == 'Morning'){
  $timeMsg = 'In The ';
} else if($msg_time == 'Midday'){
  $timeMsg = 'Around ';
}if($msg_time == 'Afternoon'){
  $timeMsg = 'In The ';
}

$msg_time = $timeMsg.$msg_time;


  $template = '<html><head><meta name="viewport" content="width=device-width"><title>Appointment Email Request</title><style>ii a[href] {color: #f04e3e;} gs li {margin-left: 0px;} .aBn {border-bottom: 1px solid #f04e3e;}</style></head><body class="" style="background-color: #f6f6f6; font-family: monospace; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; margin: 0; padding: 0;" bgcolor="#f6f6f6"><table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #fffbf4;" bgcolor="#fffbf4"><tr><td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top;" valign="top"> </td><td class="container" style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; display: block; max-width: 580px; width: 100% !important; margin: 0 auto; padding: 0;" valign="top"><div class="content" style="box-sizing: border-box; display: block; max-width: 580px; margin: 0 auto; padding: 0;"><span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0; font-size: 16px !important;">The Village Vet - New Appointment Request</span><table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; border-radius: 0 !important; border-left-width: 0 !important; border-right-width: 0 !important; background-color: #fffbf4;" bgcolor="#fffbf4"><tr><td class="wrapper" style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; box-sizing: border-box; padding: 10px;" valign="top"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top;" valign="top"><p class="logo" style="font-family: monospace; font-size: 16px !important; font-weight: normal; color: #f04e3e; height: 143px; width: 580px; background-size: cover; background-image: url(http://vv.weareplayground.co/wp-content/themes/village-vet/img/email-logo.png); background-repeat: no-repeat; background-position: center center; margin: 0 0 40px; padding: 0;"> </p><p style="font-family: monospace; font-size: 16px !important; font-weight: normal; color: #f04e3e; margin: 0 0 15px; padding: 0;">Hi there,</p><p style="font-family: monospace; font-size: 16px !important; font-weight: normal; color: #f04e3e; margin: 0 0 15px; padding: 0;">A customer has submitted a request for an appointment from the website.</p><h2 style="color: #f04e3e; font-family: monospace; font-weight: 700; line-height: 1.4; text-transform: uppercase; margin: 20px 0;">Customer Details</h2><ul style="font-family: monospace; font-size: 16px !important; font-weight: normal; color: #f04e3e; margin: 0 0 15px; padding: 0; list-style-type:none;"><li style="list-style-type: none; margin: 0; padding: 0;">';
  $template .= $msg_name.'</li><li style="list-style-type: none; margin-left: 0!important; padding: 0; text-decoration: none!important; color: #f04e3e!important;">'.$msg_email.' | '.$msg_phone.'</li></ul><h2 style="color: #f04e3e; font-family: monospace; font-weight: 700; line-height: 1.4; text-transform: uppercase; margin: 20px 0;">Pet Details</h2><ul style="font-family: monospace; font-size: 16px !important; font-weight: normal; color: #f04e3e; margin: 0 0 15px; padding: 0; list-style:none;"><li style="list-style-type: none; margin-left: 5px; padding: 0;">'.$msg_animalName.'</li><li style="list-style-type: none; margin-left: 5px; padding: 0;">'.$msg_animal.'</li><li style="list-style-type: none; margin-left: 5px; padding: 0;">'.$msg_toy.'</li></ul><h2 style="color: #f04e3e; font-family: monospace; font-weight: 700; line-height: 1.4; text-transform: uppercase; margin: 20px 0;">Appointment Details</h2><p style="font-family: monospace; font-size: 16px !important; font-weight: normal; color: #f04e3e; margin: 0 0 15px; padding: 0;">'.$msg_date.' '.$msg_time;
  $template .= '</p><table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;"><tbody><tr><td align="left" style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; padding-bottom: 15px;" valign="top"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100% !important;"><tbody><tr><td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; border-radius: 5px; text-align: center; background-color: #f04e3e;" align="center" bgcolor="#f04e3e" valign="top"> <a style="color: #f6f6f6!important; text-decoration: none!important; font-family: monospace; text-transform: uppercase; border-radius: 5px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px !important; font-weight: bold; width: 100% !important; background-color: #f04e3e; margin: 0; padding: 12px 25px; border: 1px solid #f04e3e;" href="mailto:'.$msg_email.'" target="_blank" >Reply To Customer</a> </td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table></div></td><td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top;" valign="top"> </td></tr></table></body></html>';
  //echo $template;


  // send email
  $to = 'contact@isaacmartin.co';
  // $to = 'contact@newcastlecryo.com.au';

  $subject = 'Contact Request From Website';

  $headers = "From: " . strip_tags('noreply@newcastlecryo.com.au') . "\r\n";
  $headers .= "Reply-To: ". ($msg_email) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  mail($to, $subject, $template, $headers);

  echo "sent";
  ?>
