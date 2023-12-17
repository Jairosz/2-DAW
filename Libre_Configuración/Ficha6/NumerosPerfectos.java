public class NumerosPerfectos {
    public static boolean esNumeroPerfecto(int numero) {
        int suma = 0;
        for (int i = 1; i <= numero / 2; i++) {
            if (numero % i == 0) {
                suma += i;
            }
        }
        return suma == numero;
    }

    public static void main(String[] args) {
        int limite = 10000; // Cambia esto por el límite que desees
        System.out.println("Números perfectos hasta " + limite + ":");
        for (int i = 1; i <= limite; i++) {
            if (esNumeroPerfecto(i)) {
                System.out.print(i + ": ");
                // Imprimir factores
                for (int j = 1; j <= i / 2; j++) {
                    if (i % j == 0) {
                        System.out.print(j + " ");
                    }
                }
                System.out.println();
            }
        }
    }
}
