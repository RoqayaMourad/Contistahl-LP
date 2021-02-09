<?php 
        $EmailFrom = "From: Contistahl Group Landing Page<marketing@contistahlgroup.com>";
        $EmailTo = "emmasmith.quad@gmail.com";
        $name=$_POST['name-form'];
        $email=$_POST['email-form'];
        $phone=$_POST['phone-form'];
        $details=$_POST['message-form'];
        //echo $name " / ". $email ." / ". $phone . " / " . $message  ; 
        // prepare email body text
        $Body = "";
        $Body .= "Name: ";
        $Body .= $name ;
        $Body .= "\n";
        $Body .= "Email: ";
        $Body .= $email;
        $Body .= "\n";
        $Body .= "Phone: ";
        $Body .= $phone;
        $Body .= "\n";
        $Body .= "Details: ";
        $Body .= $details;
        $Body .= "\n";
        $Body .= "\n";
        $Body .= "\n";
        $Body .= "This is message sent from Contistahl Group Landing Page";

        $Subject = "Contistahl Group Landing Page Contact Form Submission";
 
        // send email 
        if(str_replace(' ', '', $name) != "" && str_replace(' ', '', $email)  != "" && str_replace(' ', '', $phone) != "" ){
            $data['success'] = mail($EmailTo, $Subject, $Body, $EmailFrom);
        }else{
            $data['success'] = "false";
        }

        // redirect to success page 
       if ($data['success'] ){
            //echo json_encode($data);
            print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.html\">";
       }
       else{
            // $data["success"] = $success  ;
            // echo json_encode($data);
            print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
       }
?>