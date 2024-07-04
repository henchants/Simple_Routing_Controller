<!DOCTYPE html>
<html>
<head>
    <title>WELCOME</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #ffcc33, #ff6699);
            color: #333;
        }
        .main-content {
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 0 20px;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 0.4em;
            color: #ff4081;
        }
        p {
            font-size: 1.1em;
            margin-bottom: 1.2em;
            color: #555;
        }
        a {
            text-decoration: none;
            color: #3498db;
            font-weight: 700;
            margin: 0 1.2em;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <h1>WELCOME</h1>
        <p>
            <a href="{{ route('aboutme') }}">About Me</a>
            <a href="{{ route('skills') }}">Skills</a>
            <a href="{{ route('hobbies') }}">Hobbies</a>
        </p>
    </div>
</body>
</html>
