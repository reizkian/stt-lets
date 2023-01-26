<?php
include '../../db.php';

$sql = "SELECT * FROM program ORDER BY id";
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

$trim_char = 400;

while($row = $result->fetch_assoc()){
    echo "<hr>";
    echo "<h1>" . $row['program_level'] ." " . $row['program_name'] . "</h1>";
    echo "<img src='/new/img/program/" . $row['program_picture'] ."' alt=''/>";
    echo "<div class='program'>";
    echo "<div class='text'>";
    
    echo "<span>description</span>";
    echo "<p>" . str_trim($row['program_description'],200) . "</p>";
    echo "<span>vision</span>";
    echo "<p>" . str_trim($row['program_vision'],$trim_char) . "</p>";
    echo "<span>mission</span>";
    echo "<p>" . nl2br(htmlentities($row['program_mission'], ENT_QUOTES, 'UTF-8')) . "</p>";
    echo "<a class='update' btn btn-primary href='/new/admin/view/program/open_program.php?id=" . $row['id'] . "'role='button'>update</a>";
    echo "<a class='delete' btn btn-primary href='/new/admin/view/program/delete_program.php?id=" . $row['id'] . "'role='button'>delete</a>";
    echo "</div>";
    echo "</div>";
}

$connection->close();