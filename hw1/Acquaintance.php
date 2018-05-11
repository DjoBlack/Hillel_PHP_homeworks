<?php
  $yearOfBirth = (365 * 25) + (2*30) + (3*31) + 28 + 28 + 7;
  $ageDays = intval(date('U')/(60*60*24)) - $yearOfBirth;  
  $ageYears = intval($ageDays/365);

  echo 'Добрый день. Меня зовут Владимир Гармаш и я живу в этом мире уже ', $ageDays,' дней, или приблизительно ', $ageYears,' года.'
?>
