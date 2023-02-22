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
            <a href="index.php"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="test.php">Home</a></li>
                    <li><a href="">ATTRACTION</a></li>
                    <li><a href="">LANGUAGE <i class="fas fa-caret-down"></i></a>
                        
                        
                            <ul>
                                <li><a href="english.php">English</a></li>
                                <li><a href="gujarati.php">Gujarati</a></li>
                                <li><a href="hindi.php">Hindi</a></li>
                            </ul>
                        
                        
                            
                    </li>
                    <li><a href="">FEEDBACK</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

    <div class="language-box1">
        <h1>GUJARAT COUNCIL OF SCIENCE CITY <br>DEPARTMENT OF TECHNOLOGY & SCINECE</h1>
        <p>Select the language</p>
        <a href="english.php" class="first-btn">English</a>
    </div>
    <div class="language-box2">
        <a href="hindi.php"  class="second-btn">हिंदी</a>
    </div>
    <div class="language-box3">
        <a href="gujarati.php" class="third-btn">ગુજરાતી</a>
    </div>
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