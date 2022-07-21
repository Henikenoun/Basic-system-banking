<?php include('nav.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create user</title>
    <style>
        body{
            background-image: url('../img/photo-1623750281089-c9a5ef3a88df.avif') !important;
            background-position: center;
            background-size: cover;
            height: 80vh;
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
            color: #51d497cc;
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
</head>
<body classe="bg">
<div class="container contact-form">
        <div class="contact-image">
            <img src="img/user1.jpg"/>
        </div>
        <form action="createUsers.php" method="post">
            <h3>Formulaire d'ajoute un utilisateur</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="number" name="balance" class="form-control" placeholder="balance *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="Submit" class="btnContact" value="CREER" />
                    </div>
                </div>
                
            </div>
        </form>
    </div>


<?php include('footer.php'); ?>
</body>
</html>
    

   