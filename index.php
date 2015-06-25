<!doctype html>
<html lang="en">

<head>
    <?php include "includes/head.php" ?>
    <title>Nathan Petts | UX designer</title>
</head>

<body data-spy="scroll" data-target=".navbar">

    <a href=” #content” class="hidden"> Skip to content</a>
    <?php include_once( "includes/googleAnalytics.php") ?>
    <section class="container myJumbotron" id="myJumbotron">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-sm-offset-1">
                <h1 class="hero">With <span class="heroCallout">Empathy</span>, <span class="heroCallout">Humor</span> and <span class="heroCallout">Data</span>, I help people tell their stories. I am UX designer <span class="heroCallout">Nathan Petts</span>.</h1>

            </div>
            <!--end h1-->

        </div>
        <!--end row-->
        <div class="row">
            <img src="images/speachCaret.svg" alt="Speach Bubble Caret" class="img-responsive hidden-xs col-xs-1 col-xs-offset-7 ">
        </div>
        <!--end row-->
        <div class="row bottomAlign">
            <a class="hidden-xs  col-xs-1 col-sm-1 col-sm-offset-6 downArrow animated bounce" href="#content">
                <img src="images/downArrow.svg" alt="Click Here to Skip to the main Content">
            </a>
            <img src="images/pixelGuy.png" alt="Pixel Version of Nathan Petts" class="img-responsive col-xs-1 col-xs-offset-1 nathan hidden-xs ">

        </div>
        <!--end row-->
        <div class="row">
            <div class="col-sm-7 col-sm-offset-4 grass hidden-xs "></div>
        </div>
        <!--end row-->
        <div class="row hidden-xs ">
            <div class="col-sm-7 col-sm-offset-4 rock"></div>
        </div>
        <!--end row-->
    </section>
    <!--close contianer-->

    <?php include "includes/header.php" ?>

    <div class="container pageBackground">
        <main class="">
            <section class="row">
                <div class="col-xs-12 col-sm-2 col-sm-offset-1">
                    <h1>Hi!</h1>
                    <a id="content" name="content"></a>
                    <a name="content"></a>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                    <p>Thanks for dropping by. The way I see it, connecting with users—meeting them where they are with a spirit of optimism—is key to making useful software. I speak computer AND human, understanding systems and empathizing with the people who use them.</p>
                    <p>I love learning. All of it; even the boring stuff. Last summer, I researched section 508 compliance for governmental websites, then <a href="http://www.matec.info/508">presented a webinar</a> about it using kittens and JavaScript frameworks. After years of teaching myself programs such as Gimp and HTML, I am currently earning a master’s degree in Human Computer Interaction at DePaul University. In the near future I would like to learn more about: Node.js, user research methods, intelligent user agents, blacksmithing and developing an app that my father can use without swearing.</p>

                </div>
                <div class="col-xs-5 col-sm-offset-0 col-sm-4 col-xs-pull-4 col-sm-pull-1 pull-right">
                    <div href="#" class="thumbnail ">
                        <img src="images/scriptCourrierWithCallouts.png" alt="A prototype of the Script Courier app" class="sidebarImage">
                        <div class="caption text-center">
                            <p class="sidebar">Fig. 1 - Script Courier Prototype</p>
                        </div>
                    </div>
                    <!-- end thumbnail-->
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                    <p>I get stuff done. It started early for me. My middle school band leader (*pushes glasses up nose*) used to say “to be on time is to be late,” and I took this to heart. I love me a to-do list and love it more when it is fully crossed off—on time.</p>
                    <p>I am excited to do quality work with a strong team. Are you as excited as I am?
                    </p>

                </div>
            </section>

            <section class="row">
                <?php include "includes/resumeButton.php" ?>
            </section>
            <!--          <a name="portfolio"></a>-->
            <section id="portfolioSection">
                <?php include "includes/PortfolioSnippit.php" ?>
            </section>

        </main>
        <!--close main-->


        <?php include "includes/contactMe.php" ?>

        <?php include "includes/footer.php" ?>
    </div>

</body>
<?php include "includes/jsDefaults.php" ?>
</html>