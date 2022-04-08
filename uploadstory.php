<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/uploadstory.css">
<!-- Stylesheet -->

<!-- BreadCrumbs Start Here -->
<div class="breadcrumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">SHARE STORIES</li>
            </ol>
        </nav>
    </div>
</div>
<!-- BreadCrumbs Start Here -->
<!-- section userprofile start here -->
<section class="uploadstory-section">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-8">
                <div class="sharestoriescontent">
                    <div class="sharestoryhead">
                        <h3>SHARE STORIES</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur turpis augue, rutrum ut
                            ligula fringilla, porttitor euismod libero. Sed sed luctus odio. Pellentesque habitant morbi
                            tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                    </div>
                    <div class="form-start">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <label for="inputName">First Name</label>
                                    <input type="text" class="form-control" id="inputName" name="first_name"
                                         required="required">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <label for="inputLname">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" id="inputLname"
                                         required="required">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Your Story</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div>
                        <label for="">Attach Videos/Images</label>
                        <div class="form-group custom-box">
                            <label for="upload-photo"><img src="img/uploadicon.png" alt=""><p class="black-txt">Drag and Drop here </p>or <p class="blue-txt">Browse files</p></label>
                            <input type="file" class="form-control-file" id="upload-photo">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Side Bar Start Here -->
                <!-- Sidebar Start Here -->
                <div class="sidebar_dv">
                    <div class="membersDv">
                        <div class="top_bar">
                            <div class="heading">
                                <h5>Members</h5>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Newest</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                        aria-controls="contact" aria-selected="false">Popular</a>
                                </li>
                            </ul>
                        </div>
                        <div class="all_members">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user2.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Michele Storm</span></a><br>
                                            <span class="active_time">Active 1 day, 22 hours ago</span>
                                        </div>
                                    </div>
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user3.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Hanna Marcovick</span></a><br>
                                            <span class="active_time">Active 3 months, 1 week ago</span>
                                        </div>
                                    </div>
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user6.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Sarah</span></a><br>
                                            <span class="active_time">Active 3 months, 2 weeks ago</span>
                                        </div>
                                    </div>
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user5.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Jessica</span></a><br>
                                            <span class="active_time">Active 3 months, 2 weeks ago</span>
                                        </div>
                                    </div>
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user4.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Peter Shull</span></a><br>
                                            <span class="active_time">Active 3 months, 2 weeks ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user2.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Michele Storm</span></a><br>
                                            <span class="active_time">Active 1 day, 22 hours ago</span>
                                        </div>
                                    </div>
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user3.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Hanna Marcovick</span></a><br>
                                            <span class="active_time">Active 3 months, 1 week ago</span>
                                        </div>
                                    </div>
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user6.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Sarah</span></a><br>
                                            <span class="active_time">Active 3 months, 2 weeks ago</span>
                                        </div>
                                    </div>
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user5.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Jessica</span></a><br>
                                            <span class="active_time">Active 3 months, 2 weeks ago</span>
                                        </div>
                                    </div>
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user4.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Peter Shull</span></a><br>
                                            <span class="active_time">Active 3 months, 2 weeks ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user2.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Michele Storm</span></a><br>
                                            <span class="active_time">Active 1 day, 22 hours ago</span>
                                        </div>
                                    </div>
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user3.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Hanna Marcovick</span></a><br>
                                            <span class="active_time">Active 3 months, 1 week ago</span>
                                        </div>
                                    </div>
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user6.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Sarah</span></a><br>
                                            <span class="active_time">Active 3 months, 2 weeks ago</span>
                                        </div>
                                    </div>
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user5.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Jessica</span></a><br>
                                            <span class="active_time">Active 3 months, 2 weeks ago</span>
                                        </div>
                                    </div>
                                    <div class="userDv">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/user4.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_user">
                                            <a href="#"><span class="user_name">Peter Shull</span></a><br>
                                            <span class="active_time">Active 3 months, 2 weeks ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="groupDv mt-5">
                        <div class="top_bar">
                            <div class="heading">
                                <h5>Groups</h5>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="groupone-tab" data-toggle="tab" href="#groupone"
                                        role="tab" aria-controls="groupone" aria-selected="true"
                                        aria-expanded="true">Newest</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="grouptwo-tab" data-toggle="tab" href="#grouptwo" role="tab"
                                        aria-controls="grouptwo" aria-selected="false" aria-expanded="false">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="groupthree-tab" data-toggle="tab" href="#groupthree"
                                        role="tab" aria-controls="groupthree" aria-selected="false"
                                        aria-expanded="false">Popular</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="groupfour-tab" data-toggle="tab" href="#groupfour"
                                        role="tab" aria-controls="groupfour" aria-selected="false"
                                        aria-expanded="false">Alphabetical</a>
                                </li>
                            </ul>
                        </div>
                        <div class="all_groups">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="groupone" role="tabpanel"
                                    aria-labelledby="groupone-tab" aria-expanded="true">
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group1.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Site lovers</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group2.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Fast food Junkies</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group3.png" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Couples</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group4.png" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Virtual only</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group5.png" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">VIP Users</span></a><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="grouptwo" role="tabpanel" aria-labelledby="grouptwo-tab"
                                    aria-expanded="false">
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group1.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Site lovers</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group2.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Fast food Junkies</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group3.png" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Couples</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group4.png" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Virtual only</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group5.png" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">VIP Users</span></a><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="groupthree" role="tabpanel"
                                    aria-labelledby="groupthree-tab" aria-expanded="false">
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group1.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Site lovers</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group2.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Fast food Junkies</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group3.png" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Couples</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group4.png" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Virtual only</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group5.png" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">VIP Users</span></a><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="groupfour" role="tabpanel"
                                    aria-labelledby="groupfour-tab" aria-expanded="false">
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group1.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Site lovers</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group2.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Fast food Junkies</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group3.png" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Couples</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group4.png" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">Virtual only</span></a><br>
                                        </div>
                                    </div>
                                    <div class="groups">
                                        <div class="img_box">
                                            <a href="#">
                                                <figure><img src="img/group5.png" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="about_group">
                                            <a href="#"><span class="group_name">VIP Users</span></a><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar End Here -->
                <!-- Side Bar End Here -->
            </div>
        </div>
    </div>
</section>
<!-- section userprofile start End -->

<!-- Testimonials & Newsletter -->
<?php include 'inc/above-footer.php'?>
<!-- Testimonials & Newsletter -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->