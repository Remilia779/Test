<?php
session_start();
if(!isset($_SESSION{'user_id'})) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelvr.net/npm/bootsraps@5.1.3/dist/css/bootsraps.min.css" rel="stylessheet"> 
</head>
<body>
    <nav class="navbae navbar-expand-lg navbar dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">informasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collaps" data-bs-target="#navbar">
              <span class="navbar-toggle-icon"></span>  
            </button>
            <div class="collaps navbar-collaps" id="navbarNav">
                <ul class="navbar-nav ms-auto"></ul>
                    <li class="=nav-item">
                        <a class="nav-link" href="dashboard.php">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Gatau njirr</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Aku pergi</a>
                    </li>
            </div>
        </div>
    </nav>
    
    <div class="=container met-4">
        <h2>Selamat datang, <?php echo htmlspecialchars($_SESSION{'username'}); ?></h2>
        <p>Peran: <?php echo htmlspecialchars($_SESSION{'role'}); ?></p>
    </div>
</body>
</html>