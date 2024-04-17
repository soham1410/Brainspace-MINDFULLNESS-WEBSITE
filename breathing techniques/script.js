// List of quotes
const quotes = [
    "You are braver than you believe, stronger than you seem, and smarter than you think. - A.A. Milne",
    "It’s okay to not be okay, but it’s not okay to stay that way",
    "Taking care of yourself doesn't mean me first, it means me too.",
    "Don't believe everything you think. Thoughts are just that – thoughts.",
    "You don't need to see the whole staircase, just take the first step." ,
    "Healing comes in waves and maybe today the wave hits the rocks and that's ok, that's ok, darling. You are still healing, you are still healing.",
    "One small crack does not mean that you are broken, it means that you were put to the test and you didn't fall apart.",
    
    // Add more quotes as needed
];

// Function to display random quote
function displayRandomQuote() {
    // Get random index
    const randomIndex = Math.floor(Math.random() * quotes.length);
    // Get random quote
    const randomQuote = quotes[randomIndex];
    // Display quote in pop-up
    const quoteText = document.getElementById("quoteText");
    quoteText.innerText = randomQuote;
    const quoteContainer = document.getElementById("quoteContainer");
    quoteContainer.classList.remove("hidden"); // Ensure the container is visible

    // Close the pop-up after 10 seconds
    setTimeout(() => {
        quoteContainer.classList.add("hidden");
    }, 10000); // 10 seconds in milliseconds
}

// Call the function initially and every 5 seconds
displayRandomQuote(); // Call the function initially
setInterval(displayRandomQuote, 5000); // 5 seconds in milliseconds
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
