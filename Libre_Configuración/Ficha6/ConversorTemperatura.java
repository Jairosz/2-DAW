public class ConversorTemperatura {
    public static double centigradosAFahrenheit(double centigrados) {
        return 9.0 / 5.0 * centigrados + 32;
    }

    public static double fahrenheitACentigrados(double fahrenheit) {
        return 5.0 / 9.0 * (fahrenheit - 32);
    }

    public static void main(String[] args) {
        // Lógica para obtener la temperatura del usuario y realizar la conversión
        // Ejemplo para convertir de Fahrenheit a Centígrados
        double temperaturaFahrenheit = 68; // Cambia esto por la temperatura que desees convertir
        double resultadoCentigrados = fahrenheitACentigrados(temperaturaFahrenheit);
        System.out.println(temperaturaFahrenheit + " grados Fahrenheit equivalen a " + resultadoCentigrados + " grados Centígrados");
    }
}
