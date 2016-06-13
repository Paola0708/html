
package tallerrepasojava;
import java.util.Scanner;
public class Ejercicio2 {
 
    public static void main(String[] args) {
        Scanner entrada = new Scanner (System.in);
        
        double valor= 0.20;
        
        System.out.println("Ingrese un numero :");
        valor=entrada.nextDouble();
    
        if(valor % 1 == 0){
            System.out.println("El numero es entero :");
    }
        else{
            System.out.println("el numero no es entero :");
    }
            
    }
}
