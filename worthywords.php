<!doctype html>
<html lang="en">

<head>
<?php include "includes/head.php" ?>
  <title>Worthy Words | Nathan Petts - UX designer</title>
  
</head>

<body>
  <?php include_once("includes/googleAnalytics.php") ?>
  <?php include "includes/header.php" ?>
  <div class="container pageBackground">

    <section class="row">
      <div class="col-xs-12 col-sm-offset-2 col-sm-8 ">
        <h1>Worthy Words</h1>
        <a id="content" name="content"></a> 
      </div>

    </section>





    <article class="continer">

      <section class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h2>The Problem:</h2>
          <p>Adventure Stage Chicago wanted to connect with their audiences in a unique way on a shoestring budget</p>
        </div>

      </section>
      <section class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h2>My Role:</h2>
          <p>App Designer/Developer</p>
        </div>

      </section>
      <section class="row">
        <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
          <img src="images/worthyWords.png" alt="The main page of Worthy Words the app" class="img-responsive">
          <p class="text-center">Fig. 1 Worthy Words Home Page</p>


        </div>

      </section>
      <section class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h2>In the Beginning...</h2>
          <p>Worthy Words is a project that I designed and developed in conjunction with Adventure Stage Chicago. They were putting on a show called Worthy that deals with issues of identity and the stories our culture tells. Adventure Stage puts on inventive theater for young audiences between the ages of six and sixteen. They were interested in creating an app or website that would allow them to connect to their young audience in a unique way. </p>
          <p>I knew that I wanted the theater to be a major partner in this endeavor, and that the more I could involve them, the more likely I would be to create a design that met their needs. The first thing I did was have a meeting with the director of the show and the executive director of the theater company. With this multidisciplinary team, we were able to outline some ideas of what we could do. We talked about some ideas for the app, and also discussed the resources that might be available. The bad news: they could commit almost no resources. They might be able to host an html page on their webserver, but they couldn't spare any money for development from the company that managed their site. The good news: we came out of the discussion with two strong ideas. A mad libs style story toy and a paper doll type of toy that would allow the audience members to make characters of their choosing.</p>
        </div>

      </section>
      <section class="row">
        <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-2">
          <div class=" thumbnail">
            <img src="images/worthyWordsSketch.png" alt="The main page of Worthy Words the app" class="img-responsive">
            <p class="text-center">Fig. 2 Worthy Words: Early Sketches</p>


          </div>
        </div>
        <div class="col-xs-6 col-xs-offset-3  col-sm-4 col-sm-offset-0">
          <div class="thumbnail">
            <img src="images/worthyWordsPrincessPickerPrototype.png" alt="the paper doll version of the worthy words prototype" class="img-responsive">
            <p class="text-center">Fig. 3 Princess Picker: an Alternative to Worthy Words</p>


          </div>
        </div>
      </section>
      <section class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h2>Prototyping</h2>
          <p>I knew the best way to make a decision between the two designs was to try them out. I went away and sketched both designs and then developed a prototype of both of the designs. For the story app, I mocked up a basic prototype using javascript and a word tagging library. I wrote the program so that when users clicked on certain words in the story, the word was replaced by a random word of the same part of speech. I repurposed a small image switching program that I wrote for a class to mock up a prototype for the paper doll prototype. I packaged these two prototypes with some context slides and sent them to the production team at Adventure Stage.</p>
          <p>With the prototypes to play with, and to give to some of their audience members, it was clear to the production team that they wanted to go with the storytelling app. It was also clear that the random words weren’t nearly as much fun as a list of words that authors could choose to switch out in the stories. So, I rewrote the app so that authors could specify which words would swap out and what words would replace the swappable words. </p>
        </div>

      </section>
      <section class="row">
        <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
          <img src="images/worthyWordsV0.png" alt="The main page of an early version of Worthy Words the app" class="img-responsive">
          <p class="text-center">Fig. 4 Worthy Words: Version .01</p>


        </div>

      </section>
      <section class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h2>Testing and Iteration</h2>
          <p>When I delivered this version of the program, we again shared it with both theater company members and audience members. After we tested it on those users, we met again. Another round of good news/bad news. Bad news: We can’t host the page on the theater company’s web server because the managing company will only add a new page with a payment. Good news: audience members like the app, but want a way to share their stories with us. We had decided that we didn't want to use a social network because their terms of service required that users be older than most of Adventure Stage’s audience. But, now that I wasn’t restricted to a single page, I knew that I could set the page up so that users could email their stories directly to the team at Adventure Stage. So, I went away to create a form for the app, style it and start to debug it. Our artistic director went away to see if he could scrounge the funds for a small server. Luckily, he was able to find those funds, and we got the site onto production. We were able to get the app in front of a number young audience members before the show opened and we widely advertised the site. This lead to a lot of insight into fine tuning the wording so that the audiences would enjoy the app. We also learned more about how the app was being used in the classes that Adventure Stage offered to schools. </p>
          <h2>Lessons Learned</h2>
          <ul>
            <li><strong>Be Ready to change:</strong> Working with users meant that good ideas came out of all fields. I had to be ready to embrace that change.</li>
            <li><strong>Strong Communication Defeats Confusion:</strong> At points in this project many specifics were up in the air. Where would we host the app? Who should I talk to? I kept in constant contact with the folks at Adventure Stage so that I could be notified about last minute changes.</li>
          </ul>
          <h2>The Final Product</h2>
          <p>I incorporated these insights into the final version of Worthy Words that I delivered to the client in time for opening night. <a target="_blank" href="http://www.worthy-words.net">Check out Worthy Words here!</a> </p>
        </div>

      </section>
<section class="row">
  <?php include "includes/backToPortfolioButton.php" ?>
       
      </section>


    </article>
    <!--close article-->

    <?php include "includes/footer.php" ?>
  </div>

</body>
<?php include "includes/jsDefaults.php" ?>

</html>