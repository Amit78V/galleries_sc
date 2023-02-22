<?php
// session_start();
require_once 'connection.php';
// require_once 'data-fetch.php';
// $id2 = $_SESSION['id'];

// $_SESSION['id'] = $id;        
// $sql = "SELECT * FROM `admin_eng` WHERE id=$id";
?>

<!DOCTYPE html>
<html lang="gu">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gujarat Council Of Science City</title>
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="">Home</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">ATTRACTION</a></li>
                    <li><a href="">FEEDBACK</a></li>
                    <li><a href="">CONTACT</a></li>
                    <li><a href="">BOOK TICKET</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    <main>
        <?php
             $id = $_GET['id'];
             $sql = "SELECT * FROM `admin_guj` WHERE id=$id";
             
                       
            
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $bt_name = $row['button_name'];
                $desc = $row['description1'];
                $img = $row['image1'];
                $aud = $row['audio'];
                $vid = $row['video'];
                echo "<img src='{$img}' width='100' height='100'>";
                echo '<h1>'.$desc.'</h1>';
                echo '<div class="roboglr-box1">
                        <audio controls>
                            <source src="'.$aud.'" type="audio/mpeg">
                        </audio>
                    </div>
                    <div class="roboglr-box2">
                        <video width="320" height="240" controls>
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