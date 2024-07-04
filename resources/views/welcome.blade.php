<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #e0f7fa;
        }
        .main-content {
            text-align: center;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 0.4em;
        }
        p {
            font-size: 1.1em;
            margin-bottom: 1.2em;
            color: #555;
        }
        a {
            text-decoration: none;
            color: #ff4081;
            font-weight: 600;
            margin: 0 1.2em;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <h1>Greetings from My Site</h1>
        <p>This is a basic Laravel project illustrating routing and controller concepts.</p>
        <p>
            <a href="{{ route('aboutme') }}">About Me</a>
            <a href="{{ route('skills') }}">Skills</a>
            <a href="{{ route('hobbies') }}">Hobbies</a>
        </p>
    </div>
</body>
</html>
