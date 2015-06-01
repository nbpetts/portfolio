<section class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-sm-8 ">
        <h1>Drop me a line, why not?</h1>
        <a name="content"></a>
      </div>

    </section>
<section class="row">
<form class="col-xs-12 col-sm-10 col-sm-offset-1 col-sm-8 " name="contactform" method="post" action="sendEmailForm.php">

    <ul class="myForm">
        <li class="myLabel">
            <input type="text" class="" id="Name" name="Name" placeholder="" />
            <label for="Name">Your Name</label>
        </li>
        <li class="myLabel">
            <input type="email" class="" id="Email1" name="Email" placeholder="" />
            <label for="Email1">Your Email</label>
        </li>
        <li class="myLabel">

            <textarea type="text" class="col-xs-12" id="Message" name="Message" placeholder=""></textarea>
            <label for="Message">Your Message</label>
        </li>
        <li class="myLabel">
            <div class="checkbox hidden" aria-hidden="true">
                <label aria-hidden="true"> Screen readers, please ignore this. 
                    <input type="checkbox" name="Check">Check me out
                </label>
            </div>
        </li>

    </ul>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
  </section>