public class TestPersona {
    public static void main(String[] args) {
        // Crear una persona por defecto
        Persona personaPorDefecto = new Persona();
        System.out.println("Información de la persona por defecto:");
        System.out.println("NIF: " + personaPorDefecto.getNif());
        System.out.println("Altura: " + personaPorDefecto.getAltura() + " cm");
        System.out.println("Edad: " + personaPorDefecto.getEdad() + " años");
        personaPorDefecto.hablar();
        personaPorDefecto.comer();
        System.out.println();

        // Crear una persona inventada
        Persona personaInventada = new Persona("12345678B", 180, 30);
        System.out.println("Información de la persona inventada:");
        System.out.println("NIF: " + personaInventada.getNif());
        System.out.println("Altura: " + personaInventada.getAltura() + " cm");
        System.out.println("Edad: " + personaInventada.getEdad() + " años");
        personaInventada.hablar();
        personaInventada.comer();
        System.out.println();

        // Crear un ingeniero informático
        IngenieroInformatico ingenieroInformatico = new IngenieroInformatico();
        System.out.println("Información del ingeniero informático:");
        ingenieroInformatico.setNif("99999999C");
        ingenieroInformatico.setAltura(170);
        ingenieroInformatico.setEdad(28);
        System.out.println("NIF: " + ingenieroInformatico.getNif());
        System.out.println("Altura: " + ingenieroInformatico.getAltura() + " cm");
        System.out.println("Edad: " + ingenieroInformatico.getEdad() + " años");
        ingenieroInformatico.hablar();
        ingenieroInformatico.comer();
        ingenieroInformatico.razonar();
        ingenieroInformatico.trabajarEnGrupo();
        ingenieroInformatico.crearPrograma();
    }
}
