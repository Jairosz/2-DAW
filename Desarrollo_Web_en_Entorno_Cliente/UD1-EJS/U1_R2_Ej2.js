function cambiarFoto(){
    var images = document.getElementById('image');
    var imagenes = [
        "https://www.motociclismo.es/uploads/s1/12/39/89/99/marc-marquezcarrera-india-motogp.jpeg",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLj64CKI0SW86TTuF9MCmYx5WC3zutnNiJjeIK8OZBQdTxO3lht6KolH83zkhrhiNNEdo&usqp=CAU",
        "https://as01.epimg.net/motor/imagenes/2022/01/14/motociclismo/1642153164_635553_1642153287_noticia_normal_recorte1.jpg"
    ];

    function cambiarFoto() {
        if (image.src.match("ducati")) {
            image.src = imagenes[2];
        } else if (image.src === imagenes[3]) {
            image.src = imagenes[2];
        } else {
            image.src = imagenes[0];
        }
    }
}