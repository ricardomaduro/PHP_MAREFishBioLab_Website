<!DOCTYPE html>
<html>
    
    <head>
        <?php include 'header.php'?>
        <style>
            .popover {
                max-width: 50%;                                             
            }
        </style>

    </head>
    
    <body>
        <?php include 'menu.php' ?>
        <hr style="margin:0px">
        <div class="section text-left">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center text-danger">Team</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="team_crop.jpg" class="center-block img-responsive img-thumbnail border-shadow">
                    </div>
                </div>
            </div>
        </div>
        <div class="section text-left">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center" id="team_line_1">
                        <img src="Leonel.jpg" class="center-block img-circle img-responsive border-shadow">
                        <h2>Leonel Gordo</h2>
                        <form action="contact.php" method="post">
                            <input type="hidden" name="team_send_email_address" value="leonel">
                            <br>
                            <button class="btn btn-default btn-xs" type="submit" contenteditable="true">
                                <i class="fa fa-envelope fa-fw text-info"></i>lsgordo@fc.ul.pt</button>
                        </form>
                        <br>
                        <!--<a href="#" onclick="SendAjaxEmail('leonel');">Send email</a>-->
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#team_line_1" id="popover" class="movement">
                            <img src="Rafa.jpg" class="center-block img-circle img-responsive border-shadow" 
                            data-toggle="popover"
                            data-placement="bottom" 
                            title="<h4>Rafaela Carla Viseu Barros Paiva</h4>"
                            data-content="
                            <h4>Research interests</h4>
                            <p>Reproductive strategies and reproductive potential; Determination of age
                            and growth parameters (determined by reading the second dorsal spine of
                            sharks and whole sagittal otoliths of bony fishes); Food ecology; Histological
                            technics; Risk and benefit analysis associated to seafood consumption;
                            Fisheries management.</p>
                            <h4>Education</h4>
                            <ul>
                            <li>PhD Student, 2012-until now</li>
                            <li>Master degree at Faculdade de Ciências da Universidade de Lisboa, 2007-2009</li>
                            "></a>
                        <h2>Rafaela Barros Paiva</h2>
                        <h5>PhD Student</h5>
                        <form action="contact.php" method="post" class="text-center">
                            <input type="hidden" name="team_send_email_address" value="rafaela">
                            <br>
                            <button class="btn btn-default btn-xs" type="submit">
                                <i class="fa fa-envelope fa-fw text-info"></i>&nbsp;rcpaiva@fc.ul.pt</button>
                            <a class="btn btn-default btn-xs img-responsive"
                            target="_blank" href="http://orcid.org/0000-0002-7205-9373"><img src="orcid.png" style="width:25%"> ORCID</a>
                        </form>
                        <br>
                    </div>
                    <div class="col-md-4 text-center">
                       

                        <a href="#team_line_1" id="popover">
                            <img src="ana.jpg" class="center-block img-circle img-responsive border-shadow" 
                            data-toggle="popover"
                            data-placement="bottom" 
                            title="<h4>Ana Neves</h4>"
                            data-content="
                            <h4>Research interests</h4>
                            <p>Marine Biology| Fish Reproduction| Age and Growth| | Fish Dietary| Fish
                                Populations Structure| Morphometric and Shape Analysis| Stock ID</p>
                            <h4>Education</h4>
                            <ul>
                                <li>2001 | Post-Graduation in Mathematics Applied to Biological Sciences |
                                    Instituto Superior de Agronomia da Universidade de Lisboa</li>
                                <li>1998 | Degree in Biology Applied to Animal Resources – Marine Resources
                                    (pre-Bologna process) | Faculdade de Ciências da Universidade de Lisboa</li>"></a>
                        <h2>Ana Neves</h2>
                        <h5>PhD Student</h5>
                        <form action="contact.php" method="post">
                            <input type="hidden" name="team_send_email_address" value="ana">
                            <br>
                            <button class="btn btn-default btn-xs" type="submit">
                                <i class="fa fa-envelope fa-fw text-info"></i>amneves@fc.ul.pt</button>
                            <a class="btn btn-default btn-xs img-responsive"
                            target="_blank" href="http://orcid.org/0000-0003-3885-2738"><img src="orcid.png" style="width:25%"> ORCID</a>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row" id="team_line_2">
                    <div class="col-md-4 text-center">
                        <img src="catarina.jpg" class="center-block img-circle img-responsive border-shadow">
                        <h2 class="text-center">Catarina Vendrell</h2>
                        <h5>PhD Student</h5>
                        <form action="contact.php" method="post">
                            <input type="hidden" name="team_send_email_address" value="catarina">
                            <br>
                            <button class="btn btn-default btn-xs" type="submit">
                                <i class="fa fa-envelope fa-fw text-info"></i>catarinavendrell@gmail.com</button>
                        </form>
                        <br>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#team_line_2" id="popover_line_2"> <img src="vera.jpg" class="center-block img-circle img-responsive border-shadow" data-toggle="popover" data-placement="bottom" title="<h4>Vera Sequeira</h4>" data-content="
                        <h4>Research interests</h4>
                        <p>Reproductive strategies and reproductive potential | Stock structure and identification | Determination of age and growth parameters | Otolith shape analysis and body geometric morphometrics | Use of parasites as biological tags | 
RFLP genetic analysis | Fisheries management | Science communication</p>
                        <h4>Education</h4>
                            <ul>
                                <li>2011 | PhD in Sea Sciences | Faculdade de Ciências da Universidade de Lisboa</li>
                                <li>2002 | Degree in Biology Applied to Animal Resources – Marine Resources (pre-Bologna process) | Faculdade de Ciências da Universidade de Lisboa</li>
                            </ul>"></a>
                        <h2 class="text-center">Vera Sequeira</h2>
                        <h5>PhD Researcher</h5>
                        <form action="contact.php" method="post">
                            <input type="hidden" name="team_send_email_address" value="vera">
                            <br>
                            <button class="btn btn-default btn-xs" type="submit">
                                <i class="fa fa-envelope fa-fw text-info"></i>vlsequeira@fc.ul.pt</button>
                            <a class="btn btn-default btn-xs img-responsive"
                            target="_blank" href="http://orcid.org/0000-0001-7173-4982"><img src="orcid.png" style="width:25%"> ORCID</a>
                        </form>
                        <br>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#team_line_2" id="popover_line_2"> <img src="anarita.jpg" class="center-block img-circle img-responsive border-shadow" data-toggle="popover" data-placement="bottom" title="<h4>Ana Rita Vieira</h4>" data-content="
                        <h4>Research interests</h4>
                        <p>Fisheries Biology| Marine fish| Deep-sea| Age and growth| Reproductive strategies and reproductive potential| Population genetics| Stock Identification</p>
                        <h4>Education</h4>
                            <ul>
                                <li>20015| PhD in Marine Sciences| Faculdade de Ciências da Universidade de Lisboa</li>
                                <li>2007| Master in Fisheries and Aquaculture| Faculdade de Ciências da Universidade de Lisboa</li>
                                <li>2005| Degree (“Licenciatura”) in Marine Biology| Faculdade de Ciências da Universidade de Lisboa</li>
                            </ul>"></a>
                        <h2 class="text-center">Ana Rita Vieira</h2>
                        <h5>PhD Researcher                        </h5>
                        <form action="contact.php" method="post">
                            <input type="hidden" name="team_send_email_address" value="anarita">
                            <br>
                            <button class="btn btn-default btn-xs" type="submit">
                                <i class="fa fa-envelope fa-fw text-info"></i>arivieira@fc.ul.pt</button>
                                <a class="btn btn-default btn-xs img-responsive"
                            target="_blank" href="http://orcid.org/0000-0002-5640-7999"><img src="orcid.png" style="width:25%"> ORCID</a>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <script>
            /*$("#logo").hover(function() {$( this ).fadeOut( 200 ); $( this ).fadeIn( 400 );},function(){});*/
            function SendAjaxEmail(value)
            {
                data =  {'action': 'leonel'};
                $.post("send_email.php", data, function (response) {
                    window.location.href = "contact.php";
                });
            }

            $(document).ready(function(){
                $('[data-toggle="popover"]').popover({
                    html:true, 
                    container: 'body'}); 
            });

            $('body').on('click', function (e) {
                $('[data-toggle="popover"]').each(function () {
                //the 'is' for buttons that trigger popups
                //the 'has' for icons within a button that triggers a popup
                if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                    $(this).popover('hide');
                    }
                });
            });
        </script>
    </body>

</html>