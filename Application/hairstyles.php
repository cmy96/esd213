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
echo "<div class = 'm-4'><form action='hairstyles.php' action='GET'><input type = 'text' name = 'query'/><input type='submit'/></form> </div>";
$images = json_decode(file_get_contents($img_url),true);
echo "<br/>";
echo "<div class ='m-4'>";
echo "<table><tr><th>Hairstyles</th><th>Select your favourite hairstyle</th></tr>";
echo "<form action = process_hairstyles.php method='GET'>";
foreach($images['items'] as $item){
    echo "<tr><td><div style='height: 200px ; width:200px'><img class = 'img-fluid' src={$item['link']}></div></td><td>
    <input type ='radio' class='radio' name='hairstyle' value='{$item['link']}'/>
    </td></tr>";
}
echo "<tr><td></td><td><input type='submit'/></td></tr>";
echo "</table>";
echo "</form>";
echo "</div>";
include 'footer.php';
?>