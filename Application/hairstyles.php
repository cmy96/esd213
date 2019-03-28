<?php

require_once "include/common.php";
include 'credentials.php';

include 'header.php';
if (isset($_GET['query'])){
    $q = $_GET['query'];
}
else{
    $q = '';
}
$img_url = "https://www.googleapis.com/customsearch/v1?cx=$search_engine&key=$api_key&q=$q+hairstyle&num=10&start=1&imgSize=medium&searchType=image";
echo "<form action='hairstyles.php' action='GET'><input type = 'text' name = 'query'/><input type='submit'/></form> ";
$images = json_decode(file_get_contents($img_url),true);
echo "<div>";
echo "<table><tr><th>Hairstyles</th><th>Select</th></tr>";
// var_dump($images);
// echo json_encode($images, JSON_PRETTY_PRINT);
foreach($images['items'] as $item){
    echo "<tr><td><div style='height: 200px ; width:200px'><img class = 'img-fluid' src={$item['link']}></div></td><td></td></tr>";
}
echo "</table>";
echo "</div>";
include 'footer.php';
?>