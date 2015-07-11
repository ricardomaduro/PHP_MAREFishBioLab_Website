<?php 

if (isset($_POST["team_send_email_address"])) {  
        $destination=$_POST["team_send_email_address"]; 

        $destination_address="ricardo.s.maduro@gmail.com";
        $destination_name = "Email us";

        switch ($destination)
        {
            case 'leonel':
                $destination_address = 'lsgordo@fc.ul.pt';
                $destination_name = "Leonel Gordo";
            break;

            case 'ana':
                $destination_address = 'amneves@fc.ul.pt';
                $destination_name = "Ana Neves";
            break;

            case 'rafaela':
                $destination_address = 'rcpaiva@fc.ul.pt';
                $destination_name = "Rafaela Barros Paiva";
            break;

            case 'vera':
                $destination_address = 'vlsequeira@fc.ul.pt';
                $destination_name = "Vera Sequeira";
            break;

            case 'catarina':
                $destination_address = 'catarinavendrell@gmail.com​';
                $destination_name = "Catarina Vendrell";
            break;

            case 'anarita':
                $destination_address = 'arivieira@fc.ul.pt';
                $destination_name = "Ana Rita Vieira";
            break;
        }
        $title = "<h1 class='text-danger'>Email to " . $destination_name . "</h1><br><p class='lead'>Please get in touch - I'll get back to you as soon as I can.</p>";
    }
else {
    $destination="default";
    $destination_address="ricardo.s.maduro@gmail.com";
    $title = "<h1 class='text-danger'>Email us</h1><br><p class='lead'>Please get in touch - We'll get back to you as soon as we can.</p>";
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
    
        if (mail($destination_address, "Email/comment from mare fisheries website!", 

        "Name: ".$_POST['name']."\nEmail: ".$_POST['email']."\nComment: ".$_POST['comment'],'From: "Mare Fisheries"')) {  

        session_start();
        $_SESSION["comment"] = $_POST['comment'];
        header("location:emailsent.php");

        #$result='<div class="alert alert-success"><strong>Thank you!</strong> We\'ll be in touch.</div>';    
    
        } else {    
    
            $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';    
        }       
    }   
}   
    
?>

<!DOCTYPE html>
<html>
    
        <head>
            <?php include 'header.php'?>
        </head>
            <body>
            <?php include 'menu.php' ?>
            <hr style="margin:0px">
            <div class="section">
                <div class="container contentContainer" id="topContainer">
                    <div class="divContact">
                        <div class="emailForm">
                            <?php echo $title;?>
                            <?php echo $result;?>
                            <form method="post">
                                <div class="form-group">
                                    <label for="name">Your Name:</label>
                                    <input type="text" name="name" class="form-control"
                                    placeholder="Your Name" value="<?php echo $_POST['name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Your Email:</label>
                                    <input type="email" name="email" class="form-control"
                                    placeholder="Your Email" value="<?php echo $_POST['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Your Comment:</label>
                                    <textarea class="form-control" name="comment" rows="10"><?php echo $_POST[ 'comment']; ?></textarea>
                                </div>
                                <input type="hidden" name="title" value="<?php echo $title;?>">
                                <input type="hidden" name="destination_address" value="<?php echo $destination_address;?>">
                                <input type="submit" name="submit" class="btn btn-lg btn-danger" value="Send email">
                            </form>
                                <br/>
                                <br/>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'footer.php'; ?>
    </body>
    <script>
        /*$("#logo").hover(function() {$( this ).fadeOut( 200 ); $( this ).fadeIn( 400 );},function(){});*/
    </script>
</html>