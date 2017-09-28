package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio7factorialdowhile {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		System.out.println("introduce un numero");
		Scanner sc=new Scanner(System.in);	
		int a=sc.nextInt();
		int cont=1,sum=1;
		
		do {		
			
		sum=sum*cont;
			
		cont++;	
		}while(cont<=a);
		
		
		
		System.out.println("el factorial de "+a+" es: "+sum);
		
		
		
		
	}

}
