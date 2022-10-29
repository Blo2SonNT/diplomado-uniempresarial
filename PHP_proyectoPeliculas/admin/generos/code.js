function cargar_imagen(url_imagen) {
    let contenedorHTML = document.getElementById("imagenFormulario")
    contenedorHTML.innerHTML = `<img class="w-50" src="${url_imagen}">`
}