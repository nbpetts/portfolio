<!doctype html>
<html lang="en">

<head>
    <?php include "includes/head.php" ?>
    <title>Worthy Words | Nathan Petts - UX designer</title>

</head>

<body>
    <?php include_once( "includes/googleAnalytics.php") ?>
    <?php include "includes/header.php" ?>
    <div class="container pageBackground">

        <section class="row">
            <div class="portfolioArticleTitle">
                <h1>Worthy Words</h1>
                <a id="content" name="content"></a>
            </div>

        </section>





        <article class="continer">

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>The Problem</h2>
                    <p>Adventure Stage Chicago wanted to connect with their young audiences in a unique way on a shoestring budget.</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>My Role</h2>
                    <p>App Designer/Developer</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig1Modal">
                        <img src="images/worthyWords.png" alt="The main page of Worthy Words the app" class="img-responsive">

                        <p class="text-center">Fig. 1 Worthy Words home page.</p>
                    </a>


                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>In the Beginning...</h2>
                    <p>Worthy Words is a project that I designed and developed in conjunction with Adventure Stage Chicago. Adventure Stage produces inventive theater for young audiences between the ages of six and sixteen. They were creating a show called Worthy that deals with issues of identity and the stories our culture tells. They wanted an app or website that would allow them to connect to their young audience in a digital way.</p>
                    <p>I wanted the theater company to be a major partner in this endeavor. The more they got involved, the more likely I would be able to create a design that met their needs. The first thing I did was have a meeting with the director of the show and the executive director of the theater company. With both providing their unique perspectives, we were able to outline some ideas for the app. We also discussed the resources that might be available. The bad news: they could commit almost no resources. They might be able to host an HTML page on their webserver, but they couldn't spare any money for development from the company that manages their site. The good news: we came out of the discussion with two strong ideas. One was a Mad Lib- style story toy and the other a “paper doll” type of toy that would allow the audience members to create characters of their choosing.</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-2">
                    <div class=" thumbnail">
                        <a href="#" data-toggle="modal" data-target="#fig2Modal">
                            <img src="images/worthyWordsSketch.png" alt="An early sketch of Worthy Words the app" class="img-responsive">
                            <p class="text-center">Fig. 2 Worthy Words early sketches.</p>
                        </a>


                    </div>
                </div>
                <div class="col-xs-6 col-xs-offset-3  col-sm-4 col-sm-offset-0">
                    <div class="thumbnail">
                        <a href="#" data-toggle="modal" data-target="#fig3Modal">
                            <img src="images/worthyWordsPrincessPickerPrototype.png" alt="the paper doll version of the worthy words prototype" class="img-responsive">
                            <p class="text-center">Fig. 3 Princess Picker. An alternative to Worthy Words.</p>
                        </a>


                    </div>
                </div>
            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Prototyping</h2>
                    <p>I sketched both designs and then developed a prototype of each. For the story app, I mocked up a basic prototype using JavaScript and a word tagging library. When users clicked on a highlighted word in the story, a random, grammatically correct word would replace it. For the paper doll mock-up, I repurposed a small image switching program I wrote for a class. I packaged these two prototypes with some context slides and sent them to the production team at Adventure Stage.</p>
                    <p>After trying out the prototypes and sharing them with some of their audience members, the production team decided on the storytelling app. But, they thought that it would be more fun if the authors could create a curated list of words the program would swap out instead of using the random approach. I rewrote the app to allow authors to specify the words to be swapped. This made for funnier, more interesting stories.</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig4Modal">
                        <img src="images/worthyWordsV0.png" alt="The main page of an early version of Worthy Words the app" class="img-responsive">
                        <p class="text-center">Fig. 4 Worthy Words: version .01.</p>
                    </a>


                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Testing and Iteration</h2>
                    <p>When I delivered this version of the program, we had both theater company and audience members test it again. At a follow-up meeting, we got another round of good news and bad news. Bad news: We can’t host the page on the theater company’s web server because they cannot afford it. Good news: audience members really like the app, but want a way to share their stories. We didn't want to use a social network because the terms of service require users be older than most of Adventure Stage’s audience. But, now that I wasn’t restricted to a single page, I could set up the app so users could email their stories directly to the team at Adventure Stage.</p>
                    <p>I created a form for the app, styled it and debugged it. Meanwhile, the artistic director tried to see if he could scrounge the funds for a small server. Luckily, he was successful and we got the site into production. We were able to get the app in front of a number of young audience members before opening night. This led to a lot of feedback, which in turn led to some wordsmithing so that the audiences would enjoy the app even more. We also learned that teachers would use the app in classes offered by Adventure Stage.</p>
                    <h2>Lessons Learned</h2>
                    <ul>
                        <li><strong>Be Ready to change.</strong> Working with users means that good ideas come from many directions and points of view. I had to be ready to embrace feedback and change.
                        </li>
                        <li><strong>Strong communication defeats confusion.</strong> At points during this project many specifics were up in the air. Where would we host the app? Who should I talk to? I kept in constant contact with the folks at Adventure Stage so that I could better understand their needs and stay abreast of any last minute changes.</li>
                        <li><strong>Constraints inspire creativity.</strong> It’s my experience that putting limitations on creative people helps them dig deeper into their imaginations and create stronger art. Lack of funding could have been an obstacle, but we focused on what we could accomplish at each step.</li>
                    </ul>
                    <h2>The Final Product</h2>
                    <p><a target="_blank" href="http://www.worthy-words.net">Check out Worthy Words here!</a>
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
<div class="modal fade" id="fig1Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body row">
                <div class="col-xs-12 text-center">
                    <img src="images/worthyWords.png" class="img-responsive modalImage" alt="The main page of Worthy Words the app">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 1 Worthy Words home page.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="fig2Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body row">
                <div class="col-xs-12 text-center">
                    <img src="images/worthyWordsSketch.png" class="img-responsive modalImage" alt="An early sketch of Worthy Words the app">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 2 Worthy Words early sketches.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="fig3Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body row">
                <div class="col-xs-12 text-center">
                    <img src="images/worthyWordsPrincessPickerPrototype.png" class="img-responsive modalImage" alt="the paper doll version of the worthy words prototype">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 3 Princess Picker. An alternative to Worthy Words.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="fig4Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body row">
                <div class="col-xs-12 text-center">
                    <img src="images/worthyWordsV0.png" class="img-responsive modalImage" alt="The main page of an early version of Worthy Words the app">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 4 Worthy Words: version .01.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>


</html>