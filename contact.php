<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $headers = 'From: Contistahl Group Website <contistahl@lp-quadsolutions.com> ' . "\r\n" .
    'Reply-To: contistahl@lp-quadsolutions.com ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $EmailTo = "leads@lp-quadsolutions.com";
    $Body = "";
    $Body .= "Name: ";
    $Body .= $name;
    $Body .= "\n";
    $Body .= "Phone: ";
    $Body .= $phone;
    $Body .= "\n";
    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "\n";
    $Body .= "Message: ";
    $Body .= $message;
    $Body .= "\n";
    $Body .= "\n";
    $Body .= "\n";
    $Body .= "This Is Message Sent From Contistahl Group)";

    $Subject = "Contact Form Submission(".$name.")";

    // send email 
    if(str_replace(' ', '', $name) != "" && str_replace(' ', '', $email)  != "" && str_replace(' ', '', $phone) != "" && str_replace(' ', '', $car_model) != ""){
        $data['success'] = mail($EmailTo, $Subject, $Body, $headers);
      
    }else{
        $data['success'] = "false";
    }
    // redirect to success page 
    if ($data['success']){
        //echo json_encode($data);
        print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.html\">";
    }
    else{
        // $data["success"] = $success  ;
        // echo json_encode($data);
        print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
    }