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
public class Ejercicio4 {
    public static void main(String[] args) {
      double n1 = 1.3, n2 = 1, n3 = 1;
      if ((n1 != n2) && (n1 != n3) && (n2 != n3)){
          if ((n1 >n2) && (n1 > n3)){
              System.out.println(n1 + "Es mayor que el numero" + n2 + " Y que " + n3);
              
          } else if ((n2 > n1) && (n2 > n3)) {
              System.out.println(n2 + " Es mayor que el numero" + n1 + " y que " + n3);
              
          }  else {
              System.out.println(n3 + "Es el mayor");
              
          }
          
      } else if (true)
            System.out.println("Dos o tres de los numeros son iguales");
    }
    
}
