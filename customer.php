
<?php

// Get values from the form
$company=$_POST['company'];
$title=$_POST['title'];
$country=$_POST['country'];
$address=$_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$mobile = $_POST['mobile'];
$customer_chk  = '';
if(!empty($_POST['customer_chk'])){
 foreach($_POST['customer_chk'] as $customer_chk0){
   $customer_chk = $customer_chk.$customer_chk0.',';
 }
}

$emailFrom ='goar@duende.tech';
$to = "goar@duende.tech";
$subject = "Customer Information";
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
            <td style="font-size:14px; color:#323232">Type of institution you work for What and/or what is the main line of work you do ?:</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $customer_chk .'</strong></td>
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
      location.href = 'customer.html';
      
 </script>";
 
}else{
  echo "Something went wrong";
}


?>
