<?php
session_start();
if(empty($_SESSION["email"]))
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<?php
include('../Control/ValidateCar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css">
    <title>Profile Update</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900&display=swap"
        rel="stylesheet">
        <script src="../js/AddCarValidation.js"></script>


</head>
<body>
    <nav>
        <a href="VendorHome.php">Home</a> |
        <a href="VendorProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>

    <h1>
       Car Add
    </h1>
    <p> <img src="Pictures/car_mg.gif" alt="Home">
    </p>

    <section class="pad-80 form-pos">
        <div class="container log-form-pos">

    <?php echo "$msg"; ?>
    <form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="return validateUserForm()" method="post"entype="multipart/form-data">
    
           
                <div class="form-row">
                    <div class="form-group">
                       Car Name:
                        <input type="text" name="carname" class="form-control">
                    </div>
                    <div class="form-group">
                        Car Model:
                        <input type="text" name="carm"  class="form-control">
                    </div>
                    <div class="form-group">
                        sit Count:
                        <input type="text" name="scount"  class="form-control">
                    </div>
                    <div class="form-group">
                        Upload Car Photo:
                        <input type="file" name="carphptp" class="form-control">
                    </div>
                   
                    <div class="form-group">
                        <input type="submit" value="Update" name="update" class="btn btn-lg btn-primary btn-submit">
                    </div>
                    <div class="form-group">
                        <input type="reset" value="reset" name="reset" class="btn btn-lg btn-primary btn-submit">
                    </div>
                </div>

            </form>
        </div>
    </section>

     <!-- footer  -->
     <footer>
        <div class="container footer-wrap">
            <div class="footer-left">
                <ul class="footer-menu">
                    <li><a href="">Terms and Conditions</a></li>
                    <li><a href="">Privacy</a></li>
                </ul>

            </div>
            <div class="footer-right">
                <ul class="footer-menu">
                    <li><a href="">Follow</a></li>
                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>

                </ul>
            </div>
        </div>
    </footer>
    <!-- footer  -->
    <script src="https://kit.fontawesome.com/2065a5e896.js" crossorigin="anonymous"></script>
   
</body>

</html>
