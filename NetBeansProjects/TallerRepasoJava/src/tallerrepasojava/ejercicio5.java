
package tallerrepasojava;

import java.util.Scanner;

public class ejercicio5 {

    double numero1=0,numero2=0;
  
        
        

        public void operaciones () {
            
        Scanner entrada= new Scanner(System.in);
       
            System.out.println("Ingrese el numero 1: " );
            numero1=entrada.nextInt();
        
            System.out.println("Ingrese el numero 2: "); 
            numero2=entrada.nextInt ();
             
        numero1 += numero2;
        numero1 -= numero2;
        numero1 /= numero2;
        numero1 *= numero2;
        numero1 %= numero2;
        System.out.println("el valor final de numero1 es: " + numero1 );
    }
    public static void main(String[] args) {
        ejercicio5 su = new ejercicio5();
        su.operaciones();
    }
    }


