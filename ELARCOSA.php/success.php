<?php

$title = 'Success';
require_once 'includes/header.php';
?>

<h1 class="text-center"> You Have Been Registered</h1>

<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $_GET['firstname'];?></li>
    <li class="list-group-item"><?php echo $_GET['lastname']; ?></li>
    <li class="list-group-item"><?php echo $_GET['specialty'];?></li>
    <li class="list-group-item"><?php echo $_GET['email'];?></li>
    <li class="list-group-item"><?php echo $_GET['date'];?></li>
    <li class="list-group-item"><?php echo $_GET['phone'];?></li>
  </ul>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php' ?>