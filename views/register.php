<?php include 'header.php';
 ?>
    <div class="container mt-5">

      <?php include 'flashmessages.php' 
      ?>

      <div class="card card-register">

        <h4 class="card-header">Sign Up</h4>

        <div class="card-body">

          <form action="." method="POST">

            <input type="hidden" name="action" value="register"></input>

            <div class="form-group">

              <label for="first-name">First name</label>
              <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First name">
