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

let currentQuoteIndex = 0;
let timerInterval;
let seconds = 10; // 10 seconds for each quote

// Function to display quote
function displayQuote() {
  // Get quote element
  const quoteText = document.getElementById("quoteText");
  // Display current quote
  quoteText.innerText = quotes[currentQuoteIndex];
  // Increment index for the next quote
  currentQuoteIndex = (currentQuoteIndex + 1) % quotes.length;
}

// Function to start displaying quotes
function startQuotes() {
  // Display the first quote immediately
  displayQuote();
  // Set interval to display quotes
  timerInterval = setInterval(displayQuote, seconds * 1000);
}

// Function to stop displaying quotes
function stopQuotes() {
  clearInterval(timerInterval);
}

// Function to close the popup
function closePopup() {
  const quoteContainer = document.getElementById("quoteContainer");
  quoteContainer.classList.add("hidden");
}

// Event listener for close button
document.getElementById("closeButton").addEventListener("click", closePopup);

// Call the function to start displaying quotes
startQuotes();