<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hello</title>
  </head>
  <body>
    <h1>Hello,CodeIgniter!</h1>
    <h2>Users</h2>
    <table border="1">
        <tr>
          <td>id</td>
          <td>name</td>
          <td>age</td>
        </tr>
      <?php foreach($users as $user):?>
        <tr>
          <td><?php echo $user->id;?></td>
          <td><?php echo $user->name;?></td>
          <td><?php echo $user->age;?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
