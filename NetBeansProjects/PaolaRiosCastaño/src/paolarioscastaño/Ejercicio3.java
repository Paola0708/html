/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package paolarioscastaño;

/**
 *
 * @author Administrador
 */
public class Ejercicio3 {
    public static void main(String[] args) {
//        int numero1 = 4, numero2 = 9; 
//        if (numero1 == numero2){
//            
//            System.out.println("Los numeros son iguales");
//        }
//        
//        if (numero1 > numero2) {
//           System.out.println(numero1 + " Es mayor que:" + numero2);
//            
//        } else {
//            System.out.println(numero2 + " Es mayor que:" + numero1);
//        }
        
        int numero1 = 9, numero2= 9;
        if  ((numero1 != numero2) && (numero1 > numero2)) {
            System.out.println(numero1 + "Es mayor que: " + numero2);
    } else if ((numero1 != numero2) && (numero2 > numero1)) {
        System.out.println(numero2 + "Es mayor que: " + numero1);
            
    } else  {
            System.out.println("los numeros son iguales");
    }
    }
}
        
    
 

