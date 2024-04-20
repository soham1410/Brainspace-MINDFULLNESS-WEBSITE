<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BOX BREATHING</title>
<link rel="stylesheet" href="breathing/styles.css">
<style>
  body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #ffaa8d;
    background-image: url('https://i.pinimg.com/736x/df/e0/24/dfe024384a4a7fa3cd5059e4914bd479.jpg'); /* Specify the path to your image */
    background-size: cover; /* Cover the entire background */
    background-repeat: no-repeat; /* Prevent image from repeating */
    
  }
  h1, h2, h3, h4, h5, h6 {
    font-weight: bold; /* Bold headings */
    color: #4b0000; /* Heading color */
}
  .container {
    font-weight: bold;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    min-height: 100vh;
    padding-bottom: 20px;
  }
  .container2 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    min-height: 50vh;
    padding-bottom: 20px;
    animation: fadeIn 1s ease;
  }
  .container3 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    min-height: 100vh;
    padding-bottom: 20px;
    animation: fadeIn 1s ease;
  }
  
  
  .instructions {
    max-width: 500px;
    margin: 10px;
    padding: 20px;
    background-color: #ffcdcd;
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
    background-color: #ffc9c0;
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
    background-color: #fcd6e4;
    border-radius: 60px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.5s ease;
  }
  .WHAT:hover {
    transform: translateY(-12px);
  }
  h1 {
    text-align: center;
    color: #4b0000;
    margin-bottom: 20px;
  }
  p {
    color: #710202;
    line-height: 1.6;
  }
  li {
    color: #710202;
    line-height: 1.6;
  }
  #timer {
    font-size: 3rem;
    text-align: center;
    margin-top: auto;
    color: #000000;
    transition: transform 0.3s ease;
  }
  img {
    margin: 10px;
    max-width: 400px;
    height: auto;
    border-radius: 60px;
    box-shadow: 0 5px 15px rgba(85, 99, 113, 0.1);
    transition: transform 0.5s ease;
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
    background-color: #c51717;
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
    min-height: 50vh;
    padding-bottom: 20px;
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
  <div id="quoteContainer" class="hidden">
    <div 
      class="quoteContent" id="quoteText">
   </div>
   
 </div>
  <script src="script.js"></script>
<div class="container2">
  <div class="WHAT">
    <h1>box breathing</h1>
    <h3>WHAT IS box breathing ?</h3>
    <p>
        Box breathing is often used in settings where stress or anxiety levels are high, such as before public speaking, during meditation or mindfulness practices, or as a technique to manage symptoms of anxiety or panic attacks.
    </p>
  </div>
</div>
<div class="container">
  <div class="instructions">
    <h2>Instructions:</h2>
    <li><span class="step">STEP1:</span> Sit or lie down in a comfortable position. You can close your eyes if you find it helpful for concentration, but it's not necessary.</li>
    <li><span class="step">STEP2:</span> Take a moment to scan your body for any tension. If you notice any tightness, consciously release it. Let your shoulders drop, relax your jaw, and soften your facial muscles.</li>
    <li><span class="step">STEP3:</span> Begin the Cycle:</li>
    <li><span class="step">STEP4:</span> Inhale (4 seconds): Slowly and deeply inhale through your nose for a count of four seconds.</li>
    <li><span class="step">STEP5:</span> Hold (4 seconds): Once your lungs are full, hold your breath for a count of four seconds. Try to keep your body relaxed during this pause.</li>
    <li><span class="step">STEP6:</span>Exhale (4 seconds): Slowly exhale through your mouth for another count of four seconds. Focus on emptying your lungs completely and releasing any tension with the breath.</li>
    <li><span class="step">STEP7:</span> Hold (4 seconds): After exhaling, hold your breath again for four seconds. Stay relaxed and still during this brief pause.</li>
    <li><span class="step">STEP8:</span> Continue this cycle of inhaling, holding, exhaling, and holding for several rounds. Aim to maintain a smooth and steady rhythm, allowing each phase to flow seamlessly into the next.</li>
  </div>
  <img src="https://pbs.twimg.com/media/FS9gjPfXoAAxC_d.jpg" />
</div>
<div class="container3">
    <div class="hi">
      <h2>Box Breathing: Benefits for Young Adults</h2>
      <ul>
        <li><strong>Enhanced Relaxation:</strong> Box breathing induces a deep sense of relaxation by activating the body's natural relaxation response. This helps young adults alleviate stress, anxiety, and tension commonly experienced due to academic pressures, work responsibilities, and personal life challenges.</li>
        <li><strong>Improved Mental Clarity:</strong> By fostering deliberate and controlled breathing patterns, box breathing enhances mental clarity and cognitive function among young adults. This enables better focus, concentration, and problem-solving abilities in academic and professional endeavors.</li>
        <li><strong>Optimized Physical Performance:</strong> Regular practice of box breathing strengthens respiratory muscles and improves oxygen intake, leading to enhanced physical performance. Young adults involved in sports or physical activities benefit from increased endurance, stamina, and overall athletic performance.</li>
        <li><strong>Enhanced Sleep Quality:</strong> Box breathing serves as an effective technique for promoting relaxation and reducing insomnia or sleep disturbances. By calming the nervous system, young adults can experience better sleep quality, waking up feeling more refreshed and rejuvenated.</li>
        <li><strong>Emotional Stability:</strong> Learning box breathing techniques equips young adults with valuable tools for emotional regulation and stress management. By fostering a sense of calmness and control, box breathing helps young adults cope with challenging emotions and promotes overall emotional well-being and resilience.</li>
      </ul>
    </div> 
  </div>
  
<!-- Embedding YouTube Video -->
<div class="video-container">
  <iframe width="360" height="215" src="https://www.youtube.com/embed/tEmt1Znux58" frameborder="20" allowfullscreen></iframe>
</div>
<div class="container9">
  <h1>Breathing Exercise</h1>
  <div class="breathing-box">
      <div class="circle" id="circle"></div>
  </div>
  <button id="startBtn">Start Breathing</button>
  <button id="stopBtn" style="display: none;">Stop Breathing</button>
</div>

<script src="gr.js"></script>
<div id="timer">05:00</div>

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