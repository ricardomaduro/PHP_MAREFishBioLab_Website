<?php

session_start();

if (isset($_SESSION['comment'])) {
	$comment = $_SESSION['comment'];
}
else { 
	$comment = "empty";
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
            <div class="section" style="padding-bottom:250px; padding-top:50px">
                <div class="container contentContainer" id="topContainer">
                    <div class="divContact" style="margin-bottom:10px">
                        <h2>Your message has been sent! </h2>
                        <br>
                        	<br><h5>Comment:</h5>
                        	<div class="alert alert-success">
                        	<?php echo $comment; ?></div>
                        	<br>
                        	<h2>Thank you!</h2>
                    </div>
                </div>
            </div>
            <div class="section">
            </div>
            
            <?php include 'footer.php'; ?>
    </body>
    <script>
        /*$("#logo").hover(function() {$( this ).fadeOut( 200 ); $( this ).fadeIn( 400 );},function(){});*/
    </script>
</html>