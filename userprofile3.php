<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/userprofile2.css">
<!-- Stylesheet -->
<!-- Stylesheet -->
<link rel="stylesheet" href="css/userprofile3.css">
<!-- Stylesheet -->

<!-- BreadCrumbs Start Here -->
<div class="breadcrumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">MEMBERS</li>
                <li class="breadcrumb-item active" aria-current="page">SARAH</li>
            </ol>
        </nav>
    </div>
</div>
<!-- BreadCrumbs Start Here -->
<!-- section userprofile start here -->
<section class="userprofile-section userprofile2-section user-profile3" id="sec-user-profile3">
    <div class=" user-profile-back">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="userprofile userprofile22">
                        <div>
                            <h3>Sarah</h3>
                        </div>
                        <div class="blog-time-name">
                            <p>@sarah</p>
                            <p>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                Active 5 months, 1 week ago
                            </p>
                        </div>
                        <div class="blog_img">
                            <figure><img src="img/userprofile.png" alt=""></figure>
                            <img src="img/userprofile21.png" class="img-fluid img-upload-icon" alt="">
                            <!-- <div class="sharestorybtn">
                                <a href="#" class="btn"> Add Friend</a>
                                <a href="chat.php" class="btn"> Private Message</a>
                                <a href="livecall.php" class="btn"> Video Call</a>
                            </div> -->
                            <ul class="nav nav-pills mb-3 sharestorybtn" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-Edit-tab" data-toggle="pill" href="#pills-Edit"
                                        role="tab" aria-controls="pills-Edit" aria-selected="true">Edit Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-Save-tab" data-toggle="pill" href="#pills-Save"
                                        role="tab" aria-controls="pills-Save" aria-selected="false">Save Profile</a>
                                </li>
                            </ul>

                            <!-- <div class="tab-pane fade" id="pills-Save" role="tabpanel"
                                    aria-labelledby="pills-Save-tab">Save</div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-looking" data-toggle="pill" href="#pills-looking-t"
                                role="tab" aria-controls="pills-looking-t" aria-selected="true">Looking for</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-aboutme" data-toggle="pill" href="#pills-aboutme-t" role="tab"
                                aria-controls="pills-aboutme-t" aria-selected="false">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-media" data-toggle="pill" href="#pills-media-t" role="tab"
                                aria-controls="pills-media-t" aria-selected="false">Save</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active mt-5" id="pills-looking-t" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="aboutme-t">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="about-me-tab">
                                            <div>
                                                <p>Name</p>
                                                <p>I am a</p>
                                                <p>Looking for a</p>
                                                <p>Birthday</p>
                                                <p>Martial Status</p>
                                                <p>City</p>
                                                <p>Country</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="about-me-tab">
                                            <form action="">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="am-name"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                    <input type="text" class="form-control" id="am-gender1"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                    <input type="text" class="form-control" id="am-gender2"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                    <input type="text" class="form-control" id="am-bd"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                    <input type="text" class="form-control" id="am-ms"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                    <input type="text" class="form-control" id="am-city"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                    <input type="text" class="form-control" id="am-country"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-aboutme-t" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="aboutme-t userprofile2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Type your message here..."></textarea>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Type your message here..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show " id="pills-Edit-form" role="tabpanel"
                            aria-labelledby="pills-Edit-tab">
                            <div class="aboutme-t">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="about-me-tab">
                                            <div>
                                                <p>Name</p>
                                                <p>I am a</p>
                                                <p>Looking for a</p>
                                                <p>Birthday</p>
                                                <p>Martial Status</p>
                                                <p>City</p>
                                                <p>Country</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="about-me-tab">
                                            <form action="">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="am-name"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                    <input type="text" class="form-control" id="am-gender1"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                    <input type="text" class="form-control" id="am-gender2"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                    <input type="text" class="form-control" id="am-bd"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                    <input type="text" class="form-control" id="am-ms"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                    <input type="text" class="form-control" id="am-city"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                    <input type="text" class="form-control" id="am-country"
                                                        aria-describedby="am-name" placeholder="Type here...">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 userprofile3">
                        <div class="form-group custom-box">
                            <label for="upload-photo"><img src="img/uploadicon.png" alt="">
                                <p class="black-txt">Drag and Drop here </p>or <p class="blue-txt">Browse files</p>
                            </label>
                            <input type="file" class="form-control-file" id="upload-photo">
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="blog_img">
                            <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                            <button class="btn Rejectbtn mt-1">Delete</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blog_img">
                            <figure><img src="img/userprofile31.png" class="img-fluid" alt=""></figure>
                            <button class="btn Rejectbtn mt-1">Delete</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blog_img">
                            <figure><img src="img/userprofile32.png" class="img-fluid" alt=""></figure>
                            <button class="btn Rejectbtn mt-1">Delete</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blog_img">
                            <figure><img src="img/userprofile31.png" class="img-fluid" alt=""></figure>
                            <button class="btn Rejectbtn mt-1">Delete</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blog_img">
                            <figure><img src="img/userprofile32.png" class="img-fluid" alt=""></figure>
                            <button class="btn Rejectbtn mt-1">Delete</button>
                        </div>
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