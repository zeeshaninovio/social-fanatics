<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/forgetpassword.css">
<!-- Stylesheet -->

<!-- BreadCrumbs Start Here -->
<div class="breadcrumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">FORGET PASSWORD</li>
            </ol>
        </nav>
    </div>
</div>
<!-- BreadCrumbs Start Here -->
<!-- new password Start here -->

<!-- Modal -->
<section class="forget-password-section confirm-password-section">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div>
                    <div class="form-start">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="create-head"><span><img src="img/signin1.png" alt=""></span>ENTER CODE</h3>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8 col-xs-12">

                                    <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="New Password" required="required">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8 col-xs-12">

                                    <input type="password" class="form-control" id="cnewpassword" name="cnewpassword" placeholder="Confirm New Password" required="required">
                                </div>

                            </div>
                        </div>

                        <div class="form-group forget">
                            <button type="submit" class="btn signinbtn"><i class="fa fa-unlock" aria-hidden="true"></i>SUBMIT</button>
                        </div>
                        <div class="row">
                            <div class="col-md-12 forgot1">
                                <span class="">FORGOT YOUR </span>
                                <span><a href="#">USERNAME OR PASSWORD?</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- new password End here -->


<!-- Testimonials & Newsletter -->
<?php include 'inc/above-footer.php'?>
<!-- Testimonials & Newsletter -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->