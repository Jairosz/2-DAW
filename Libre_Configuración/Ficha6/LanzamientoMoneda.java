import java.util.Random;

public class LanzamientoMoneda {
    public static boolean tirar() {
        Random rand = new Random();
        return rand.nextBoolean();
    }

    public static void main(String[] args) {
        int caras = 0;
        int cruces = 0;
        int lanzamientos = 100; // Cambia esto por la cantidad de lanzamientos que desees

        for (int i = 0; i < lanzamientos; i++) {
            if (tirar()) {
                caras++;
            } else {
                cruces++;
            }
        }

        System.out.println("Caras: " + caras);
        System.out.println("Cruces: " + cruces);
    }
}
