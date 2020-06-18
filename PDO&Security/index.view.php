<!DOCTYPE html>

<html>

<body>

  <h1>UNIVERSITIES YOU CAN GET IN WITH TOEFL < 90 </h1>
  <ul>

    <?php
    foreach($tasks as $data) :?>
    <?php if($data->TOEFL > 90) :?>
    <li>
     <strike> <?= $data->Name; ?>  </strike>
   </li>
 <?php else :?>
    <li>
     <?= $data->Name; ?>
   </li>
 <?php endif; ?>

   <?php endforeach; ?>

  </ul>
</body>

</html>
