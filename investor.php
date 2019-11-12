<?php

$company=$_POST['company'];
$title=$_POST['title'];
$country=$_POST['country'];
$address=$_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$mobile = $_POST['mobile'];

$investor_company  = '';
if(!empty($_POST['investor_company'])){
 foreach($_POST['investor_company'] as $investor_company0){
   $investor_company = $investor_company.$investor_company0.',';
 }
}
 

$interest_company  = '';
if(!empty($_POST['interest_company'])){
 foreach($_POST['interest_company'] as $interest_company0){
   $interest_company = $interest_company.$interest_company0.',';
 }
}
 
$emailFrom ='goar@duende.tech';
$to = "goar@duende.tech";
$subject = "Investor Information";
$message = '
<body>
    <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc">
        <table  width="100%" border="0" cellspacing="5" cellpadding="10">
            <tr>
                <td style="font-size:14px; color:#323232">Company:</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' .$company.'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">Title :</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $title .'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">Country :</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $country .'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">Address:</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $address .'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">City :</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $city .'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">Zip :</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $zip .'</strong></td>
            </tr>
            <tr>
            <td style="font-size:14px; color:#323232">Phone :</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $phone .'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">Mobile:</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $mobile .'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">How did you hear about our company?:</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $investor_company .'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">What kind of investment interest do you have in our company?:</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $interest_company .'</strong></td>
            </tr>
        </table>
    </div>
</body>
';
 
 
$headers = "From:" . $emailFrom . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

 

if(@mail($to,$subject,$message,$headers))
{
 
 echo "<script type='text/javascript'>
      location.href = 'investor.html';
      
 </script>";
 
}else{
  echo "Something went wrong";
}


?>
