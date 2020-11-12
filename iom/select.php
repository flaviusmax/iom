<?php
if(isset($_POST['selecteaza'])){
    $selecteaza = $_POST['selecteaza'];
    switch ($selecteaza) {
        case '':Audi
            echo 'Ai selectat Audi<br/>';
            break;
        case 'Dacia':
            echo 'Ai selectat Dacia<br/>';
            break;
        default:
            # code...
            break;
    }
}

if(isset($_POST['selecteaza'])){
    $selecteaza = $_POST['selecteaza'];
    echo $selecteaza;
    
}
?>