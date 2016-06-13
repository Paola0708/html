/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package trabajosevaluables;

import java.util.Scanner;

/**
 *
 * @author Administrador
 */
public class Ejercicio1 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
       Scanner entrada= new Scanner(System.in);
       
        int num[]= new int[15];
        int positivo=0, negativo=0, cero=0;
        System.out.println("leer 15 numeros:");
        for (int i = 0; i < 14; i++) {
            num[i]=entrada.nextInt();
        }
        for (int i = 0; i < 14; i++) {
            if (num[i]>0){
                positivo++;
                
            }else if (num[i]>0){
            negativo++;
                } else{
                   cero++;
                }
                 System.out.println("positivo" + positivo );
                 System.out.println("negativo" + negativo );
                 System.out.println("cero" + cero );
        }
        } 
        
        
     }
   
        
        
        
        
        
   
    

