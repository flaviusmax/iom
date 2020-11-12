<?php
  $aDoor = $_POST['formDoor'];
  if(empty($aDoor)) 
  {
    echo("You didn't select any buildings.");
  } 
  else 
  {
    $N = count($aDoor);

    echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  }

  
  if(IsChecked('formDoor','A'))
  {
  //do something ...
  }
  //or use in a calculation ...
  
  $price += IsChecked('formDoor','A') ? 10 : 0;
  $price += IsChecked('formDoor','B') ? 20 : 0;

  if(IsChecked('formDoor','A'))
{
//do somthing ...

echo "Ati selectat" . $aDoor;
}
//or use in a calculation ...

$price += IsChecked('formDoor','A') ? 10 : 0;
$price += IsChecked('formDoor','B') ? 20 : 0;


?>