<div class="newspaper-main-menu" id="stickyMenu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="newspaperNav">

                <!-- Logo -->
                <div class="logo">
                    <a href="index"><img src="img/core-img/logo.png" alt=""></a>
                </div>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li class="active"><a href="index">Home</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index">Home</a></li>
                                    <li><a href="catagories-post">Catagories</a></li>
                                    <li><a href="single-post">Single Articles</a></li>
                                    <li><a href="about">About Us</a></li>
                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </li>
                            <?php
                                $query = "SELECT * FROM categories LIMIT 9";
                                $res = mysqli_query($conn,$query);
                                $count = mysqli_num_rows($res);
                                if($count > 0){
                                    while($row = mysqli_fetch_array($res)){
                                        $id = $row['id'];
                                        $category = $row['category'];
                                        echo "<li><a href='catagories-post?cat_id=".$id." '>$category</a></li>";
                                    }
                                }
                                else{
                                    echo 'Nothing is here';
                                }
                            ?>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>