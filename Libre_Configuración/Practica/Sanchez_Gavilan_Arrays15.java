package Practica;
import java.util.*;
public class Sanchez_Gavilan_Arrays15 {
    public static void main(String[] args) {
        boolean avionAsientos [] = new boolean [10];
        int opcionMenu = 0;
        boolean salida = false;
        String nombre = "";
        String apellidos = "";
        String dni = "";
        Scanner teclado = new Scanner (System.in);
        do{
            System.out.println("AEROLÍNEAS JAIRING");
            System.out.println("1. ## COMPRAR BILLETE PRIMERA CLASE ");
            System.out.println("2. ## COMPRAR BILLETE ECONÓMICO ");
            System.out.println("3. ## MOSTRAR DISPONIBILIDAD ");
            System.out.println("4. ## SALIR ");

            switch(opcionMenu){
                case 1: // billete primera clase
                    System.out.println("Vamos a comprar tu billete introduce:");
                    for(int i = 0; i >= avionAsientos.length; i++){
                        if(avionAsientos[i] == true){
                            System.out.println("El asiento " + avionAsientos[i] + "está ocupado");
                        }else{
                            System.out.println("El asiento " + avionAsientos[i] + "está libre, asignando asiento.");
                            avionAsientos[i] = true;
                        }
                    }
                    
                break;
                case 2: // billete economico 
                break;
                case 3: // mostrar disponibilidad
                break;
                case 4: // salida
                break;
                default:
                System.out.println("Valor incorrecto");



            }

    
    
    
    
    
        }while(salida!=false);
    }
}
