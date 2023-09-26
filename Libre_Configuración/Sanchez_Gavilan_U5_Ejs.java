/* 
1.- Conteste con verdadero o falso a cada una de las siguientes proposiciones; en caso de ser falso,
explique por qué.
a) Cuando los objetos String se comparan utilizando ==, el resultado es true si los objetos
String contiene los mismos valores.
    Falso, compara si son el mismo objeto, es decir si ocupan el mismo SLOT DE MEMORIA, pero para comparar los valores se usa EQUALS.
b) Un objeto String puede modificarse una vez creado.
    Verdadero
2.- Para cada uno de los siguientes enunciados, escriba una instrucción que realice la tarea indicada:
a) Comparar la cadena en s1 con la cadena en s2 para ver si su contenido es igual.
    boolean sonIguales = s1.equals(s2);
b) Anexar la cadena s2 a la cadena s1, utilizando +=.
    s1 += s2;
c) Determinar la longitud de la cadena en s1.
    int longitud = s1.length();
 */

import java.util.Scanner;

public class Sanchez_Gavilan_U5_Ejs {

    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        String menuOption;

        do {
            System.out.println("Menú de opciones:");
            System.out.println("1. Comparar dos cadenas");
            System.out.println("2. Imprimir línea en mayúsculas y minúsculas");
            System.out.println("3. Contar ocurrencias de un carácter");
            System.out.println("4. Contar ocurrencias de letras del alfabeto");
            System.out.println("5. Imprimir palabras que comienzan con 'b'");
            System.out.println("6. Imprimir palabras que comienzan con 'ED'");
            System.out.println("7. Mostrar carácter correspondiente a un código");
            System.out.println("8. Generar códigos de tres dígitos");
            System.out.println("9. Implementar indexOf personalizado");
            System.out.println("10. Implementar lastIndexOf personalizado");
            System.out.println("11. Contar ocurrencias de letras en una línea de texto");
            System.out.println("12. Contar palabras de diferentes longitudes");
            System.out.println("13. Convertir fecha de formato 1 a formato 2");
            System.out.println("14. Formatear cantidad en un cheque");
            System.out.println("15. Codificar/decodificar en clave Morse");
            System.out.println("0. Salir");
            System.out.print("Seleccione una opción: ");
            menuOption = teclado.nextLine();

            switch (menuOption) {
                case "1": // Comparar dos cadenas
                        System.out.println("Introduce 2 cadenas de texto");
                        String cadena1 = teclado.nextLine();
                        String cadena2 = teclado.nextLine();
                        int resultado = cadena1.compareTo(cadena2);
                        if (resultado < 0){
                            System.out.println("La primera cadena es menor");
                        }else if (resultado>0){
                            System.out.println("La primera cadena es menor");
                        }else{
                            System.out.println("Son iguales.");
                        }
                        

                    break;
                case "2": // Implementar impresión en mayúsculas y minúsculas
                    System.out.print("Introduce una línea de texto: ");
                    String lineaTexto = teclado.nextLine();
        
                    String enMayusculas = lineaTexto.toUpperCase();
                    String enMinusculas = lineaTexto.toLowerCase();
        
                    System.out.println("Texto en mayúsculas: " + enMayusculas);
                    System.out.println("Texto en minúsculas: " + enMinusculas);
                    break;
                case "3":
                    // Implementar conteo de ocurrencias de un carácter
                    System.out.print("Introduce una línea de texto: ");
                    String lineaTexto2 = teclado.nextLine();
            
                    System.out.print("Introduce un carácter a buscar: ");
                    char caracterBusqueda = teclado.next().charAt(0);
            
                    int contador = 0;
            
                    for (int i = 0; i < lineaTexto2.length(); i++) {
                        if (lineaTexto2.charAt(i) == caracterBusqueda) {
                            contador++;
                        }
                    }
            
                    System.out.println("El carácter '" + caracterBusqueda + "' aparece " + contador + " veces en el texto.");
                    break;
                case "4":
                    // Implementar conteo de ocurrencias de letras del alfabeto
                    break;
                case "5":
                    // Implementar impresión de palabras que comienzan con 'b'
                    break;
                case "6":
                    // Implementar impresión de palabras que comienzan con 'ED'
                    break;
                case "7":
                    // Implementar conversión de código a carácter
                    break;
                case "8":
                    // Generar códigos de tres dígitos
                    break;
                case "9":
                    // Implementar indexOf personalizado
                    break;
                case "10":
                    // Implementar lastIndexOf personalizado
                    break;
                case "11":
                    // Contar ocurrencias de letras en una línea de texto
                    break;
                case "12":
                    // Contar palabras de diferentes longitudes
                    break;
                case "13":
                    // Convertir fecha de formato 1 a formato 2
                    break;
                case "14":
                    // Formatear cantidad en un cheque
                    break;
                case "15":
                    // Codificar/decodificar en clave Morse
                    break;
                case "0":
                    System.out.println("Saliendo del programa. ¡Hasta luego!");
                    break;
                default:
                    System.out.println("Opción no válida. Intente de nuevo.");
                    break;
            }

        } while (!menuOption.equals("0"));

        teclado.close();
    }
}
