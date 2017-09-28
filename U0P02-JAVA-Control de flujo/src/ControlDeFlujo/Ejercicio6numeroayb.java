package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio6numeroayb {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int a,b;
		System.out.println("escribe dos numero a y b menor que 10");
		Scanner sc=new Scanner(System.in);	
	    a=sc.nextInt();
	    b=sc.nextInt();

	    	
	    if (a>b) {
	    	System.out.println("*");
	    	b=b+1;
	    	System.out.println("el numero b va a incrementar a uno y va a ser: "+b);
	    		
	    }
	     if(a<b){
	    	System.out.println("*");
	    	a=a+1;
	    	System.out.println("el numero a va a incrementar a uno y va a ser: "+a);
	    	
	    }
	     System.out.println("hasta luego");
	    }
		
		
		
		
	}


