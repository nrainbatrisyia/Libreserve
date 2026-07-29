<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LibReserve | Main </title>

    <style>
        body {
            background-color: #42255c;
            color: white;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;

            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .title {
            text-align: center;
            margin-top: 100px; 
            margin-bottom: 20px;
        }

        .title h1 {
            font-size: 42px; 
            font-weight: bold;
            line-height: 1.3;
            margin: 0;
        }

        .logo {
            width: 260px; 
            max-width: 70%;
            margin: 10px 0 35px 0; 
        }

        .home-buttons {
            display: flex;
            gap: 12px;
            width: 100%;
            max-width: 320px;
            margin-top: 20px; 
            margin-bottom: 40px;
        }

        .home-buttons button {
            flex: 7; 
            background-color: #7fc443;
            color: #133a1f;
            border: none;
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 8px;
            transition: 0.2s ease;
        }

        .home-buttons button:hover {
            background-color: #bcf499;
        }

        .home-buttons button:active {
            background-color: #4e8c2a;
        }
    </style>
</head>

<body>

    <div class="title">
        <h1>
            WELCOME TO LIBRARY ROOM <br>
            <span>RESERVATION SYSTEM</span>
        </h1>
    </div>

    <img src="picture/white logo.jpg" alt="logo" class="logo">

    <div class="home-buttons">
        <button onclick="location.href='logIn.html'">STUDENT</button>
        <button onclick="location.href='logIn.html'">STAFF</button>
        <button onclick="location.href='logIn.html'">ADMIN</button>
    </div>

</body>
</html>
