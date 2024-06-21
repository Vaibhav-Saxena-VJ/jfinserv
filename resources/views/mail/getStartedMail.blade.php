<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Finkompas</title>
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

          <img src="https://finkompas.com/assets/img/logo_white.png" alt="finkompas" style="display:block;display:block; max-height: 100px; max-width: 100px;"/>

          
        </center>
      </div>
      <div style="margin-top: 10px">
        <!--<p style="font-size: 14px !important;">Stocks | &nbsp;Mutual Funds | &nbsp;Loans</p>-->
      </div>
    </td> 
  </tr> 
  <tr>
  

    <td bgcolor="#ffffff" style="padding:5px 20px 20px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">
      <p><b>Hi Admin,<br>New User contacted you @if($product_id!="")for @if($product_id==1) Stocks. @elseif($product_id==2) Mutual Funds.  @elseif($product_id==3) PMS. @elseif($product_id==4) Home Loan @elseif($product_id==5) Personal Loan. @elseif($product_id==6) Business Loan. @elseif($product_id==7) Gold Loan. @elseif($product_id==8) Term Insurance. @elseif($product_id==9) Health Insurance. @else Investment/Loan @endif  @endif</b></p><br>
      <h3><b>User Details</b></h3>
      @if($name!="")
      <p>Name : {{$name}}</p>
      @endif
      @if($email!="")
      <p>Email : {{$email}}</p> 
      @endif
      @if($phone!="")
      <p>Phone : {{$phone}}</p>
      @endif
       @if($city!="")
      <p>City : {{$city}}</p>
      @endif
      @if($message1!="") 
      <p>Message : {{$message1}}</p>
      @endif
    </td>
  </tr>
  <tr>
    <td bgcolor="#ffffff" style="padding:5px 20px 20px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">
      <p align="center" >Thank You</p>
             <center>
      <h3 class="widget-title" style="margin-top: 10px;">Follow us</h3>
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
    <b> Finkompas,</b><br/>contact@finkompas.com , <a href="tel:8451005808">845 100 5808</a>
  </td>
</tr>
  </table>
</body>
</html>