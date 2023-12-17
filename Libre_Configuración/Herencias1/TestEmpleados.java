public class TestEmpleados {
    public static void main(String[] args) {
        Comercial comercial = new Comercial("Juan", 35, 1500, 250);
        Repartidor repartidor = new Repartidor("Pedro", 23, 1200, "zona 3");

        comercial.plus();
        repartidor.plus();

        System.out.println("Datos del Comercial:");
        System.out.println(comercial);

        System.out.println("\nDatos del Repartidor:");
        System.out.println(repartidor);
    }
}
