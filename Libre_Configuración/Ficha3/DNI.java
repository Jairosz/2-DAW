public class DNI {
    private int numeroDni;

    // Constructor
    public DNI(int numeroDni) {
        this.numeroDni = numeroDni;
    }

    // Método para obtener solo el número del DNI
    public int getNumeroDni() {
        return numeroDni;
    }

    // Método para obtener el NIF completo (número y letra)
    public String getNif() {
        // Implementa la lógica para calcular la letra correspondiente al número del DNI
        char letra = calcularLetraNIF(numeroDni);
        return numeroDni + Character.toString(letra);
    }

    // Método para modificar el DNI y proporcionar el NIF completo
    public void modificarDNI(int nuevoNumeroDni) throws Exception {
        if (validarNumeroDni(nuevoNumeroDni)) {
            this.numeroDni = nuevoNumeroDni;
        } else {
            throw new Exception("Número de DNI inválido");
        }
    }

    // Método para modificar solo el número del DNI
    public void modificarNumeroDni(int nuevoNumeroDni) throws Exception {
        if (validarNumeroDni(nuevoNumeroDni)) {
            this.numeroDni = nuevoNumeroDni;
        } else {
            throw new Exception("Número de DNI inválido");
        }
    }

    // Métodos privados para cálculos relacionados con el DNI y NIF
    private static char calcularLetraNIF(int numeroDni) {
        // Implementa la lógica para calcular la letra del NIF a partir del número del DNI
        return 'A'; // Reemplaza con el cálculo correcto
    }

    private static boolean validarNumeroDni(int numeroDni) {
        // Implementa la lógica para validar el número del DNI
        return true; // Reemplaza con la validación correcta
    }

    private static char extraerLetraNif(String nif) {
        // Implementa la lógica para extraer la letra del NIF
        return 'A'; // Reemplaza con la lógica correcta
    }
}
