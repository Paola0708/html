/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejercicios;

/**
 *
 * @author alvar
 */
public class veinte {

    int suma=0;
 public void cargar(){
        
        int numeros[]= new int [10];
        
        for (int i = 0; i < 10; i++) {
            
           numeros[i]=i;
           suma=suma+numeros[i];
            
        }
        System.out.println("la suma dio " + suma);
        
        
    }
    
    public static void main(String[] args) {
        
        veinte ca = new veinte();
        ca.cargar();
        
    }
 
    
    
}