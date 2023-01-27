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
                    Fusce ut placerat orci nulla pellentesque dignissim enim. Egestas integer eget aliquet nibh praesent
                    tristique magna sit. Leo a diam sollicitudin tempor id eu. Sit amet mattis vulputate enim nulla
                    aliquet porttitor lacus. Diam vulputate ut pharetra sit amet aliquam. Adipiscing diam donec
                    adipiscing tristique. Ipsum consequat nisl vel pretium lectus quam id. Dignissim enim sit amet
                    venenatis urna cursus eget. Lorem ipsum dolor sit amet. Duis at consectetur lorem donec massa
                    sapien. Id nibh tortor id aliquet lectus proin nibh nisl.
                    </br>
                    </br>
                    Tristique nulla aliquet enim tortor at. Proin sagittis nisl rhoncus mattis rhoncus urna. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Morbi tristique senectus et netus et malesuada fames. Consectetur adipiscing elit duis tristique sollicitudin nibh. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla. Viverra vitae congue eu consequat ac felis.
                    </br>
                    </br>
                    Risus viverra adipiscing at in tellus integer feugiat. Sed arcu non odio euismod lacinia. Congue mauris rhoncus aenean vel elit. Velit ut tortor pretium viverra suspendisse potenti nullam. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Amet volutpat consequat mauris nunc congue nisi vitae. Morbi tincidunt augue interdum velit euismod.
                </p>
            </div>
        </div>

        <!-- VISION -->
        <div class="vision">
            <h2>Visi</h2>
            <p>Menjadi institusi yang efisien, produktif, dan unggul dalam pengembangan bidang ilmu pendidikan teologia, pendidikan agama Kristen dan kepemimpinan untuk konteks masyarakat rural dan urban dengan mengintegrasikan iman Kristiani, ilmu pengetahuan dan teknologi.</p>
        </div>

        <!-- MISSION -->
        <div class="mission">
            <h2>Misi</h2>
            <ol>
                <li>Menyelenggarakan pendidikan dan pengajaran yang berkualitas untuk menghasilkan pemimpin dan hamba Tuhan yang mempunyai karakter yang bertanggung jawab dan dapat di percaya, keunggulan akademik, dan memiliki kemampuan dalam kepemimpinan Kristen untuk membangun dan mengembangkan gereja yang sehat dan membawa perubahan dalam komunitas.</li>
                <li>Menyelenggarakan penelitian dan kajian yang berorientasi pada pengembangan ilmu teologi, pendidikan agama Kristen, dan kepemimpinan Kristen berdasarkan kebenaran Firman Tuhan.</li>
                <li>Mendarmabaktikan keahlian dan kemamampuan untuk mengembangkan pendidikan teologi, pendidikan agama Kristen, dan kepemimpinan dengan memberitakan iman Kristiani dan kebenaran Firman Tuhan di gereja dan masyarakat sehingga dapat memberikan kontribusi pada peningkatan kualitas kehidupan yang lebih baik.</li>
            </ol>
        </div>


        <!-- PROFESSOR -->
        <div class="professor">
            <h2>Dosen dan Staff</h2>
            <p>Risus viverra adipiscing at in tellus integer feugiat. Sed arcu non odio euismod lacinia. Congue mauris rhoncus aenean vel elit. Velit ut tortor pretium viverra suspendisse potenti nullam. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Amet volutpat consequat </p>
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