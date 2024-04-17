document.addEventListener("DOMContentLoaded", function() {
    const circle = document.getElementById("circle");
    const startBtn = document.getElementById("startBtn");
    const stopBtn = document.getElementById("stopBtn");
    const timerDisplay = document.getElementById("timer");
    let animationInterval;
    let timerInterval;
    let timerSeconds = 300; // 5 minutes in seconds

    startBtn.addEventListener("click", startBreathing);
    stopBtn.addEventListener("click", stopBreathing);

    function startBreathing() {
        startBtn.style.display = "none";
        stopBtn.style.display = "inline-block";
        startTimer();
        inhale();
        animationInterval = setInterval(function() {
            holdBreath();
            setTimeout(function() {
                exhale();
                setTimeout(inhale, 4000); // Adjust the breathing timing as needed
            }, 4000); // Adjust the breathing timing as needed
        }, 12000); // Adjust the breathing timing as needed
    }

    function stopBreathing() {
        startBtn.style.display = "inline-block";
        stopBtn.style.display = "none";
        clearInterval(animationInterval);
        resetCircle();
        stopTimer();
    }

    function resetCircle() {
        circle.style.width = "100px";
        circle.style.height = "100px";
        circle.textContent = "";
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

    function startTimer() {
        timerInterval = setInterval(() => {
            timerSeconds--;
            if (timerSeconds < 0) {
                clearInterval(timerInterval);
                timerDisplay.textContent = '00:00';
                // You can add additional actions here when the timer finishes
            } else {
                const minutes = Math.floor(timerSeconds / 60);
                const remainingSeconds = timerSeconds % 60;
                const displayMinutes = String(minutes).padStart(2, '0');
                const displaySeconds = String(remainingSeconds).padStart(2, '0');
                timerDisplay.textContent = `${displayMinutes}:${displaySeconds}`;
            }
        }, 1000);
    }

    function stopTimer() {
        clearInterval(timerInterval);
        timerSeconds = 300; // Reset seconds to 5 minutes
        timerDisplay.textContent = '05:00';
    }
});
