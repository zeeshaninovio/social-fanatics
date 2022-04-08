<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/romantic.css">
<!-- Stylesheet -->

<!-- BreadCrumbs Start Here -->
<div class="breadcrumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item"><a href="#">Forum</a></li>
                <li class="breadcrumb-item active" aria-current="page">Romantic</li>
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
                        <h3>General discussion</h3>
                    </div>
                    <div class="forum_detail">
                        <div class="detail_strip">
                            <span>This forum has 3 topics, 11 replies, and was last updated <a href="#">7 years, 2
                                    months ago by</a> <img src="img/avatar.jpg" alt=""> Anonymous.</span>
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
                                    <td class="forum_name"><a href="#">Jealousy</a></td>
                                    <td class="topics">1</td>
                                    <td class="post">9</td>
                                    <td class="last-post">
                                        <a href="#" class="time">
                                            3 years ago
                                        </a>
                                        <div class="user">
                                            <figure><img src="img/avatar.jpg" alt=""></figure>
                                            <span class="name">Anonymous</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="forum_name"><a href="#">Cheating</a></td>
                                    <td class="topics">0</td>
                                    <td class="post">0</td>
                                    <td class="last-post">
                                        <a href="#" class="time">
                                            No Topics
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="forum_name"><a href="#">Flirting</a></td>
                                    <td class="topics">0</td>
                                    <td class="post">0</td>
                                    <td class="last-post">
                                        <a href="#" class="time">
                                            No Topics
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="forum_name"><a href="#">Dating</a></td>
                                    <td class="topics">2</td>
                                    <td class="post">5</td>
                                    <td class="last-post">
                                        <a href="#" class="time">
                                            5 years, 11 months ago
                                        </a>
                                        <div class="user">
                                            <figure><img src="img/avatar.jpg" alt=""></figure>
                                            <span class="name">Anonymous</span>
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