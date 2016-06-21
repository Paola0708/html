/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejercicios;

import java.util.Scanner;

/**
 *
 * @author alvar
 */
public class veintidos {
    
    public void cargar(){
        
        Scanner entrada = new Scanner(System.in);
        System.out.println("ingrese diemnsion de su array");
        int array=entrada.nextInt();
        
        int array1[]=new int [array];
        
        for (int i = 0; i < array1.length; i++) {
            
            System.out.println("ingrse un valor para el array :" + (i+1));
            int cantidad=entrada.nextInt();
            array1[i]=cantidad;
            
        }
        for (int i = 0; i < array1.length; i++) {
            
            System.out.println("dimension " + i + "  valor asignado " + array1[i]);
            for (int j = 0; j < array1[i]; j++) {
                System.out.print("x");
            }
            System.out.println("");
        }
        
    }
    public static void main(String[] args) {
        
        veintidos ca = new veintidos();
        ca.cargar();
        
    }
}
