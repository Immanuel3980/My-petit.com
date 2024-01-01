<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Petit online registration system</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <style>
      
    </style>
</head>

<body id="backgroundBody" class="body">
    <header>
        <img src="logo.jpg" alt="Petit Learning Center Logo" class="logo">
        <h1>PETIT LEARNING CENTER</h1>
        <nav>
            <ul>
                <li><a href="petit.php">Home</a></li>
                <li><a href="petit.php">Admissions</a></li>
                <li><a href="petit.php">Classes</a></li>
                
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">About us</a>
                    <div class="dropdown-content">
                        <a href="history.php">History</a>
                        <a href="mission.php">Location</a>
                        <a href="team.php">Contact</a>
                    </div>
                </li>
                
            </ul>
        </nav>
    </header>
   
    <p>page under construction go to </p><a href="petit.php">home</a>
    <script>
        const body = document.getElementById('backgroundBody');
        const images = ["pe.jpg", "a.jpg", "b.jpg","ff.jpg","c.jpg","boy.jpg","d.jpg","e.jpg","liz.jpg"];
        let currentIndex = 0;

        function changeBackground() {
            body.style.backgroundImage = `url(${images[currentIndex]})`;
            currentIndex = (currentIndex + 1) % images.length;
        }

        setInterval(changeBackground, 5000);
    </script>
</body>

</html>


