<?php include('nav.php'); ?>

    <style>

        body{
            background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
        }

        .contact-form{
            background: #fff;
            margin-top: 10%;
            margin-bottom: 5%;
            width: 70%;
        }

        .contact-form .form-control{
            border-radius:1rem;
            margin:5px
        }

        .contact-image{
            text-align: center;
        }

        .contact-image img{
            border-radius: 6rem;
            width: 15%;
            margin-top: -3%;
        }

        .contact-form form{
            padding: 14%;
        }

        .contact-form form .row{
            margin-bottom: -7%;
        }

        .contact-form h3{
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }

        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            color: #fff;
            cursor: pointer;
        }
       
    </style>

    <div class="container contact-form">
        <div class="contact-image">
            <img src="https://thumbs.dreamstime.com/z/email-icon-flat-round-button-flat-design-long-shadow-illustration-email-icon-flat-round-button-158684954.jpg" alt="rocket_contact"/>
        </div>
        <form method="post">
            <h3>Contact us</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="Name" class="form-control" placeholder="Your Name *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="Email" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="Phone" class="form-control" placeholder="Your Phone Number *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="Submit" class="btnContact" value="Send Message" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="Msg" class="form-control" placeholder="Your Message *"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php include('footer.php'); ?>