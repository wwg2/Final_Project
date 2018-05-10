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
             
               </div>
            <div class="form-group">
              <label for="last-name">Last name</label>
              <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last name">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>

            <div class="form-group">
              <label for="tel">Phone</label>
              <input type="tel" class="form-control" placeholder="(555)-555-5555" name="phone" id="tel">
            </div>

            <div class="form-group">
              <label for="dob">Date of birth</label>
              <input type="date" class="form-control" placeholder="" name="dob" id="dob">
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" placeholder="*******" name="password" id="password">
            </div>
    
            <div class="row">

              <div class="col">

                <div class="form-group">

                  <label class="mr-sm-2" for="gender">Gender</label>

                  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="gender" name="gender">
                    <option selected value='none'>Choose one...</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                  </select>

                </div>
              </div>

              <div class="col">
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
              </div>

            </div>
          </form>
        </div>
      <div>
    </div>
<?php include 'footer.php'; ?>
