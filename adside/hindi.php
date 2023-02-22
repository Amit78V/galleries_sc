<?php
    require_once 'connection.php';   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gujarat Council Of Science City</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&family=Sofia+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <section class="header">
        <nav>
            <a href="main.php"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="">ATTRACTION</a></li>
                    <li><a href="">LANGUAGE <i class="fas fa-caret-down"></i></a>
                        
                        
                            <ul>
                                <li><a href="gujarati.php">Gujarati</a></li>
                                <li><a href="english.php">English</a></li>
                            </ul>
                        
                       
                            
                    </li>
                    <li><a href="">FEEDBACK</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>


    <main>
       
        <?php
            $sql = "SELECT * FROM admin_hindi";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){ 
                $bt_name = $row['button_name'];
                $id = $row['id'];

            echo '<div class="attraction-box1">
                        <a href="data-fetch2.php?id='.$id.' " class="roboglr-btn">' . $bt_name . '</a>
                    </div>';

                }
        ?>
        
    </main>
   
    </section>
<!-----Javascript fot toggle menu----->

<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";   
    }
    function hideMenu(){
        navLinks.style.right = "-200px";   
    }
</script>

</body>
</html>