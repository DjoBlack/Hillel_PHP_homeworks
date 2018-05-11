<?php
require_once 'data.php'; 
require_once 'functions.php';
?>
<html>
<head>
</head>
<body>
   <h2>Список друзей</h2>
   <table cellpadding='10' border='black' width="50%">
     <thead>
       <tr>
         <td>№</td>
         <td>Имя</td>
         <td>Номер телефона</td>
       </tr>
     </thead>
     <tbody>
      <?php foreach ($friendList as $friend){ ?>
        <tr>
          <td><?php echo $friend['countNum']?></td>
          <td><?php echo $friend['name']?></td>
          <td><?php echo $friend['tel']?></td>
        </tr>
      <?php } ?>
      
    </tbody>
   </table>
   <h2>Вывод нечетных чисел</h2>
   <?php
   printOddNumbers($numbers);
   ?>

    <h2>Вывод имен пока не встретится слово с гласной буквы</h2>
    <?php
    printUntilVowel($friendList);
    ?>
</body>
</html>
