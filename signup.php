<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  
  <title>Sign Up - Library Management System</title>
  <style>
    /* CSS styles */

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f1f1f1;
    }

    header {
      background-color: #4CAF50;
      padding: 20px;
      color: white;
      text-align: center;
    }

    .container {
      max-width: 400px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h1 {
      margin-top: 0;
      font-size: 30px;
    }

    p {
      margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .button {
      display: inline-block;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #45a049;
    }

    .error {
      color: red;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <?php
  
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "library";
  
  // Create a new MySQLi object
  $conn = new mysqli($host, $username, $password, $database);
  
  // Check the connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  
  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve the submitted form data
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];
  
      // Perform any necessary validation on the form data here
  
      // Insert the user registration data into the database
      $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
      if ($conn->query($query) === TRUE) {
          // Registration successful, redirect to the desired page
         echo "success" ; 
          exit();
      } else {
          // Registration failed, display an error message
          echo "Error: " . $query . "<br>" . $conn->error;
      }
  }
  
  // Close the database connection
  $conn->close();
  ?>
  <!-- Button trigger modal -->

  <header>
    <h1>Library Management System</h1>
  </header>

  <div class="container">
    <h2>Sign Up</h2>
    <p>Create your account</p>

    <form action="#" method="post" onsubmit="return validateForm()">
      <input type="text" id="username" name="username" placeholder="Username" required>
      <input type="text" id="email" name="email" placeholder="Email" required>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
      
      <p id="error-message" class="error"></p>

      <button type="submit" class="button">Sign Up</button>
    </form>
  </div>

  <script>
    function validateForm() {
      var username = document.getElementById('username').value;
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      var confirm_password = document.getElementById('confirm_password').value;
      var error_message = document.getElementById('error-message');

      // Validate username, email, password, and confirm_password here

      // Example validation for password and confirm_password
      if (password !== confirm_password) {
        error_message.textContent = 'Passwords do not match';
        return false; // Prevent form submission
      }

      return true; // Allow form submission
    }
  </script>
  
  
</body>
</html>
