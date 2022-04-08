<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/platonic.css">
<!-- Stylesheet -->

<!-- BreadCrumbs Start Here -->
<div class="breadcrumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item"><a href="#">Forum</a></li>
                <li class="breadcrumb-item active" aria-current="page">Platonic</li>
            </ol>
        </nav>
    </div>
</div>
<!-- BreadCrumbs Start Here -->

<section class="forum_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="romantic">
                    <div class="heading">
                        <h3>Platonic</h3>
                    </div>
                    <div class="forum_detail">
                        <div class="detail_strip">
                            <span>This forum has 0 topics, and was last updated No Topics by .
                                <img src="img/avatar.jpg" alt=""></span>
                        </div>
                        <div class="table_wrapper table-responsive">
                            <table class="table">
                                <tr class="top_bar">
                                    <th class="forum_name">Forum</th>
                                    <th class="topics">Topics</th>
                                    <th class="post">Posts</th>
                                    <th class="last-post">Last Post</th>
                                </tr>
                                <tr>
                                    <td class="forum_name"><a href="#">Friendship</a></td>
                                    <td class="topics">0</td>
                                    <td class="post">0</td>
                                    <td class="last-post">
                                        <a href="#" class="time">
                                            No Topics
                                        </a>
                                        <div class="user">
                                            <figure><img src="img/avatar.jpg" alt=""></figure>
                                            <span class="name">Gabriel</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="forum_name"><a href="#">Business and Professional Relationships</a></td>
                                    <td class="topics">0</td>
                                    <td class="post">0</td>
                                    <td class="last-post">
                                        <a href="#" class="time">
                                            No Topics
                                        </a>
                                        <div class="user">
                                            <figure><img src="img/avatar.jpg" alt=""></figure>
                                            <span class="name">Gabriel</span>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="note">
                    <span class="important_note">Oh, bother! No topics were found here.</span>
                </div>
                <div class="note">
                    <span class="important_note">You must be logged in to create new topics.</span>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Sidebar Start Here -->
                <?php include 'inc/sidebar.php';?>
                <!-- Sidebar Start Here -->
            </div>
        </div>
    </div>
</section>

<!-- Testimonials & Newsletter -->
<?php include 'inc/above-footer.php'?>
<!-- Testimonials & Newsletter -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->