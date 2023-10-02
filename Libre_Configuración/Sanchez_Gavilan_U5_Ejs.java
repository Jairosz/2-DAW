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

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.*;

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
                case "3": // Implementar conteo de ocurrencias de un carácter
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
                    case "4":            // Contar ocurrencias de letras del alfabeto

                    System.out.print("Introduce una línea de texto: ");
                    String linea = teclado.nextLine();
                    
                    int[] contadorLetras = new int[26];
                    
                    for (int i = 0; i < linea.length(); i++) {
                        char letra = linea.charAt(i);
                        if (Character.isLetter(letra)) {
                            int index = Character.toUpperCase(letra) - 'A';
                            contadorLetras[index]++;
                        }
                    }
                    
                    for (int i = 0; i < 26; i++) {char letter = (char) ('A' + i);
                        System.out.println("La letra'" + letter + "' aparece " + contadorLetras[i] + " veces.");
                    }
                    break;
                
                case "5":// Implementar impresión de palabras que comienzan con 'b'
                    System.out.print("Introduce una línea de texto: ");
                    String texto = teclado.nextLine();
                
                    String[] palabras = texto.split("\\s+"); 
                
                    for (String palabra : palabras) {
                        if (palabra.startsWith("b") || palabra.startsWith("B")) {
                            System.out.println(palabra);
                        }
                    }
                    break;
                case "6":
                    // Implementar impresión de palabras que comienzan con 'ED'
                    System.out.print("Introduce una línea de texto: ");
                    texto = teclado.nextLine();
                    
                    String[] palabras2 = texto.split("\\s+");
                    
                    for (String palabra : palabras2) {
                        if (palabra.startsWith("ED") || palabra.startsWith("ed")) {
                            System.out.println(palabra);
                        }
                    }
                    break;
                case "7":
                    // Implementar conversión de código a carácter
                    System.out.print("Introduce un código (número): ");
                    int codigo = teclado.nextInt();
                    
                    char correspondiente = (char) codigo;
                    
                    System.out.println("El carácter correspondiente al código " + codigo + " es: " + correspondiente);
                    break;
                case "8":
                    // Generar códigos de tres dígitos
                    for (int i = 0; i < 10; i++) {
                        int codigoGenerado = (int) (Math.random() * 900) + 100;
                        System.out.println(codigoGenerado);
                    }
                    break;
                case "9":
                    // Implementar indexOf personalizado
                    for (int codigo2 = 0; codigo2 <= 255; codigo2++) {
                        String codigoFormateado = String.format("%03d", codigo2);
            
                        char caracterCorrespondiente = (char) codigo2;
            
                        System.out.println("Código: " + codigoFormateado + ", Carácter: " + caracterCorrespondiente);
                    }
                    break;
                case "10":
                    // Implementar lastIndexOf personalizado
                    String texto3 = "Hola, mundo";
                    char caracterBusqueda3 = 'o';
            
                    int resultado3 = customLastIndexOf(texto3, caracterBusqueda3);
            
                    if (resultado3 != -1) {
                        System.out.println("La última aparición del carácter '" + caracterBusqueda3 + "' está en la posición " + resultado3);
                    } else {
                        System.out.println("El carácter '" + caracterBusqueda3 + "' no se encuentra en el texto.");
                    }
                    break;
                case "11":
                    // Contar ocurrencias de letras en una línea de texto
                    System.out.print("Ingresa una línea de texto: ");
                    String lineaTexto5 = teclado.nextLine().toLowerCase(); 
                    break;
                case "12":
                    // Contar palabras de diferentes longitudes
                    break;
                case "13":
                    // Convertir fecha de formato 1 a formato 2
                    System.out.print("Ingresa una fecha en formato dd/MM/yyyy: ");
                    String fechaStr = teclado.nextLine();
        
                    SimpleDateFormat formatoEntrada = new SimpleDateFormat("dd/MM/yyyy");
                    SimpleDateFormat formatoSalida = new SimpleDateFormat("dd 'de' MMMM 'de' yyyy", new Locale("es", "ES")); // Usamos un Locale para obtener el nombre del mes en español
        
                    try {
                    Date fecha = formatoEntrada.parse(fechaStr);
            
                    String fechaFormateada = formatoSalida.format(fecha);
            
                    System.out.println("Fecha en el segundo formato: " + fechaFormateada);
                    } catch (ParseException e) {
                    System.out.println("Formato de fecha incorrecto. Asegúrate de usar el formato dd/MM/yyyy.");
                 }
                    break;
                case "14":
                    // Formatear cantidad en un cheque
                    
                    System.out.print("Ingresa la cantidad a imprimir en el cheque: ");
                    double cantidad = teclado.nextDouble();
        
                    String cantidadFormateada = formatearCantidad(cantidad);
        
                    System.out.println("Cantidad en formato de protección de cheques: " + cantidadFormateada);

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
    public static int customLastIndexOf(String text, char target) {
        for (int i = text.length() - 1; i >= 0; i--) {
            if (text.charAt(i) == target) {
                return i; // Se encontró el carácter, se devuelve la posición
            }
        }
        return -1; // Si no se encuentra, se devuelve -1
    }
    public static String formatearCantidad(double amount) {
        String cantidadFormateada = String.format("%09.2f", amount); // 9 espacios, 2 decimales
        
        cantidadFormateada = cantidadFormateada.replace(' ', '*');
        
        return cantidadFormateada;
    }
}
