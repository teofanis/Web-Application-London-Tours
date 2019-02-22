<?php
require 'server.php';
session_start();
include 'navigation.php';
?>

<div class="container">
    <div class="jumbotron" id="contactJumbo">
        <span class="highlight">
            <h1 class="display-4">Contact us</h1>
        </span>
        <p class="bigCaption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt commodi quidem doloribus esse laboriosam, nam soluta inventore, cum neque vero porro nemo cupiditate molestias, omnis maxime nulla ab. Qui, quo!</p>
        <hr class="my-4">
        <p>Get in touch with us ! Our 24/7 hotline will be happy to assist you with all your inquiries!</p>


    </div>

    <hr class="myStyle">
    <div class="container">
        <h1 class="Contact-fonts">Contact Form</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="well well-sm">
                        <?php
                        if($_SERVER['REQUEST_METHOD'] === 'POST'){
                            include 'send_email.php';
                        }
                        ?>
                        <form name="contact_us_form" action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            Subject</label>
                                        <select id="subject" name="reason" class="form-control" required="required">
                                            <option value="" selected="">Choose One:</option>
                                            <option value="General Enquiry">General Enquiry</option>
                                            <option value="Booking Enquiry">Booking Enquiry</option>
                                            <option value="Complaint">Complaint</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Message</label>
                                        <textarea name="message" id="message" name="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right m-2" id="btnContactUs" name="btnContactUs">
                                        Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-md-4">
                    <form>
                        <legend><i class="fa fa-globe" aria-hidden="true"></i> Our office</legend>
                        <address>
                            <strong>London Tours, Ltd.</strong><br>
                            21 Downing Street<br>
                            Westminster London, SW1A 2AD<br>
                            <abbr title="Phone">
                                Phone:</abbr>
                            (+44) 7561 555508

                        </address>
                    </form>
                    <a target="_blank" href="https://goo.gl/maps/T9rNEa1VwS62" class="btn btn-primary m-2" id="btnDirections">Get Directions</a>
                </div>
            </div>
        </div>


    </div>
</div>


<footer>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-google-plus"></i></a>
    <a href="#"><i class="fa fa-skype"></i></a>
</footer>
