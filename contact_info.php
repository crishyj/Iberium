
<?php

// Get values from the form
$FirstName=$_POST['fname'];
$LastName=$_POST['lname'];
$Email=$_POST['email'];
$Company=$_POST['company'];
$title = $_POST['title'];
$subject1 = $_POST['subject'];
$msg = $_POST['message'];
 
$emailFrom =$Email;
$to = "goar@duende.tech";
$subject = "Contact Information";
$message = '
<body>
    <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc">
        <table  width="100%" border="0" cellspacing="5" cellpadding="10">
            <tr>
                <td style="font-size:14px; color:#323232">Name:</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $FirstName .'&nbsp;'.$LastName.'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">Email :</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $Email .'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">Company :</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $Company .'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">Title Position :</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $title .'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">Subject :</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $subject1 .'</strong></td>
            </tr>
            <tr>
                <td style="font-size:14px; color:#323232">Message :</td>
            </tr>
            <tr>
                <td style="font-size:16px; font-weight:bold"><strong>' . $msg .'</strong></td>
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
location.href = 'index.html';
      
 </script>";
 
}else{
  echo "Something went wrong";
}


?>
