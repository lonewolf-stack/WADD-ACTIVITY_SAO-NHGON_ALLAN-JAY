<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Design</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" href="{{ asset('css/cube.css') }}">

<style>
body {
    background:#111;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    color:white;
}

.scene {
    width:200px;
    height:200px;
    perspective:600px;
}

.cube {
    width:100%;
    height:100%;
    position:relative;
    transform-style:preserve-3d;
    transition: transform 0.1s linear;
}

.cube:hover {
    animation-play-state: paused;
}

.face {
    position:absolute;
    width:200px;
    height:200px;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:1.3rem;
    font-weight:bold;
    cursor:pointer;
}

.top {
    background: #ffc107;
    transform: rotateX(90deg) translateZ(100px);
}

.bottom {
    background: #6610f2;
    transform: rotateX(-90deg) translateZ(100px);
}

.back {
    background: #dc3545;
    transform: rotateY(180deg) translateZ(100px);
}


.front  { background:#0d6efd; transform:translateZ(100px); }
.right  { background:#198754; transform:rotateY(90deg) translateZ(100px); }
.left   { background:#ff4500; transform:rotateY(-90deg) translateZ(100px); }
.top    { background:#ffc107; transform:rotateX(90deg) translateZ(100px); }
.bottom { background:#6610f2; transform:rotateX(-90deg) translateZ(100px); }
.back   { background:#dc3545; transform:rotateY(180deg) translateZ(100px); }

@keyframes rotate {
    from { transform: rotateX(0deg) rotateY(0deg); }
    to   { transform: rotateX(360deg) rotateY(360deg); }
}

@media (max-width: 768px) {
    .float-container {
        animation: float 2s infinite;
        width: 90%;
    }
} 

a {
    color:white;
    text-decoration:none;
}
</style>
</head>

<body>
<div class="scene">
    <div class="cube">
        <div class="face front">
            <a href="{{ route('about') }}">ABOUT ME</a>
        </div>

        <div class="face right">
            <a href="{{ route('hobbies') }}">HOBBIES</a>
        </div>

        <div class="face left">
            <a href="{{ route('goals') }}">GOALS</a>
        </div>

        <div class="face top">
            <a href="{{ route('movies') }}">MOVIES</a>
        </div>

        <div class="face bottom">
            <a href="{{ route('games') }}">GAMES</a>
        </div>

        <div class="face back">
            <a href="{{ route('sports') }}">SPORTS</a>
        </div>

    </div>
</div>

    <!-- <div class="scene">
        <div class="cube">
            <div class="face front"><a href="{{ route('things') }}">ABOUT ME</a></div>
            <div class="face right"><a href="{{ route('hobbies') }}">HOBBIES</a></div>
            <div class="face left"><a href="{{ route('goals') }}">GOALS</a></div>
            <div class="face top"><a href="{{ route('movies') }}">MOVIES</a></div>
            <div class="face bottom"><a href="{{ route('games') }}">GAMES</a></div>
            <div class="face back"><a href="{{ route('sports') }}">SPORTS</a></div>
        </div>
    </div> -->

    <script>
    const cube = document.querySelector('.cube');

let isDragging = false;
let startX, startY;
let currentX = 0, currentY = 0;

let autoX = 0.2; 
let autoY = 0.5;

cube.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.clientX;
    startY = e.clientY;
});

document.addEventListener('mouseup', () => {
    isDragging = false;
});

document.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    let deltaX = e.clientX - startX;
    let deltaY = e.clientY - startY;

    currentX -= deltaY * 0.5;
    currentY += deltaX * 0.5;

    startX = e.clientX;
    startY = e.clientY;
});

cube.addEventListener('touchstart', (e) => {
    isDragging = true;
    startX = e.touches[0].clientX;
    startY = e.touches[0].clientY;
});

document.addEventListener('touchend', () => { isDragging = false; });

document.addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    let deltaX = e.touches[0].clientX - startX;
    let deltaY = e.touches[0].clientY - startY;

    currentX += deltaY * 0.5;
    currentY -= deltaX * 0.5;

    startX = e.touches[0].clientX;
    startY = e.touches[0].clientY;
});

function animate() {
    if (!isDragging) {
        currentX += autoX;
        currentY += autoY;
    }
    cube.style.transform = `rotateX(${currentX}deg) rotateY(${currentY}deg)`;
    requestAnimationFrame(animate);
}
animate();
</script>

</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;   
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center" style="background-color: #1a1a1a;">

    <div class=" p-4 shadow-lg" style="background-color: #198754; border-radius: 15px; width: 350px;">
        <h1  class="text-info text-center
        ">About me</h1>

        <ul>
            <li>Unbelievably not Good looking</li>
            <li>Unbelievably coward</li>
            <li>Unbelievably stupid</li>
        </ul>
    
        <div class="text-center ">
            <a href="{{ route('design') }}" class="btn btn-outline-light">Back to Cube</a>
        </div>
    </div>

</body>
</html> -->
