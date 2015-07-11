if (isset($_POST["team_send_email_address"])) {  
        $destination=$_POST["team_send_email_address"]; 

        $destination_address="ricardo.s.maduro@gmail.com";
        $destination_name = "Email us";

        switch ($destination)
        {
            case 'leonel':
                $destination_address = 'leonel@abc.pt';
                $destination_name = "Leonel Gordo";
            break;

            case 'ana':
                $destination_address = 'rsm@altitude.com';
                $destination_name = "Ana Neves";
            break;

            case 'rafaela':
                $destination_address = 'rsm@altitude.com';
                $destination_name = "Rafaela Bairros Paiva";
            break;

            case 'vera':
                $destination_address = 'rsm@altitude.com';
                $destination_name = "Vera Sequeira";
            break;

            case 'catarina':
                $destination_address = 'rsm@altitude.com';
                $destination_name = "Catarina Vendrell";
            break;

            case 'anarita':
                $destination_address = 'rsm@altitude.com';
                $destination_name = "Ana Rita vieira";
            break;
        }
        $title = "<h1>Email to " . $destination_name . "</h1><br><p class='lead'>Please get in touch - I'll get back to you as soon as I can.</p>";
    }
else {
    $destination="default";
    $destination_address="ricardo.s.maduro@gmail.com";
    $title = "<h1>Email us</h1><br><p class='lead'>Please get in touch - We'll get back to you as soon as we can.</p>";
}

if ($_POST["submit"]) { 

    $title = $_POST['title'];
    $destination_address = $_POST['destination_address'];

    if (!$_POST['name']) {  
        $error="<br />Please enter your name";  
    }   
            
    if (!$_POST['email']) { 
        $error.="<br />Please enter your email address";    
    }   
            
    if (!$_POST['comment']) {   
        $error.="<br />Please enter a comment";         
    }   
            
    if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {  
        $error.="<br />Please enter a valid email address"; 
    }   
            
    if ($error) {   
    
        $result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';   
    } else {    
    
        if (mail($destination_address, "Email/comment from mare fisheries biology laboratory website!", 

        "Name: ".$_POST['name']."   
    
        Email: ".$_POST['email']."  
    
        Comment: ".$_POST['comment'])) {    
    
        $result='<div class="alert alert-success"><strong>Thank you!</strong> We\'ll be in touch.</div>';    
    
        } else {    
    
            $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';    
        }       
    }   
}   