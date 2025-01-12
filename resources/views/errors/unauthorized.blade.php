<!-- resources/views/errors/unauthorized.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized Access</title>
    <style>
        body {
            background-color: #f7f9fc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 500px;
            width: 90%;
        }
        img {
            width: 250px;
            height: auto;
            margin-bottom: 30px;
            animation: bounce 2s infinite;
        }
        h1 {
            color: #ff6347;
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }
        p {
            color: #555;
            font-size: 1.3em;
            margin-bottom: 40px;
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 15px 30px;
            font-size: 1.2em;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }

        /* Animation */
        @keyframes bounce {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div>
        <img src="{{ asset('images/molar.jpg')}}" alt="Funny Picture">
    </div>

    <div class="container">

        <img src="{{ asset('images/bayot.jpg')}}" alt="Funny Picture">
        <h1>HUHUHUHU BAWAL, KISS SA</h1>
        <p>aw dili ka okay!!!</p>
        <a href="{{ url('/home') }}" class="btn">Back to Home Page</a>
    </div>


    <div>
        <img src="{{ asset('images/jona.jpg')}}" alt="Funny Picture">
    </div>

</body>
</html>
