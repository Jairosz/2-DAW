public class Comercial extends Empleado {
    private double comision;

    public Comercial(String nombre, int edad, double salario, double comision) {
        super(nombre, edad, salario);
        this.comision = comision;
    }

    // Getters y Setters para comision

    public void setComision(double comision) {
        this.comision = comision;
    }

    public double getComision() {
        return comision;
    }

    // Método plus para Comercial
    @Override
    public void plus() {
        if (getEdad() > 30 && getComision() > 200) {
            setSalario(getSalario() + PLUS);
        }
    }

    @Override
    public String toString() {
        return super.toString() + ", Comisión: " + comision;
    }
}
