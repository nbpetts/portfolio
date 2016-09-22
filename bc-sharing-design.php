<!doctype html>
<html lang="en">

<head>
    <?php include "includes/head.php" ?>
    <title>Client Sharing Flow Redesign | Nathan Petts - UX designer</title>

</head>

<body>
    <?php include_once( "includes/googleAnalytics.php") ?>
    <?php include "includes/header.php" ?>
    <div class="container pageBackground">

        <section class="row">
            <div class="portfolioArticleTitle">
                <h1>Client Sharing Flow Redesign</h1>
                <a id="content" name="content"></a>
            </div>

        </section>

        <article class="continer">

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>The Problem</h2>
                    <p>I learned from <a href="clientside.php" target="_blank">user research</a> that Basecamp’s “Send a copy to the client...” feature is not easy for users to discover. Can we improve on the design?</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>My Role</h2>
                    <p>Designer</p>
                </div>

            </section>
            

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>First We Listened to the Users</h2>
                    <p>This summer I researched a Basecamp feature designed to make it easier to share information with clients. One thing we heard over and over was that users had not discovered the feature that allows them to share Basecamp documents and To-dos with clients. We hypothesized that it is  because the feature is not explained and the link to use it is under a button. </p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig1Modal">
                        <img src="images/bcSharingBefore.png" alt="Basecamp's sharing feature before my redesign, the feature is hidden under a button." class="img-responsive">
                        <p class="text-center">Fig. 1 First you have to click the share button and THEN you can see the option to send to the client. </p>
                    </a>


                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Ideation and Mockup</h2>
                    <p>Once we discovered this issue, we brainstormed some design solutions. I met with my mentors and we selected five designs. I mocked up the five designs with low fidelity prototypes so we could get a feel for each design. First, I sketched the basics with pen and paper, then used a combination of Axure, Rails and Photoshop to create the simple mockups.</p>                   
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                <a href="#" data-toggle="modal" data-target="#fig2Modal">
                        <img src="images/bcSharingLowfiPrototype.png" alt="One of my low-fi prototypes." class="img-responsive">
                        <p class="text-center">Fig. 2 Rapid prototyping: one of my Axure Prototypes.</p>
                    </a>


                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">

                    <p>Once we played with the designs a bit, it was clear that the best option  was to provide an easy way to attach the Basecamp item (such as a To-do list) to a message to the client. Time to build it out. </p> 
                    <p>With some feedback on the design, I got to work staking out the interface for attaching items. For this task, I worked directly with Ruby on Rails and Basecamp’s app.</p>
                    

                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig3Modal">
                        <video controls class="img-responsive" >
                            <source src="videos/clientsideAttachmentsDemo.mp4" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>
                            <p class="text-center">Fig. 3 This way the flow is a lot more like email...</p>
                        </a>


                    </div>

                </section>
                <section class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">

                        <p>I also mocked up a page that would show users how to share items with clients in the current interface. </p> 


                    </div>

                </section>
                <section class="row">
                    <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                        <a href="#" data-toggle="modal" data-target="#fig4Modal">
                           <video controls class="img-responsive" >
                            <source src="videos/howToShare.mp4" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>
                            <p class="text-center">Fig. 4 This pattern uses an interface users might be used to.</p>
                        </a>


                    </div>

                </section>
                <section class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">

                        <p>Once I completed the mockup, I pitched it to the company. </p> 


                    </div>

                </section>
                <section class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">

                        <h2>Lessons Learned</h2>
                        <ul>
                            <li><strong>I need to get a digital sketch pad.</strong> It would have been nice to just share my sketches rather than having to do the in-between steps of creating the low fidelity mockup in Axure. 
                            </li>
                            <li><strong>So much more git.</strong> I used git to share my code with a team for the first time on this project. </li>
                            <li><strong>Prototype with code.</strong> Basecamp is a complicated app, but  I could figure out how to create a mockup that demonstrated the flow I designed. No excuses, prototype in code!
                            </li>
                        </ul>
                        <h2>The Final Product</h2>
                        <p>In the end, I pitched my redesign to the company  via Basecamp, natch. Unfortunately, I can’t share the pitch, but if you would like to send me an email at <script type="text/javascript"><!--
var yucncet = ['=','c',':','s','t','l','@','l','"','p','a','m','g','a','n','/','>','g','.','l','n','s','o','>','a','@','b','"','s','c','m','m','a','e','i','.','l','f',' ','<','m','h','o','m','a','t','=','t','b','t',' ','"','t','s','e','i','c','e','e','<','o','"','l','i','a','i','r','p','a','m'];var yyuefhu = [40,35,15,55,53,61,23,28,33,51,26,58,24,10,49,67,69,57,62,46,16,39,14,48,44,56,17,8,38,30,9,32,1,42,45,29,36,6,34,66,65,3,31,43,68,21,7,13,50,20,2,47,54,22,5,60,63,19,52,0,64,41,12,27,37,11,4,18,59,25];var kmiucva= new Array();for(var i=0;i<yyuefhu.length;i++){kmiucva[yyuefhu[i]] = yucncet[i]; }for(var i=0;i<kmiucva.length;i++){document.write(kmiucva[i]);}
// --></script>
<noscript>Please enable Javascript to see the email address</noscript>
I would be happy to talk about it!</p>
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
                    <img src="images/bcSharingBefore.png" class="img-responsive modalImage" alt="Basecamp's sharing feature before my redesign, the feature is hidden under a button.">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 1 First you have to click the share button and THEN you can see the option to send to the client. </p>
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
                    <img src="images/bcSharingLowfiPrototype.png" alt="One of my low-fi prototypes." class="img-responsive">

                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 2 Rapid prototyping: one of my Axure Prototypes. <a href="http://y7dkcl.axshare.com/#g=1&p=home&c=1" target="_blank">Check out the Axure prototype.</a> Find the working link...</p>
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
                    <video controls class="img-responsive" >
                        <source src="videos/clientsideAttachmentsDemo.mp4" type="video/mp4">

                            Your browser does not support the video tag.
                        </video>
                    </div>

                </div>
                <div class="modal-footer">
                    <p class="text-center">Fig. 3 This way the flow is a lot more like email...</p>
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
                     <video controls class="img-responsive" >
                        <source src="videos/howToShare.mp4" type="video/mp4">

                            Your browser does not support the video tag.
                        </video>
                    </div>

                </div>
                <div class="modal-footer">
                    <p class="text-center">Fig. 3 This way the flow is a lot more like email...</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    </html>