<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/groups.css">
<!-- Stylesheet -->

<!-- BreadCrumbs Start Here -->
<div class="breadcrumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">Groups</li>
            </ol>
        </nav>
    </div>
</div>
<!-- BreadCrumbs Start Here -->

<!-- Groups Sec Start Here -->
<section class="group_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="search_box">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search Groups...">
                    </div>
                    <button type="button">Search</button>
                </div>
                <div class="top_bar">
                    <div class="members_count">
                        <a href="#">All Groups</a>
                        <span class="count">5</span>
                    </div>
                    <div class="filter_dropdown">
                        <select class="form-control">
                            <option selected>Last Active</option>
                            <option>Most Members</option>
                            <option>Newly Created</option>
                            <option>Alphabetical</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="group_box">
                            <div class="img_box">
                                <figure><img src="img/group1.jpg" alt=""></figure>
                            </div>
                            <div class="group_content">
                                <a href="#" class="group-name">Site lovers</a><br />
                                <span class="time">a month ago</span>
                                <div class="about_group">
                                    <p>
                                        This group is only for couples that have found
                                    </p>
                                </div>
                                <div class="group_type">
                                    <p>Public Group / 28 members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="group_box">
                            <div class="img_box">
                                <figure><img src="img/group2.jpg" alt=""></figure>
                            </div>
                            <div class="group_content">
                                <a href="#" class="group-name">Fast food Junkies</a><br />
                                <span class="time">a month ago</span>
                                <div class="about_group">
                                    <p>
                                        This group is for all the fast food junkies out
                                    </p>
                                </div>
                                <div class="group_type">
                                    <p>Public Group / 9 members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="group_box">
                            <div class="img_box">
                                <figure><img src="img/group3.png" alt=""></figure>
                            </div>
                            <div class="group_content">
                                <a href="#" class="group-name">Couples</a><br />
                                <span class="time">7 months ago</span>
                                <div class="about_group">
                                    <p>
                                        Couples only group.
                                        Lorem ipsum dolor sit
                                    </p>
                                </div>
                                <div class="group_type">
                                    <p>Public Group / 13 members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="group_box">
                            <div class="img_box">
                                <figure><img src="img/group4.png" alt=""></figure>
                            </div>
                            <div class="group_content">
                                <a href="#" class="group-name">Virtual only</a><br />
                                <span class="time">2 years ago</span>
                                <div class="about_group">
                                    <p>
                                        Group only for virtual relationships
                                    </p>
                                </div>
                                <div class="group_type">
                                    <p>Public Group / 8 members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="group_box">
                            <div class="img_box">
                                <figure><img src="img/group5.png" alt=""></figure>
                            </div>
                            <div class="group_content">
                                <a href="#" class="group-name">VIP Users</a><br />
                                <span class="time">8 years ago</span>
                                <div class="about_group">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur
                                    </p>
                                </div>
                                <div class="group_type">
                                    <p>Private Group / 1 member</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="total_groups">
                    <p>Viewing 1 - 5 of 5 groups</p>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Sidebar Start Here -->
                <?php include 'inc/sidebar.php';?>
                <!-- Sidebar End Here -->
            </div>
        </div>
    </div>
</section>
<!-- Groups Sec End Here -->

<!-- Testimonials & Newsletter -->
<?php include 'inc/above-footer.php'?>
<!-- Testimonials & Newsletter -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->