<?php
if(isset($_POST["submit"])) {
    if(is_array($_FILES)) {
        //definim poza luam **photo** vine din HTML Form
    $file = $_FILES['photo']['tmp_name'];
    // luam proprietatile pozei
    $source_properties = getimagesize($file);
    list($width, $height) = getimagesize($file);
    // getimagesize intoarce un array care la 3 are lungime si latime
    $image_type = $source_properties[2]; 
        if( $image_type == IMAGETYPE_JPEG ) {   
        $image_resource_id = imagecreatefromjpeg($file);  
        $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
        imagejpeg($target_layer,$_FILES['photo']['name'] . "_2.jpg");
        }
        elseif( $image_type == IMAGETYPE_GIF )  {  
        $image_resource_id = imagecreatefromgif($file);
        $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
        imagegif($target_layer,$_FILES['photo']['name'] . "_2.gif");
        }
        elseif( $image_type == IMAGETYPE_PNG ) {
        $image_resource_id = imagecreatefrompng($file); 
        $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
        imagepng($target_layer,$_FILES['photo']['name'] . "_2.png");
        }
    }
}
function fn_resize($image_resource_id, $width, $height) {
$target_width =500;
$target_height =500;
$target_layer=imagecreatetruecolor($target_width,$target_height);
imagecopyresampled($target_layer,$image_resource_id,0,0,0,0,$target_width,$target_height, $width,$height);
return $target_layer;
}

print_r ($source_properties);
echo "Are inaltime $height px si latimea $width px ";
echo $target_layer;
echo $image_resource_id;
echo imagejpeg($target_layer,$_FILES['photo']['name'] . "_2.jpg");


?>