
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Favorite Movies</title>
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
<body class="float-container p-4 shadow-lg" style="background-color: #1a1a1a;">
    <div class=" p-4 shadow-lg" 
        style="background-color: #198754; 
        border-radius: 25px; 
        width: 500px;">
        <h1 class="text-info text-center text-white">Favorite Movies</h1>
        <ul>
            <li class=text-white>FAIRY TAIL</li>
            <li class=text-white>THE FRAGRANCE FLOWER BLOOOMS WITH DIGNITY</li>
            <li class=text-white>INUYASHA</li>
        </ul>

    <div class="text-center">
        <a href="{{ route('design') }}" class="btn btn-outline-light">Back to Cube</a>
    </div>

</body>
</html>