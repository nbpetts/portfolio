<!doctype html>
<html lang="en">

<head>
    <?php include "includes/head.php" ?>
    <title>Uta HagenBot | Nathan Petts - UX designer</title>

</head>

<body>
    <?php include_once( "includes/googleAnalytics.php") ?>
    <?php include "includes/header.php" ?>
    <div class="container pageBackground">

        <section class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 ">
                <h1>Uta HagenBot: Designs in Embodied Interaction*</h1>
                <a id="content" name="content"></a>
            </div>

        </section>

        <article class="continer">

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>The Problem</h2>
                    <p>As computers move more and more into diverse areas of our lives, we are interacting with them less in terms of keyboards and mice. Computers will soon be responding to more “natural” embodied interactions, such as responding to gestures and voice. Can I gain insights into the design of these new interfaces via the framework of embodied interaction?</p>
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
                    <h2>Ten Dollar Words</h2>
                    <p>Embodied Interaction. What does that even mean? It's the concept that computer interaction might improve if designers look at the way people interact with tools in the real world. Also, that people already interact with the world in tangible ways which could translate into better ways to interact with computer interfaces. </p>
                    <p>I decided to look at voice interfaces and see if I could create an application that helps actors memorize their lines. What kinds of interactions do actors have when they work on their memorization? Time to go look!</p>
                </div>

            </section>
            
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Creating an Ethnography</h2>
                    <p>The first thing I did was to assemble an Ethnography of rehearsal. Another ten dollar word! Ethnographies are in-depth studies of human behavior. I conducted five sessions and observed  each actor memorize their lines with the help of an line coach. I noted the kinds of interactions each had with the coach and the physical script. Did they cover lines as they spoke so they could test their memorization? What did they say to their line coach? What kind of shared vocabulary did the pair have? I sketched interactions, snapped photos and took copious notes.</p>                   
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig1Modal">
                        <img src="images/twoActorsSpeak.png" alt="A sketch of two actors rehersing side by side. One holds a script." class="img-responsive">
                        <p class="text-center">Fig. 1 Andrea used her close proximity to be able to glance back and forth at the script—an example of embodied interaction. </p>
                    </a>


                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Storyboards, User Journeys and Personas, Oh My</h2>
                    <p>This discovery period allowed me to understand the specific ways that actors actually learn their lines. I then went into a brainstorming and analysis mode. I created a storyboard to illustrate my ideas of how Uta HagenBot might work.</p>                   
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig2ModalBig">
                        <img src="images/utaStoryboard.png" alt="A storyboard of how Uta might work." class="img-responsive">
                        <p class="text-center">Fig. 2 My epic storyboard.</p>
                    </a>


                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    
                    <p>I also created several User Personas. These are not just fictional users, they are based on  a data-driven persona method. I plotted my participants on several spectra. I then created the personas from groups of similar participant behaviors. This way I know my personas avoid stereotypes and represent real characteristics from the research.</p>                   
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-2">
                    <div class=" thumbnail">
                        <a href="#" data-toggle="modal" data-target="#fig3Modal">
                            <img src="images/utaPersonaSpectrum.png" alt="Charts that show spectra that I used to create personas.">
                            <p class="text-center">Fig 3. Persona spectrum. No “Mid 20’s Mike” or “Donny Deciders” here.</p>
                        </a>


                    </div>
                </div>
                <div class="col-xs-6 col-xs-offset-3  col-sm-4 col-sm-offset-0">
                    <div class="thumbnail">
                        <a href="#" data-toggle="modal" data-target="#fig4Modal">
                            <img src="images/utaPersonaSajel.png" alt="A user persona named Sajel." class="img-responsive">
                            <p class="text-center">Fig 4. Sajel—now there’s a name for a persona .</p>
                        </a>


                    </div>
                </div>
            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    
                    <p>I also created a User Journey of the Actor’s path toward memorization:</p>                   
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig5Modal">
                        <img src="images/utaUserJourney.png" alt="A user journey of how Actors memorize their lines." class="img-responsive">
                        <p class="text-center">Fig. 5 This is how memorization goes.  </p>
                    </a>


                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>OK, Does Any of This Work?</h2>
                    <p>So far, it's all been research. Will this research translate into an effective design? To find out, it was time to do some user testing. I created a high fidelity prototype of one of the flows of running lines. I got a short section of script and set up a web page that listens for actor’s spoken lines and reads their cue lines aloud. The prototype also displays what the actor actually says so that they can compare it to the script.</p>                   
                </div>

            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">
                    <a href="#" data-toggle="modal" data-target="#fig6Modal">
                        <img src="images/utaPrototype.png" alt="A screenshot of the Prototype." class="img-responsive">
                        <p class="text-center">Fig. 6 The prototype—shoutout to The Bear by Anton Chekhov, translated by Paul Schmidt.  </p>
                    </a>


                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    
                    <p>I then tested the prototype with two actors. I had them memorize the scene and give feedback about using the prototype. The prototype was buggy, but the actors liked the idea of a digital assistant and we all feel the design has promise.</p>                   
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    
                    <h2>Lessons Learned</h2>
                    <ul>
                        <li><strong>Embodied interactions function best when they are designed with a bit of “looseness.”</strong> In the real world, people expect a wide range of similar actions to produce a satisfactory result. Computer interactions would do well to mirror this looseness.
                        </li>
                        <li><strong>Let the framework emerge from the ethnography.</strong>I think this is a really important idea. I have encountered researchers who rail against forcing a framework to the data, fearing that doing so can only serve to introduce bias. I think a very lightweight framework might be useful in getting analysis started, but letting ideas emerge from the data seems like the right way to do it. Similarly, don't just rearrange data during analysis—have opinions. Often I have worked on affinity diagrams that result  in generic categories like "Technology Used" or "User Suggestions." While it may be useful to group various research results for processing, I think it's worth it to really think about the trends in the data, and see what the “Technology Used” is saying or what all of the “User Suggestions” have in common.</li>
                        <li><strong>Testing is your friend.</strong> Nothing about my project was as helpful as putting a prototype in front of the first user. Even that simple, buggy test was helpful. As soon as your project works, show it to someone and see how they react. It's scary, but worth it.</li>
                    </ul>
                    <h2>The Final Product</h2>
                    <p><a target="_blank" href="http://nathanpetts.com/utaHagenBot/">Check out the Uta HagenBot prototype.</a></p>
                    <p><a target="_blank" href="https://depaul.digication.com/nathanpetts/Abstract/">Take a look at my final report about Uta!</a></p>
                </div>

            </section>
            <section class="row">
                <?php include "includes/backToPortfolioButton.php" ?>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    
                    <p class="copyright">*For non-actors, <a target="_blank" href="https://en.wikipedia.org/wiki/Uta_Hagen">Uta Hagen</a> was a German-American acting teacher who wrote the seminal ﻿Respect for Acting﻿. It's a very funny joke, trust me. </p>                   
                </div>

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
                    <img src="images/twoActorsSpeak.png" class="img-responsive modalImage" alt="A sketch of two actors rehersing side by side. One holds a script.">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 1 Andrea used her close proximity to be able to glance back and forth at the script—an example of embodied interaction. </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="fig2ModalBig" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body row">
                <div class="col-xs-12 text-center">
                    <img src="images/utaStoryboard.png" alt="A storyboard of how Uta might work." class="img-responsive">
                        
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 2 My epic storyboard.</p>
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
                    <img src="images/utaPersonaSpectrum.png" class="img-responsive modalImage" alt="Charts that show spectra that I used to create personas.">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 3 Persona spectrum. No “Mid 20’s Mike” or “Donny Deciders” here.</p>
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
                    <img src="images/utaPersonaSajel.png" class="img-responsive modalImage" alt="A user persona named Sajel.">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 4 Sajel—now there’s a name for a persona.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="fig5Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body row">
                <div class="col-xs-12 text-center">
                    <img src="images/utaUserJourney.png" class="img-responsive modalImage" alt="A user journey of how Actors memorize their lines." class="img-responsive">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 5 This is how memorization goes.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="fig6Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body row">
                <div class="col-xs-12 text-center">
                    <img src="images/utaPrototype.png" class="img-responsive modalImage" alt="A screenshot of the Prototype." class="img-responsive">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 6 The prototype—shoutout to The Bear by Anton Chekhov, translated by Paul Schmidt.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>


</html>