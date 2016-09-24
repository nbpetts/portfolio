<!doctype html>
<html lang="en">

<head>
    <?php include "includes/head.php" ?>
    <title>CTA Train Accessibility | Nathan Petts - UX designer</title>

</head>

<body>
    <?php include_once( "includes/googleAnalytics.php") ?>
    <?php include "includes/header.php" ?>
    <div class="container pageBackground">

        <section class="row">
            <div class="portfolioArticleTitle">
                <h1>CTA Train Accessibility for People Who are Blind</h1>
                <a id="content" name="content"></a>
            </div>

        </section>

        <article class="continer">

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>The Problem</h2>
                    <p>A previous pilot study about Chicago bus accessibility found that people who are blind generally prefer Chicago Transit Authority (CTA) busses over trains. In this study, we decided to dive deeper into these findings to see if we could come up with designs to help make CTA trains more accessible. </p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>My Role</h2>
                    <p>Researcher, Designer, Prototype Developer</p>
                </div>

            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>First, We Admit We Know Nothing</h2>
                    <p>The first step in any research process is to find out what else is out there. For this project, we certainly did our ground work. Our experience during previous pilot studies into accessibility and technology taught us that people who are not disabled simply cannot imagine what the experience is like. We knew our best shot to gain insight into the problem for this study was to connect with people who are blind and observe them using the CTA.  </p>
                    <p>We recruited four participants who are blind and rode the train with them. We had them direct us through the experience as though they were teaching us to ride the trains as they do. We recorded these sessions and took notes. We compiled these transcripts and analyzed them using a combination of inductive and deductive coding. Then we summarized the themes that emerged into a user journey. Check out the image below for the details:</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig1ModalBig">
                        <img src="images/ctaUserJourney.png" alt="An infographic that describes how people who are blind experience the CTA." class="img-responsive">
                        <p class="text-center">Fig. 1 - We all worked to conceptualize the journey, but I was the primary creator.</p>
                    </a>


                </div>

            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>But Are We Right?</h2>
                    <p>OK, so four participants aren’t that many. It is exceptionally difficult to find a large number of participants who are blind AND use the CTA. So we decided to use another method to verify our findings. We created a survey that would test what we had observed. We distributed the survey to people who are blind in the Chicago area who use the CTA. We received 18 responses. The survey seemed to indicate that the challenges we discovered were real, but that on average our survey respondents had a more favorable view of the CTA than our observation participants.</p>                   
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig2Modal">
                        <img src="images/ctaSurveyData.png" alt="A bar graph showing which categories are important to our survey respondants." class="img-responsive">
                        <p class="text-center">Fig. 2 - The survey respondents ranked as important many of the same pieces of information that our observation participants thought were important.</p>
                    </a>


                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <p>The survey gave us more nuance to our findings, but we did not feel that it unequivocally confirmed or rejected our observation findings. </p>
                    <h2>Crash Course in iPhone Prototyping</h2>
                    <p>Many of the ideas that we had for design improvements had to do with fundamental designs to CTA stations. For example, adding more Truncated Dome flooring panels.</p>                   
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig3Modal">
                        <img src="images/ctaTruncatedDomes.png" alt="An image of the textured floor panels called truncated Domes. ">
                        <p class="text-center">Fig. 3 - Truncated domes in their natural habitat.</p>
                    </a>


                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    
                    <p>However, our design recommendations also included making more information available via smartphone app. One thing that we weren’t sure of was the best way to give directions to people who are blind. This turns out to be very difficult because of the lack of shared visual references. We decided to prototype three different methods of giving directions. One was a physical prototype (not discussed here) and two were high fidelity iPhone apps.</p>
                    <p>One problem. No one on the team had ever done any iPhone programming. I dove right in and learned what was necessary to get a bare bones prototype up and running. After a bit of swearing and Swift, I came up with something that worked well in our user test.</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig4Modal">
                            <img src="images/ctaIphonePrototype.png" alt="Images from my iPhone prototype.">
                            <p class="text-center">Fig. 4 - Xcode became my best friend for two weeks.</p>
                        </a>


                </div>

            </section>
            
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    
                    <p>One screen of the app offered bulleted narrative directions, while another screen offered navigation via the phone’s vibration feature. All three methods of giving directions to people who are blind revealed significant challenges. The consensus? It’s really hard to give good directions and any app designed for this purpose will require many iterations for a successful design.</p>
                    <h2>What Should the CTA Do to Improve Accessibility?</h2>
                    <p>We came up with short, mid and long term recommendations for the CTA. In the short term, they should make station layout available online, such as exit location and the basic layout of the station. We also propose that they change the order of door opening and closing beeps and audio announcements to give riders who are blind more time to react to both. For a detailed explanation, see the full report. </p>
                    <p>Our mid term recommendations included using more of the textured flooring panels to help guide riders using canes around dangerous platform edges. We also propose the use of audible beeps to help announce station features such as platform exits and information kiosks.</p>
                    <p>Long term solutions include major structural changes to platforms, such as full length safety walls on each train platform. We created a storyboard to depict what a train ride might look like if CTA takes action on these recommendations.</p>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig5ModalBig">
                        <img src="images/ctaStoryboard.png" alt="A storyboard describing how riding the CTA might be like if our proposals were adpoted.">
                        <p class="text-center">Fig. 5 - Anna rides a new, improved CTA system.</p>
                    </a>


                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    
                    <h2>Lessons Learned</h2>
                    <ul>
                        <li><strong>We had a difficult time analyzing the transcripts of the observations sessions.</strong> At first we struggled with wrangling the large number of codes and themes in the data. Once we looked at the data through the lens of the user journey and began to trust our analysis, analysis became more focused and solid.
                        </li>
                        <li><strong>Designing for truly different users is <em>hard</em>.</strong>It is crucial to get user input rather than assume that you can imagine what it's like to live as someone else.</li>
                    </ul>
                    <h2>The Final Product</h2>
                    <p><a target="_blank" href="download.php?file=downloads/CTA_Accessibility_Report.pdf">Download the Report!</a></p>
                    
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
<div class="modal fade" id="fig1ModalBig" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body row">
                <div class="col-xs-12 text-center">
                    <img src="images/ctaUserJourney.png" class="img-responsive modalImage" alt="An infographic that describes how people who are blind experience the CTA.">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 1 - We all worked to conceptualize the journey, but I am the primary creator.</p>
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
                    <img src="images/ctaSurveyData.png" alt="A bar graph showing which categories are important to our survey respondants." class="img-responsive">
                        
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 2 - The survey respondents ranked as important many of the same pieces of information that our observation participants thought were important.</p>
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
                    <img src="images/ctaTruncatedDomes.png" class="img-responsive modalImage" alt="An image of the textured floor panels called truncated Domes.">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 3 - Truncated domes in their natural habitat.</p>
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
                    <img src="images/ctaIphonePrototype.png" class="img-responsive modalImage" alt="Images from my iPhone prototype.">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 4 - Xcode became my best friend for two weeks.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="fig5ModalBig" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body row">
                <div class="col-xs-12 text-center">
                    <img src="images/ctaStoryboard.png" class="img-responsive modalImage" alt="A storyboard describing how riding the CTA might be like if our proposals were adpoted." class="img-responsive">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 5 - Anna rides a new, improved CTA system.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>



</html>