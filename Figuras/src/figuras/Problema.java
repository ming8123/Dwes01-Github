package figuras;

public class Problema {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Triangulo t1;
		Cuadrado c1;
		Circunferencia cir1,cir2;
		
		double area,perimetro;
		
		t1= new Triangulo(8, 15);
		c1= new Cuadrado(4.2);
		cir1= new Circunferencia(4.8);
		cir2= new Circunferencia(1.5);
		
		area=t1.area()+c1.area()+(cir1.area()/2)+(cir2.area()*0.75);
		perimetro=(t1.perimetro()+((c1.perimetro()/4)*2)+(cir1.perimetro()/2)+(cir2.perimetro()*0.75)-(2*cir2.getRadio())-(cir1.getRadio()*2));
		
		System.out.println("El area de la figura es "+(area));
		System.out.println("El perimetro de la figura es "+ (perimetro));
	}
	

}
