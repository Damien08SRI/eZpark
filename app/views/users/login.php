<?php require APPROOT.'/views/inc/header.php'; ?>
    <div class="form-container">
        <h1>Login</h1>
        <?php if (!empty($data['err'])) { ?>
            <div class="error-msg">
                <span class="form-invalid"><?php echo $data["err"] ?></span>
            </div>
        <?php } ?>
        <form action="<?php echo URLROOT ?>/users/login" method="post">
            <!-- Email -->
            <div class="form-input-title">Email:</div>
            <input type="text" name="email" id="email" required value="<?php echo $data['email'] ?>" />

            <!-- Password -->
            <div class="form-input-title">Password:</div>
            <input type="password" name="password" id="password" required>

            <!-- Remember Me Checkbox -->
            <div class="form-check">
                <input type="checkbox" name="remember_me" id="remember_me">
                <label for="remember_me">Remember Me</label>
            </div>

            <br><br>

            <!-- Submit -->
            <input type="submit" value="Submit">
        </form>

        <div class="other-options">
            <p>If you don't have an account? <a href="<?php echo URLROOT ?>/users/register">Register</a></p>
        </div>
    </div>

    <!--?xml version="1.0" standalone="no"?-->
    <div class="svg">
        <img class="svg-1" src="<?php echo URLROOT ?>/images/svg-1.png" alt="">
        <img class="svg-2" src="<?php echo URLROOT ?>/images/svg-7.png" alt="">
    </div>

<?php require APPROOT.'/views/inc/footer.php'; ?>
