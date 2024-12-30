<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Veiaa Wedding</title>
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
                <a class="navbar-brand" href="#page-top">Veiaa Wedding</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#product">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#profile">Profile</a></li>
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
    </style>
</head>
<body>
    <div id="wa" class="wa__widget_container">
        <div class="wa__btn_popup" onclick="sendWhatsAppMessage()">
            <div class="wa__btn_popup_txt">
                Butuh informasi dan pemesanan?<br>
                <strong>Hubungi kami!</strong>
            </div>
            <div class="wa__btn_popup_icon"><i class="fas fa-brands fa-whatsapp"></i></div>
        </div>
    </div>

    <script>
        async function sendWhatsAppMessage() {
            try {
                const response = await fetch('/send-whatsapp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        phone: '6288247051578', // Nomor WhatsApp tujuan
                        message: 'Halo, ini adalah pesan dari widget WhatsApp!' // Pesan yang dikirim
                    })
                });


                const result = await response.json();

                if (response.ok) {
                    alert('Pesan berhasil dikirim: ' + result.message);
                } else {
                    alert('Gagal mengirim pesan: ' + result.error);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengirim pesan.');
            }
        }
    </script>
</body>


        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Veiaa Wedding</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">"Merangkai Momen, Mengukir Kenangan."</h2>
                        <a class="btn btn-primary" href="#product">Mulai Jelajah</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Produk-->
        <section class="about-section text-center" id="product">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <h4 class="text-uppercase m-0">Paket 1</h4>
                                <div data-ads-page="1" class="card" data-v-bdf929ba="">
                                    <div class="card__thumbnail" data-v-bdf929ba="">
                                        <img src="assets/img/produk-1.png" width="100%" >
                                        <div class="small text-black-50">photo by veiaa wedding</a></div>
                                        <h4>IDR 20,500,000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <h4 class="text-uppercase m-0">Paket 2</h4>
                                <div data-ads-page="1" class="card" data-v-bdf929ba="">
                                    <div class="card__thumbnail" data-v-bdf929ba="">
                                        <img src="assets/img/produk-2.jpeg" width="100%" >
                                        <div class="small text-black-50">photo by veiaa wedding</a></div>
                                        <h4>IDR 30,000,000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <h4 class="text-uppercase m-0">Paket 3</h4>
                                <div data-ads-page="1" class="card" data-v-bdf929ba="">
                                    <div class="card__thumbnail" data-v-bdf929ba="">
                                        <img src="assets/img/produk-3.jpg" width="100%" >
                                        <div class="small text-black-50">photo by veiaa wedding</a></div>
                                        <h4>IDR 40,500,000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <img class="img-fluid" src="assets/img/wedding-3.png" alt="..." />
            </div>
        </section>
        <!-- About-->
        <section class="projects-section bg-light" id="about">
            <div class="container px-4 px-lg-5">
                <!-- Featured About Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/wedding-1.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Tentang Kami</h4>
                            <p class="text-black-50 mb-0">Kami adalah Wedding Organizer profesional yang berkomitmen untuk menghadirkan pernikahan impian Anda. Dengan perencanaan yang detail, tim berpengalaman, dan layanan penuh dedikasi, kami memastikan setiap momen spesial Anda menjadi kenangan tak terlupakan. Dari konsep hingga hari H, kami hadir untuk mewujudkan cerita cinta Anda dengan sempurna.</p>
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

        <!-- Contact-->
        <section class="contact-section bg-black" id="contact">
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
                                <div class="small text-black-50"><a href="https://www.instagram.com/makeupbyveiaa/">@makeupbyveiaa</a></div>
                                <div class="small text-black-50"><a href="https://www.instagram.com/veiadekorasi/">@veiadekorasi</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-brands fa-tiktok text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">TikTok</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="https://www.tiktok.com/@veiadekorasi?_t=8seCVHsSt0B&_r=1">@makeupveiaa</a></div>
                                <div class="small text-black-50"><a href="https://www.tiktok.com/@makeupbyveiaa?_t=8seCTIVSlww&_r=1">@veiadekorasi</a></div>
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
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
