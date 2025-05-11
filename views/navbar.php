<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/sidebar.css">
</head>
<body>
    <div id="mySideBar" class="sidenav">
        <h3>Metrorrey</h3>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Perfil</a>
        <div class="dropdown">
            <button class="btnDropDown">Reportes</button>
            <div class="dropdown-content">
                <a href="#">Transmetro</a>
                <a href="#">Correcion de Reportes</a>
                <a href="#">Metro</a>
            </div>
        </div>
        <a href="#">Cerrar sesion</a>
    </div>
    <div id="main">
        <span onclick="openNav()"><img src="../img/bars-solid.svg"></span>
    </div>
    <script src="../js/sidenavbar.js"></script>
</body>
</html>