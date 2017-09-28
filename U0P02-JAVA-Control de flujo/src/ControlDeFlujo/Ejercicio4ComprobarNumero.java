package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio4ComprobarNumero {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Scanner sc=new Scanner(System.in);	

		System.out.println("Intrduce un numero");
		int opcion=-1;
		
		while (opcion==-1) {
			try {
				opcion=sc.nextInt();
				System.out.println("el numero "+opcion+" introdicido esta De puta madr machote!!!!");
				
			}catch (Exception e) {
				
		 System.out.println("debes introducir un numero");
		 	sc=new Scanner(System.in);
		 	opcion=-1;
			}
			
			
		}
		
		Scanner teclado = new Scanner (System.in);
		int opcion1 = -1;
		while ( (opcion1<1)||(opcion1>10) )
		{
			System.out.println("Escribe un número entre el 1 y el 10:");
			try {
				opcion1 = teclado.nextInt();
				System.out.println("Se ha leído " + opcion1);
			} catch (Exception e) {
				teclado = new Scanner(System.in);
				opcion1 = -1;
			}
		}	
	
	
		sc.close();
	}

}
