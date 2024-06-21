<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Jfinserv</title>
  <meta name="viewport" content="width=device-width" />
  <link rel="icon" href="../email-templates/img/favicon.ico" type="image/x-icon">
  <style type="text/css">
  @media  only screen and (max-width: 550px), screen and (max-device-width: 550px) {
    body[yahoo] .buttonwrapper { background-color: transparent !important; }
    body[yahoo] .button { padding: 0 !important; }
    body[yahoo] .button a { background-color: #9b59b6; padding: 15px 25px !important; }
  }
  @media  only screen and (min-device-width: 601px) {
    .content { width: 600px !important; }
    .col387 { width: 387px !important; }
  }
</style>
</head>
<body bgcolor="#dddddd" style="margin: 0; padding: 0;" yahoo="fix">
 <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;" class="content"> 
  <tr>
    <td align="center" bgcolor="#0050b2" style="padding: 20px 20px 20px 20px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold; ">
      <div  style="padding: 10px; height: 120px;width: 120px;border-radius: 50%;background: #fff; display: table-cell !important;vertical-align: middle !important;text-align: center !important;">
        <center>
          <img src="<?php echo e(config('app.baseURL')); ?>/images/logo/logo.png" alt="Logo" style="display:block;display:block; max-height: 100px; max-width: 100px;"/>
        </center>
      </div>
      <div style="margin-top: 15px">
        <span style="margin: 8px">Jfinserv</span>
      </div>
    </td> 
  </tr> 
  <tr>
    <td bgcolor="#ffffff" style="padding:5px 20px 20px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">

      <h3><b>Contact Details</b></h3>
      <p>Name : <?php echo e($name); ?></p>
      <p>Contact No. : <?php echo e($phone); ?></p>
      <p>Email : <?php echo e($email); ?></p> 
      <p>Message : <?php echo e($message1); ?></p>   
    </td>
  </tr>
  <tr>
    <td align="center" bgcolor="#eee" style="padding: 15px 10px 15px 10px; color: #555555; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px;">
      <center><b>Jfinserv</b><br/></center>
      </td>
    </tr>
  </table>
</body>
</html><?php /**PATH /home/jfinserv.com/public_html/resources/views/mail/contactMail.blade.php ENDPATH**/ ?>