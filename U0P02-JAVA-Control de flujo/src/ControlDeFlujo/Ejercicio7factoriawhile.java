package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio7factoriawhile {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		System.out.println("introduce un numero");
		Scanner sc=new Scanner(System.in);	
		int a =sc.nextInt();
		int cont=1,sum=1;
		
		while(cont<=a) {
			
			sum=sum*cont;
			cont++;
		}
		System.out.println("el factorial de "+a+" es: "+sum);
	
	}

}
