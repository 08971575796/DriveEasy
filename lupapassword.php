<!-- lupapassword.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .reset-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .reset-form h2 {
            text-align: center;
        }

        .reset-form label {
            display: block;
            margin-bottom: 8px;
        }

        .reset-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .reset-form button {
            background-color: #ffc107;
            color: black;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .reset-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="reset-form">
    <h2>Reset Password</h2>
    <form action="proses_reset_password.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit"style="font-weight: bold; color: black;">Reset Password</button>
    </form>
</div>

</body>
</html>
