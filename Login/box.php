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
    background-image: url('box2.png'); /* Specify the path to your image */
    background-size: cover; /* Cover the entire background */
    background-repeat: repeat; /* Prevent image from repeating */
   color:#9E134E;
  }
  h1, h2, h3, h4, h5, h6 {
    font-weight: bold; /* Bold headings */
    color: #9E134E; /* Heading color */
}
  .container {
    font-weight: bold;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    min-height: 100vh;
    padding-bottom: 10px;
    color:#9E134E;

  }
  .container2 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    min-height: 10vh;
    padding-bottom: 5px;
    animation: fadeIn 1s ease;
    color:#9E134E;
  }
  .container3 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    min-height: 10vh;
    padding-bottom: 10px;
    animation: fadeIn 1s ease;
    color:#9E134E;
  }
  
  
  
  .instructions {
    max-width: 500px;
    margin: 10px;
    padding: 25px;
    background-color: #ffcdcd;
    border-radius: 60px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    animation: fadeIn 1s ease;
    color:#9E134E;
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
    padding: 20px;
    background-color: #fcd6e4;
    border-radius: 60px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.5s ease;
    color:#9E134E;
  }
  .WHAT:hover {
    transform: translateY(-12px);
  }
  h1 {
    text-align: center;
    color: #871448;
    margin-bottom: 20px;
  }
  p {
    color: #9E134E;
    line-height: 1.6;
  }
  li {
    color: #9E134E;
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
    min-height: 20vh;
    padding-bottom: 5px;
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
  .body {
	 
	 font: 400 11.4285714286px 'Roboto', sans-serif;
	 letter-spacing: 0.12em;
}
.wrapper {
   /* Change this to the desired color */
    transform: translate(-50%, -50%);
    top: 283%;
    left: 50%;
    width: 30vh;
    height: 30vh;
    position: absolute;
    margin: auto;
    color: #333;
    padding-bottom: 15px;
    
}



.directions {
    position: absolute;
    top: 50%;
    left: 50%;
    text-align: center;
    transform: translate(-50%, -50%);
    font-size: 2rem;
    color:	#333;
}

.directions .message {
    padding: 0.25rem;
    animation: text-highlight 16000ms infinite;
    color: #333;
    opacity: 0.3;
}

.directions .message:nth-child(2) {
    animation-delay: 4000ms;
}

.directions .message:nth-child(3) {
    animation-delay: 8000ms;
}

.directions .message:nth-child(4) {
    animation-delay: 12000ms;
}

.timer {
    position: relative;
    overflow: hidden;
    border-radius: 0.5rem;
    height: 10%;
    background: 	#ffd6e4;
}

.timer:after {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    transform: translateX(-100%);
    animation: timer 32000ms linear infinite;
    animation-fill-mode: forwards;
    background: 	#FC8EAC;
    z-index: 0;
}

.timer.inhale {
    left: 10%;
    width: 80%;
    transform: rotate(0);
    color:#333;
}

.timer.inhale-hold {
    position: absolute;
    width: 80%;
    right: 10%;
    bottom: 10%;
    transform: rotate(90deg);
    transform-origin: bottom right;
}

.timer.inhale-hold:after {
    animation-delay: 4000ms;
}

.timer.exhale {
    position: absolute;
    width: 80%;
    left: 10%;
    bottom: 0;
    transform: rotate(180deg);
}

.timer.exhale:after {
    animation-delay: 8000ms;
}

.timer.exhale-hold {
    position: absolute;
    width: 80%;
    left: 10%;
    bottom: 10%;
    transform: rotate(270deg);
    transform-origin: bottom left;
}

.timer.exhale-hold:after {
    animation-delay: 12000ms;
}

.timer .indicators {
    display: flex;
    height: 100%;
}

.timer .indicator {
    text-align: center;
    position: relative;
    z-index: 2;
    display: block;
    flex: 1;
    border: 1px solid #52bbf0;
    box-sizing: border-box;
    color: #871448 ;
}

@keyframes timer {
    10%, 50% {
        transform: translateX(0%);
        color:#E01E66;
    }
    60%, 100% {
        transform: translateX(100%);
    color:#E01E66;
      }
}

@keyframes text-highlight {
    2%, 25% {
        color: #E01E66;
        opacity: 1;
        font-weight: 600;
    }
    28%, 100% {
        color: #E01E66;
        opacity: 0.3;
    }
}
.audio-container {
    text-align: center;
    margin-top: 9px; /* Adjust the margin as needed */
    color: #FC8EAC; /* Change the background color */
}

audio {
    width: 40%;
    color: #FC8EAC; /* Change the color of the audio player controls */
}
.audio-container audio::-webkit-media-controls-panel {
  /* Style the inner controls panel */
  background-color: #FC8EAC;
  /* Change the color of the buttons */
  color: white;
  /* Adjust padding and border-radius for better appearance */
  padding: 10px;
  border-radius: 10px;
  /* Add box shadow for depth */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.audio-container p {
  color: #9E134E;
  text-align: center;
  font-size: 14px;
  margin-bottom: 10px;
}



</style>
</head>
<body>
  <div id="quoteContainer" class="hidden">
    <div 
      class="quoteContent" id="quoteText">
   </div>
   
 </div>
  
<div class="container2">
  <div class="WHAT">
    <h1>Box breathing</h1>
    <h3>What Is Box Breathing ?</h3>
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

 
 

<div class="audio-container">
<p>SIT BACK AND CALM YOURSELF BY LISTENING TO SOME MUSIC WHILE DOING THE EXERCISE</p>
<audio controls>

  <source src="relax_box.mp3" type="audio/mp3">
  Your browser does not support the audio element.
</audio>
  </div>
<div class="wrapper">
    <div class="directions">
      <div class="message">Inhale</div>
      <div class="message">Hold</div>
      <div class="message">Exhale</div>
      <div class="message">Hold</div>
    </div>
    <div class="timer inhale">
      <div class="progress"></div>
      <div class="indicators">
        <div class="indicator"></div>
        <div class="indicator"></div>
        <div class="indicator"></div>
        <div class="indicator"></div>
      </div>
    </div>
    <div class="timer inhale-hold">
      <div class="indicators">
        <div class="indicator"></div>
        <div class="indicator"></div>
        <div class="indicator"></div>
        <div class="indicator"></div>
      </div>
    </div>
    <div class="timer exhale">
      <div class="indicators">
        <div class="indicator"></div>
        <div class="indicator"></div>
        <div class="indicator"></div>
        <div class="indicator"></div>
      </div>
    </div>
    <div class="timer exhale-hold">
      <div class="indicators">
        <div class="indicator"></div>
        <div class="indicator"></div>
        <div class="indicator"></div>
        <div class="indicator"></div>
      </div>
    </div>
  </div>
  </div>


</body>
</html>