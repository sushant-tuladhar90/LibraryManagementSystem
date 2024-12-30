<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            font-size: 16px;
            color: green;
            display: none;
        }
        .error-message {
            font-size: 16px;
            color: red;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <p>Enter your email address below to reset your password.</p>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="newPassword">Old Password:</label>
            <input type="password" id="newPassword" placeholder="Enter your new password" required>
        </div>
        <div class="form-group">
            <label for="newPassword">New Password:</label>
            <input type="password" id="newPassword" placeholder="Enter your new password" required>
        </div>
        <button id="resetButton">Reset Password</button>
        <div class="message" id="successMessage">Password reset successfully.</div>
        <div class="error-message" id="errorMessage"></div>
    </div>

    <script>
        const emailInput = document.getElementById("email");
        const newPasswordInput = document.getElementById("newPassword");
        const resetButton = document.getElementById("resetButton");
        const successMessage = document.getElementById("successMessage");
        const errorMessage = document.getElementById("errorMessage");

        resetButton.addEventListener("click", () => {
            // Perform email validation here (you can use a regular expression)
            const email = emailInput.value.trim();
            if (!validateEmail(email)) {
                errorMessage.textContent = "Invalid email address.";
                errorMessage.style.display = "block";
                return;
            }

            // Simulate updating the password (in a real application, this would involve server-side logic)
            // For simplicity, we're just showing a success message here.
            successMessage.style.display = "block";
            errorMessage.style.display = "none";
            emailInput.value = "";
            newPasswordInput.value = "";
        });

        function validateEmail(email) {
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }
    </script>
</body>
</html>
