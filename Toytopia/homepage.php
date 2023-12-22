<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ToyTopia</title>
</head>
<style>
@font-face {
  font-family: 'Bold Font';
  src: url('assets/THEBOLDFONT.ttf');
}

@font-face {
  font-family: 'Inter';
  src: url('assets/Inter-Bold.ttf');
}

body {
    margin: 0;
    padding: 0;
    font-family: 'Bold Font';
    background-color:#1C72C2;
}

.navbar {
  background-color: #1C72C2;
  overflow: hidden;
  margin-bottom: 20px; 
  font-family: 'Bold Font';
  font-size: 22px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 1);
}

.navbar img {
    padding: 0px;
    width: 230px;
    height: 90px;
    margin-top: 2px;
    margin-right: 30px; 
}

.navbar a {
    float: right;
    display: block;
    color: white;
    text-align: center;
    padding: 35px 20px;
    text-decoration: none;
}

.navbar a:hover {
    color: #FFD72D;
}


.brand-section {
    display: flex;
    justify-content: space-between;
    background-color: #1C72C2;
    color: #fff;
    padding: 20px;
}

.brand-info {
    text-align: center;
    margin-bottom: 40px;
}

#brand-image {
    margin-top: 100px;
    margin-left: 40px;
    max-width: 650px;
    height: auto;
}

.brand-text {
    font-family: 'Bold Font', sans-serif;
    font-size: 36px;
    margin: 10px 0;
}

.discover-button {
    background-color: #FFD72D;
    font-family: 'Bold Font';
    font-size: 24px;
    color: #fff;
    padding: 10px 10px;
    border: none;
    border-radius: 15px;
    cursor: pointer;
}

.additional-image {
    width: 590px;
    height: 590px;
    margin-right: 40px;
    background: url('assets/toytopia\ assets.png') no-repeat center center;
    background-size: cover;
}

.intro-section {
    padding: 10px;
    background-color: #ffffff;
    color: #1C72C2;
}

.intro-text {
    padding: 20px ;
    font-family: 'Bold Font', sans-serif;
    font-size: 34px;
    text-align: center;
}

.feature-section {
    display: flex;
    justify-content: space-around;
    padding: 30px;
    background-color: #ffffff;
}

.feature-content {
    text-align: center;
    max-width: 300px;
    color: #1C72C2;
}

.feature-content img {
    width: 370px;
    height: 250px;
}

.feature-title {
    font-family: 'Bold Font', sans-serif;
    color: #1C72C2;
}

.feature-subtext {
    font-family: 'Inter', sans-serif;
    color: #1C72C2;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;

}
</style>
<body>
<div class="navbar">
        <img src="assets/nav logo.svg" alt="Logo">
        <a href="index.php">LOGIN</a>
        <a href="#">GIFTS</a>
        <a href="#">SHOP</a>
        <a href="#">TOYS</a>
        <a href="#">HOME</a>
    </div>
    <div class="brand-section">
        <div class="brand-info">
            <img id="brand-image" src="assets/webpage logo (vertical).svg" alt="Brand Image">
            <p class="brand-text">Discover a world of play <br> and imagination</p>
            <button class="discover-button" onclick="scrollToContent()">Discover More</button>
        </div>
        <div class="additional-image"></div>
    </div>

    <section id="intro-section" class="intro-section">
        <p class="intro-text">Dive into a universe of fun and excitement with our handpicked selection of toys for all ages. From classic favorites to the latest trends, we have something for every child's imagination.</p>
    </section>

    <section class="feature-section">
        <div class="feature-content">
            <img src="assets/puzzle.png" alt="Feature Image 1">
            <h2 class="feature-title"> Educational <br>Toys</h2>
            <p class="feature-subtext">Foster learning through play with our range of educational toys. Spark curiosity and creativity in your little ones while they have a blast!</p>
        </div>

        <div class="feature-content">
            <img src="assets/robots.png" alt="Feature Image 2">
            <h2 class="feature-title">Tech Toys for Future Innovators</h2>
            <p class="feature-subtext">Unleash the power of play with our tech-savvy toys. From robotics to interactive games, we're here to inspire the next generation of innovators.</p>
        </div>

        <div class="feature-content">
            <img src="assets/board games.png" alt="Feature Image 3">
            <h2 class="feature-title">Games <br>Galore</h2>
            <p class="feature-subtext">Family game night just got better! Choose from a variety of board games, puzzles, and interactive games that guarantee hours of laughter and bonding.</p>
        </div>
    </section>


    <script>
        function scrollToContent() {
            document.getElementById('intro-section').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>
