<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Goals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" href="{{ asset('css/cube.css') }}">
    <!-- <style>
        html, body {
            height: 100%;
            margin: 0;   
        }
    </style> -->
    <style>
body {
    background-color: #1a1a1a;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center; 
}

@keyframes float {
    0%   { transform: translateY(0); }
    50%  { transform: translateY(-20px); }
    100% { transform: translateY(0); }
}

@media (max-width: 768px) {
    .float-container {
        animation: float 2s infinite;
        width: 90%;
    }
} 

.float-container {
    animation: float 3s 
     infinite;
}
</style>
</head>
<body class="float-container shadow-lg" style="background-color: #1a1a1a;">

    <div style="background-color: #198754; border-radius: 15px; width: 350px;">
    <h1  class="text-info text-center text-white">Goals</h1>

        <ul>
            <li class=text-white>Become a great game=developer</li>
            <li class=text-white>Slack off</li>
            <li class=text-white>Have a WFR job</li>
        </ul>
    
    <div class="text-center">
        <a href="{{ route('design') }}" class="btn btn-outline-light 
        ">Back to Cube</a>
    </div>

</body>
</html>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Goals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column justify-content-center align-items-center vh-100" style="background-color: #000000;">
    <div class="text-center">
        <h1 class="text-danger">My Goals</h1>
        <p class="text-light fs-5">
            Become a skilled developer and build real-world applications.
        </p>
        <a href="{{ route('things') }}" class="btn btn-outline-light">
            Back to Cube
        </a>
    </div>
</body>
</html> -->
