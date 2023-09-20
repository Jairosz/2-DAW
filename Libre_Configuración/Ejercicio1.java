  /*
Pedir por teclado una cadena:
Mostrar menú:
Mostrarla al revés
Contar el nº de vocales
Contar el nº de consonantes
Pasar todo a minúscula
Pasar todo a mayúscula
Decir si es palíndroma
*/ 
// Jairo Sánchez Gavilán 2º DAW
import java.util.Scanner;

public class Ejercicio1 {
   
    public static void main(String[] args) {
        boolean salir = true;
        int menuOption = 0;
        Scanner teclado = new Scanner(System.in);
         System.out.print("Ingresa una cadena: ");
        String cadena = teclado.nextLine();
        do {
            System.out.println("\nMenú:");
            System.out.println("1. Mostrar la cadena al revés");
            System.out.println("2. Contar el número de vocales");
            System.out.println("3. Contar el número de consonantes");
            System.out.println("4. Pasar todo a minúscula");
            System.out.println("5. Pasar todo a mayúscula");
            System.out.println("6. Comprobar si es palíndroma");
            System.out.println("7. Salir");
            menuOption = teclado.nextInt();
            teclado.nextLine(); // Consumir la nueva línea después de leer un entero

            switch(menuOption){
                case 1:
                    cadenaAlReves(cadena);
                    break;
                case 2:
                    conteoVocales(cadena);
                    break;
                case 3:
                    conteoConsonantes(cadena);
                    break;
                case 4:
                    cadena = cadena.toLowerCase();
                    System.out.println("Cadena en minúscula: " + cadena);
                    break;
                case 5:
                    cadena = cadena.toUpperCase();
                    System.out.println("Cadena en mayúscula: " + cadena);
                    break;
                case 6:
                   // esPalindroma(cadena);
                    break;
                case 7:
                    salir = false;
                    break;
                default:
                    System.out.println("Opción no válida. Por favor, elige una opción válida.");
            }
        } while (salir);
    }

    public static void cadenaAlReves(String cadena){
        StringBuilder cadenaNueva = new StringBuilder(cadena);
        cadenaNueva.reverse();
        System.out.println("La cadena dada la vuelta es:");
        System.out.println(cadenaNueva.toString());
    }

    public static void conteoVocales(String cadena){
        int contadorVocales = 0;
        cadena = cadena.toLowerCase();
        for(int i = 0; i < cadena.length(); i++){
            char caracter = cadena.charAt(i);
            if(caracter == 'a' || caracter == 'e' || caracter == 'i' || caracter == 'o' || caracter == 'u'){
                contadorVocales++;
            }
        }
        System.out.println("El total de vocales es: " + contadorVocales);
    }

    public static void conteoConsonantes(String cadena){
        int contadorConsonantes = 0;
        cadena = cadena.toLowerCase();
        for(int i = 0; i < cadena.length(); i++){
            char caracter = cadena.charAt(i);
            if(caracter >= 'a' && caracter <= 'z' && caracter != 'a' && caracter != 'e' && caracter != 'i' && caracter != 'o' && caracter != 'u'){
                contadorConsonantes++;
            }
        }
        System.out.println("El total de consonantes es: " + contadorConsonantes);
    }

    /*public static void esPalindroma(String cadena){
        String cadenaInvertida = cadenaAlReves(cadena).replaceAll("\\s", "");
        cadena = cadena.replaceAll("\\s", "");
        if(cadena.equalsIgnoreCase(cadenaInvertida)){
            System.out.println("La cadena es palíndroma.");
        } else {
            System.out.println("La cadena no es palíndroma.");
        }
    }*/
}
