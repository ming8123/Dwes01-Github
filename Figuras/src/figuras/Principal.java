package figuras;

import java.util.Scanner;

public class Principal {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Triangulo t1;
		Cuadrado c1;
		Circunferencia cir1,cir2;
		
		int x;
		Scanner sc=new Scanner(System.in);
		GestorFiguras g= new GestorFiguras();
		
		t1= new Triangulo("T1", "amarillo", 8, 15);
		c1= new Cuadrado("C1", "rosa", 4.2);
		cir1= new Circunferencia("CIR1", "negro", 4.8);
		cir2= new Circunferencia("CIR2", "rojo", 1.5);
		
		System.out.println(t1.toString());
		System.out.println(c1.toString());
		System.out.println(cir1.toString());
		System.out.println(cir2.toString());
		
		System.out.println();
		
		System.out.println("MENU");
		System.out.println("1.añadirFigura");
		System.out.println("2.eliminarFigura");
		System.out.println("3.mostrarFigura");
		System.out.println("4.calcularSumatorioAreas");
		x=sc.nextInt();
		
		switch(x) {
		
		case 1:
			g.añadirFigura();
		case 2:
			g.eliminarFigura();
		case 3:
			g.mostrarFiguras();
		case 4:
			g.calcularSumatorioAreas();
		}
		
		sc.close();
	}

}
