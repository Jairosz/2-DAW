package Practica;

import java.util.Scanner;

public class Sanchez_Gavilan_Arrays16 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

       
        double[][] ventas = new double[4][5];

        for (int vendedor = 1; vendedor <= 4; vendedor++) {
            for (int producto = 1; producto <= 5; producto++) {
                System.out.print("Ingrese el valor total en euros para el vendedor " + vendedor);
                System.out.print(" y el producto " + producto + ": ");
                double venta = teclado.nextDouble();

                ventas[vendedor - 1][producto - 1] = venta;
            }
        }

        for (int vendedor = 0; vendedor < 4; vendedor++) {
            for (int producto = 0; producto < 5; producto++) {
                double ventaTotal = ventas[vendedor][producto];
                System.out.println(
                        "Vendedor " + (vendedor + 1) + ", Producto " + (producto + 1) + ": " + ventaTotal + " euros");
            }
        }
    }
}
