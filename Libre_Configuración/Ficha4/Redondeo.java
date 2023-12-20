public class Redondeo {
    public static void redondearNumeros(double[] numeros) {
        for (double numero : numeros) {
            double redondeado = Math.floor(numero + 0.5);
            System.out.println("Número original: " + numero + " | Redondeado: " + redondeado);
        }
    }

    public static void main(String[] args) {
        double[] valores = {3.25, 7.8, 9.1, 5.5};

        redondearNumeros(valores);
    }
}
