package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio3Sumarnumero {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc=new Scanner(System.in);	//
		int total=0;
		System.out.println("introduce numero entero para sumar,maximo 50");
		int x =sc.nextInt();
		
		while(x<50) {
			
			total=total+x;
			
	    System.out.println("vuelve a introducir el numero");
	    x=sc.nextInt();
	    
		}
			
		System.out.println("la suma total de los numeros es : "+total);
			
	
	
	}
}
