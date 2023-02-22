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
                                <li><a href="data-fetch1.php?id='.$id.'">Gujarati</a></li>
                                <li><a href="data-fetch.php?id='.$id.'">English</a></li>
                            </ul>
                        
                       
                            
                    </li>
                    <li><a href="">FEEDBACK</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    <main>
        <?php
            
            $id = $_GET['id'];
            
            $sql = "SELECT * FROM `admin_hindi` WHERE id=$id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $bt_name = $row['button_name'];
                $desc = $row['description1'];
                $img = $row['image1'];
                $aud = $row['audio'];
                $vid = $row['video'];
                echo "<div class='roboglr-box0'>
                        <img src='{$img}' width='100' height='100'>
                     </div>";
                echo "<div class='roboglr-box3'>
                        <h1>$desc</h1>
                     </div>";
                echo '<div class="roboglr-box1">
                        <audio controls controlsList="nodownload">
                            <source src="'.$aud.'" type="audio/mpeg">
                        </audio>
                    </div>
                    <div class="roboglr-box2">
                        <video width="320" height="180" controls controlsList="nodownload" poster="Images/logo.png">
                            <source src="'.$vid.'" type="video/mp4">
                        </video>
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