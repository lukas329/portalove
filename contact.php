<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];
$menu = $db->getMenu();
$positions = $db->getEmployeePositions();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Oriented - Contact Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" /> <!-- https://fonts.google.com/ -->    
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-business-oriented.css" rel="stylesheet" />
</head>
<!--

TemplateMo 549 Business Oriented

https://templatemo.com/tm-549-business-oriented

-->
<body>
    <div id="parallax-1" class="parallax-window" data-parallax="scroll" data-image-src="img/biz-oriented-header.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tm-logo">
                        <i class="fas fa-industry fa-5x mr-5"></i>
                        <span class="text-uppercase tm-logo-text">mITness</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-nav-container-outer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbar-nav"
                                aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="dark-blue-text"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav ml-auto">
                                <?php
                                foreach ($menu as $item){
                                    echo '
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="'.$item['href'].'">'.$item['name'].'</a>
                                </li>
                                ';
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-7 mb-25">
        <div class="row">
            <div class="col-12">
                <section class="tm-contact-form-box mx-auto mb-7">
                    <h3 class="tm-title-gray mb-4 text-center">Kontaktujte nás</h3>
                    <hr class="mb-8 tm-hr tm-hr-s mx-auto">
                    <form id="contact-form" action="send_message.php" method="POST" class="tm-contact-form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control rounded-0" placeholder="Meno" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0" placeholder="email" required />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="contact-select" name="subject">
                                <?php
                                foreach ($positions as $position){
                                    echo '<option>'.$position['position'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Správa" required=></textarea>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" name="submit_message" class="btn btn-primary rounded-0 d-block mx-auto">Odoslať správu</button>
                        </div>
                    </form>
                </section>
                <section class="tm-address-box mx-auto">
                    <h3 class="tm-title-gray mb-4 text-center">Our Address</h3>
                    <hr class="mb-5 tm-hr tm-hr-s mx-auto">
                    <p class="mb-8 mx-auto text-center tm-address-text">Ut aliquam impoerdiet velit quis imperdiet. Aliquam facilisis commodo tristique. Nam feugiat, sem vitae mollis auctor, est dolor suscipit massa, vitae consectetur erat elit vel dui.</p>
                    <div class="mapouter mb-60">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="520" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                    <p class="mx-auto text-center tm-address-text">Aenean id posuere dui. Sed luctus luctus quam at blanbit. Aenean molestie lacinia mauris sed vestibulum. Praesent laoreet commodo sem eget fermentum.</p>
                </section>
            </div>
        </div>
    </div>

    <footer class="container-fluid">
        <div class="row">
            <p class="col-lg-9 col-md-8 mb-5 mb-md-0">
                Copyright &copy; 2020
                <span class="tm-text-primary">Business Oriented</span>
                - designed by <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-link-primary">TemplateMo</a>
            </p>
            <div class="col-lg-3 col-md-4 text-right">
                <a rel="nofollow" target="_blank" href="https://fb.com/templatemo" class="tm-social-link">
                    <i class="fab fa-facebook fa-2x tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter fa-2x tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin fa-2x tm-social-icon"></i>
                </a>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script> <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="js/tooplate-script.js"></script>
    <script>
        $(document).ready(function () {
            $('#parallax-1').parallax({ imageSrc: 'img/biz-oriented-header.jpg' });
        });
    </script>
</body>
</html>