<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Info</title>
    <link rel="stylesheet" href="style.css">
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: linear-gradient(to right,rgb(235, 116, 116),rgb(11, 11, 11));
            color: #333;
            font-family: 'Segoe UI', sans-serif;
        }
        .profile-card {
            margin: 80px auto;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1); 
            backdrop-filter: blur(15px);          
            -webkit-backdrop-filter: blur(15px);  
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 500px;
            color: white; 
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 1.5rem;
        }
        .mobile-container {
            max-width: 480px;
            margin: auto;
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            color: white;
            border-radius: 0;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .topnav {
            overflow: hidden;
            background: rgba(255, 255, 255, 0.1); 
            backdrop-filter: blur(10px);         
            -webkit-backdrop-filter: blur(10px); 
            position: relative;
            border-radius: 0;
        }

        .topnav #myLinks {
            display: none;
            background: rgba(255, 255, 255, 0.15); 
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        .topnav a {
            color: white;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            display: block;
        }

        .topnav a.icon {
            background: rgba(0, 0, 0, 0.5);
            display: block;
            position: absolute;
            right: 0;
            top: 0;
            border-radius: 0;
        }

        .topnav a:hover {
            background-color: rgba(255, 255, 255, 0.3);
            color: black;
        }

        .active {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
        }

    </style>
</head>
<body>

<div class="topnav">
    <a href="#home" class="active">More Info</a>
        <div id="myLinks">
		<a href="<?= base_url('profile/miguel') ?>">About</a>
		<a href="<?= base_url('profile/resume') ?>">Resume</a>
		<a href="<?= base_url('profile/portofolio') ?>">Portofolio</a>


</div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="container">
    <div class="profile-card">
       <img src="<?= base_url('assets/img/miguel o hara.jpg') ?>" alt="Miguel O'Hara" class="profile-img">
        <h2 class="mt-3">Miguel O'Hara</h2>
        <p> My name is Miguel O'Hara. I'm this dimension's one and only Spider-Man. At least I was...</p>
        <div class="social-icons mt-4">
            <a href="https://instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://github.com/" target="_blank"><i class="bi bi-github"></i></a>
            <a href="https://linkedin.com/" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href="https://facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://twitter.com/" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="https://whatsapp.com/" target="_blank"><i class="bi bi-whatsapp"></i></a>
        </div>
    </div>
</div>


<script>
function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>

</body>
</html>
