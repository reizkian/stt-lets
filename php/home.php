<?php
include 'db.php';

function readEducationText($connection)
{
    $sql = "SELECT * FROM home";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        if ($row["identifier"] == "education-text") {
            echo "<p>" . $row['content'] . "</p>";
        }
    }
}

function readRegistrationURL($connection)
{
    $sql = "SELECT * FROM home WHERE identifier='registration-url'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        echo "<a class='register' target='_bank' href='" . $row['content'] . "'>PENDAFTARAN</a>";
    }
}

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

function readInformation($connection)
{
    $sql = "SELECT * FROM information ORDER BY id DESC LIMIT 0,3";
    $result = $connection->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<a href=./php/news.php?id=" . $row['id'] . ">";
        echo "<div class='card'>";
        echo "<img src='./img/news/" . $row['file_name'] . "' alt=''>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p class='news-date'>" . $row['created'] . "</p>";
        echo "<p class='news-text'>" . str_trim($row['content'], 100) . "</p>";
        echo "</div>";
        echo "</a>";
    }
    $connection->close();
}
