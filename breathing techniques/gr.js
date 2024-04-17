document.addEventListener("DOMContentLoaded", function() {
    const circle = document.getElementById("circle");
    const startBtn = document.getElementById("startBtn");
    const stopBtn = document.getElementById("stopBtn");
    const completeStopBtn = document.getElementById("completeStopBtn");
    const resetBtn = document.getElementById("resetBtn");
    const timerDisplay = document.getElementById("timer");
    let inhaleTimeout;
    let holdBreathTimeout;
    let exhaleTimeout;
    let animationInterval;
    let isBreathing = false;
    let remainingTime = 300; // 5 minutes in seconds

    startBtn.addEventListener("click", startBreathing);
    stopBtn.addEventListener("click", stopBreathing);
    completeStopBtn.addEventListener("click", completeStopExercise);
    resetBtn.addEventListener("click", resetExercise);

    function startBreathing() {
        if (!isBreathing) {
            isBreathing = true;
            startBtn.disabled = true;
            stopBtn.style.display = "inline-block";
            completeStopBtn.style.display = "none";
            inhale();
            animationInterval = setInterval(function() {
                holdBreath();
                holdBreathTimeout = setTimeout(function() {
                    exhale();
                    exhaleTimeout = setTimeout(inhale, 5000); // Adjust the timing as needed
                }, 5000); // Adjust the timing as needed
            }, 15000); // Adjust the timing as needed
        }
    }

    function stopBreathing() {
        if (isBreathing) {
            isBreathing = false;
            startBtn.disabled = false;
            clearInterval(animationInterval);
            clearTimeout(inhaleTimeout);
            clearTimeout(holdBreathTimeout);
            clearTimeout(exhaleTimeout);
            circle.style.width = "100px";
            circle.style.height = "100px";
            circle.textContent = "";
        }
    }

    function completeStopExercise() {
        stopBreathing();
        timerDisplay.textContent = "5:00";
        remainingTime = 300;
    }

    function resetExercise() {
        completeStopExercise();
        startBtn.disabled = false;
        stopBtn.style.display = "none";
        completeStopBtn.style.display = "none";
    }

    function inhale() {
        circle.style.width = "150px";
        circle.style.height = "150px";
        circle.textContent = "Inhale";
    }

    function holdBreath() {
        circle.style.width = "120px";
        circle.style.height = "120px";
        circle.textContent = "Hold Breath";
    }

    function exhale() {
        circle.style.width = "100px";
        circle.style.height = "100px";
        circle.textContent = "Exhale";
    }

    // Timer function
    setInterval(updateTimer, 1000);

    function updateTimer() {
        if (isBreathing) {
            remainingTime--;
            const minutes = Math.floor(remainingTime / 60);
            const seconds = remainingTime % 60;
            timerDisplay.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            if (remainingTime <= 0) {
                completeStopExercise();
            }
        }
    }
});
