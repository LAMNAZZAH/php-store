<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="register-page">

    <div class="register">
        <div class="left-block">
            <div class="title">
                Register Now
                <span>In 5MIN</span>
            </div>
            <form class="form" action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <span><?php echo $data['name_err'] ?></span>
                    <input class="<?php echo (!empty($data['name_err'])) ? "invalid-input": "" ?>" type="text" placeholder="Enter your name" name="name" value="<?php echo $data['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <span><?php echo $data['email_err'] ?></span>
                    <input class="<?php echo (!empty($data['email_err'])) ? "invalid-input": "" ?>" type="text" placeholder="Enter Your Email" name="email" value="<?php echo $data['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <span><?php echo $data['password_err'] ?></span>
                    <input class="<?php echo (!empty($data['password_err'])) ? "invalid-input": "" ?>" type="password" placeholder="Enter you password" name="password" value="<?php echo $data['password'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Confirm Password</label>
                    <span><?php echo $data['confirm_password_err'] ?></span>
                    <input class="<?php echo (!empty($data['confirm_password_err'])) ? "invalid-input": "" ?>" type="password" placeholder="Confirm your password" name="confirm_password" value="<?php echo $data['confirm_password'] ?>">
                </div>
                <div class="login-group">
                    <a href="">Aleady Have Account?</a>
                    <button class="login-btn" type="submit">LogIn</button>
                </div>
                <div class="form-group">
                    <button class="submit-btn" type="submit">Sign Up</button>
                </div>
            </form>
        </div>
        <div class="right-block">
            <div class="right-block-headline">
                <div class="headline">With One Click <br> <span>Buy And Wait</span></div>
            </div>
            <div class="background-shape-one"></div>
            <div class="background-shape-two"></div>
            <img src="<?php echo URLROOT . "/public/img/register-safety.png" ?>" class="shape03"></img>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>