<!doctype html>
<html lang="en">

<head>
    <?php include "includes/head.php" ?>
    <title>Equipment Inventory | Nathan Petts - UX designer</title>


</head>

<body>
    <?php include_once( "includes/googleAnalytics.php") ?>

    <?php include "includes/header.php" ?>
    <div class="container pageBackground">

        <section class="row">
            <div class="portfolioArticleTitle">
                <h1>Equipment Circulation Software</h1>
                <a id="content" name="content"></a>
                <a name="content"></a>
            </div>

        </section>

        <article class="continer">



            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>The Problem</h2>
                    <p>How can we use a lightweight web service, driven by Backbone.js and MongoDB, to take the place of a pen and paper tracking system for loaned equipment?</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>My Role</h2>
                    <p>One of my earliest projects as a Developer</p>
                </div>
            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">

                    <a href="#" data-toggle="modal" data-target="#fig1Modal">
                        <img src="images/equipmentFig1.png" alt="a screenshot of the equipment checkout tool" class="img-responsive">
                        <p class="text-center">Fig. 1 Check out equipment and keep track of who has it!</p>
                    </a>



                </div>
            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Sketching</h2>
                    <p>I began my design process with sketches of the interface as well as pseudo code. This rapid sketching allowed me to conceptualize the necessary functions as well as make sure that the flow of the program worked. Redesigning is easy with a pencil.</p>
                </div>

            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Styling</h2>
                    <p>I decided to use a framework called Skeleton. I was not used to working with frameworks at the time, so I decided to go with this very small and simple framework for styling.</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">

                    <a href="#" data-toggle="modal" data-target="#fig2Modal">
                        <img src="images/equipmentFig2.png" alt="A screenshot that shows the equipment deletion process" class="img-responsive">
                        <p class="text-center">Fig. 2 Delete the equipment when it is no longer needed!</p>
                    </a>
                </div>
            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Developing with a Team</h2>
                    <p>Once I had finished with this project as an assignment, I put it on the shelf, intending to find some time to finish it off and see if I could implement it at my workplace. This summer, my graduate assistant was looking for a longer term project and began to move this project forward with my help. When I was working as a solo developer I did not employ any version control, something I didn’t know much about at the time. Since then I have used Git and Github on several projects and knew that it would be very helpful. I migrated the code to Github where my graduate student can feel free to clone and mess around with the codebase.</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">

                    <a href="#" data-toggle="modal" data-target="#fig3Modal">
                        <img src="images/equipmentFig3.png" alt="A screenshot of the repo on Github." class="img-responsive">
                        <p class="text-center">Fig. 3 Github, go!</p>
                    </a>
                </div>
            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Next Steps</h2>
                    <p>We will be moving the app to the Bootstrap framework and then moving the database to a mySQL setup to match the rest of the web technology at MATEC. We can then begin testing the app and move toward deployment.</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Lessons Learned</h2>
                    <ul>
                        <li><strong>Programming and Web Apps are hard.</strong> This was the largest project I had ever tried at the time, and it was difficult to wrap my mind around the MVC framework that Backbone provided. It was also my first round with local development environments. It left me with a million questions, but after revisiting this project, I can see that I have made a lot of progress.</li>
                        <li><strong>Git all projects, ever, always.</strong> Version control would have helped a lot on this project and a few before this one. Having had more exposure to Git, I now consider this necessary for any future projects.</li>

                    </ul>
                    <h2>The Repo</h2>
                    <a target="_blank" href="https://github.com/nbpetts/A3">Go Fork It!</a>



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
                    <img src="images/equipmentFig1.png" class="img-responsive modalImage" alt="a screenshot of the equipment checkout tool">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 1 Check out equipment and keep track of who has it!</p>
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
                    <img src="images/equipmentFig2.png" class="img-responsive modalImage" alt="A screenshot that shows the equipment deletion process">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 2 Delete the equipment when it is no longer needed!</p>
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
                    <img src="images/equipmentFig3.png" class="img-responsive modalImage" alt="A screenshot of the repo on Github.">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 3 Github, go!</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>


</html>