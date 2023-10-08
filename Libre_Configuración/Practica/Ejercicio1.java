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
            teclado.nextLine(); 

            switch(menuOption){
                case 1: // dar la vuelta a la cadena
                    cadenaAlReves(cadena); 
                break;
                case 2: // conteo vocales
                    conteoVocales(cadena); 
                break;
                case 3: // conteo consonantes
                    conteoConsonantes(cadena); 
                break;
                case 4: // pasar a minuscula
                    cadena = cadena.toLowerCase();
                    System.out.println("Cadena en minúscula: " + cadena);
                break;
                case 5:  // pasar a mayuscula
                    cadena = cadena.toUpperCase();
                    System.out.println("Cadena en mayúscula: " + cadena);
                break;
                case 6:    // verificar si es palindroma o no
                        if (esPalindroma(cadena) == true){
                            System.out.println("Es palindroma");
                        }else{
                            System.out.println("No es palindroma");
                        }
                break;
                case 7: // salida
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

    
    public static boolean esPalindroma(String cadena){

		cadena = cadena.toLowerCase().replace("á", "a").replace("é", "e").replace("í", "i").replace("ó", "o")
        .replace("ú", "u").replace(" ", "").replace(".", "").replace(",", "");

        String invertida = new StringBuilder(cadena).reverse().toString();

        return invertida.equals(cadena);
    }

}
