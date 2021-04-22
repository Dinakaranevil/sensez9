<?php

header("Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Headers:*');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	header("Content-Type:application/json");
	header("Access-Control-Allow-Origin:*");
	header('Access-Control-Allow-Headers:*');
	header("Access-Control-Allow-Methods:'POST, GET, PUT, DELETE, OPTIONS'");
	header("Access-Control-Allow-Credentials:'true'");
	header("HTTP/1.1 200  Data loaded");
} else {
        if(isset($_POST)){
            $response = array();
            
            $email = $_POST['email'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $cname = $_POST['cname'];
            $city = $_POST['city'];
            $designation = $_POST['designation'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $phone = $_POST['phone'];
            $message_type=$_POST['meesage_type'];
            // echo $recipient_email;die('yyyy');
            // Perform query

            $recipient_email="shreyash@gaia.in";
            //echo $_SERVER['DOCUMENT_ROOT'] ;
            require($_SERVER['DOCUMENT_ROOT'].'PHPMailer-master/src/PHPMailer.php');
           //echo $_SERVER['DOCUMENT_ROOT'] . 'PHPMailer-master/src/PHPMailer.php';
           
                //$from_email='from_field_account@smartcadre.in';
                $from_email='admin@sensez9.tech';

                // $from_email= 'from_field_account@smartcadre.in';
                //Create a new PHPMailer instance
                $mail = new PHPMailer\PHPMailer\PHPMailer();
                // Set PHPMailer to use the sendmail transport
                $mail->isSendmail();
                    
                //Set who the message is to be sent from
                $mail->setFrom($from_email, 'Sensez9 Admin');

                //Set an alternative reply-to address
                $mail->addReplyTo($from_email, 'Sensez9 Admin');
                //Set who the message is to be sent to
               
                $mail->addAddress($recipient_email);
                $mail->addAddress("dinakaran@sesovera.ai");
                $mail->addAddress("mayuri@gaia.in");
                $mail->addAddress("jake@sensez9.tech");
                $mail->addAddress("richie@sensez9.tech");
                //Thank you for contacting us. We will connect with you shortly.
                
                
                //Set the subject line
                // $month_year=date("F Y",strtotime($current_month));
            

                $mail->Subject = 'New Query from Sensez9 Website.';
                //Read an HTML message body from an external file, convert referenced images to embedded,
                //convert HTML into a basic plain-text alternative body
                $maildate = date('d M Y');
                //echo $maildate;
                // echo $month_year;
                $mail->msgHTML('
                            <p><img style="display: block; margin-left: auto; margin-right: auto;" src="http://104.211.67.151/sensez9/images/image1.png" alt="" width="140" height="100" /></p><p style="text-align: center;">&nbsp;</p>
                            <p style="text-align: center;"><span style="font-size: 20.0pt; line-height: 115%;">'.$maildate.'</span></p>
                            <p>&nbsp;</p>
                            <table style="width: 390pt; margin-left: auto; margin-right: auto;" width="390pt">
                            <tbody>
                            <tr>
                            <td style="padding: 0cm;">
                            <p style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 13.0pt; font-family: "Helvetica",sans-serif; color: #282828;">Hi Sir/Madam,</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 11.25pt;">
                            <td style="padding: 0cm; height: 11.25pt; text-align: center;">&nbsp;</td>
                            </tr>
                            <tr>
                            <td style="padding: 0cm; ">
                            <p style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; font-family: "Helvetica",sans-serif; color: #282828;">You have a new '.$message_type.' Message From Sensez9 Website.</span></p>
                            </td>
                            </tr>
                            <tr>
                            <td style="padding: 0cm; text-align: center;">&nbsp;</td>
                            </tr>
                            <tr>
                            <td style="padding: 0cm; text-align: center;">
                            <table style="width: 100.0%;" width="100%">
                            <tbody>
                            <tr>
                            <td style="border: solid #E6E6E6 1.0pt; border-bottom: none; background: #FAFAFA; padding: 22.5pt 22.5pt 22.5pt 22.5pt;">
                            <table style="width: 100.0%;" width="100%">
                            <tbody>
                            <tr>
                            <td style="padding: 0cm 0cm 0cm 0cm;text-align:left;">
                            <p style="margin-bottom: 0.0001pt, line-height: normal;">
                            <strong><span style="font-size: 13.5pt; font-family: "Helvetica",sans-serif; color: #282828;">First Name:&nbsp;'.$fname.'</span></strong><br>
                            <strong><span style="font-size: 13.5pt; font-family: "Helvetica",sans-serif; color: #282828;">Last Name:&nbsp;'.$lname.'</span></strong><br>
                            <strong><span style="font-size: 13.5pt; font-family: "Helvetica",sans-serif; color: #282828;">Company Name:&nbsp;'.$cname.'</span></strong><br>
                            <strong><span style="font-size: 13.5pt; font-family: "Helvetica",sans-serif; color: #282828;">Designation:&nbsp;'.$designation.'</span></strong><br>
                            <strong><span style="font-size: 13.5pt; font-family: "Helvetica",sans-serif; color: #282828;">Work Email ID:&nbsp;'.$email.'</span></strong><br>
                            <strong><span style="font-size: 13.5pt; font-family: "Helvetica",sans-serif; color: #282828;">Work Phone no:&nbsp;'.$phone.'</span></strong><br>
                            <strong><span style="font-size: 13.5pt; font-family: "Helvetica",sans-serif; color: #282828;">City :&nbsp;'.$city.'</span></strong><br>
                            <strong><span style="font-size: 13.5pt; font-family: "Helvetica",sans-serif; color: #282828;">State:&nbsp;'.$state.'</span></strong><br>
                            <strong><span style="font-size: 13.5pt; font-family: "Helvetica",sans-serif; color: #282828;">Country:&nbsp;'.$country.'</span></strong></p>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                            </td>
                            </tr>
                            <tr>
                            <td style="padding: 0cm; text-align: center;">&nbsp;</td>
                            </tr>
                            </tbody>
                            </table>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>

                                        
                                        
                                        ');
                //Replace the plain text body with one created manually
                $mail->AltBody = 'This is a plain-text message body';
                //Attach an image file
            
                
                //send the message, check for errors
                if (!$mail->send()) {
                    //$response=["message"=>"Failed to Send Mail.","data"=>0,"status"=>201];
                    $response=["message"=>"'Mailer Error: ' . $mail->ErrorInfo","data"=>0,"status"=>200];
                }else{
                    $response=["message"=>"Mail Send Sucessfully.","data"=>1,"status"=>200];
                }
               
        }  
           
            echo json_encode($response);
    }

?>
