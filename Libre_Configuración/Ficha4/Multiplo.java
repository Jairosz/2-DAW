public class Multiplo {
    public static boolean esMultiplo(int num1, int num2) {
        return num2 % num1 == 0;
    }

    public static void main(String[] args) {
        int primerNumero = 3;
        int segundoNumero = 9;

        boolean esMultiplo = esMultiplo(primerNumero, segundoNumero);
        System.out.println("¿El segundo número es múltiplo del primero?: " + esMultiplo);
    }
}
