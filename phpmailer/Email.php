<?php
 require 'includes/PHPMailer.php';
 require 'includes/SMTP.php';
 require 'includes/Exception.php';
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
$mail=new PHPMailer();
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth="true";
$mail->SMTPSecure="tls";
$mail->Port="587";
$mail->Username="krishnavamshipinna1998@gmail.com";
$mail->Password="krish@1998";
$year=array("firstyear","secondyear","thirdyear","fourthyear");
$branch=array("cse","ece","it","mech","civil");
for($i=0;$i<4;$i++)
{
$conn= mysqli_connect("localhost","root","",$year[$i]) or die("connection not created");
for($j=0;$j<5;$j++)
{
$query="select Name,Email,room from $branch[$j]";
$result= mysqli_query($conn,$query);
 if(mysqli_num_rows($result)>0)
 {
   while($row= mysqli_fetch_array($result))
   {
       if($row[1]!="")
       {
       $studentemail=$row[1];
    $mail->Subject="KITSW EXAM HALL ALLOTMENT";
    $mail->setFrom("krishnavamshipinna1998@gmail.com");
    $mail->Body="As exam is scheduled tomorrow please check below details about your seating \nName=".$row[0]."\nEmail=".$row[1]."\nBLOCK-IV Room No=".$row[2]."\n   ALL THE BEST";
    $mail->addAddress($studentemail);
    //echo $studentemail."\n";
    if($mail->Send())
    {
    //echo "Email Sent..\n";
    }
    else
    echo "Error...";
    }
    $mail->ClearAllRecipients();
   }
 }
}
}

$conn= mysqli_connect("localhost","root","","major_project") or die("connection not created");
$query="select Name,Email,allot from invigilators";
$result= mysqli_query($conn,$query);
 if(mysqli_num_rows($result)>0)
 {
   while($row= mysqli_fetch_array($result))
   {
     if($row[1]!=""&&$row[2]==1)
       {
       $email=$row[1];
    $mail->Subject="KITSW EXAM HALL ALLOTMENT";
    $mail->setFrom("krishnavamshipinna1998@gmail.com");
    $mail->Body="As exam is scheduled tomorrow please check below details about your Alloted Rooms \nName=".$row[0]."\nEmail=".$row[1]."\nBLOCK-IV Room No=".$row[2]."\n   ALL THE BEST";
    $mail->addAddress($email);
    //echo $email."\n";
    if($mail->Send())
    {
    //echo "Email Sent..\n";
    }
    else
    echo "Error...";
    }
    $mail->ClearAllRecipients();
   }
   }
   echo '<center><br><br><br><font size="8" color="green">Mails are sent to students and invigilators successfully</font></center>';
$mail->smtpClose();
?>

