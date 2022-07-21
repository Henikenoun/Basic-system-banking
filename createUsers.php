    <?php
            include 'UsersManager.php';
            require_once 'Users.php';
            if (empty($_POST['name'])||empty($_POST['email'])||empty($_POST['balance']))
                echo'erreur il faut remplir tous les champs';
            else{
                if(!is_numeric($_POST['balance']))
                    echo'le montant doit etre numeric';
                }
            $user=new Users(0,$_POST['name'],$_POST['email'],$_POST['balance']);
            $db=new PDO('mysql:host=localhost;dbname=sparks_bank','root','');
            $manager=new UsersManager($db);
            $manager->add($user);
            echo " <script>
                        alert('add user Successful'); 
                        window.location='transfer_money.php';
                   </script>";
        ?>
         
 