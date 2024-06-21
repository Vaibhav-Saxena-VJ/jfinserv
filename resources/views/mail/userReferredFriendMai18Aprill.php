<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>JFinserv</title>
  <meta name="viewport" content="width=device-width" />
  <link rel="icon" href="../email-templates/img/favicon.ico" type="image/x-icon">
  <style type="text/css">
    @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
      body[yahoo] .buttonwrapper { background-color: transparent !important; }
      body[yahoo] .button { padding: 0 !important; }
      body[yahoo] .button a { background-color: #9b59b6; padding: 15px 25px !important; }
    }
    @media only screen and (min-device-width: 601px) {
      .content { width: 600px !important; }
      .col387 { width: 387px !important; }
    }
  </style>
</head>
<body bgcolor="#dddddd" style="margin: 0; padding: 0;" yahoo="fix">
 <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;" class="content"> 
  <tr>
    <td align="center" bgcolor="#025152" style="padding: 10px 10px 10px 10px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold; ">
      <div  style="padding: 10px; height: 110px;width: 110px;border-radius: 50%;background: #0e0e0e; display: table-cell !important;vertical-align: middle !important;text-align: center !important;">
        <center>
         <!--  <img src="{{config('app.baseURL')}}/assets/img/fav_icon_white.png" alt="Logo" style="display:block;display:block; max-height: 100px; max-width: 100px;"/> -->

         <!--<img src="https://finkompas.com/assets/img/logo_white.png" alt="finkompas" style="display:block;display:block; max-height: 100px; max-width: 100px;"/>-->

        <p style="color:#fff;">JFINSERV</p>
       </center>
     </div>
     <div style="margin-top: 10px">
      <!--<p style="font-size: 14px !important;">Stocks | &nbsp;Mutual Funds | &nbsp;Loans</p>-->
    </div>
  </td>
</tr> 
<tr>

    <?php   

  if($product_id==1) {
   $product_name= "Home Loan";
  }
  else if($product_id==2){

  $product_name= "Mortgage Loan";  
 } 
 else if($product_id==3) {
 
  $product_name= "Project Loan";  
}
else if($product_id==4) {
  
  $product_name= "Term Loan";
} else if($product_id==5) {
  
 $product_name= "Working Capital";
} else if($product_id==6) {
  
 $product_name= "Overdraft Facility";
} else if($product_id==7) {
  
 $product_name= "Machinary Loan";
} else if($product_id==8) {
  
 $product_name= "Business Loan";
} 
else {
 
   $product_name= "Investment/Loan";
}



?>


  <td bgcolor="#ffffff" style="padding:5px 20px 20px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">
   <p><b>Dear <?php echo $name ?>, </b><br>Welcome to Finkompas! Your friend has referred you for <b> <?php echo $product_name ?>. </b>
    

    
   </p>
   <p style="color: #555555 !important;">Start your application by clicking referral link below:</p>

   <a href="https://finkompas.com/referral-program?referral_link=<?php echo $referral_link ;?>" target="_blank" class="refferal_button" style="color: #025152;"><b>Click Here</b></a>

   

   <p style="color: #555555 !important;">We are delighted to serve you. Our mission is to simplify your financial life by providing great financial products at no fees, low rates with great benefits. Whatever be your choice of product - be it Stocks, Mutual Funds or Loans, you can trust us.</p>
  

    <p style="color: #555555 !important;">Our product team shall get in touch with shortly to understand your requirement in detail.</p>

    <p style="color: #555555 !important;">Do feel free to write to <a href="mailto:jfinservconsultant@gmail.com" style="color: #025152 !important;">jfinservconsultant@gmail.com</a> in case you need any help..<br>
    Thank you once again for selecting JFinserv! 
  </p>
  <br>

   <p>Regards,<br>
Team JFinserv
</p>

</td>

</tr>
<tr>
  <td bgcolor="#ffffff" style="padding:5px 20px 20px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">
    <center>
      <h3 class="widget-title" style="margin-top: 10px;">Follow us</h3>
      <!-- <a class="facebook" href="#" target="_blank">
        <img src="{{config('app.baseURL')}}/assets/img/facebook.png" alt="facebook" style="margin-right:4px;">
      </a>

       <a class="linkedin" href="#" target="_blank">
        <img src="{{config('app.baseURL')}}/assets/img/linkedin.png" alt="linkedin" style="margin-right:4px;">
      </a>

       <a class="twitter" href="#" target="_blank">
        <img src="{{config('app.baseURL')}}/assets/img/twitter.png" alt="twitter">
      </a> -->

      <a class="facebook" href="https://www.facebook.com/finkompas/" target="_blank">
        <img src="https://finkompas.com/assets/img/facebook.png" alt="facebook" style="margin-right:4px;width: 32px;">
      </a>

      <a class="linkedin" href="https://www.linkedin.com/company/finkompas" target="_blank">
        <img src="https://finkompas.com/assets/img/linkedin.png" alt="linkedin" style="margin-right:4px;width: 32px;">
      </a>

      <a class="twitter" href="https://twitter.com/finkompas" target="_blank">
        <img src="https://finkompas.com/assets/img/twitter.png" alt="twitter" style="width: 32px;">
      </a>

      
    </center>
  </td>
</tr>
<tr>
 <td align="center" bgcolor="#eee" style="padding: 15px 10px 15px 10px; color: #555555; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px;">
  <b> JFinserv,</b><br/>jfinservconsultant@gmail.com , <a href="tel:8451005808">845 100 5808</a>
</td>
</tr>
</table>
</body>
</html>