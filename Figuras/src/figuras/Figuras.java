package figuras;

public abstract class Figuras {

	private String titulo;
	private String color;
	
	public Figuras(String titulo,String color) {
		this.titulo=titulo;
		this.color=color;
	}

	public String getTitulo() {
		return titulo;
	}

	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}

	public String getColor() {
		return color;
	}

	public void setColor(String color) {
		this.color = color;
	}

	@Override
	public String toString() {
		return "Figuras [titulo=" + titulo + ", color=" + color + "]";
	}
	
	public abstract double area();
	public abstract double perimetro();
}
