<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoJoComics - Tu Tienda Nerd Favorita</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<?php session_start(); ?>

<body>
    <header class="header">
        <div class="header__logo">
        <a href="index.php">
            <img src="/img/Logo_nuevo.png" alt="logotipo">
        </a>
        </div>
        <div class="header__iconos">
            <a  href="#">
                <svg width="45" height="45" viewBox="0 0 24 24" stroke-width="1.5" stroke="#EEEEEE" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="6" cy="19" r="2" />
                    <circle cx="17" cy="19" r="2" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                </svg>
            </a>
            <a href="/login.php">
                <svg width="45px" height="45px" viewBox="0 0 24 24" stroke-width="1.5" stroke="#EEEEEE" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                    <path d="M20 12h-13l3 -3m0 6l-3 -3" />
                </svg>
            </a>
        </div>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace <?php echo $activo===1 ? 'navegacion__enlace--activo' : ''; ?>" href="index.php">Tienda</a>
        <a class="navegacion__enlace <?php echo $activo===2 ? 'navegacion__enlace--activo' : ''; ?>" href="nosotros.php">Nosotros</a>
        <a class="navegacion__enlace <?php echo $activo===3 ? 'navegacion__enlace--activo' : ''; ?>" href="contactanos.php">Contactanos</a>
        <?php if($_SESSION['rol'] === '1'): ?>
        <a class="navegacion__enlace" href="../../admin/index.php">Administrador</a>
        <?php endif; ?>
    </nav>