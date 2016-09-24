<!doctype html>
<html lang="en">

<head>
    <?php include "includes/head.php" ?>
    <title>Disingenuous Unified Monetary Bank | Nathan Petts - UX designer</title>


</head>

<body>
    <?php include_once( "includes/googleAnalytics.php") ?>

    <?php include "includes/header.php" ?>
    <div class="container pageBackground">

        <section class="row">
            <div class="portfolioArticleTitle ">
                <h1>Disingenuous Unified Monetary Bank</h1>
                <a id="content" name="content"></a>
                <a name="content"></a>
            </div>

        </section>

        <article class="continer">



            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>The Problem</h2>
                    <p>How do you design an information architecture that offers bank users access to all of the functions available at the branch or ATM? Furthermore, how do you design with a bias toward users who seldom use the system?</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>My Role</h2>
                    <p>App Design, Sketching, Axure Wireframing</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Sketching to Determine User Requirements</h2>
                    <p>These sketches demonstrate the evolution of thought and design for this project. Sketching helps me gather my thoughts and visualize how the app design should come together.</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-2">
                    <div class=" thumbnail">
                        <a href="#" data-toggle="modal" data-target="#fig1Modal">
                            <img src="images/dumbFig1.png" alt="An early sketch that shows the program flow" class="img-responsive">
                            <p class="text-center">Fig. 1 - Early sketches.</p>
                        </a>


                    </div>
                </div>
                <div class="col-xs-6 col-xs-offset-3  col-sm-4 col-sm-offset-0">
                    <div class="thumbnail">
                        <a href="#" data-toggle="modal" data-target="#fig2Modal">
                            <img src="images/dumbFig2.png" alt="sketches that show program requirements" class="img-responsive">
                            <p class="text-center">Fig. 2 - This sketch lists requirements of the app.</p>
                        </a>


                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Iterations</h2>
                    <p>While the first design depicted below incorporates all of the required functions, it doesn’t flow and causes the user to scroll back and forth to reference settings between accounts. Also there is a lot of repetition and unnecessary table borders. This adds to the cluttered feel of the app.</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">

                    <a href="#" data-toggle="modal" data-target="#fig3Modal">
                        <img src="images/dumbFig3.png" alt="early design of the DUMB bank app. Lots of table borders and clutter" class="img-responsive">
                        <p class="text-center">Fig. 3 - The first design. The table borders contribute to a cluttered design.</p>
                    </a>



                </div>
            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <p>The second version provides more information at the user’s fingertips. It is easier to use as the options are immediately apparent. Also the user can tell quickly which accounts are already set up for alerts.</p>
                </div>
            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">

                    <a href="#" data-toggle="modal" data-target="#fig4Modal">
                        <img src="images/dumbFig4.png" alt="the final design, much simpler visually">
                        <p class="text-center">Fig. 4 - The final design.</p>
                    </a>


                </div>
            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Lessons Learned</h2>
                    <ul>
                        <li><strong>Sketching helps to identify and detail user requirements.</strong> The process of sketching an interface requires the designer to think through and ask about all of the required options. It also provides a ready to-do list when coding the app.</li>
                        <li><strong>The layout can make or break a design.</strong> A user should be able to view information easily and understand how to use the app almost immediately.</li>
                        <li><strong>Keeping options and functions visible and simple helps improve learnability.</strong> 
                        </li>
                    </ul>
                    <h2>The Final Product</h2>
                    <a target="_blank" href="download.php?file=downloads/Dumb_Design_Document.pdf">Download the design document!</a> 
                    <br>


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
                    <img src="images/dumbFig1.png" class="img-responsive modalImage" alt="An early sketch that shows the program flow">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 1 - Early sketches.</p>
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
                    <img src="images/dumbFig2.png" class="img-responsive modalImage" alt="sketches that show program requirements">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 2 - This sketch lists requirements of the app.</p>
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
                    <img src="images/dumbFig3.png" class="img-responsive modalImage" alt="early design of the DUMB bank app. Lots of table borders and clutter">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 3 - The first design. The table borders contribute to a cluttered design.</p>
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
                    <img src="images/dumbFig4.png" class="img-responsive modalImage" alt="the final design, much simpler visually">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 4 - The final design.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>

</html>