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
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 ">
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
                        <p class="text-center">Fig. 2 Only a few links work.</p>
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
                        <p>In the end, I pitched my redesign to the company  via Basecamp, natch. Unfortunately, I can’t share the pitch, <script type="text/javascript">
//<![CDATA[
<!--
    var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
    "=37){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return o" +
    ".substr(0,ol);}f(\")99,\\\"lfn}ql0771\\\\sb!%*',h)'e!.b%.ZM530\\\\SO230\\\\" +
    "\\\\\\\\S^Z520\\\\P_G^G710\\\\[BU310\\\\ ,d77#~530\\\\b530\\\\220\\\\WSXUR6" +
    "20\\\\[U320\\\\W\\\\\\\\020\\\\K@H_310\\\\E]010\\\\LELH`000\\\\}530\\\\zriu" +
    "o:;Dzyv:771\\\\{p}hN~x771\\\\oyji<jpok`m\\\\\\\\!A530\\\\730\\\\310\\\\020\\"+
    "\\W720\\\\IV[430\\\\530\\\\520\\\\330\\\\700\\\\730\\\\330\\\\E630\\\\700\\" +
    "\\r\\\\n\\\\320\\\\600\\\\310\\\\700\\\\\\\"(f};o nruter};))++y(^)i(tAedoCr" +
    "ahc.x(edoCrahCmorf.gnirtS=+o;721=%y;i=+y)99==i(fi{)++i;l<i;0=i(rof;htgnel.x" +
    "=l,\\\"\\\"=o,i rav{)y,x(f noitcnuf\")"                                      ;
    while(x=eval(x));
//-->
//]]>
</script>
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
                <p class="text-center">Fig. 2 Only a few links work. <a href="http://y7dkcl.axshare.com/#g=1&p=home&c=1" target="_blank">Click this caption to check out the Axure prototype.</a></p>
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