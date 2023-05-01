<form class="form" method="post" action="login.php" onsubmit="return validateRegister()" style="left: 45%">
    <h1 style="margin: 50px 0">Please login to continue</h1>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username"
            name="username">
        <div class="invalid-tooltip" style="position: relative; margin: 5px 0; width: 220px">
            Please provide a valid username.
        </div>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        <div class="invalid-tooltip" style="position: relative; margin: 5px 0; width: 220px">
            Please provide a valid password.
        </div>
    </div>
    <div class="formSelect btns">
        <input class="btn btn-outline-primary" type="submit" value="Submit" id="submit" name="loginSubmit" />
    </div>
    <!--display message-->
    <?php if (isset($message)) { ?>
        <h4 style="color:red; margin-top: 30px"><?php echo $message ?></h4>
    <?php } ?>


    <div class="card" style="width: 500px; margin-top: 30px">
        <div class="card-body">
            <h5 class="card-title">Allowed formats</h5>
            <p class="card-text">Username: Must contain letters and digits only.</p>
            <p class="card-text">Password: Must be at least 4 characters long with letters and digits
                only, at least one letter
                and at least one digit.</p>
        </div>
    </div>
</form>