package figuras;

import java.util.ArrayList;
import java.util.Scanner;

public class GestorFiguras {

	private ArrayList<Figuras>arrayFiguras;
	Scanner sc=new Scanner(System.in);
	
	Triangulo t1;
	Cuadrado c1;
	Circunferencia cir1,cir2;
	
	public GestorFiguras() {
		
		arrayFiguras= new ArrayList<>();
		t1= new Triangulo("T1", "amarillo", 8, 15);
		c1= new Cuadrado("C1", "rosa", 4.2);
		cir1= new Circunferencia("CIR1", "negro", 4.8);
		cir2= new Circunferencia("CIR2", "rojo", 1.5);
		arrayFiguras.add(t1);
		arrayFiguras.add(c1);
		arrayFiguras.add(cir1);
		arrayFiguras.add(cir2);
	}
	
	public void añadirFigura() {
		
		String titulo="",color="";
		double base=0,altura=0,radio=0,lado=0;
		Figuras auxF= null;
		
		System.out.println("Inserta el titulos de la figura");
		titulo=sc.next();
		
		for(int i=0;i<=arrayFiguras.size()-1;i++) {
			
			if(arrayFiguras.get(i).getTitulo().equalsIgnoreCase(titulo)) {
				System.out.println("La figura ya existe");
			}
			else {
				if(auxF instanceof Triangulo) {
					
					System.out.println("Inserta el color");
					color=sc.next();
					System.out.println("Introduce la base:");
					base=sc.nextDouble();
					((Triangulo) auxF).setBase(base);
					System.out.println("Introduce la altura");
					altura=sc.nextDouble();
					((Triangulo) auxF).setAltura(altura);
					
					auxF= new Triangulo(titulo, color, base, altura);
					arrayFiguras.add(auxF);
					System.out.println("La figura se ha añadido");
				}
				
				if(auxF instanceof Cuadrado) {
					
					System.out.println("Inserta el color");
					color=sc.next();
					System.out.println("Introduce el lado:");
					lado=sc.nextDouble();
					((Cuadrado) auxF).setLado(lado);
					
					auxF= new Cuadrado(titulo, color, lado);
					arrayFiguras.add(auxF);
					System.out.println("La figura se ha añadido");
				}
				
				if(auxF instanceof Circunferencia) {
					
					System.out.println("Inserta el color");
					color=sc.next();
					System.out.println("Introduce el radio:");
					radio=sc.nextDouble();
					
					auxF= new Circunferencia(titulo, color, radio);
					arrayFiguras.add(auxF);
					System.out.println("La figura se ha añadido");
				}
			}
		}
	}
	
	public void eliminarFigura () {
		
		String titulo;
		
		System.out.println("Inserta el titulo de la figura que quieres eliminar");
		titulo=sc.next();
		
		for(int i=0;i<=arrayFiguras.size();i++) {
			
			if(arrayFiguras.get(i).getTitulo().equalsIgnoreCase(titulo)) {
				
				arrayFiguras.remove(i);
				System.out.println("La figura se ha eliminado");
			}else {
				System.out.println("La figura no existe");
			}
		}
	}
	
	public void mostrarFiguras() {
		
		System.out.println(arrayFiguras.toString());
	}
	
	public void calcularSumatorioAreas() {
		
		double suma=0;
		
		for(int i=0;i<=arrayFiguras.size();i++) {
			suma=+arrayFiguras.get(i).area();
		}
		
		System.out.println("La suma de todas las areas es "+ suma);
	}
}
