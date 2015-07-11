<!DOCTYPE html>
<html>
    
    <head>
        <?php include 'header.php'; ?>
        <style>
            div.img a:hover img {
                border: 1px solid grey;
                padding: 2px;
            }
        </style>
    </head>
    
    <body>
        <?php include 'menu.php'; ?>
        
        <hr style="margin:0px">
        <div class="section text-left">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center text-danger">Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section">
            <div class="container">
                <div class="row img">
                    <div class="col-md-4">
                        <a href="gallery_1.jpg" target=_blank>
                            <img src="gallery_1.jpg" class="img-responsive img-rounded border-shadow"></a>
                        <h4>Sampling</h4>
                    </div>
                    <div class="col-md-4">
                        <a href="gallery_2.jpg" target=_blank>
                            <img src="gallery_2.jpg" class="img-responsive img-rounded border-shadow"></a>
                        <h4>Botão caudal cantarilho</h4>
                    </div>
                    <div class="col-md-4">
                        <a href="gallery_3.jpg" target=_blank>
                            <img src="gallery_3.jpg" class="img-responsive img-rounded border-shadow"></a>
                        <h4>Corte histológico de cantarilho</h4>
                    </div>
                </div>
            </div>
        </div>
                <div class="section">
            <div class="container">
                <div class="row img">
                    <div class="col-md-4">
                        <a href="gallery_4.jpg" target=_blank>
                            <img src="gallery_4.jpg" class="img-responsive img-rounded border-shadow"></a>
                        <h4>Corte histológico de hermafrodita</h4>
                    </div>
                    <div class="col-md-4">
                        <a href="gallery_5.jpg" target=_blank>
                            <img src="gallery_5.jpg" class="img-responsive img-rounded border-shadow"></a>
                        <h4>Otólito de cantarilho</h4>
                    </div>

                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>

</html>