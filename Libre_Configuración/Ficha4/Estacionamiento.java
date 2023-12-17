public class Estacionamiento {
    private static final double CUOTA_MINIMA = 2.00;
    private static final double COSTO_POR_HORA = 0.50;
    private static final double CARGO_MAXIMO = 10.00; // Para un periodo de 24 horas

    public static double calcularPago(int horasEstacionadas) {
        if (horasEstacionadas <= 3) {
            return CUOTA_MINIMA;
        } else if (horasEstacionadas <= 24) {
            double horasExtras = horasEstacionadas - 3;
            double costoExtra = horasExtras * COSTO_POR_HORA;
            return CUOTA_MINIMA + costoExtra;
        } else {
            return CARGO_MAXIMO;
        }
    }

    public static void main(String[] args) {
        // Aquí deberías tener la lógica para obtener las horas estacionadas de cada cliente
        int horasCliente1 = 5;
        int horasCliente2 = 2;

        double pagoCliente1 = calcularPago(horasCliente1);
        double pagoCliente2 = calcularPago(horasCliente2);

        System.out.println("Pago para Cliente 1: $" + pagoCliente1);
        System.out.println("Pago para Cliente 2: $" + pagoCliente2);

        // Lógica para calcular el total de pagos de ayer para todos los clientes
        double totalPagosAyer = pagoCliente1 + pagoCliente2; // Suma de los pagos de los clientes
        System.out.println("Total de pagos de ayer: $" + totalPagosAyer);
    }
}
