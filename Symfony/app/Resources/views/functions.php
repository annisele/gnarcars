<?php
$bg = array('bg_01.jpg', 'bg_02.jpg', 'bg_03.jpg', 'bg_04.jpg', 'bg_05.jpg', 'bg_06.jpg', 'bg_07.jpg', 'bg_08.jpg', 'bg_09.jpg');

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>