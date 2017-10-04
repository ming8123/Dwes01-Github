package figuras;

public class Cuadrado {

	private double lado;

	public Cuadrado(double lado){
		this.lado=lado;	
	}

	public double getLado() {
		return lado;
	}

	public void setLado(double lado) {
		this.lado = lado;
	}

	public String toString() {
		return "Cuadrado [lado=" + lado + "]";
	}

	public double area() {
		return lado*lado;
	}
	
	public double perimetro() {
		return lado*4;
	}
}
