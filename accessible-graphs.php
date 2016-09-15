<!doctype html>
<html lang="en">

<head>
    <?php include "includes/head.php" ?>
    <title>Improving the Accessibility of Graphs | Nathan Petts - UX designer</title>


</head>

<body>
    <?php include_once( "includes/googleAnalytics.php") ?>

    <?php include "includes/header.php" ?>
    <div class="container pageBackground">

        <section class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 ">
                <h1>Improving the Accessibility of Graphs for Users Who are Blind</h1>
                <a id="content" name="content"></a>
                <a name="content"></a>
            </div>

        </section>

        <article class="continer">



            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>The Problem</h2>
                    <p>Graphs are a common method for disseminating large amounts of information. However, they are inaccessible to people who are blind. We sought answers to these questions:
</p>
<ul>
  <li>
    How do users who are blind currently interact with graphs?
  </li>
  <li>
    What challenges do users who are blind currently face when encountering graphs?
  </li>
  <li>
    How can we improve written descriptions and develop guidelines for web developers and designers to follow when presenting graphs in web-based technologies for screen readers?
  </li>
</ul>
                </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>My Role</h2>
                    <p>Interviewer, Protocol Writer and Editor, Report Writer and Editor</p>
                </div>
            </section>
            <section class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">

                    <a href="#" data-toggle="modal" data-target="#fig1Modal">
                        <img src="images/accessibleGraphsFig1.png" alt="some examples of inaccessible graphs" class="img-responsive">
                        <p class="text-center">Fig. 1 Inaccessible Graphs.</p>
                    </a>



                </div>
            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Graphs have an Accessibility Issue</h2>
                    <p>Though groups such as World Wide Web Consortium (WC3) have published accessibility guidelines for graph and image content, the effort can often feel half-hearted. One of our participants told us that often, when she encounters charts or graphs on the internet, the alt text just reads “This is a graph.” We thought that by establishing clearer guidelines for web developers, we could help improve this situation.</p>
                </div>

            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Usability Testing and Interviews</h2>
                    <p>To answer our research questions, we decided to conduct usability tests and interviews with people who are blind. For our usability test, we created three graph descriptions of increasing complexity. We read each description to our participants and then had them answer questions about each respective graph. We recorded the number of correct answers and also asked them how they felt about each description. After the usability test, we interviewed them about their past experiences with graphs.</p>
                </div>

            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Analysis</h2>
                    <p>We transcribed the usability tests and interviews and created an affinity diagram from important snippets of the transcriptions. We found 21 themes in data ranging from the technology used to access graphs to challenges related to graph descriptions. </p>
                </div>

                    <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 thumbnail">

                        <!-- <a href="#" data-toggle="modal" data-target="#fig1Modal"> -->
                            <iframe width="380" height="315" src="https://www.youtube.com/embed/T6pOxs7HN4E" frameborder="0" allowfullscreen></iframe>
                            <p class="text-center">Fig. 2 Our affinity Diagramming Process.</p>
                        <!-- </a> -->



                    </div>
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">

                        <p>We also looked at the number of correct responses to our questions about the graphs for each level of complexity.</p>
                    </div>

            </section>
            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Our Recommendations</h2>
                    <p>We identified three ways that web designers can more effectively make graphs accessible to people who are blind.
                      <ol>
                        <li>
                          Clearly state the purpose of the graph. Are you using it to summarize your findings? Are you using it to make a point? Let your audience know explicitly what it’s intended to demonstrate.
                        </li>
                        <li>
                          Include tabular versions of your data. You can keep this invisible to sighted users while screen readers  still have access. Don’t forget to scope your tables so that screen readers can find specific parts of the data.
                        </li>
                        <li>
                          Minimize cognitive load in your descriptions by using clear, declarative writing; remove repetitive phrases; and chunk information together.
                        </li>
                      </ol>
                    </p>
                </div>

            </section>

            <section class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h2>Lessons Learned</h2>
                    <ul>
                        <li><strong>Studying a group as an outsider has specific challenges.</strong> I remember asking one of our usability questions that was easy to answer. It was the kind of question that anyone can get, but as an interviewer I had to know explicitly that the participant understood it. In this study, I suddenly became self-conscious that our participants might think that we thought they were not perceptive enough to understand  this simple question.
</li>
                        <li><strong>Accessibility is important.</strong> Talking with our participants, hearing their experiences with technology, really drilled home the fact that we NEED to consider accessibility when designing. </li>
                        <li><strong>Guidelines can help, but they help more when they are clear.</strong> W3C’s accessibility recommendations are long and confusing, and we suspect that might be partly to blame for the sorry state of accessibility on the web today. </li>
                    </ul>
                    <h2>The Final Product</h2>
                    <a target="_blank" href="download.php?file=downloads/Accessible_Graphs.pdf">Download the report!</a>
                    <br>
                    or
                    <br>
                    <a target="_blank" href="download.php?file=downloads/Accessible_Graphs_Presentation.pdf">Download the Presentation!</a>
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
                    <img src="images/accessibleGraphsFig1.png" class="img-responsive modalImage" alt="Some inaccessible graphs">
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center">Fig. 1 Ladder Up Usability Test Presentation.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>


</html>
