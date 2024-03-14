document.addEventListener("DOMContentLoaded", function () {
    const registroForm = document.getElementById("registro-form");
    const inputBusqueda = document.getElementById("busqueda");
    const productos = document.querySelectorAll(".producto");

    // Agregar evento de envío al formulario de registro
    registroForm.addEventListener("submit", function (event) {
        event.preventDefault();

        // Obtener los valores del formulario
        const nombre = document.getElementById("nombre").value;
        const precio = document.getElementById("precio").value;
        const imagen = document.getElementById("imagen").value;

        // Validar que los campos no estén vacíos
        if (nombre.trim() === "" || precio.trim() === "" || imagen.trim() === "") {
            alert("Por favor, completa todos los campos.");
            return;
        }

        // Crear un nuevo elemento producto
        const producto = document.createElement("div");
        producto.classList.add("producto");

        // Construir la estructura del producto
        producto.innerHTML = `
            <img src="${imagen}" alt="${nombre}">
            <h3>${nombre}</h3>
            <p class="precio">$${precio}</p>
            <button class="btn-comprar">Comprar</button>
        `;

        // Agregar el producto a la lista de productos
        const productosContainer = document.querySelector(".productos");
        productosContainer.appendChild(producto);

        // Limpiar el formulario después de registrar el producto
        registroForm.reset();
    });

    // Agregar evento de entrada al input de búsqueda
    inputBusqueda.addEventListener("input", function () {
        const textoBusqueda = inputBusqueda.value.toLowerCase();

        // Iterar sobre cada producto para filtrar según el texto de búsqueda
        productos.forEach(function (producto) {
            const nombreProducto = producto.querySelector("h3").textContent.toLowerCase();
            if (nombreProducto.includes(textoBusqueda)) {
                producto.style.display = "block";
            } else {
                producto.style.display = "none";
            }
        });
    });
});
