<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/userprofile2.css">
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
<section class="userprofile-section userprofile2-section">
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
                            <div class="form-group">
                                <label for="img-upload"><img src="img/userprofile21.png"
                                        class="img-fluid img-upload-icon" alt=""></label>
                                <input type="file" class="form-control-file" id="img-upload">
                            </div>

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
                <div class="apfg-blog">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-Activity-tab" data-toggle="pill" href="#pills-Activity"
                                role="tab" aria-controls="pills-Activity" aria-selected="true">Activity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Friend-tab" data-toggle="pill" href="#pills-Friend" role="tab"
                                aria-controls="pills-Friend" aria-selected="false">Friend </a><span
                                class="count">0</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Groups-tab" data-toggle="pill" href="#pills-Groups" role="tab"
                                aria-controls="pills-Groups" aria-selected="false">Groups</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Media-tab" data-toggle="pill" href="#pills-Media" role="tab"
                                aria-controls="pills-Media" aria-selected="false">Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Stories-tab" data-toggle="pill" href="#pills-Stories"
                                role="tab" aria-controls="pills-Stories" aria-selected="false">Stories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Membership-tab" data-toggle="pill" href="#pills-Membership"
                                role="tab" aria-controls="pills-Membership" aria-selected="false">Membership</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Activity" role="tabpanel"
                            aria-labelledby="pills-Activity-tab">
                            <div class="tabsactivity">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="lineee">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <div class="activity-content">
                                                <div class="activity-para">
                                                    <p class="activity-name">
                                                        Hanna Marcovick's
                                                    </p>
                                                    <p>profile was updated</p>
                                                </div>
                                                <div class="activity-para2">
                                                    <p>5 months ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="com-md-3"></div>
                                </div>
                            </div>
                            <div class="tabsactivity mt-3">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-8">
                                        <div>
                                            <div class="activity-content">
                                                <div class="activity-para">
                                                    <p class="activity-name">
                                                        Hanna Marcovick's
                                                    </p>
                                                    <p>profile was updated</p>
                                                </div>
                                                <div class="activity-para2">
                                                    <p>5 months ago</p>
                                                </div>
                                            </div>
                                            <div class="activity-content">
                                                <figure>
                                                    <img class="img-fluid" src="img/acitivitytab1.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="com-md-3"></div>
                                </div>
                            </div>
                            <div class="tabsactivity tabsactivitys mt-3">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-8">
                                        <div>
                                            <div class="activity-content activity-content00">
                                                <div class="activity-para">
                                                    <p class="activity-name">
                                                        Hanna Marcovick's
                                                    </p>
                                                    <p>replied</p>
                                                </div>
                                                <div class="activity-para2">
                                                    <p>9 years ago</p>
                                                </div>
                                            </div>
                                            <div class="acitivity-num">
                                                <p>2</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="com-md-3"></div>
                                </div>
                            </div>
                            <div class="tabsactivity">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-8">
                                        <div>
                                            <div class="activity-content activity-content2">
                                                <div class="activity-para activity-paraa2">
                                                    <p class="activity-name">
                                                        Hanna Marcovick's
                                                    </p>
                                                    <p>started the topic</p>
                                                    <p class="activity-name">How to nicely reject a coworker??</p>
                                                    <p>in the forum</p>
                                                    <p class="activity-name">Dating</p>
                                                    <div class="activity-para2">
                                                        <p>5 months ago</p>
                                                    </div>
                                                </div>
                                                <div class="acitivity-num activity-num2">
                                                    <p>So there’s this guy I work with (I just started this job about 2
                                                        weeks ago) and he is
                                                        super nice and I’ve talked to him a little bit. He said we
                                                        should see a movie on
                                                        Sunday before our shift. What should I do?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="com-md-3"></div>
                                </div>
                            </div>
                            <div class="tabsactivity mt-3">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="userprofileimg">
                                            <figure>
                                                <img src="img/activity2.png" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <div class="activity-content">
                                                <div class="activity-para">
                                                    <p class="activity-name">
                                                        Hanna Marcovick's
                                                    </p>
                                                    <p>probecome a registered member</p>
                                                </div>
                                                <div class="activity-para2">
                                                    <p>5 months ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="com-md-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Myself Summary
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <label for="aboutme">About me</label>
                                            <div class="form-group">
                                                <textarea class="form-control" id="aboutme" rows="3"
                                                    placeholder="Type here..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Looking For
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">The one thing I am most</label>
                                                <input type="email" class="form-control" id="one-thing"
                                                    placeholder="Type here...">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Things I am looking for I...</label>
                                                <input type="email" class="form-control" id="one-thing"
                                                    placeholder="Type here...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Lifestyle
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Interests</label>
                                                        <input type="email" class="form-control" id="Interests"
                                                            placeholder="Type here...">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Vacation spots</label>
                                                        <input type="email" class="form-control" id="Vacation"
                                                            placeholder="Type here...">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Vacation</label>
                                                        <input type="email" class="form-control" id="Vacation"
                                                            placeholder="Type here...">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Looking For</label>
                                                        <input type="email" class="form-control" id="Looking-For"
                                                            placeholder="Type here...">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Smoking</label>
                                                        <input type="email" class="form-control" id="Smoking"
                                                            placeholder="Type here...">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Language</label>
                                                        <input type="email" class="form-control" id="Language"
                                                            placeholder="Type here...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Friend" role="tabpanel" aria-labelledby="pills-Friend-tab">
                            <div>
                                <div>
                                    <h3>FRIEND REQUESTS</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Accept</button>
                                                <button class="btn Rejectbtn mt-1">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Accept</button>
                                                <button class="btn Rejectbtn mt-1">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4 ">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Accept</button>
                                                <button class="btn Rejectbtn mt-1">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Accept</button>
                                                <button class="btn Rejectbtn mt-1">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Accept</button>
                                                <button class="btn Rejectbtn mt-1">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Accept</button>
                                                <button class="btn Rejectbtn mt-1">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Accept</button>
                                                <button class="btn Rejectbtn mt-1">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Accept</button>
                                                <button class="btn Rejectbtn mt-1">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Accept</button>
                                                <button class="btn Rejectbtn mt-1">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3>ALL FRIENDS</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="friends-tab-content">
                                            <div class="friend-img">
                                                <figure>
                                                    <img src="img/friendtab1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="friends-para">
                                                <p>Michele Storm</p>
                                                <button class="btn acceptbtn">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Groups" role="tabpanel" aria-labelledby="pills-Groups-tab">
                            <div class="groups-tabs-s">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="group_box">
                                            <div class="img_box">
                                                <figure><img src="img/grouptabs1.png" alt=""></figure>
                                            </div>
                                            <div class="group_content">
                                                <a href="#" class="group-name">Site lovers</a><br>
                                                <span class="time">5 month ago</span>
                                                <div class="about_group">
                                                    <p>
                                                        This group is only for couples that have found
                                                    </p>
                                                </div>
                                                <div class="group_type">
                                                    <p>Public Group / 28 members</p>
                                                    <button class="btn acceptbtn mt-1">28 Request</button>
                                                    <button class="btn Rejectbtn mt-1">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="group_box">
                                            <div class="img_box">
                                                <figure><img src="img/grouptab2.png" alt=""></figure>
                                            </div>
                                            <div class="group_content">
                                                <a href="#" class="group-name">Site lovers</a><br>
                                                <span class="time">5 month ago</span>
                                                <div class="about_group">
                                                    <p>
                                                        This group is only for couples that have found
                                                    </p>
                                                </div>
                                                <div class="group_type">
                                                    <p>Public Group / 28 members</p>
                                                    <button class="btn acceptbtn mt-1">28 Request</button>
                                                    <button class="btn Rejectbtn mt-1">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="group_box">
                                            <div class="img_box">
                                                <figure><img src="img/grouptab3.png" alt=""></figure>
                                            </div>
                                            <div class="group_content">
                                                <a href="#" class="group-name">Site lovers</a><br>
                                                <span class="time">5 month ago</span>
                                                <div class="about_group">
                                                    <p>
                                                        This group is only for couples that have found
                                                    </p>
                                                </div>
                                                <div class="group_type">
                                                    <p>Public Group / 28 members</p>
                                                    <button class="btn acceptbtn mt-1">28 Request</button>
                                                    <button class="btn Rejectbtn mt-1">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="group_box">
                                            <div class="img_box">
                                                <figure><img src="img/grouptab4.png" alt=""></figure>
                                            </div>
                                            <div class="group_content">
                                                <a href="#" class="group-name">Site lovers</a><br>
                                                <span class="time">5 month ago</span>
                                                <div class="about_group">
                                                    <p>
                                                        This group is only for couples that have found
                                                    </p>
                                                </div>
                                                <div class="group_type">
                                                    <p>Public Group / 28 members</p>
                                                    <button class="btn acceptbtn mt-1">28 Request</button>
                                                    <button class="btn Rejectbtn mt-1">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="group_box">
                                            <div class="img_box">
                                                <figure><img src="img/grouptab5.png" alt=""></figure>
                                            </div>
                                            <div class="group_content">
                                                <a href="#" class="group-name">Site lovers</a><br>
                                                <span class="time">5 month ago</span>
                                                <div class="about_group">
                                                    <p>
                                                        This group is only for couples that have found
                                                    </p>
                                                </div>
                                                <div class="group_type">
                                                    <p>Public Group / 28 members</p>
                                                    <button class="btn acceptbtn mt-1">28 Request</button>
                                                    <button class="btn Rejectbtn mt-1">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="group_box">
                                            <div class="img_box">
                                                <figure><img src="img/grouptab6.png" alt=""></figure>
                                            </div>
                                            <div class="group_content">
                                                <a href="#" class="group-name">Site lovers</a><br>
                                                <span class="time">5 month ago</span>
                                                <div class="about_group">
                                                    <p>
                                                        This group is only for couples that have found
                                                    </p>
                                                </div>
                                                <div class="group_type">
                                                    <p>Public Group / 28 members</p>
                                                    <button class="btn acceptbtn mt-1">28 Request</button>
                                                    <button class="btn Rejectbtn mt-1">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="total_groups">
                                    <p>Viewing 1 - 5 of 5 groups</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Media" role="tabpanel" aria-labelledby="pills-Media-tab">
                            <div class="prenext">
                                <button class="btn pre">Previous</button>
                                <button class="btn pre ">Next</button>
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
                                        <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                                        <button class="btn Rejectbtn mt-1">Delete</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="blog_img">
                                        <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                                        <button class="btn Rejectbtn mt-1">Delete</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="blog_img">
                                        <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                                        <button class="btn Rejectbtn mt-1">Delete</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="blog_img">
                                        <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                                        <button class="btn Rejectbtn mt-1">Delete</button>
                                    </div>
                                </div>
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
                                        <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                                        <button class="btn Rejectbtn mt-1">Delete</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="blog_img">
                                        <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                                        <button class="btn Rejectbtn mt-1">Delete</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="blog_img">
                                        <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                                        <button class="btn Rejectbtn mt-1">Delete</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="blog_img">
                                        <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                                        <button class="btn Rejectbtn mt-1">Delete</button>
                                    </div>
                                </div>
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
                                        <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                                        <button class="btn Rejectbtn mt-1">Delete</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="blog_img">
                                        <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                                        <button class="btn Rejectbtn mt-1">Delete</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="blog_img">
                                        <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                                        <button class="btn Rejectbtn mt-1">Delete</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="blog_img">
                                        <figure><img src="img/goup11.png" class="img-fluid" alt=""></figure>
                                        <button class="btn Rejectbtn mt-1">Delete</button>
                                    </div>
                                </div>
                            </div>
                            <div class="total_groups">
                                <p>Viewing 1 - 5 of 5 groups</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Stories" role="tabpanel"
                            aria-labelledby="pills-Stories-tab">
                            <div class="row">
                                <div class="col-md-2">
                                    <h4>Stories</h4>
                                </div>
                                <div class="col-md-8"></div>
                                <div class="col-md-2">
                                    <div class="sharestorybtn">
                                        <a href="blog.php" class="btn"> Share Story</a>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="story_box">
                                        <div class="img_box">
                                            <figure><img class="img-fluid" src="img/story11.png" alt=""></figure>
                                        </div>
                                        <div class="contentDv">
                                            <h4>Romeo &amp; Juliet</h4>
                                            <div class="blog_info">
                                                <a href="#" class="date"><i class="fa fa-calendar"
                                                        aria-hidden="true"></i> June 20,
                                                    2013</a>
                                                <a href="#" class="admin"><i class="fa fa-user" aria-hidden="true"></i>
                                                    Gabriel</a>
                                            </div>
                                            <p>
                                                Etiam vehicula odio est, sit amet volutpat nulla rutrum nec. Aliquam
                                                lorem diam,
                                                condimentum
                                                eu unde omnis iste natus error sit voluptatem
                                            </p>
                                            <a href="sharestories.php" class="btn"> READ
                                                MORE</a>
                                            <div>
                                                <a href="sharestories.php" class="btn remove"> Remove </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="story_box">
                                        <div class="img_box">
                                            <figure><img class="img-fluid" src="img/story11.png" alt=""></figure>
                                        </div>
                                        <div class="contentDv">
                                            <h4>Romeo &amp; Juliet</h4>
                                            <div class="blog_info">
                                                <a href="#" class="date"><i class="fa fa-calendar"
                                                        aria-hidden="true"></i> June 20,
                                                    2013</a>
                                                <a href="#" class="admin"><i class="fa fa-user" aria-hidden="true"></i>
                                                    Gabriel</a>
                                            </div>
                                            <p>
                                                Etiam vehicula odio est, sit amet volutpat nulla rutrum nec. Aliquam
                                                lorem diam,
                                                condimentum
                                                eu unde omnis iste natus error sit voluptatem
                                            </p>
                                            <a href="sharestories.php" class="btn"> READ
                                                MORE</a>
                                            <div>
                                                <a href="sharestories.php" class="btn remove"> Remove </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="story_box">
                                        <div class="img_box">
                                            <figure><img class="img-fluid" src="img/story11.png" alt=""></figure>
                                        </div>
                                        <div class="contentDv">
                                            <h4>Romeo &amp; Juliet</h4>
                                            <div class="blog_info">
                                                <a href="#" class="date"><i class="fa fa-calendar"
                                                        aria-hidden="true"></i> June 20,
                                                    2013</a>
                                                <a href="#" class="admin"><i class="fa fa-user" aria-hidden="true"></i>
                                                    Gabriel</a>
                                            </div>
                                            <p>
                                                Etiam vehicula odio est, sit amet volutpat nulla rutrum nec. Aliquam
                                                lorem diam,
                                                condimentum
                                                eu unde omnis iste natus error sit voluptatem
                                            </p>
                                            <a href="sharestories.php" class="btn"> READ
                                                MORE</a>
                                            <div>
                                                <a href="sharestories.php" class="btn remove"> Remove </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Membership" role="tabpanel"
                            aria-labelledby="pills-Membership-tab">
                            <div class="mem-plan-head">
                                <h3>PURCHASED MEMBERSHIP PLAN</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="membership_package mt-3">
                                        <div class="package_type for-pad">
                                            <h5>SILVER</h5>
                                        </div>
                                        <div class="package_desc for-pad">
                                            <p>
                                                <strong>$10.00 per Month</strong>
                                                <span>After your initial payment, your first 6 payments are Free.</span>
                                            </p>
                                        </div>
                                        <div class="package_price for-pad">
                                            <h3>$10.00</h3>
                                        </div>
                                        <div class="about_package for-pad">
                                            <p>
                                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                                suscipit laboriosam.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="membership_package mt-3">
                                        <ul class="package_detail for-pad">
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> View members
                                                directory
                                            </li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> View members
                                                profile
                                            </li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Access group
                                                directory
                                            </li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Access to groups
                                            </li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> View site activity
                                            </li>
                                            <li class="unavailable">Send Private messages</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Add media to your
                                                profile</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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