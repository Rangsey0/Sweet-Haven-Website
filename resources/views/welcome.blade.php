<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Our Website</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Great+Vibes&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9fafb;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .background {
            background-image: url('https://images6.alphacoders.com/905/thumb-1920-905565.jpg');
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.5;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            position: relative;
            margin-left: 20px; /* Adjust this value as needed */
            background: rgba(255, 255, 255, 0.8); /* Adding a background to make the content more readable */
            border-radius: 10px; /* Rounded corners for the container */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adding a subtle shadow for better visibility */
        }

        .logo {
            width: 120px; /* Adjust the size as needed */
            height: auto;
            margin-bottom: 20px;
            border-radius: 50%; /* Making the logo circular */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adding shadow to the logo */
        }

        h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 3rem;
            margin-bottom: 20px;
            /* color: #FF2D20; */
            color: #FF4500;
            text-shadow: 
                2px 2px 0 #000, 
                -2px -2px 0 #000, 
                2px -2px 0 #000, 
                -2px 2px 0 #000; /* Creates an outline effect */
        }

        p {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 30px;
            color: #ffefd5;
            text-shadow: 
                1px 1px 0 #000, 
                -1px -1px 0 #000, 
                1px -1px 0 #000, 
                -1px 1px 0 #000; /* Creates an outline effect */
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: linear-gradient(45deg, #FF2D20, #FF7F50);
            color: #fff;
            text-decoration: none;
            border-radius: 50px; /* Rounded corners for a pill-shaped button */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow for a 3D effect */
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background: linear-gradient(45deg, #E6271F, #FF4500);
            transform: translateY(-3px); /* Slight lift effect on hover */
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
                margin-left: 0; /* Reset margin for smaller screens */
            }
            h1 {
                font-size: 2.5rem;
            }
            p {
                font-size: 1rem;
            }
            .logo {
                width: 80px; /* Adjust the size for smaller screens */
            }
            .btn {
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <img src="{{ asset('images/SweetHaven-Logo.png') }}" alt="Your Image" class="logo">
        <h1>Welcome to Sweet Haven</h1>
        <p>Discover irresistible treats, crafted with love. Indulge in our finest cakes, chocolates and more. Make your day sweeter with us!</p>
        <a href="{{ route('login') }}" class="btn">Log in</a>
        <a href="{{ route('register') }}" class="btn">Register</a>
    </div>
</body>
</html>
