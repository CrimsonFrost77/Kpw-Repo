<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrolling Background Image</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .bg-image {
            background-image: url('Assets/simpleBackground2.webp');
            min-height: 100%;
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .content {
            padding: 20px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5); /* semi-transparent overlay */
        }
    </style>
</head>
<body>
    <div class="bg-image">
        <div class="content">
            <h1>Scrolling Background Example</h1>
            
        </div>
    </div>
</body>
</html>