<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Vieea Wedding</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Vieea Wedding</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Produk</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Profile</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <style>
        #wa {
            position: fixed;
            z-index: 1000;
        }
        .wa__btn_popup {
            position: fixed;
            right: 73px;
            bottom: 65px;
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .wa__btn_popup_txt {
            display: block;
            margin-right: 7px;
            width: 190px;
            font-size: 14px;
            font-family: Arial, sans-serif;
            background-color: #2db742;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .wa__btn_popup_txt strong {
            display: block;
            font-weight: bold;
        }
        .wa__btn_popup_icon {
            width: 48px;
            height: 48px;
            background-color: #2db742;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 24px;
        }
        .wa__popup_chat_box {
            position: fixed;
            right: 73px;
            bottom: 137px;
            display: none;
            width: 300px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }
        .wa__popup_heading {
            background: #2db742;
            padding: 10px;
            color: #fff;
        }
        .wa__popup_title {
            font-size: 18px;
            font-weight: bold;
        }
        .wa__popup_intro {
            font-size: 12px;
            color: #d9ebc6;
        }
        .wa__popup_content {
            padding: 10px;
        }
        .wa__popup_content_item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .wa__popup_avatar {
            width: 48px;
            height: 48px;
            margin-right: 10px;
        }
        .wa__popup_txt {
            font-size: 12px;
        }
        .wa__popup_powered {
            text-align: center;
            font-size: 10px;
            padding: 5px;
            background: #f9f9f9;
        }
        .wa__popup_powered a {
            color: #2db742;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id="wa" class="wa__widget_container">
        <div class="wa__btn_popup" onclick="togglePopup()">
            <div class="wa__btn_popup_txt">
                More Information & Booking?<br>
                <strong>Chat with us</strong>
            </div>
            <div class="wa__btn_popup_icon">💬</div>
        </div>
        <div class="wa__popup_chat_box" id="waChatBox">
            <div class="wa__popup_heading">
                <div class="wa__popup_title">Start a Conversation</div>
                <div class="wa__popup_intro">Vieea Wedding Team Ready to Help You</div>
            </div>
            <div class="wa__popup_content">
                <div class="wa__popup_notice">The team typically replies in a few minutes.</div>
                <div class="wa__popup_content_list">
                    <div class="wa__popup_content_item">
                        <a href="https://api.whatsapp.com/send?phone=6288247051578&text=Halo Vieea Wedding, saya sedang membaca info di Website Vieea Wedding" target="_blank">
                            <div class="wa__popup_avatar">
                                <img src="https://via.placeholder.com/48" alt="Avatar" style="border-radius: 50%;">
                            </div>
                            <div class="wa__popup_txt">
                                <div class="wa__member_name">Admin Digda</div>
                                <div class="wa__member_duty">Digda</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="wa__popup_powered">
                Powered by <a href="https://ninjateam.org/whatsapp-chat-wordpress/">NinjaTeam</a>
            </div>
        </div>
    </div>

    <script>
        function togglePopup() {
            const chatBox = document.getElementById('waChatBox');
            chatBox.style.display = chatBox.style.display === 'block' ? 'none' : 'block';
        }
    </script>


        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Vieea Wedding</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Intinya ini sebua website wedding organizer</h2>
                        <a class="btn btn-primary" href="#about">Get Started</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Produk-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Built with Bootstrap 5</h2>
                        <p class="text-white-50">
                            Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
                            <a href="https://startbootstrap.com/theme/grayscale/">the preview page.</a>
                            The theme is open source, and you can use it for any purpose, personal or commercial.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="..." />
            </div>
        </section>
        <!-- About-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured About Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Shoreline</h4>
                            <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                        </div>
                    </div>
                </div>
                <!-- About One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Misty</h4>
                                    <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Mountains</h4>
                                    <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Alamat</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Jl Kh Ahmad Nawawi rt02/rw01, Pelaihari, Kalimantan Selatan, Indonesia 70812</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-brands fa-instagram text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Instagram</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">@makeupbyvieaa</a></div>
                                <div class="small text-black-50"><a href="#!">@vieadekorasi</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-brands fa-tiktok text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">TikTok</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">@makeupbyvieaa</a></div>
                                <div class="small text-black-50"><a href="#!">@vieadekorasi</a></div>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Vieaa Wedding 2024</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
