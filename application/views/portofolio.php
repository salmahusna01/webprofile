<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <style>
    body {
      background: linear-gradient(to right, rgb(235, 116, 116), rgb(11, 11, 11));
      color: white;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .portfolio-card {
      margin: 80px auto;
      padding: 40px;
      background: rgba(10, 10, 10, 0.5);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-radius: 20px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      text-align: center;
      max-width: 600px;
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .portfolio-card h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .portfolio-card h2 {
      font-size: 1.5rem;
      margin-bottom: 20px;
      color: rgba(255, 255, 255, 0.8);
    }

    .portfolio-card ul {
      font-size: 1rem;
      margin: 10px 0;
      text-align: left;
    }

    .portfolio-card ul {
      padding-left: 20px;
      list-style: none;
    }

    .portfolio-card a {
      color: rgba(116, 166, 235, 1);
      text-decoration: none;
    }

    .portfolio-card a:hover {
      text-decoration: underline;
    }

    .profile-img {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
    display: block;
    margin: 20px auto;
    border: 2px solid rgba(255, 255, 255, 0.5);
  }

    .portfolio-card img {
      width: 100%;
      max-width: 300px;
      border-radius: 10px;
      margin-top: 10px;
    }

    .portfolio-card li {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="portfolio-card">
    <img src="<?= base_url('assets/img/miguel o hara.jpg') ?>" alt="Miguel O'Hara" class="profile-img">
    <h1>Miguel O'Hara</h1>
    <h2>Science Technology | Spiderman</h2>
    <div class="bio-info">
      <p><strong>About Me:</strong> I am the superhero Spider-Man of the year 2099. I am the leader of the multiversal Spider-Society which strives to keep the "canon" intact. As Spider-Man, I would have a lot of adventures along with my Artificial Intelligence, LYLA. With both of them protecting Nueva York, sometime after becoming Spider-Man, I would discover the multiverse and decide to monitor it since then alongside LYLA.</p>

      <p><strong>Skills:</strong> Protected the multiverse from various threats, Science Technology</p>

      <p><strong>Projects:</strong></p>
      <ul>
        <li>
          <img src="<?= base_url('assets/img/thevulture.jpeg') ?>" alt="Catching The Vulture">
          <p>Project 1: Catching The Vulture</p>
        </li>
        <li>
          <img src="<?= base_url('assets/img/milesmorales.jpeg') ?>" alt="Miles Always Interrupt">
          <p>Project 2: Miles Always Interrupt</p>
        </li>
        <li>
          <img src="<?= base_url('assets/img/with baby.jpeg') ?>" alt="With Baby Parker">
          <p>Project 3: With Baby Parker</p>
        </li>
      </ul>

      <p><strong>Contact:</strong> miguelohara@gmail.com | +123 456 7890</p>
      <p><strong>Socials:</strong> 
        <a href="#">LinkedIn</a> | 
        <a href="#">GitHub</a>
      </p>
    </div>
  </div>
</body>
</html>
