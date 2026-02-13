<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Favorite Games</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" href="{{ asset('css/cube.css') }}">
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

    <div class="text-center shadow-warning" style="background-color: #198754; border-radius: 15px; width: 350px;">
        <h1 class="text-light text-white">Favorite Games</h1>
        <ul class="list-unstyled text-light">
            <li class=text-white>Minecraft</li>
            <li class=text-white>Valorant</li>
            <li class=text-white>Chess</li>
        </ul>
        <a href="{{ route('design') }}" class="btn btn-outline-warning">Back to Cube</a>
    </div>

</body>
</html>
