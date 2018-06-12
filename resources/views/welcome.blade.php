<!doctype html>
<html>
    <head>
        <title>Medscriptr :: Creating a Connected Health System...</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--fonts-->
            <link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
        <!--fonts-->
        <!--owlcss-->
        <link href="{{URL::asset('css/owl.carousel.css')}}" rel="stylesheet">
        <!--bootstrap-->
            <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <!--coustom css-->
            <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
        <!--default-js-->
            <script src="{{URL::asset('js/jquery-2.1.4.min.js')}}"></script>
        <!--bootstrap-js-->
            <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <!--script-->
            <script type="text/javascript" src="{{URL::asset('js/move-top.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('js/easing.js')}}"></script>
        <!--script-->
    </head>
    <body>
        <div class="header" id="home">
            <div class="header-top">
                <div class="container">
                    <p>Creating a Connected Health System...</p>
                </div>
            </div>
            <div class="header_nav" id="home">
                <nav class="navbar navbar-default chn-gd">
                    <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo-st" href="index.html">Medscriptr</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <a href="#home" class="scroll">
                        <span class="glyphicon glyphicon-home icn_pos hm" aria-hidden="true"></span><br>
                        Home
                        </a>
                        </li>
                        <!---->
                        <li>
                        <a href="#features" class="scroll">
                        <span class="glyphicon glyphicon-cog icn_pos" aria-hidden="true"></span><br>
                        Services
                        </a>
                        </li>
                        <!---->
                        <li>
                        <a href="#doc" class="scroll">
                        <span class="glyphicon glyphicon-briefcase icn_pos" aria-hidden="true"></span><br>
                        Doctors
                        </a>
                        </li>
                        <!---->
                        <li>
                        <a href="#acheive" class="scroll">
                        <span class="glyphicon glyphicon-thumbs-up icn_pos hm2" aria-hidden="true"></span><br>
                        Achivements
                        </a>
                        </li>
                        <!---->
                        <li>    
                        <a href="#contact" class="scroll">
                        <span class="glyphicon glyphicon-envelope icn_pos" aria-hidden="true"></span><br>
                        Contact
                        </a>
                        </li>
                        <!---->
                        <li style="border-right: none;">
                        <a href="{{ url('/login') }}" >
                        <span class="glyphicon glyphicon-lock icn_pos " aria-hidden="true"></span>
                        Admin
                        </a>
                        </li>
                        <!--script-->
                        <script type="text/javascript">
                        jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){     
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                        });
                        });
                        </script>
                        <!--script-->
                    </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="clearfix"></div>
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
            <div class="header_banner">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active  image-wid">
                    <img src="{{URL::asset('images/1a.jpg')}}" alt="..." class="img-responsive">
                    <div class="carousel-caption">
                        <h3>Medical Check Up Instruments</h3>
                        <p>State of the art equipments and medical devices</p>
                        <button type="button" class="btn btn-info sld">Read more</button>
                    </div>
                    </div>
                    <div class="item  image-wid">
                    <img src="{{URL::asset('images/1d.jpg')}}" alt="..." class="img-responsive">
                    <div class="carousel-caption">
                        <h3>Drugs For Required Dose</h3>
                        <p>High standard pharmaceutical expertise.</p>
                        <button type="button" class="btn btn-info sld">Read more</button>
                    </div>
                    </div>
                    <div class="item  image-wid">
                    <img src="{{URL::asset('images/1g.jpg')}}" alt="..." class="img-responsive">
                    <div class="carousel-caption">
                        <h3>Doctors Supervision</h3>
                        <p>Quality supervision and care</p>
                        <button type="button" class="btn btn-info sld">Read more</button>
                    </div>
                    </div>
                    <div class="item  image-wid">
                    <img src="{{URL::asset('images/1l.jpg')}}" alt="..." class="img-responsive">
                    <div class="carousel-caption">
                        <h3>Viral Treatments</h3>
                        <p>Medical care supported by comprehensive research and education</p>
                        <button type="button" class="btn btn-info sld">Read more</button>
                    </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
        </div>
        <div class="style-label">
            <div class="container">
                <ul class="box-shadow effect2">
                    <li class="col-md-3">
                        <span class="glyphicon glyphicon-leaf flt" aria-hidden="true"></span>
                        <div class="label-text">
                        <h3>Excellence</h3>
                        <p>Excellence in specialized medical care supported by comprehensive research and education</p>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <span class="glyphicon glyphicon-heart-empty flt" aria-hidden="true"></span>
                        <div class="label-text">
                        <h3>Affordable</h3>
                        <p>Provide efficient access to affordable medical care</p>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <span class="glyphicon glyphicon-signal flt" aria-hidden="true"></span>
                        <div class="label-text">
                        <h3>Quality</h3>
                        <p>We maintain the highest standards and achieve them by continually measuring and improving our outcomes.</p>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <span class="glyphicon glyphicon-knight flt" aria-hidden="true"></span>
                        <div class="label-text">
                        <h3>Integrity</h3>
                        <p>We adhere to high moral principles and professional standards by a commitment to honesty.</p>
                        </div>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="service_features" id="features">
                <div class="container">
                    <div class="col-md-4 ser-fet">
                        <h3>Our Services</h3>
                        <p>We are good at</p>
                        <span class="line"></span>
                        <div class="services">
                            <div class="menu-grid">
                                <ul class="menu_drop">
                                    <li class="item1 plus"><a href="#" class="active">Therapy<span class="caret"></span></a>
                                        <ul>
                                            <li class="subitem1">
                                                <p>Medical therapy describes taking medications for treatment of a condition like heart disease. Medical therapy is almost always recommended - in combination with a nutritious diet, exercise and no smoking -  to improve your heart health and quality of life. </p><br>
                                                <p>Even when heart patients undergo angioplasty or surgery, they must continue to take medicines and make lifestyle changes.</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="item3 plus"><a href="#" class="active">Orthopedic<span class="caret"></span></a>
                                        <ul>
                                            <li class="subitem1">
                                                <p>Orthopaedics is the medical specialty that focuses on injuries and diseases of your body's musculoskeletal system. </p><br>
                                                <p>This complex system, which includes your bones, joints, ligaments, tendons, muscles, and nerves, allows you to move, work, and be active.</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="item4 plus"><a href="#" class="active">Heart specialist<span class="caret"></span></a>
                                        <ul>
                                            <li class="subitem1">
                                                <p> The field includes medical diagnosis and treatment of congenital heart defects, coronary artery disease, heart failure, valvular heart disease and electrophysiology.</p><br>
                                                
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="item4 plus"><a href="#" class="active">kidney & Liver<span class="caret"></span></a>
                                        <ul>
                                            <li class="subitem1">
                                                <p>We have dozens of different liver cleansing programs are available. Despite the range of options, they all boil down to basic diet changes and some health-enhancing supplements. </p><br>
                                                <p>More radical cleanses, such as coffee enemas; master cleanses using cayenne pepper, lemon juice, and maple syrup; and liver flushes using olive oil and Epsom salts are definitely not recommended, because they could land people in hospital emergency rooms.</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="item5 plus"><a href="#" class="active">Cancer Cell<span class="caret"></span></a>
                                        <ul>
                                            <li class="subitem1">
                                                <p>Our cancer cell treatment uses a cream based formula that destroys toxic cells produced by illness.</p><br>
                                                <p>This US patented science eradicates abnormal cells with the help of the body’s immune system, leaving behind only healthy cells. This cancer cell treatment does not cure disease, it destroys the deadly cells that result from the disease.</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="item6 plus"><a href="#" class="active">Psychiatric Cell<span class="caret"></span></a>
                                        <ul>
                                            <li class="subitem1">
                                                <p>We are developing translational projects merging basic research with clinical research to fight psychiatric disorders. </p><br>
                                                <p>We are also developing cellular models of human neuropsychiatric disorders using stem cells derived from patients</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- script for tabs -->
                                <script type="text/javascript">
                                    $(function() {
                                        var menu_ul = $('.menu_drop > li > ul'),
                                            menu_a  = $('.menu_drop > li > a');
                                                menu_ul.hide();
                                                    menu_a.click(function(e) {
                                                    e.preventDefault();
                                                    if(!$(this).hasClass('active')) {
                                                    menu_a.removeClass('active');
                                                    menu_ul.filter(':visible').slideUp('normal');
                                                    $(this).addClass('active').next().stop(true,true).slideDown('normal');
                                                    } else {
                                                    $(this).removeClass('active');
                                                $(this).next().stop(true,true).slideUp('normal');
                                            }
                                        });
                                    });
                                </script>
                            <!-- script for tabs -->
                        </div>
                        </div>
                    </div>
                    <div class="col-md-8 ser-fet">
                        <h3>Our Features</h3>
                        <p>Our Values</p>
                        <span class="line"></span>
                        <div class="features">
                            <div class="col-md-6 fet-pad">
                                <div class="div-margin">
                                    <div class="col-md-3 fet-pad wid">
                                        <span class="glyphicon glyphicon-user aim-icn" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-9 fet-pad wid2">
                                        <h4>Patient Profile</h4>
                                        <p>We keep an active record to manage your health information and your medical / health history.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="div-margin">
                                    <div class="col-md-3 fet-pad wid">
                                        <span class="glyphicon glyphicon-screenshot aim-icn" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-9 fet-pad wid2">
                                        <h4>Advanced Equipment</h4>
                                        <p> We welcome change, encourage invention and continually seek better, more efficient ways to achieve our goals</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="div-margin">
                                    <div class="col-md-3 fet-pad wid">
                                        <span class="glyphicon glyphicon-ok aim-icn" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-9 fet-pad wid2">
                                        <h4>Operations success</h4>
                                        <p>Every aspect of your care is coordinated and teams of experts work together to provide exactly the care you need.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-6 fet-pad">
                                <div class="div-margin">
                                    <div class="col-md-3 fet-pad wid">
                                        <span class="glyphicon glyphicon-piggy-bank aim-icn" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-9 fet-pad wid2">
                                        <h4>Health Insurance</h4>
                                        <p>Our health insurance policies will cover expenses related to pre and post hospitalization, day care and ambulance charges among others</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="div-margin">
                                    <div class="col-md-3 fet-pad wid">
                                        <span class="glyphicon glyphicon-education aim-icn" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-9 fet-pad wid2">
                                        <h4>Recognised Doctors</h4>
                                        <p>Our highly specialized experts are deeply experienced in treating rare and complex conditions.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="div-margin">
                                    <div class="col-md-3 fet-pad wid">
                                        <span class="glyphicon glyphicon-heart aim-icn" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-9 fet-pad wid2">
                                        <h4>Satisfaction</h4>
                                        <p>We demonstrate our commitment to world-class care by providing a caring and supportive environment for our patients.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        <div class="acheivments" id="acheive">
            <div class="container top">
                    <h3>Acheivments</h3>
                    <!--script-->
                    <link rel="stylesheet" href="css/swipebox.css">
                    <script src="js/jquery.swipebox.min.js"></script>
                    <script type="text/javascript">
                                jQuery(function($) {
                                    $(".swipebox").swipebox();
                                });
                    </script>
                    <!--script-->
                    <div class="gallery-grids">
                        <ul>
                            <li class="col-md-4 gal-alt">
                                <a href="{{URL::asset('images/1i.jpg')}}" class="swipebox">
                                <img src="{{URL::asset('images/1i.jpg')}}" alt="/"/>
                                    <span class="hide-box">
                                        <h4>Neutron collider Microscope</h4>
                                        
                                    </span>
                            </li></a>
                            <li class="col-md-4 gal-alt">
                                <a href="{{URL::asset('images/1p.jpg')}}" class="swipebox">
                                <img src="images/1p.jpg" alt="/"/>
                                    <span class="hide-box">
                                        <h4>German made Ak-2000 Ct-Scan</h4>
                                        
                                    </span>
                            </li></a>
                            <li class="col-md-4 gal-alt">
                                <a href="{{URL::asset('images/1n.jpg')}}" class="swipebox">
                                <img src="{{URL::asset('images/1n.jpg')}}" alt="/" />
                                <span class="hide-box">
                                        <h4>Symbiosis Laser T-300</h4>
                                        
                                </span>
                            </li></a>
                            <li class="col-md-4 gal-alt">
                                <a href="{{URL::asset('images/1k.jpg')}}" class="swipebox">
                                <img src="images/1k.jpg" alt="/" />
                                <span class="hide-box">
                                        <h4>Angeo Blast</h4>
                                        
                                </span> 
                            </li></a>
                            <li class="col-md-4 gal-alt">
                                <a href="{{URL::asset('images/1o.jpg')}}" class="swipebox">
                                <img src="{{URL::asset('images/1o.jpg')}}" alt="/" />
                                <span class="hide-box">
                                        <h4>Spacious Operatio Theater</h4>
                                        
                                </span>
                            </li></a>
                            <li class="col-md-4 gal-alt">
                                <a href="{{URL::asset('images/1f.jpg')}}" class="swipebox">
                                <img src="{{URL::asset('images/1f.jpg')}}" alt="/"/>
                                <span class="hide-box">
                                        <h4>Latest Ventilators</h4>
                                        
                                </span>
                            </li></a>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
            </div>
        </div>
        </div>
        <div class="doctor-port" id="doc">
            <h3>Doctors</h3>
            <!-- requried-jsfiles-for owl -->
            <script src="js/owl.carousel.js"></script>
            <script>
                $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                        items : 4,
                        lazyLoad : true,
                        autoPlay : true,
                        pagination : false,
                    });
                });
            </script>
            <!-- //requried-jsfiles-for owl -->
            <div class="container">
                <div id="owl-demo" class="owl-carousel text-center">
                    <div class="item g1">
                        <img class="lazyOwl img-responsive" data-src="{{URL::asset('images/a2.jpg')}}" alt="name">
                        <div class="caption">
                        <h4>Dr. Sharon Clinton</h4>
                        <span>Obstetrics & Gynecology Specialist </span>
                        </div>
                    </div>
                    <div class="item g1">
                        <img class="lazyOwl img-responsive" data-src="{{URL::asset('images/a3.png')}}" alt="name">
                        <div class="caption">
                        <h4>Dr. Charles Kizito </h4>
                        <span>Head of Family Medicine, Geriatric Medicine & Gerontology. </span>
                        </div>
                    </div>
                    <div class="item g1">
                        <img class="lazyOwl img-responsive" data-src="{{URL::asset('images/a5.jpg')}}" alt="name">
                        <div class="caption">
                        <h4>Dr. Bunmi Shonaike</h4>
                        <span>Dermatologist </span>
                        </div>
                    </div>
                    <div class="item g1">
                        <img class="lazyOwl img-responsive" data-src="{{URL::asset('images/a1.jpg')}}" alt="name">
                        <div class="caption">
                        <h4>Dr. Seyi Lawal</h4>
                        <span>Neurological Surgeon </span>
                        </div>
                    </div>
                    <div class="item g1">
                        <img class="lazyOwl img-responsive" data-src="{{URL::asset('images/a4.jpg')}}" alt="name">
                        <div class="caption">
                        <h4>Dr. Richard Harrison</h4>
                        <span>Emergency Medicine Specialist</span>
                        </div>
                    </div>
                    <div class="item g1">
                        <img class="lazyOwl img-responsive" data-src="{{URL::asset('images/a6.png')}}" alt="name">
                        <div class="caption ">
                        <h4>Dr. Seyi Abogunrin</h4>
                        <span>Anesthesiology & Perioperative Care.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-label" id="contact">
                <div class="col-md-4 text-label">
                    <p>Follow, Like, Share us on Social.</p>
                </div>
                    <div class="col-md-8 social-icn">
                        <ul>
                            <li>
                                <a href="#" class="face"></a>
                            </li>
                            <li>
                                <a href="#" class="twit"></a>
                            </li>
                            <li>
                                <a href="#" class="gplus"></a>
                            </li>
                            <li>
                                <a href="#" class="inst"></a>
                            </li>
                            <li>
                                <a href="#" class="drib"></a>
                            </li>
                            <li>
                                <a href="#" class="in"></a>
                            </li>
                        </ul>
                    </div>
                <div class="clearfix"></div>
        </div>
        <div class="contact">
            <div class="map"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=lagos&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
            <div class="contact-form">
                <div class="container">
                    <div class="col-md-3 pd adress">
                        <h3>address</h3>
                        <ul>
                            <li>Lagos</li>
                            <li>Nigeria</li>
                            <li>55, Cannal Street</li>
                            <li>lsr no, 1/1/295/1</li
                        </ul>
                    </div>
                    <div class="col-md-3 pd news-letter">
                        <h3>newsletter</h3>
                        <p>Enter your e-mail to subscribe our newsletter</p>
                        <form>
                        <input class="mail" type="text" name="email" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}"> 
                        <button type="button" class="btn btn-info sub1">Go</button>
                        </form>
                    </div>
                    <div class="col-md-6 pd contact-us">
                        <h3>contact us</h3>
                        <form>
                        <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter your text here...</textarea>
                        <br>
                        <input class="name" type="text" name="name" value="Your name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                        <input class="nuber" type="text" name="Phone number" value="Phone Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Number';}">
                        <button type="button" class="btn btn-info sub1">Send</button>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer-text">
                <h3><a href="index.html">Medscriptr</a></h3>
                <p class="text-center">&#169; 2018</p>
                </div>
            </div>
        </div>
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </body>
</html>