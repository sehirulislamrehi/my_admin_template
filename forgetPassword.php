<?php
include"include/header.php";
?>

<!-- login section start -->
<section class="auth">
    <div class="container">
        <div class="row auth-row">
            
            <div class="col-md-4 offset-md-4">
                <div class="auth-form">

                    <!-- form start -->
                    <form action="" method="post">

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                </div>
                                <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="Enter your email address">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="submit-btn">Submit</button>
                        </div>
                        
                    </form>
                    <!-- form end -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- login section end -->


<?php
include"include/footer.php";
?>