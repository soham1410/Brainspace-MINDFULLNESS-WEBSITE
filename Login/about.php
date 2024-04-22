
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Company Landing Page</title>
    <link rel="stylesheet" href="about/style.css">
    <style>
        /* Style for circular images */
        .creator-photo {
            width: 150px; /* Adjust size of the circle */
            height: 150px; /* Adjust size of the circle */
            border-radius: 90%; /* Make the container circular */
            overflow: hidden; /* Hide overflowing parts of the image */
            margin: 0 auto 10px; /* Adjust margin for spacing */
            display: flex; /* Use flexbox for centering */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            background-size: cover; /* Cover the container with the background image */
        }
        
        .center {
            text-align: center; /* Center-align the text */
        }
    
    </style>

</head>
<body>
    <header>
        <h1>Welcome to Our Calm Quest!</h1>
        <p>In The Chaos Of Life,Find Your Calm Quest.</p>
        <a href="#about" class="cta-btn">Learn More</a>
    </header>
    <main>
    <div class="container">
        <section id="about">
        <h1>About Us</h1>
            <p>Calm Quest is the practice of being present in the moment, aware of your thoughts and feelings without judgment. It involves paying attention to your breath, body sensations, and surroundings.</p>
            <p>Practicing mindfulness has been shown to reduce stress, improve focus and concentration, enhance emotional well-being, and promote overall health and happiness.</p>
        </section>
</div>
        <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <ul>
                <li>1.Reducing Stress and Anxiety</li>
                <li>2.Improving Focus and Concentration of Users</li>
                
            </ul>
        </section>
        <div class="container">
                        
                            <h3>VISION</h3>
                            <p>1.Enhancing Emotional Regulation of Users</p>
                            <p>2.Increasing self-awareness about mindfullness</p>
                        </div>  
                   
                        <div class="container">
                        <h3>CREATORS</h3>
            <div class="creator-container">
                <div class="creator-photo" style="background-image: url('about/k2.jpg');"></div>
                <div class="center">
                <h2>Khushi Soni</h2>
    </div>
                <p> 
 I am thrilled to share a bit about my journey.I am The Founder of Calm Quest as well as a active member of CSI Commitee.
With immense joy, I can say that my dedication to both academics and web development has been a driving force in my life. <br><br>
Achieving a remarkable pointer of 9.35 in the previous semester has been a testament to my unwavering commitment to excellence in my studies. <br><br>
However, it's not just about grades for me. My passion for creating impactful digital experiences led me to embark on the journey of developing the "Calm Quest" website.<br><br>
Through this platform, I aim to cultivate mindfulness and emotional well-being, offering users a serene escape from the hustle and bustle of everyday life.<br><br>
It's been an incredible journey, blending my academic pursuits with my creative endeavors, and I'm excited to continue making a positive impact through my work.</p>
            </div>
            <div class="creator-container">
            <div class="creator-photo" style="background-image: url('about/k2.jpg');"></div>
            <div class="center">    
            <h2>Aditya Patil</h2></div>
            </div>
            <div class="creator-container">
            <div class="creator-photo" style="background-image: url('about/k2.jpg');"></div>
             <div class="center">
                   <h2>Soham Ponkshe</h2>
    </div>
                </div>
        </div>
        <form action="aboutshow.php" method="post">
        <div class="container">
        <section id="contact">
            <h2>Contact Us</h2>
            <p>If you have any questions or inquiries, feel free to reach out to us!</p>
            <form action="#" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="4" required></textarea><br>
                <button type="submit">Send Message</button>
            </form>
        </section>
</div>
    </main>
    <footer>
        &copy; 2024 Our Startup Company | All rights reserved.
    </footer>
</body>
</html>
