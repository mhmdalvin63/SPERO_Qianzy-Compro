<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qianzy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/Pages.css">
    <link rel="stylesheet" href="../Css/Font.css">
  </head>
  <body>
   {{-- NAVBAR --}}
   <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar-utama">
    <div class="container">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="ms-auto gap-3 navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#header">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutus">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#project">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#event">Event</a>
          </li>
        </ul>
      </div>
    </div>
   </nav>    
   {{-- ALHIR NAVBAR --}}

   {{-- CONTENT --}}
   <div class="header" id="header">
    <img src="{{ asset('..\Images\banner-background.png') }}" alt="" class="banner-header">
    <div class="banner-desc">
        <p class="md">All About</p>
        <h1>PT. Qianzy Kreatif <br> Mediatama</h1>
    </div>
   </div>

   <div class="about-us my-5" id="aboutus">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 col-12">
                <img src="{{ asset('..\Images\image-about-us.png') }}" alt="" class="image-about-us"> 
            </div>
            <div class="col-lg-6 col-12">
                <div class="title-about-us d-lg-flex d-block justify-content-lg-start justify-content-center gap-3">
                    <p class="md mt-4 mt-lg-0 text-lg-start text-center ">OURSTORY</p>
                    <hr class="cy d-lg-none d-block">
                    <hr class="hr-1 d-lg-block d-none">
                </div>
                <h2 class="fw-bold about-text">ABOUT QIANZY</h2>
                <p class="my-2">Semakin berkembangnya dunia usaha dibidang Event Organizer, membuat setiap perusahaan bersaing untuk menjadi yang terbaik.</p>
                <p class="my-2"><span class="fw-bold">QIANZY KREATIF MEDIATAMA</span> hadir untuk memberikan kenyamanan, Ide kreatif, solusi konsep agar bisa menghasilkan sinergi untuk mensukseskan berjalan acara</p>
            </div>
        </div>
    </div>
   </div>

   <div class="visi-misi my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 px-5">
                <div class="visi mb-3 gap-2">
                    <img src="{{ asset('../Images/logo-visi.png') }}" alt="">
                    <h5 class="fw-bold">Visi</h5>
                </div>
                <p>Menjadi Event Organizer yang selalu berusaha untuk memberikan solusi ide - ide kreatif, konsep inovatif, dan bekerja profesional terhadap segala jenis kegiatan yang akan dilaksankan oleh berbagai pihak yang tertarik untuk bekerja sama dengan <span class="fw-bold">QIANZY KREATIF MEDIATAMA</span>. Di kota Jakarta dan sekitarnya secara lebih luas.</p>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5 col-12 px-5">
                <div class="visi mb-3 gap-2">
                    <img src="{{ asset('../Images/logo-visi.png') }}" alt="">
                    <h5 class="fw-bold">Misi</h5>
                </div>
                <p>Menjadi Partner yang memberikan solusi dan kenyamanan sehingga bisa bersinergi untuk kesuksesan kegiatan acara.</p>
            </div>
        </div>
    </div>
   </div>

   <div class="what-we-do my-5">
    <div class="container">
        <h3 class="cy">WHAT WE DO</h3>
        <p>PT. Qianzy Kreatif Mediatama</p>

        <div class="row mt-5">
            <div class="col-xl-3 col-md-4 col-6 my-2" id="col-what-we-do">
                <div class="content py-4 px-3">
                    <div class="content-top py-3 px-4">
                        <img src="{{ asset('../Images/corporate.png') }}" alt="">
                    </div>
                    <div class="content-bottom mt-4">
                        <p class="fw-bold">Corporate Event</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, ad.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-6 my-2" id="col-what-we-do">
                <div class="content p-4 px-3">
                    <div class="content-top py-3 px-4">
                        <img src="{{ asset('../Images/corporate.png') }}" alt="">
                    </div>
                    <div class="content-bottom mt-4">
                        <p class="fw-bold">Corporate Event</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, ad.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-6 my-2" id="col-what-we-do">
                <div class="content p-4 px-3">
                    <div class="content-top py-3 px-4">
                        <img src="{{ asset('../Images/corporate.png') }}" alt="">
                    </div>
                    <div class="content-bottom mt-4">
                        <p class="fw-bold">Corporate Event</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, ad.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-6 my-2" id="col-what-we-do">
                <div class="content p-4 px-3">
                    <div class="content-top py-3 px-4">
                        <img src="{{ asset('../Images/corporate.png') }}" alt="">
                    </div>
                    <div class="content-bottom mt-4">
                        <p class="fw-bold">Corporate Event</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, ad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>

   <div class="list-logo p-5" id="project">
    <div class="content justify-content-md-between justify-content-center">
        <img src="{{ asset('../Images/dpr.png') }}" alt="">
        <img src="{{ asset('../Images/dpr.png') }}" alt="">
        <img src="{{ asset('../Images/dpr.png') }}" alt="">
        <img src="{{ asset('../Images/dpr.png') }}" alt="">
        <img src="{{ asset('../Images/dpr.png') }}" alt="">
        <img src="{{ asset('../Images/dpr.png') }}" alt="">
        <img src="{{ asset('../Images/dpr.png') }}" alt="">
    </div>
   </div>


    <div class="container events my-5" id="event">
        <h3 class="cy">EVENT</h3>
        <div class="d-flex justify-content-between">
            <p>by PT. Qianzy Kreatif Mediatama</p>
            <a class="text-decoration-none text-black" href="">Selengkapnya >></a>
        </div>
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-xl-4 col-md-6 col-sm-10 col-12 mt-4 event-img" id="gallery-img">
                <div class="content position-relative">
                    <img src="{{ asset('..\Images\event=img.png') }}" class="position-relative" alt="">
                    <div class="event-title px-3">
                        <p>
                            <span class="fw-bold">Kegiatan 1</span>
                            <br>
                            <span>Lorem Ipsum</span>
                        </p>
                        <a href=""><p>Selengkapnya</p></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-10 col-12 mt-4 event-img" id="gallery-img">
                <div class="content position-relative">
                    <img src="{{ asset('..\Images\event=img.png') }}" class="position-relative" alt="">
                    <div class="event-title px-3">
                        <p>
                            <span class="fw-bold">Kegiatan 1</span>
                            <br>
                            <span>Lorem Ipsum</span>
                        </p>
                        <a href=""><p>Selengkapnya</p></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-10 col-12 mt-4 event-img" id="gallery-img">
                <div class="content position-relative">
                    <img src="{{ asset('..\Images\event=img.png') }}" class="position-relative" alt="">
                    <div class="event-title px-3">
                        <p>
                            <span class="fw-bold">Kegiatan 1</span>
                            <br>
                            <span>Lorem Ipsum</span>
                        </p>
                        <a href=""><p>Selengkapnya</p></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-10 col-12 mt-4 event-img" id="gallery-img">
                <div class="content position-relative">
                    <img src="{{ asset('..\Images\event=img.png') }}" class="position-relative" alt="">
                    <div class="event-title px-3">
                        <p>
                            <span class="fw-bold">Kegiatan 1</span>
                            <br>
                            <span>Lorem Ipsum</span>
                        </p>
                        <a href=""><p>Selengkapnya</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   {{-- AKHIR CONTENT --}}


   {{-- FOOTER --}}
    <footer class="pt-5 pb-4 text-white" style="margin-top: 7rem;">
        <div class="container">
            <div class="row justify-content-md-between align-items-start">
                <div class="col-lg-2 col-md-2 footerLogo">
                        <img src="{{asset('../image/pdfiLogoEllipse.png')}}" alt="">
                </div>
                <div class="col-lg-3 col-md-3 footerTitle">
                    <p class="xl fw-bold my-2">Qianzy</p>
                    <p class="text-justify my-2">QIANZY KREATIF MEDIATAMA hadir untuk memberikan kenyamanan, Ide kreatif, solusi konsep agar bisa menghasilkan sinergi untuk mensukseskan berjalan acara.</p>
                    <div class="sosmed d-flex align-items-center justify-content-center justify-content-md-start gap-3 my-3">
                        <a href=""><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></a>
                        <a href=""><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>
                        <a href=""><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                        <a href=""><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
                        <a href=""><i class="fa-brands fa-tiktok" style="color: #ffffff;"></i></a>
                        <a href=""><i class="fa-solid fa-circle-play" style="color: #ffffff;"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-8 col-7">
                    <p class="xl fw-bold my-2">MENU</p>
                    <a class="d-block text-decoration-none text-white" href="">Home</a>
                    <a class="d-block text-decoration-none text-white" href="">About Us</a>
                    <a class="d-block text-decoration-none text-white" href="">Project</a>
                    <a class="d-block text-decoration-none text-white" href="">Event</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-5">
                    <p class="xl fw-bold mt-2">Addres & Contact</p>
                    <div class="email d-flex align-items-start gap-2 mt-2">
                        <i class="fa-solid fa-location-dot mt-1" style="color: #ffffff;"></i>
                        <p>Wisma Iskandarsyah, Blok A-10 Suite 7, Lt 3.
                            Jl. Iskandarsyah Raya Kav. 12 - 14
                            Kel. Melawai, Kec. Kebayoran Baru, Jakarta Selatan.</p>
                    </div>
                    <div class="email d-flex align-items-start gap-2">
                        <i class="fa-solid fa-phone mt-1" style="color: #ffffff;"></i>
                        <p>0857 - 6548 - 6987</p>
                    </div>
                </div>
            </div>
            <div class="hr"></div>
            <div class="bottomFooter d-flex justify-content-between">
                <p>©2020 PT Qianzy Kreatif Mediatama, All Rights Reserved.</p>
                <p>Terms & Condition - Privacy - Cookies</p>
            </div>
        </div>
    </footer>
   {{-- AKHIR FOOTER --}}

   <script src="https://kit.fontawesome.com/8def9595b8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>