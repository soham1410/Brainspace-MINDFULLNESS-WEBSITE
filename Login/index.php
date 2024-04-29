<?php 
  session_start(); 

  // Redirect to login page if not logged in
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  // Logout functionality
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mindfulness</title>
  <link rel="stylesheet" href="index.css">
  
</head>
<body>

<header>
<div class="container">
    <h1>Calm Quest</h1>
    <nav>
        <ul>
            <li><a href="about.php">About</a></li>
            <li><a href="benefit.php">Benefits</a></li>
            <li><a href="practise.php">Practices</a></li>
            <li><a href="contacts.php">Contacts</a></li>
            <li><a href="feedback_form.php">Feedback</a></li>
            <li class="dropdown stress-dropdown">
                <a href="#" class="dropbtn">Stress</a>
                <div class="dropdown-content">
                    <a href="blog.php">1. Blog Writing</a><br><br>
                    <a href="breathing.php">2. Breathing Technique</a><br><br>
                    <!-- Add more dropdown items as needed -->
                </div>
            </li>
            <li class="dropdown anxiety-dropdown">
                <a href="#" class="dropbtn">Anxiety</a>
                <div class="dropdown-content">
                <a href="box.php">1. Box Writing</a><br><br>
                    <a href="pmr.php">2. PMR Technique</a><br><br>
                    <!-- Add more dropdown items as needed -->
                </div>
            </li>
        </ul>
    </nav>
</div>

</header>

<footer id="contact">
    <div class="container">
      <h2>Contact Us</h2>
      <p>If you have any questions or inquiries, feel free to reach out to us:</p>
      <ul>
        <li>Email: info@calmquest.com</li>
        <li>Phone: 123-456-7890</li>
      </ul>
       <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    </div>
  </footer>
</body>
</html>

<script>
  // JavaScript to hide all dropdown content initially
  document.querySelectorAll('.dropdown-content').forEach(function(content) {
    content.style.display = 'none';
  });

  // JavaScript to toggle dropdowns
  document.querySelectorAll('.dropdown .dropbtn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === 'none' || dropdownContent.style.display === '') {
        dropdownContent.style.display = 'block';
      } else {
        dropdownContent.style.display = 'none';
      }
    });
  });
</script>




</body>
</html>