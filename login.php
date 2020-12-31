<?php
include"include/header.php";
?>

<!-- login section start -->
<section class="auth">
    <div class="container">
        <div class="row auth-row">
            
            <div class="auth-box">
                <div class="auth-form">

                    <!-- logo start -->
                    <div class="auth-logo">
                        <img src="images/logo.png" class="img-fluid" alt="">
                    </div>
                    <!-- logo end -->

                    <!-- form start -->
                    <form action="" method="post">

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                                </div>
                                <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                <label class="form-check-label" for="autoSizingCheck">
                                Remember me
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="submit-btn">Login</button>
                        </div>
                        
                    </form>
                    <!-- form end -->

                    <!-- card start -->
                    <div class="auth-card">
                        <a href="forgetPassword.php">Lost Your Password?</a>
                        <a href="register.php">Not yet registered? Go to register page</a>
                    </div>
                    <!-- card end -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- login section end -->


<?php
include"include/footer.php";
?>