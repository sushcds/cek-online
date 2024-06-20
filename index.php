<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #333;
        }

        .button-container {
            margin-top: 20px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin: 0 10px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Halaman Utama</h1>
    <div class="button-container">
        <form action="cek-khodam.php" method="post" style="display:inline;">
            <button type="submit">Cek Khodam</button>
        </form>
        <form action="cek-kecocokan.php" method="post" style="display:inline;">
            <button type="submit">Cek Kecocokan</button>
        </form>
    </div>
</body>
</html>
