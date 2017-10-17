package figuras;

public class Cuadrado extends Figuras {

	private double lado;

	public Cuadrado(String titulo,String color,double lado){
		super(titulo, color);
		this.lado=lado;	
	}

	public double getLado() {
		return lado;
	}

	public void setLado(double lado) {
		this.lado = lado;
	}

	public String toString() {
		return super.toString()+ "Cuadrado [lado=" + lado + "]";
	}

	public double area() {
		return lado*lado;
	}
	
	public double perimetro() {
		return lado*4;
	}
}
