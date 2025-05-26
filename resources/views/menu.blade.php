<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Menu Mobile avec Labels</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      padding-bottom: 100px;
    }

    .bottom-nav {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background: #ffffff;
      border-top: 1px solid #ddd;
      box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.05);
      display: flex;
      justify-content: space-around;
      padding: 6px 0;
      z-index: 1000;
    }

    .bottom-nav .nav-item {
      flex: 1;
      text-align: center;
      font-size: 12px;
      color: #6c757d;
    }

    .bottom-nav .nav-item i {
      font-size: 18px;
      display: block;
      margin-bottom: 2px;
    }

    .bottom-nav .nav-item.active {
      color: #0d6efd;
    }

    .dropdown-menu-mobile {
      position: absolute;
      bottom: 60px;
      left: 50%;
      transform: translateX(-50%);
      width: 90%;
      background-color: #ffffff;
      box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      overflow: hidden;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease-in-out;
    }

    .dropdown-menu-mobile.show {
      opacity: 1;
      visibility: visible;
    }

    .dropdown-menu-mobile a {
      padding: 12px;
      display: block;
      color: #212529;
      text-decoration: none;
    }

    .dropdown-menu-mobile a:hover {
      background-color: #f1f1f1;
    }

    .chevron {
      font-size: 10px;
      margin-left: 4px;
      transition: transform 0.3s ease;
    }

    .chevron.rotate {
      transform: rotate(180deg);
    }

    @media (min-width: 768px) {
      .bottom-nav {
        display: none;
      }
    }
  </style>
</head>
<body>

  <!-- NAVBAR MOBILE (haut) -->
  <header class="d-flex d-md-none justify-content-between align-items-center p-2 shadow-sm bg-white">
    <a href="#"><img src="assets/img/au/logo_04.webp" alt="Logo" /></a>
    <a href="#" class="btn btn-outline-primary btn-sm">
      <i class="fas fa-user"></i> 
    </a>
  </header>

  <!-- CONTENU -->
  <main class="container mt-4">
    <h1>Bienvenue !</h1>
    <p>Contenu de la page.</p>
  </main>

  <!-- MENU MOBILE FIXE AVEC LABELS -->
  <div class="bottom-nav d-md-none">
    <div class="nav-item active">
      <i class="fas fa-home"></i>
      <span>Accueil</span>
    </div>
    <div class="nav-item">
      <i class="fas fa-info-circle"></i>
      <span>À propos</span>
    </div>
    <div class="nav-item">
      <i class="fas fa-chalkboard-teacher"></i>
      <span>Formation</span>
    </div>
    <div class="nav-item" id="mobileBlogToggle" style="cursor: pointer;">
      <i class="fas fa-blog"></i>
      <span>Blog <i class="fas fa-chevron-up chevron" id="chevronIcon"></i></span>
    </div>
  </div>

  <!-- DROPDOWN BLOG MOBILE -->
  <div class="dropdown-menu-mobile text-center" id="mobileBlogMenu">
    <a href="#">Articles</a>
    <a href="#">Actualités</a>
    <a href="#">Interviews</a>
  </div>

  <!-- JS -->
  <script>
    const toggleBtn = document.getElementById('mobileBlogToggle');
    const blogMenu = document.getElementById('mobileBlogMenu');
    const chevron = document.getElementById('chevronIcon');

    toggleBtn.addEventListener('click', function (e) {
      e.preventDefault();
      blogMenu.classList.toggle('show');
      chevron.classList.toggle('rotate');
    });

    document.addEventListener('click', function (e) {
      if (!toggleBtn.contains(e.target) && !blogMenu.contains(e.target)) {
        blogMenu.classList.remove('show');
        chevron.classList.remove('rotate');
      }
    });
  </script>



</body>
</html>
