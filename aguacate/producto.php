<?php


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web con PDO</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Página Web con PDO</h1>
        </div>
    </header>
    <nav>
        <div class="container">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <main>
    <div class="container">
        <h2>Registrar Producto</h2>
        <div class="registro">
        <form id="registro-form">
            <input type="text" id="nombre" name="Nombre" placeholder="Nombre del producto" required>
            <input type="number" id="precio" name="Precio" placeholder="Precio" min="0" step="0.01" required>
            <input type="number" id="cantidad" name="Disponibilidad" placeholder="Cantidad en stock" min="0" required>
            <input type="text" id="calidad" name="Calidad" placeholder="Calidad" required>
            <input type="text" id="imagen" placeholder="URL de la imagen" required>
            <textarea id="descripcion" name="Descripcion" placeholder="Descripción del producto" required></textarea>
            <button type="submit">Registrar Producto</button>
        </form>
        </div>
        <hr>
        <h2>Productos Disponibles</h2>
        <input type="text" id="busqueda" placeholder="Buscar por nombre...">
        <div class="productos">
            <!-- Productos adicionales -->
            <div class="producto">
                <img src="naranja.jpg" alt="Naranja">
                <h3>Helado de aguacate</h3>
                <p class="precio">$1.20</p>
                <p class="descripcion">El helado de aguacate es una deliciosa y refrescante opción para los días calurosos.</p>
                <button class="btn-comprar">Comprar</button>
            </div>
            <div class="producto">
                <img src="banana.jpg" alt="Banana">
                <h3>Malteada de aguacate</h3>
                <p class="precio">$0.80</p>
                <p class="descripcion">La malteada de aguacate es una bebida cremosa y nutritiva que combina el sabor dulce de la banana con la suavidad del aguacate.</p>
                <button class="btn-comprar">Comprar</button>
            </div>
            <div class="producto">
                <img src="uva.jpg" alt="Uva">
                <h3>Crema de aguacate</h3>
                <p class="precio">$2.00</p>
                <p class="descripcion">La crema de aguacate es una excelente opción para untar en pan o galletas, su sabor suave y cremoso la hace ideal para cualquier ocasión.</p>
                <button class="btn-comprar">Comprar</button>
            </div>
            <!-- Fin de productos adicionales -->
        </div>
    </div>
</main>

    <script src="script.js"></script>
</body>
</html>
