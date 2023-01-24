<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- css -->
    <link rel="stylesheet" href="../css/informasi.css">
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

        <!-- NEWS -->
        <div class="news">
            <?php
            include '../php/db.php';

            function str_trim($str, $char_no)
            {
                if (strlen($str) <= $char_no)
                    return $str;
                else {
                    $all_words = explode(" ", $str);
                    $out_str = '';
                    foreach ($all_words as $word) {
                        $temp_str = ($out_str == '') ? $word : $out_str . ' ' . $word;
                        if (strlen($temp_str) > $char_no - 3) //-3 for 3 dots
                            return $out_str . "...";
                        $out_str = $temp_str;
                    }
                }
            }

            $sql = "SELECT * FROM information ORDER BY id DESC";
            $result = $connection->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<img src='../img/news/" . $row['file_name'] . "' alt=''>";
                echo "<div class='text'>";
                echo "<h3>" . $row['title'] . "</h3>";
                echo "<span>" . $row['created'] . "</span>";
                echo "<p class='content'>" . str_trim($row['content'], 300) . "</p>";
                echo "<a href='../php/news.php?id=".$row['id']."'>selengkapnya</a>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="nav">
                <h3 class="title">STT LETS</h3>
                <ul class="menu">
                    <li class="item"><a href="./index.html">Beranda</a></li>
                    <li class="item"><a href="./tentang_kami.php">Tentang Kami</a></li>
                    <li class="item"><a href="./informasi.php">Informasi</a></li>
                    <li class="item"><a href="">Galeri</a></li>
                    <li class="item"><a href="">Kontak</a></li>
                </ul>
            </div>
            <div class="account">
                <h3 class="title">Media Sosial</h3>
                <div class="each-account">
                    <img src="../img/icon_fb.png" alt="">
                    <a href="">STT LEST</a>
                </div>
                <div class="each-account">
                    <img src="../img/icon_ig.png" alt="">
                    <a href="">@sttlest</a>
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