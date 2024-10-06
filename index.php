<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor Kelembapan Tanah & Udara</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        padding: 10px;
    }

    .container {
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 10px;
        width: 100%;
        max-width: 500px;
        text-align: center;
    }

    h1 {
        color: #333;
        margin-bottom: 20px;
        font-size: 1.5rem;
    }

    .data {
        margin-bottom: 20px;
    }

    .data p {
        font-size: 1.1rem;
        margin: 10px 0;
        color: #555;
    }

    strong {
        color: #007BFF;
    }

    form {
        margin-top: 20px;
    }

    button {
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 5px;
        cursor: pointer;
        margin: 5px;
        transition: background-color 0.3s;
        width: 100%;
    }

    button:hover {
        background-color: #0056b3;
    }

    @media (min-width: 600px) {
        button {
            width: auto;
            display: inline-block;
        }
    }

    @media (max-width: 500px) {
        h1 {
            font-size: 1.2rem;
        }

        .data p {
            font-size: 1rem;
        }
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(to right, #e0f7fa, #80deea);
        /* Gradien warna biru muda */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        padding: 10px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Monitor Kelembapan Tanah & Udara</h1>
        <div class="data">
        </div>
        <form action="action.php" method="POST">
            <button type="submit" name="pompa" value="nyala">Nyalakan Pompa</button>
            <button type="submit" name="pompa" value="mati">Matikan Pompa</button>
        </form>
    </div>
</body>

</html>