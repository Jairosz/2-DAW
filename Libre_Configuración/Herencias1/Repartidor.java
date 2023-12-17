public class Repartidor extends Empleado {
    private String zona;

    public Repartidor(String nombre, int edad, double salario, String zona) {
        super(nombre, edad, salario);
        this.zona = zona;
    }

    // Getters y Setters para zona

    public void setZona(String zona) {
        this.zona = zona;
    }

    public String getZona() {
        return zona;
    }

    // Método plus para Repartidor
    @Override
    public void plus() {
        if (getEdad() < 25 && getZona().equals("zona 3")) {
            setSalario(getSalario() + PLUS);
        }
    }

    @Override
    public String toString() {
        return super.toString() + ", Zona: " + zona;
    }
}
