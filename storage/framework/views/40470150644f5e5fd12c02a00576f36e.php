<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Floating Containers</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

.float-container {
    animation: float 3s 
     infinite;
}
</style>
</head>
<body>

<div class="d-flex flex-wrap justify-content-center gap-4">

    <div class="float-container " style="background-color:#198754;
        border-radius:15px;
        width:300px;">
        <h1 class="text-info text-center text">About Me</h1>
        <ul>
            <li class=text-white>Unbelievably not Good looking</li>
            <li class=text-white>Unbelievably coward</li>
            <li class=text-white>Unbelievably stupid</li>
        </ul>
        <div class="text-center">
            <a href="<?php echo e(route('design')); ?>" class="btn btn-outline-light">Back to Cube</a>
        </div>
    </div>

    <div class="float-container p-4 shadow-lg"
    style="background-color:#0d6efd;
        border-radius:15px; width:300px;
        display:flex;
        justify-content:center;
        align-items:center;">
        <img src="https://i.pinimg.com/736x/ec/64/bf/ec64bf501b12102ada360598068d1098.jpg" 
        alt="Profile" style="width:150px; height:150px; object-fit: cover;">
    </div>

    <!-- <div class="float-container  text-center" style="background-color:#ffc107; border-radius:15px; width:300px;">
        <h1 class="text-dark "></h1>
        <p>Some extra content here!</p>
    </div> -->

</div>

</body>
</html>
<?php /**PATH C:\Users\User\Documents\lone\resources\views/About.blade.php ENDPATH**/ ?>