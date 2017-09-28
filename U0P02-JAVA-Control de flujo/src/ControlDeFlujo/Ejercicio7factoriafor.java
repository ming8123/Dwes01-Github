package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio7factoriafor {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		System.out.println("introduce un numero");
		Scanner sc=new Scanner(System.in);	
		int a =sc.nextInt();
		int cont=1;
		for (int i=1;i<=a;i++) {
			cont=cont*i;
				
		}
		System.out.println("el factorial de "+a+" es: "+cont);
		
	}

}
