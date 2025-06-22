<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata Miguel O'Hara</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <style>
    body {
      background: linear-gradient(to right, rgb(235, 116, 116), rgb(11, 11, 11));
      color: white; 
      font-family: 'Segoe UI', sans-serif;
    }

    .profile-card {
      margin: 80px auto;
      padding: 40px;
      background: rgba(10, 10, 10, 0.5);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-radius: 20px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      text-align: center;
      max-width: 500px;
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .profile-card h1 {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    .profile-card p {
      font-size: 1rem;
      margin: 5px 0;
    }

    .profile-img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid rgba(255, 255, 255, 0.5);
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="profile-card">
   <img src="<?= base_url('assets/img/miguel o hara.jpg') ?>" alt="Miguel O'Hara" class="profile-img">
    <h1>Miguel O'Hara</h1>
    <h2>Alias: Spider-Man 2099</h2>
    <div class="bio-info">
      <p><strong>Origin:</strong> Earth-928</p>
      <p><strong>Occupation:</strong> Senior Geneticist at Alchemax</p>
      <p><strong>Affiliations:</strong> Alchemax, Spider-Society</p>
      <p><strong>Powers:</strong> Super spider strength, enhanced reflexes, night vision, venomous fangs, sharp claws.</p>
      <p><strong>Equipment:</strong> High-tech Spider-Man suit, custom-made web shooters.</p>
      <p><strong>Motto:</strong> "I protect the future."</p>
    </div>
  </div>
</body>
</html>