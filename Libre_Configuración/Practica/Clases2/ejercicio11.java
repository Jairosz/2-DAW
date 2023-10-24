public class Fecha {
    private int mes;
    private int dia;
    private int anio;

    public Fecha(int mes, int dia, int anio) {
        this.mes = mes;
        this.dia = dia;
        this.anio = anio;
    }

    public Fecha(String fechaStr) {
        String[] partes = fechaStr.split(" ");
        this.mes = obtenerMesDesdeNombre(partes[0]);
        this.dia = Integer.parseInt(partes[1].replaceAll(",", ""));
        this.anio = Integer.parseInt(partes[2]);
    }

    public Fecha(int ordinal, int anio) {
        this.anio = anio;
        obtenerFechaDesdeOrdinal(ordinal);
    }

    private int obtenerMesDesdeNombre(String nombreMes) {
        String[] nombresMeses = {
            "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
            "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
        };
        for (int i = 0; i < nombresMeses.length; i++) {
            if (nombreMes.equals(nombresMeses[i])) {
                return i + 1;
            }
        }
        return -1; // Mes no encontrado
    }

    private void obtenerFechaDesdeOrdinal(int ordinal) {
        int mes = 1;
        while (ordinal > obtenerDiasEnMes(mes)) {
            ordinal -= obtenerDiasEnMes(mes);
            mes++;
        }
        this.mes = mes;
        this.dia = ordinal;
    }

    private int obtenerDiasEnMes(int mes) {
        int[] diasEnMes = {
            0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31
        };
        if (esBisiesto(anio) && mes == 2) {
            return 29;
        } else {
            return diasEnMes[mes];
        }
    }

    private boolean esBisiesto(int anio) {
        return (anio % 4 == 0 && anio % 100 != 0) || (anio % 400 == 0);
    }

    public void imprimirMmDdAaaa() {
        System.out.println(String.format("%02d/%02d/%04d", mes, dia, anio));
    }

    public void imprimirMesDiaAaaa() {
        String nombreMes = obtenerNombreMes();
        System.out.println(String.format("%s %d,%04d", nombreMes, dia, anio));
    }

    public void imprimirDddAaaa() {
        int ordinal = obtenerOrdinal();
        System.out.println(String.format("%03d %04d", ordinal, anio));
    }

    private String obtenerNombreMes() {
        String[] nombresMeses = {
            "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
            "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
        };
        return nombresMeses[mes - 1];
    }

    private int obtenerOrdinal() {
        int ordinal = dia;
        for (int i = 1; i < mes; i++) {
            ordinal += obtenerDiasEnMes(i);
        }
        return ordinal;
    }

    public static void main(String[] args) {
        Fecha fecha1 = new Fecha(6, 15, 1992);
        Fecha fecha2 = new Fecha("Junio 15, 1992");
        Fecha fecha3 = new Fecha(167, 1992);

        System.out.println("Formato MM/DD/AAAA:");
        fecha1.imprimirMmDdAaaa();
        System.out.println("Formato Mes Dia,AAAA:");
        fecha2.imprimirMesDiaAaaa();
        System.out.println("Formato DDD AAAA:");
        fecha3.imprimirDddAaaa();
    }
}
