<?php
include '../../db.php';

$sql = "SELECT * FROM information ORDER BY id DESC";
$result = $connection->query($sql);

function str_trim($str,$char_no){
    if(strlen($str)<=$char_no)
        return $str;
    else{
        $all_words=explode(" ",$str);
        $out_str='';
        foreach ($all_words as $word) {
            $temp_str=($out_str=='')?$word:$out_str.' '.$word;
            if(strlen($temp_str)>$char_no-3)//-3 for 3 dots
                return $out_str."...";
            $out_str=$temp_str;
        }
    }
}

$trim_char = 500;

while($row = $result->fetch_assoc()){
    echo "<hr>";
    echo "<div class='news'>";
    echo "<img src='../../img/news/" . $row['image'] ." alt=''/>";
    echo "<span>" . $row['image'] . "</span>";
    echo "<div class='text'>";
    echo "<h1>" . $row['title'] . "</h1>";
    echo "<span>" . $row['author'] . "</span>";
    echo "<span class='date'> " . $row['id'] . "#" . $row['created'] . "</span>";
    echo "<p>" . str_trim($row['content'],$trim_char) . "</p>";
    echo "<a class=''btn btn-primary href='./information/open_information.php?id=" . $row['id'] . "'role='button'>update</a>";
    echo "</div>";
    echo "</div>";
}

$connection->close();