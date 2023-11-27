//jairo sanchez gavilan 2º daw
import java.util.Scanner;
import java.util.*;
public class metodos2 {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int opcion;

        do {
            System.out.println("\n=== Menú Principal ===");
            System.out.println("1. Verificar si un número es par o impar");
            System.out.println("2. Mostrar cuadrado de asteriscos");
            System.out.println("3. Mostrar cuadrado de un carácter dado");
            System.out.println("4. Calcular área de un círculo");
            System.out.println("5. Calcular parte entera y residuo");
            System.out.println("6. Mostrar dígitos de un número");
            System.out.println("7. Convertir temperatura");
            System.out.println("0. Salir");
            System.out.print("Seleccione una opción: ");
            opcion = scanner.nextInt();

            switch (opcion) {
                case 1:
                    System.out.print("Ingrese un número entero: ");
                    int num = scanner.nextInt();
                    if (esPar(num)) {
                        System.out.println(num + " es par.");
                    } else {
                        System.out.println(num + " es impar.");
                    }
                    break;

                case 2:
                    System.out.print("Ingrese el lado del cuadrado: ");
                    int lado = scanner.nextInt();
                    cuadradoDeAsteriscos(lado);
                    break;

                case 3:
                    System.out.print("Ingrese el lado del cuadrado: ");
                    int ladoCaracter = scanner.nextInt();
                    System.out.print("Ingrese el carácter de relleno: ");
                    char caracterRelleno = scanner.next().charAt(0);
                    cuadradoDeCaracter(ladoCaracter, caracterRelleno);
                    break;

                case 4:
                    System.out.print("Ingrese el radio del círculo: ");
                    double radio = scanner.nextDouble();
                    System.out.println("El área del círculo es: " + circuloArea(radio));
                    break;

                case 5:
                    System.out.print("Ingrese el dividendo (a): ");
                    int a = scanner.nextInt();
                    System.out.print("Ingrese el divisor (b): ");
                    int b = scanner.nextInt();
                    System.out.println("Parte entera del cociente: " + calcularParteEntera(a, b));
                    System.out.println("Residuo: " + calcularResiduo(a, b));
                    break;

                case 6:
                    System.out.print("Ingrese un número entre 1 y 99999: ");
                    int numero = scanner.nextInt();
                    mostrarDigitos(numero);
                    break;

                case 7:
                    System.out.println("Seleccione una opción:");
                    System.out.println("1. Convertir de Fahrenheit a Celsius");
                    System.out.println("2. Convertir de Celsius a Fahrenheit");
                    int opcionTemp = scanner.nextInt();
                    if (opcionTemp == 1) {
                        System.out.print("Ingrese la temperatura en grados Fahrenheit: ");
                        double tempF = scanner.nextDouble();
                        System.out.println("Equivalente en grados Celsius: " + centigrados(tempF));
                    } else if (opcionTemp == 2) {
                        System.out.print("Ingrese la temperatura en grados Celsius: ");
                        double tempC = scanner.nextDouble();
                        System.out.println("Equivalente en grados Fahrenheit: " + fahrenheit(tempC));
                    } else {
                        System.out.println("Opción no válida.");
                    }
                    break;

                case 0:
                    System.out.println("Saliendo del programa. ¡Hasta luego!");
                    break;

                default:
                    System.out.println("Opción no válida. Inténtelo de nuevo.");
            }

        } while (opcion != 0);

        scanner.close();
    }

    // Método para verificar si un número es par o impar
    public static boolean esPar(int num) {
        return num % 2 == 0;
    }

    // Método para mostrar un cuadrado de asteriscos
    public static void cuadradoDeAsteriscos(int lado) {
        for (int i = 0; i < lado; i++) {
            for (int j = 0; j < lado; j++) {
                System.out.print("* ");
            }
            System.out.println();
        }
    }

    // Método para mostrar un cuadrado de un carácter dado
    public static void cuadradoDeCaracter(int lado, char caracterRelleno) {
        for (int i = 0; i < lado; i++) {
            for (int j = 0; j < lado; j++) {
                System.out.print(caracterRelleno + " ");
            }
            System.out.println();
        }
    }

    // Método para calcular el área de un círculo
    public static double circuloArea(double radio) {
        return Math.PI * Math.pow(radio, 2);
    }

    // Método para calcular la parte entera del cociente
    public static int calcularParteEntera(int a, int b) {
        return a / b;
    }

    // Método para calcular el residuo de la división
    public static int calcularResiduo(int a, int b) {
        return a % b;
    }

    // Método para mostrar los dígitos de un número
    public static void mostrarDigitos(int numero) {
        String numeroComoTexto = Integer.toString(numero);
        for (int i = 0; i < numeroComoTexto.length(); i++) {
            System.out.print(numeroComoTexto.charAt(i) + "  ");
        }
        System.out.println();
    }

    // Método para convertir de grados Fahrenheit a grados Celsius
    public static double centigrados(double fahrenheit) {
        return 5.0 / 9.0 * (fahrenheit - 32);
    }

    // Método para convertir de grados Celsius a grados Fahrenheit
    public static double fahrenheit(double centigrados) {
        return 9.0 / 5.0 * centigrados + 32;
    }
}
