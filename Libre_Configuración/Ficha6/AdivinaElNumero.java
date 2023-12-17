import java.util.Random;
import java.util.Scanner;

public class AdivinaElNumero {
    public static void jugar() {
        Random rand = new Random();
        int numeroAdivinar = rand.nextInt(100) + 1;
        Scanner scanner = new Scanner(System.in);

        System.out.println("Adivina un número entre 1 y 100:");
        int intento;
        do {
            intento = scanner.nextInt();
            if (intento < numeroAdivinar) {
                System.out.println("Demasiado bajo. ¡Intenta de nuevo!");
            } else if (intento > numeroAdivinar) {
                System.out.println("Demasiado alto. ¡Intenta de nuevo!");
            }
        } while (intento != numeroAdivinar);

        System.out.println("¡Felicidades! ¡Adivinaste el número!");
    }

    public static void main(String[] args) {
        jugar();
    }
}
