// Clase Articulo
class Articulo {
    private String nombre;
    private double precio;

    // Constructor
    public Articulo(String nombre, double precio) {
        this.nombre = nombre;
        this.precio = precio;
    }

    // Métodos de acceso y modificación
    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public double getPrecio() {
        return precio;
    }
}

// Clases que heredan de Articulo
class Tip04 extends Articulo {
    private static final double TIPO = 4.0;

    public Tip04(String nombre, double precio) {
        super(nombre, precio);
    }

    // Método para obtener la parte del IVA
    public double getParteIVA() {
        return getPrecio() * TIPO / 100.0;
    }

    // Redefinición del método getPrecio() para incluir el IVA
    @Override
    public double getPrecio() {
        return super.getPrecio() + getParteIVA();
    }
}

class Tip07 extends Articulo {
    private static final double TIPO = 7.0;

    public Tip07(String nombre, double precio) {
        super(nombre, precio);
    }

    public double getParteIVA() {
        return getPrecio() * TIPO / 100.0;
    }

    @Override
    public double getPrecio() {
        return super.getPrecio() + getParteIVA();
    }
}

class Tip016 extends Articulo {
    private static final double TIPO = 16.0;

    public Tip016(String nombre, double precio) {
        super(nombre, precio);
    }

    public double getParteIVA() {
        return getPrecio() * TIPO / 100.0;
    }

    @Override
    public double getPrecio() {
        return super.getPrecio() + getParteIVA();
    }
}

public class Main {
    public static void main(String[] args) {
        // Crear artículos de diferentes tipos
        Tip04 articuloTipo04 = new Tip04("Articulo 1", 100.0);
        Tip07 articuloTipo07 = new Tip07("Articulo 2", 150.0);
        Tip016 articuloTipo016 = new Tip016("Articulo 3", 200.0);

        // Obtener precio con IVA de cada artículo
        System.out.println("Precio con IVA del Articulo 1: $" + articuloTipo04.getPrecio());
        System.out.println("Precio con IVA del Articulo 2: $" + articuloTipo07.getPrecio());
        System.out.println("Precio con IVA del Articulo 3: $" + articuloTipo016.getPrecio());
    }
}