<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- css -->
    <link rel="stylesheet" href="../css/tentang_kami.css">
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
                    <img src="../img/logo_stt_lets.png" alt="">
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
                                    <li class="item"><a href="../">Beranda</a></li>
                                    <li class="item"><a href="../html/tentang_kami.php">Tentang Kami</a></li>
                                    <li class="item"><a href="../html/informasi.php">Informasi</a></li>
                                    <li class="item"><a href="">Galeri</a></li>
                                    <li class="item"><a href="../html/kontak.html">Kontak</a></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <!-- HISTORY -->
        <div class="history">
            <img src="../img/building.png" alt="">
            <div class="content">
                <h2>Sejarah</h2>
                <p>
                    Para pemimpin juga melihat kebutuhan akan pemimpin masa depan yang berkarakter dan berintegritas serta memiliki wawasan kesatuan dan memiliki panggilan spesifik sesuai dengan karunia jawatan yang Tuhan sudah tetapkan. STT LETS banyak mengalami peningkatan. Khususnya Kualitas pendidikan sejak tahun 1991 sampai dengan sekarang. Tahun 2012 STT LETS dipindahkan dari Yayasan Kasih Bapa menjadi Yayasan Transformasi Membangun Indonesia (2013).
                </p>
                <br>
                <p>
                    Pada Tahun 2023 YTMI telah melakukan pergantian pengurus yang baru yaitu :
                </p>
                <p>
                    Pembina YTMI : Dr. Jakoep Ezra, D.B.A, Ph.D
                </p>
                <p>
                    Ketua YTMI : Firman Schrijver, M.Th, CBC, CLS
                </p>
                <p>
                    Bendahara YTMI: Nanny Wihardjo S.H., M.M., M.B.A., M.Th
                </p>
                <p>
                    Ketua STT LETS Dr. Ir. Rachmat T Manullang, M.Si
                </p>
                <p>
                    Pjs Ketua STT LETS Dr. Antonius Natan, M.Th
                </p>
                <br>
                <p>
                STT LETS mengusung slogan “Sekolah Bagi Para Pembaharu” dengan harapan dapat melahirkan mahasiswa/i yang menjadi pembaharu dimanapun berada serta membawa kemajuan dalam segala aspek kehidupan. Logo Mercusuar dipilih karena sesuai dengan harapan dan visi Tuhan yaitu, agar terang anak-anakNya bercahaya, setiap orang dapat melihat perbuatan Tuhan yang baik dan memuliakan Bapa di Sorga. (Matius 5:16).
                </p>
            </div>
        </div>

        <!-- VISION -->
        <div class="vision">
            <h2>Visi</h2>
            <p>Menjadi institusi pendidikan Teologi berbasis karakter yang menghasilkan pembaharu secara holistik untuk mewujudkan generasi emas.</p>
        </div>

        <!-- MISSION -->
        <div class="mission">
            <h2>Misi</h2>
            <ol>
                <li>Menyelenggarakan pendidikan berkualitas yang menghasilkan Pemimpin dan Hamba Tuhan berkarakter, berkompetensi serta menjadi pembaharu.</li>
                <li>Menyelenggarakan penelitian dan kajian yang relevan serta berorientasi pada pengembangan ilmu teologi, pendidikan agama Kristen dan kepemimpinan.</li>
                <li>Mendarmabaktikan karya nyata berdasarkan Firman Tuhan untuk menghasilkan generasi emas.</li>
                <li>Membangun sinergi yang harmonis untuk memasuki dunia global.</li>
            </ol>
        </div>


        <!-- PROFESSOR -->
        <div class="professor">
            <h2>Dosen dan Staff</h2>
            <div class="content">
                <?php
                include '../php/db.php';

                $sql = "SELECT * FROM staff ORDER BY data_order LIMIT 0,3";
                $result = $connection->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card'>";
                    echo "<img src='../img/staff/" . $row['file_name'] . "' alt=''>";
                    echo "<h3>" . $row['staff_name'] . "</h3>";
                    echo "<p>" . $row['staff_role'] . "</p>";
                    echo "<p>" . $row['email'] . "</p>";
                    echo "</div>";
                    echo "</a>";
                }
                ?>
                <!-- <div class="card">
                    <img src="../img/user0.png" alt="">
                    <h3>Dosen Satu</h3>
                    <p>Risus viverra</p>
                </div>
                <div class="card">
                    <img src="../img/user0.png" alt="">
                    <h3>Dosen Dua</h3>
                    <p>Risus viverra</p>
                </div>
                <div class="card">
                    <img src="../img/user0.png" alt="">
                    <h3>Dosen Tiga</h3>
                    <p>Risus viverra</p>
                </div>
                <div class="card">
                    <img src="../img/user0.png" alt="">
                    <h3>Dosen Empat</h3>
                    <p>Risus viverra</p>
                </div> -->
            </div>
            <div class="button-container">
                <a href="./staff.php">SELENGKAPNYA</a>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="nav">
                <h3 class="title">STT LETS</h3>
                <ul class="menu">
                    <li class="item"><a href="../">Beranda</a></li>
                    <li class="item"><a href="../html/tentang_kami.php">Tentang Kami</a></li>
                    <li class="item"><a href="../html/informasi.php">Informasi</a></li>
                    <li class="item"><a href="">Galeri</a></li>
                    <li class="item"><a href="../html/kontak.html">Kontak</a></li>
                </ul>
            </div>
            <div class="account">
                <h3 class="title">Media Sosial</h3>
                <div class="each-account">
                    <img src="../img/icon_fb.png" alt="">
                    <a target="_blank" href="https://www.facebook.com/stt.lets">STT LEST</a>
                </div>
                <div class="each-account">
                    <img src="../img/icon_ig.png" alt="">
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