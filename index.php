<!doctype html>
<html lang="en">

<head>
  <?php include "includes/head.php" ?>
  <title>Nathan Petts | UX designer</title>
</head>

<body data-spy="scroll" data-target=".navbar">

  <a href="#content" class="hidden"> Skip to content</a>
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
      <img src="images/speachCaret.svg" alt="Speach Bubble Caret" class="img-responsive  col-xs-1 col-xs-offset-6  col-sm-offset-7">
    </div>
    <!--end row-->
    <div class="row bottomAlign">
      <a class="  col-xs-1 col-sm-1 col-xs-offset-5 col-sm-offset-6 downArrow " href="#content">
        <img src="images/downArrow.svg" alt="Click Here to Skip to the main Content">
      </a>
      <img src="images/pixelGuy.png" alt="Pixel Version of Nathan Petts" class="img-responsive col-xs-1 col-xs-offset-1 col-sm-2 col-md-2 nathan   ">

    </div>
    <!--end row-->
    <div class="row">
      <div class="col-xs-7 col-xs-offset-4 grass  "></div>
    </div>
    <!--end row-->
    <div class="row  ">
      <div class="col-xs-7 col-xs-offset-4 rock"></div>
    </div>
    <!--end row-->
  </section>
  <!--close contianer-->

  <?php include "includes/header.php" ?>

  <div class="container pageBackground">
    <main class="">
      <section class="row">
        <div class="articleTitle">
          <h1>Hi!</h1>
          <a id="content" name="content"></a>
          <a name="content"></a>
        </div>

      </section>
      <section class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-1">
          <p>Thanks for dropping by.</p>
          <p>The way I see it, connecting with users—meeting them where they are with a spirit of optimism—is the key to making useful software. Most technology is not designed with people in mind. I want to bring a user-centered focus to software creation. That’s why I earned a master’s degree in Human Computer Interaction at DePaul University. One day, I hope to develop an app that my father can use without swearing.</p>
        </div>
        <div class="col-xs-5 col-sm-offset-0 col-sm-4 col-xs-pull-4 col-sm-pull-1 pull-right">
          <a href="worthywords.php" class="">
            <div href="#" class="thumbnail ">
              <img src="images/Fig1.png" alt="A prototype of the Worthy Words app" class="sidebarImage">
              <div class="caption text-center">
                <p class="sidebar">Fig. 1 - Learn about Worthy Words, an app I created.</p>
              </div>
            </div>

          </a>
          <!-- end thumbnail-->
        </div>
        <div class="col-xs-12 col-sm-6 col-sm-offset-1">
          <p>Over the past ten years, I’ve had a lot of practice helping people implement, understand and use technology. I’ve seen first-hand what makes people throw their hands up in frustration. I’ve also seen the light bulbs go on when they encounter well-designed technology. So now I’m bilingual - I speak computer AND human; I understand systems and empathize with the people who use them.</p>
          <p>I’m ready. I’ve experienced the problem, I’ve been learning how to solve it and I’m eager to get started. I am excited to do quality work with a strong team. Are you as excited as I am?</p>

        </div>
        

      </section>

      <section class="row">
        <?php include "includes/resumeButton.php" ?>
      </section>
      <!--          <a name="portfolio"></a>-->
      <section id="portfolioSection">
        <?php include "includes/portfolioSnippit.php" ?>
      </section>

    </main>
    <!--close main-->

    <?php include "includes/recommendations.php" ?>
    <?php include "includes/contactMe.php" ?>

    <?php include "includes/footer.php" ?>
  </div>

</body>
<?php include "includes/jsDefaults.php" ?>

</html>