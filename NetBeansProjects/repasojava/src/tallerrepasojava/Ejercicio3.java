
package tallerrepasojava;
import java.util.Scanner;

public class Ejercicio3 {
    
    public static void main(String[] args) {
        Scanner entrada = new Scanner (System.in);
        
        
        
        double decimal;
       
        
        System.out.println("ingrese numero: ");
        decimal=entrada.nextDouble();
        
        
        if(decimal % 1 != 0){
            System.out.println("El numero es decimal: ");
        }
        else{
            System.out.println("El numero no es deciaml: ");
        }
    }
 
    
    
     
   
   
   
       
       
       
       
        
    
}
