package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio5DiaDeMes {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc=new Scanner(System.in);	

int opcion1=-1;
		
		while ((opcion1<1)||(opcion1>12)) {
			try {
				System.out.println("Introduce el mes con numero de 1 al 12");
				opcion1=sc.nextInt();
				System.out.println("se ha leido el mes "+opcion1);
				
			}catch (Exception e) {			

		 	sc=new Scanner(System.in);
		   
			}
			
			
		}
		
		switch (opcion1) {
		case 1:
			System.out.println(" 31 dia");
		break;	
		case 2:
		    System.out.println(" 28 dia");
		break;
		case 3:
		    System.out.println(" 31 dia");
		break;
		case 4:
		    System.out.println(" 30 dia");
		break;
		case 5:
		    System.out.println(" 31 dia");
		break;
		case 6:
		    System.out.println(" 30 dia");
		break;
		case 7:
		    System.out.println(" 31 dia");
		break;
		case 8:
		    System.out.println(" 31 dia");
		break;
		case 9:
		    System.out.println(" 30 dia");
		break;
		case 10:
		    System.out.println(" 31 dia");
		break;
		case 11:
		    System.out.println(" 30 dia");
		break;
		case 12:
		    System.out.println(" 31 dia");
		break;
		}
		int bisiesto ;
		System.out.println("Introduce un año para saber si es bisiesto");
		bisiesto=sc.nextInt();
	
		if (bisiesto % 4 ==0) {
			System.out.println("El año es bisiesto ,el numero de dias es 366");
		
			
		}else
			System.out.println("El año no es bisiesto , el numero de dias es 365");
			
	}
}


	

