<!doctype html>
<html lang="en">

<head>
    <?php include "includes/head.php" ?>

    <title>About Me | Nathan Petts - UX designer</title>


</head>

<body>
    <?php include_once( "includes/googleAnalytics.php") ?>
    <?php include "includes/header.php" ?>

    <div class="container pageBackground">
        <main class="" role="main">
            <section class="row">
                <div class="articleTitle">
                    <h1>A Few Things About Me</h1>
                    <a id="content" name="content"></a>
                    <a name="content"></a>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                    <p>Now a resident of Portland OR, for ten years I was a Chicago actor and improvisor. Computers and technology have always fascinated me. I’ve figured out a way to do what I am passionate about while earning a living.</p>
                    <p>I am a lifelong learner and have a history of teaching myself skills, from JavaScript frameworks to pneumatic blood squibs. Need a backpacking stove made from a Pepsi can? I got you covered.</p>
                </div>
                <div class="col-xs-5 col-sm-offset-0 col-sm-4 col-xs-pull-4 col-sm-pull-1 pull-right">
                    <div href="#" class="thumbnail ">
                        <img src="images/portfolioHeroAlt.png" alt="A photo of UX designer Nathan Petts" class="sidebarImage">
                        <div class="caption text-center">
                            <p class="sidebar">Fig. 1 - Our Dashing Hero</p>
                        </div>
                    </div>
                    <!-- end thumbnail-->


                </div>
                <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                    <p>On the weekends you can find me with my wife hiking, at home working on my bicycle or losing to my friends at Settlers of Catan.</p>


                </div>



            </section>
            <section class="row">
                <?php include "includes/resumeButton.php" ?>
                <?php include "includes/portfolioButton.php" ?>
            </section>

        </main>
        <!--close main-->

        <?php include "includes/recommendations.php" ?>
        <?php include "includes/contactMe.php" ?>
        <!--close article-->
        <!-- <section class="row">
    <div class="col-xs-12 col-sm-8 ">
          <h1>Check me out</h1>
        </div>
    </section>
    <?php include "includes/social.php" ?>-->
        <?php include "includes/footer.php" ?>
    </div>

</body>
<?php include "includes/jsDefaults.php" ?>

</html>