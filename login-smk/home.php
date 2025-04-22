<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang!</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(59, 105, 151);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 500px;
        }

        h1 {
            color: #4CAF50;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1.1rem;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #d32f2f;
        }

        /* Responsive design */
        @media (max-width: 600px) {
            .container {
                padding: 30px;
                width: 85%;
            }
            h1 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang <?php echo $_SESSION['user']; ?>!</h1>
        <p>Anda berhasil masuk ke sistem. Semoga hari Anda menyenankan!</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
