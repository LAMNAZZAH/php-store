<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="login-page">
    <div class="login">
        <div class="left-block">
            <div class="title">
                Login
                <span>Hi</span>
            </div>
            <form class="form" action="" method="post">
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
                <div class="register-group">    
                    <a href=<?php echo URLROOT . "/users/register" ?> >You don't have an Account?</a>
                </div>
                <div c1lass="form-group">
                    <button class="submit-btn" type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="right-block">
            <div class="right-block-headline">
                <div class="headline">Like If<br> <span>You're Here!</span></div>
            </div>
            <div class="background-shape-one"></div>
            <div class="background-shape-two"></div>
            <img src="<?php echo URLROOT . "/public/img/register-safety.png" ?>" class="shape03"></img>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>