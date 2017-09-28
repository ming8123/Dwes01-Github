package ControlDeFlujo;
import java.util.Scanner;
public class Ejercicio2TextoCadena {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc=new Scanner(System.in);	
		String c1,c2,c3,c4,c5,c6;
		
		System.out.println("introduce 5 cadena de texto");
		c1=sc.next();
		c2=sc.next();
		c3=sc.next();
		c4=sc.next();
		c5=sc.next();
	
		
		c6=c1+c2+c3+c4+c5;
		System.out.println(c6);
	}

}
