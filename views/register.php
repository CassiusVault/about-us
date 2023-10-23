<br><br>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <?php 
            $newUser = new users();
            $newUser->create_account("registerAccount");
        ?>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Register your account</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                <div class="mb-3">
                      <label for="" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Enter name">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Email address</label>
                      <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Email address">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Mobile</label>
                      <input type="text" class="form-control" name="mobile" id="" aria-describedby="helpId" placeholder="Mobile">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Password">
                    </div> 
                    <div class="mb-3">
                      <label for="" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" name="cpassword" id="" aria-describedby="helpId" placeholder="Confirm Password">
                    </div>
                    <button type="submit" name="registerAccount" class="btn btn-primary customBtn">Register</button>
                </form>
            </div>
            <div class="card-footer">
            <center><p>Already have an account? <a href="./login">Log in</a></p></center>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<br><br>