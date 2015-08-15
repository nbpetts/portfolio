<!doctype html>
<html lang="en">

<head>
    <?php include "includes/head.php" ?>

    <title>CardioGlass | Nathan Petts - UX designer</title>

</head>

<body>
    <?php include_once( "includes/googleAnalytics.php") ?>

    <?php include "includes/header.php" ?>
    <div class="container pageBackground">

        <section class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 ">
                <h1>CardioGlass</h1>
                <a id="content" name="content"></a>
                <a name="content"></a>
            </div>

        </section>

        <article class="continer">



            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>The Problem:</h2>
                    <p>How do you diagram a complicated software program so that everyone involved in building it can understand the user requirements? We outlined a complex web and device driven app for the Google Glass platform in Unified Modeling Language (UML).</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>My Role:</h2>
                    <p>UML Sequence and Class Diagram designer, Design Scenarios and Use Case writer</p>
                </div>
            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Research Process</h2>
                    <p>We began with research into the medical device field and Google Glass. We envisioned a system that might monitor a patient’s biometric data and provide alerts for the patient and physician about conditions such as heart problems or seizures.</p>
                </div>

            </section>

            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">

                    <a href="#" data-toggle="modal" data-target="#fig1Modal">
                        <img src="images/cardioglassFig1.png" alt="An overview diagram, showing the actors involved in the CardioGlass platform" class="img-responsive">
                        <p class="text-center">Fig. 1 CardioGlass overview.</p>
                    </a>



                </div>
            </section>


            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">

                    <p>We then identified stakeholders and a feature backlog. Next we assembled some brief use cases, a use case diagram and one detailed use case.</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">

                    <a href="#" data-toggle="modal" data-target="#fig2Modal">
                        <img src="images/cardioglassFig2.png" alt="An example use case for CardioGlass that details how the system supports reducing stress in a user" class="img-responsive">
                        <p class="text-center">Fig. 2 Example use case.</p>
                    </a>
                </div>
            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Domain Model Diagram Process</h2>
                    <p>We then created a domain model diagram. I was primarily responsible for the layout and design of the images. My teammates helped to align the diagrams with object-oriented principles. We created a use case realization with a design scenario, a class responsibility table, sequence diagrams and a design class diagram.</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">

                    <a href="#" data-toggle="modal" data-target="#fig3Modal">
                        <img src="images/cardioglassFig3.png" alt="Some classes involved in the CardioGlass platform" class="img-responsive">
                        <p class="text-center">Fig. 3 Domain model diagram.</p>
                    </a>
                </div>
            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">

                    <a href="#" data-toggle="modal" data-target="#fig4Modal">
                        <img src="images/cardioglassFig4.png" alt="one of our sequence diagrams. This one show how the system would analyse symptoms" class="img-responsive">
                        <p class="text-center">Fig. 4 Sequence diagram.</p>
                    </a>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Lessons Learned</h2>
                    <ul>
                        <li><strong>Really, though, what is OOP?</strong> Diagramming a complex system like this really helped me take the first steps toward understanding object-oriented programming. I still have a way to go, but I will remember this process as a major “aha” moment.</li>
                        <li><strong>Everyone loves diagrams.</strong> UML provides a strong visual language for documenting the processes behind a complex system.</li>

                    </ul>
                    <h2>The Final Product</h2>
                    <a target="_blank" href="download.php?file=CardioGlass_Design_Document.pdf">Download our UML design document!</a>



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
                    <img src="images/cardioglassFig1.png" class="img-responsive modalImage" alt="An overview diagram, showing the actors involved in the CardioGlass platform">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 1 CardioGlass overview.</p>
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
                    <img src="images/cardioglassFig2.png" class="img-responsive modalImage" alt="An example use case for CardioGlass that details how the system supports reducing stress in a user">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 2 Example use case.</p>
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
                    <img src="images/cardioglassFig3.png" class="img-responsive modalImage" alt="Some classes involved in the CardioGlass platform">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 3 Domain model diagram.</p>
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
                    <img src="images/cardioglassFig4.png" class="img-responsive modalImage" alt="one of our sequence diagrams. This one show how the system would analyse symptoms">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 4 Sequence diagram.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>

</html>