public class Hipotenusa {
    public static double calcularHipotenusa(double lado1, double lado2) {
        return Math.sqrt(Math.pow(lado1, 2) + Math.pow(lado2, 2));
    }

    public static void main(String[] args) {
        double ladoA = 3.0;
        double ladoB = 4.0;

        double hipotenusa = calcularHipotenusa(ladoA, ladoB);
        System.out.println("Longitud de la hipotenusa: " + hipotenusa);
    }
}
