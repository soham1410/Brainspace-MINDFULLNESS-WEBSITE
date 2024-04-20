<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Diaphragmatic Breathing</title>
<link rel="stylesheet" href="styles.css">
<style>
body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #ADD8E6;
    background-image: url('b4.png');*/ /* Specify the path to your image */
    background-size: cover; /* Cover the entire background */
    background-repeat: repeat; /* Prevent image from repeating */
    opacity: 0.9; /* Set opacity to create a semi-transparent effect */
    filter: grayscale(10%); /* Apply grayscale filter to desaturate the background */
}

  h1, h2, h3, h4, h5, h6 {
    font-weight: bold; /* Bold headings */
    color: #191970; /* Heading color */
}
  .container {
    font-weight: bold;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    min-height: 10vh;
    padding-bottom: 20px;
  }
  .container2 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    min-height: 10vh;
    padding-bottom: 20px;
    animation: fadeIn 1s ease;
  }
  .container3 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    min-height: 10vh;
    padding-bottom: 20px;
    animation: fadeIn 1s ease;
  }
  
  
  .instructions {
    max-width: 500px;
    margin: 10px;
    padding: 20px;
    background-color: 	#89CFF0;
    border-radius: 60px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    animation: fadeIn 1s ease;
  }
  .instructions:hover {
    transform: translateY(-5px);
  }
  .hi {
    max-width: 1100px;
    margin: 20px;
    padding: 30px;
    background-color: #ADD8E6;
    border-radius: 60px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    animation: fadeIn 1s ease;
  }
  .hi:hover {
    transform: translateY(-12px);
  }
  .WHAT {
    max-width: 1100px;
    margin: 10px;
    padding: 30px;
    background-color:	#ADD8E6;
    border-radius: 60px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.5s ease;
  }
  .WHAT:hover {
    transform: translateY(-12px);
  }
  h1 {
    text-align: center;
    color: #191970;
    margin-bottom: 20px;
  }
  p {
    color:#191970;
    line-height: 1.6;
  }
  li {
    color: #0818A8;
    line-height: 1.6;
  }
  #timer {
    font-size: 3rem;
    text-align: center;
    margin-top: auto;
    color: #191970;
    transition: transform 0.3s ease;
  }
  img {
    margin: 10px;
    max-width: 400px;
    height: auto;
    border-radius: 60px;
    box-shadow: 0 5px 15px rgba(85, 99, 113, 0.1);
    transition: transform 0.5s ease;
    background-color: #F0FFFF;
  }
  img:hover {
    transform: scale(1.05);
  }
  .buttons-container {
    text-align: center;
    margin-top: 20px;
  }
  button {
    margin: 0 10px;
    padding: 12px 30px;
    font-size: 1.1rem;
    color: #ffffff;
    background-color: #191970;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  button:hover {
    background-color: #0056b3;
    transform: scale(1.05);
  }
  .step {
    font-family: 'Snell Roundhand', cursive;
    color: rgb(0, 0, 0); /* Change this to whatever color you want */
  }
  /* CSS for YouTube video container */
  .video-container {
    text-align: center; 
    min-height: 20vh;
    padding-bottom: 10px;
    margin-top: top;
  }
  .video-container iframe {
    max-width: 100%;
    height: top;
    transition: transform 0.3s ease;
  }
  .video-container iframe:hover {
    transform: scale(1.02);
  }
</style>
</head>
<body>
<div id="quoteContainer" class="popup">
    <button id="closeButton" class="closeButton">✕</button>
    <span id="quoteText"></span>
</div>
  <script src="script.js"></script>
<div class="container2">
  <div class="WHAT">
    <h1>Diaphragmatic Breathing</h1>
    <h3>What Is Diaphragmatic Breathing ?</h3>
    <p>
      Diaphragmatic breathing, also known as belly breathing or deep breathing, is a type of breathing exercise that involves the contraction and relaxation of the diaphragm, a dome-shaped muscle located beneath the lungs. In diaphragmatic breathing, the primary focus is on expanding the abdomen during inhalation rather than the chest. This technique allows for deeper and more efficient breathing by maximizing the use of the diaphragm and minimizing shallow breathing patterns that often involve only the chest muscles.
    </p>
  </div>
</div>
<div class="container">
  <div class="instructions">
    <h2>Instructions:</h2>
    <li><span class="step">STEP1:</span> Sit or lie down comfortably in a quiet place.</li>
    <li><span class="step">STEP2:</span> Close your eyes and relax your body.</li>
    <li><span class="step">STEP3:</span> Place one hand on your chest and the other on your abdomen.</li>
    <li><span class="step">STEP4:</span> Inhale deeply through your nose, allowing your abdomen to expand.</li>
    <li><span class="step">STEP5:</span> Hold your breath for 2 seconds.</li>
    <li><span class="step">STEP6:</span> Exhale slowly through your mouth, feeling your abdomen contract.</li>
    <li><span class="step">STEP7:</span> Exhale very slowly and steadily through your mouth for about 6 seconds.</li>
    <li><span class="step">STEP8:</span> Repeat this process for several breaths, focusing on the rise and fall of your belly.</li>
  </div>
  <img src="https://img.emedihealth.com/wp-content/uploads/2023/05/diaphragmatic-breathing-technique-01.jpg" alt="Diaphragmatic Breathing Technique" />
</div>
<div class="container3">
  <div class="hi">
    <h2>Diaphragmatic breathing is essential for young adults for several reasons:</h2>
    <li><strong>Stress Reduction:</strong> Diaphragmatic breathing activates the body's relaxation response, helping to reduce stress, anxiety, and tension, which are common challenges faced by young adults due to academic pressures, work responsibilities, and personal life.</li>
    <li><strong>Improved Focus and Concentration:</strong> By promoting deeper breathing and increased oxygen flow to the brain, diaphragmatic breathing can enhance focus, concentration, and cognitive function, aiding young adults in academic and professional pursuits.</li>
    <li><strong>Enhanced Respiratory Function:</strong> Practicing diaphragmatic breathing strengthens the diaphragm and improves respiratory function, leading to better lung capacity, oxygen exchange, and overall respiratory health, which is particularly beneficial for young adults engaged in physical activities or sports.</li>
    <li><strong>Better Sleep Quality:</strong> Diaphragmatic breathing can promote relaxation and alleviate insomnia or sleep disturbances, enabling young adults to experience better sleep quality and wake up feeling more refreshed and energized.</li>
    <li><strong>Emotional Regulation:</strong> Learning diaphragmatic breathing techniques empowers young adults with effective tools for managing emotions, regulating mood, and coping with stressors in healthy ways, contributing to overall emotional well-being and mental health resilience.</li>
  </div> 
</div>   
<!-- Embedding YouTube Video -->
<div class="video-container">
  <iframe width="360" height="215" src="https://www.youtube.com/embed/4O9a72eYABM" frameborder="20" allowfullscreen></iframe>
</div>
<div class="container9">
<h1>Breathing Exercise</h1>
        <div class="breathing-box">
            <div class="circle" id="circle"></div>
        </div>
        <div id="timer">5:00</div>
        <button id="startBtn">Start Breathing</button>
        <button id="stopBtn" style="display: none;">Stop Breathing</button>
        <button id="completeStopBtn" style="display: none;">Stop Exercise</button>
        <button id="resetBtn">Reset</button>
        <script src="gr.js"></script>   
    </div>

</div>
<script>
  let timerInterval;
  let seconds = 300; // 5 minutes in seconds
  function startTimer() {
    timerInterval = setInterval(() => {
      seconds--;
      if (seconds < 0) {
        clearInterval(timerInterval);
        document.getElementById('timer').textContent = '00:00';
        // You can add additional actions here when the timer finishes
      } else {
        const minutes = Math.floor(seconds / 60);
        const remainingSeconds = seconds % 60;
        const displayMinutes = String(minutes).padStart(2, '0');
        const displaySeconds = String(remainingSeconds).padStart(2, '0');
        document.getElementById('timer').textContent = `${displayMinutes}:${displaySeconds}`;
      }
    }, 1000);
  }
  function stopTimer() {
    clearInterval(timerInterval);
    seconds = 300; // Reset seconds to 5 minutes
    document.getElementById('timer').textContent = '05:00';
  }
</script>
</body>
</html>