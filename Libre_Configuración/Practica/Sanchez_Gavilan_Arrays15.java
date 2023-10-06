package Practica;
import java.util.Scanner;

public class Sanchez_Gavilan_Arrays15 {
    public static void main(String[] args) {
        boolean avionAsientos[] = new boolean[10];
        int opcionMenu;
        boolean salida = false;
        String nombre = "";
        String apellidos = "";
        String dni = "";
        Scanner teclado = new Scanner(System.in);
        
        do {
            System.out.println("AEROLÍNEAS JAIRING");
            System.out.println("1. ## COMPRAR BILLETE PRIMERA CLASE ");
            System.out.println("2. ## COMPRAR BILLETE ECONÓMICO ");
            System.out.println("3. ## MOSTRAR DISPONIBILIDAD ");
            System.out.println("4. ## SALIR ");
            opcionMenu = teclado.nextInt();
            teclado.nextLine();  // Consumir la nueva línea pendiente

            switch (opcionMenu) {
                case 1: // billete primera clase
                    System.out.println("Vamos a comprar tu billete introduce:");
                    System.out.println("Nombre:");
                    nombre = teclado.nextLine();
                    System.out.println("Apellidos:");
                    apellidos = teclado.nextLine();
                    System.out.println("DNI:");
                    dni = teclado.nextLine();

                    boolean asientoEncontrado = false;
                    for (int i = 0; i < avionAsientos.length; i++) {
                        if (!avionAsientos[i]) {
                            System.out.println("El asiento " + (i + 1) + " está libre, asignando asiento a " + nombre + " " + apellidos);
                            avionAsientos[i] = true;
                            asientoEncontrado = true;
                            break;  // Salir del bucle una vez que se ha asignado un asiento
                        }
                    }
                    if (!asientoEncontrado) {
                        System.out.println("Lo siento, no quedan asientos disponibles en primera clase.");
                    }

                    break;
                    case 2: // billete económico
                    System.out.println("Vamos a comprar tu billete económico. Introduce:");
                    System.out.println("Nombre:");
                    nombre = teclado.nextLine();
                    System.out.println("Apellidos:");
                    apellidos = teclado.nextLine();
                    System.out.println("DNI:");
                    dni = teclado.nextLine();
                
                    boolean asientoEconomicoEncontrado = false;
                    for (int i = 5; i < avionAsientos.length; i++) {
                        if (!avionAsientos[i]) {
                            System.out.println("El asiento económico " + (i + 1) + " está libre, asignando asiento a " + nombre + " " + apellidos);
                            avionAsientos[i] = true;
                            asientoEconomicoEncontrado = true;
                            break;  // Salir del bucle una vez que se ha asignado un asiento
                        }
                    }
                    if (!asientoEconomicoEncontrado) {
                        System.out.println("Lo siento, no quedan asientos económicos disponibles.");
                    }
                    break;
                
                case 3: // mostrar disponibilidad
                    System.out.println("Estado de los asientos:");
                    for (int i = 0; i < avionAsientos.length; i++) {
                        if (avionAsientos[i]) {
                            System.out.println("Asiento " + (i + 1) + ": Ocupado");
                        } else {
                            System.out.println("Asiento " + (i + 1) + ": Libre");
                        }
                    }
                    break;
                case 4: // salida
                    salida = true;
                    break;
                default:
                    System.out.println("Valor incorrecto");
            }
        } while (!salida);
    }
}
