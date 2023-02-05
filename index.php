<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- fonst -->
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>STT LETS</title>
</head>

<body>
    <div class="global-padding">
        <!-- HEADER -->
        <table class="header">
            <tr>
                <td class="row-image">
                    <img src="./img/logo_stt_lets.png" alt="">
                </td>
                <td class="row-content">
                    <table>
                        <tr>
                            <td>
                                <h1>SEKOLAH TINGGI TEOLOGI LETS</h1>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="menu">
                                    <li class="item"><a href="./">Beranda</a></li>
                                    <li class="item"><a href="./html/tentang_kami.php">Tentang Kami</a></li>
                                    <li class="item"><a href="./html/informasi.php">Informasi</a></li>
                                    <li class="item"><a href="">Galeri</a></li>
                                    <li class="item"><a href="./html/kontak.html">Kontak</a></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <!-- BANNER -->
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="./img/banner1.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="./img/banner2.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="./img/banner3.png" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <script src="./js/index.js"></script>

        <!-- EDUCATION -->
        <div class="education">
            <img src="./img/education0.png" alt="">
            <div class="content">
                <h2>Pendidikan</h2>
                <?php
                include './php/db.php';
                include './php/home.php';
                readEducationText($connection);
                ?>
                <a href="./html/pendidikan.html">SELENGKAPNYA</a>
                <?php
                    readRegistrationURL($connection);
                ?>
            </div>
        </div>


        <!-- NEWS -->
        <div class="news">
            <h2 class="title">
                Berita
            </h2>
            <div class="content">
                <?php
                readInformation($connection);
                ?>
            </div>
        </div>


        <!-- SYSTEM -->
        <div class="system">
            <h2 class="title">Sistem Informasi</h2>
            <div class="apps">
                <div class="card" onClick="location.href='https://sttlets.education/siakad/'">
                    <div class="container-icon"><span class="material-symbols-outlined icon">
                            school
                        </span></div>
                    <div class="container-text"><a href="">SIAKAD</a></div>
                </div>
                <div class="card" onClick="location.href='https://sttlets.education/jurnal/index.php/pembaharu'">
                    <div class="container-icon"><span class="material-symbols-outlined icon">
                            history_edu
                        </span></div>
                    <div class="container-text"><a href="">E-JURNAL</a></div>
                </div>
                <div class="card" onClick="location.href='http://sttlets.education/senayan/'">
                    <div class="container-icon"><span class="material-symbols-outlined icon">
                            import_contacts
                        </span></div>
                    <div class="container-text"><a href="">E-LIBRARY</a></div>
                </div>
                <div class="card" onClick="location.href='https://sttlets.education:2096/'">
                    <div class="container-icon"><span class="material-symbols-outlined icon">
                            mail
                        </span></div>
                    <div class="container-text"><a href="">E-MAIL</a></div>
                </div>
                <div class="card" onClick="location.href='https://sttlets.education/pembaharu/'">
                    <div class="container-icon"><span class="material-symbols-outlined icon">
                            language
                        </span></div>
                    <div class="container-text"><a href="">E-BULETIN</a></div>
                </div>
                <div class="card">
                    <div class="container-icon"><span class="material-symbols-outlined icon">
                            local_library
                        </span></div>
                    <div class="container-text"><a href="">E-LEARNING</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="nav">
                <h3 class="title">STT LETS</h3>
                <ul class="menu">
                    <li class="item"><a href="./">Beranda</a></li>
                    <li class="item"><a href="./html/tentang_kami.php">Tentang Kami</a></li>
                    <li class="item"><a href="./html/informasi.php">Informasi</a></li>
                    <li class="item"><a href="">Galeri</a></li>
                    <li class="item"><a href="./html/kontak.html">Kontak</a></li>
                </ul>
            </div>
            <div class="account">
                <h3 class="title">Media Sosial</h3>
                <div class="each-account">
                    <img src="./img/icon_fb.png" alt="">
                    <a target="_blank" href="https://www.facebook.com/stt.lets">STT LEST</a>
                </div>
                <div class="each-account">
                    <img src="./img/icon_ig.png" alt="">
                    <a target="_blank" href="https://www.instagram.com/stt_lets/">@sttlest</a>
                </div>
            </div>
            <div class="address">
                <h3 class="title">Alamat</h3>
                <p class="text-address">Jl. KH. Noer Ali, RT.005/RW.006A, Jakasampurna,
                    Kec. Bekasi Barat, Kota Bekasi, Jawa Barat 17145</p>
                <p class="text-email">sttlets.indonesia@gmail.com</p>
                <p class="text-phone">081312147892 / 081312147891
                </p>
            </div>
        </div>
    </div>
</body>

</html>