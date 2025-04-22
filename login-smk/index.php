<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMK Bunda Kandung</title>
    <style>
        /* Reset body margin and padding */
        body {
            font-family: 'Arial', sans-serif;
            background: url(bg.jpg) no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            color: #fff;
        }

        /* Style for the heading */
        h2 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(41, 20, 6, 0.7);
            color: #000000;
        }

        /* Style for the form */
        form {
            background-color: transparan;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 300px;
            transition: transform 0.3s;
        }

        /* Add a hover effect to the form */
        form:hover {
            transform: scale(1.05);
        }

        /* Style for text and password input fields */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        /* Focus effect for input fields */
        input[type="text"]:focus, input[type="password"]:focus {
            border-color:rgb(39, 21, 1);
            outline: none;
        }

        /* Style for the submit button */
        input[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color:rgb(63, 26, 2);
            border: none;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s, transform 0.3s;
        }

        /* Hover effect for the submit button */
        input[type="submit"]:hover {
            background-color:rgb(109, 0, 0);
            transform: translateY(-2px);
        }

        /* Responsive design for smaller screens */
        @media (max-width: 600px) {
            form {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <h2>Form Login</h2> <!-- Heading for the form -->
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>