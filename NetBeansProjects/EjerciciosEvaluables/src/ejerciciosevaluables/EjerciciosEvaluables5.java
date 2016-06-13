/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejerciciosevaluables;

import static ejerciciosevaluables.ejerciciosEvaluables2.operador1;
import static ejerciciosevaluables.ejerciciosEvaluables2.operador2;
import static ejerciciosevaluables.ejerciciosEvaluables2.resultado;
import java.util.Scanner;

/**
 *
 * @author Administrador
 */
public class EjerciciosEvaluables5 {
    public static int operador1 = 20;
    public static int operador2 = 7;
     public static int resultado = 0;
    
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        
        float operador1; 
        float operador2;
        float resultado;
                
       System.out.println("Por favor ingrese su operador1: ");
       operador1 = entrada.nextInt();
        
        System.out.println("Por favor ingrese su operador2: ");
        operador2 = entrada.nextInt();
        
        
        resultado = operador1 + operador2;//35
        System.out.println("resultado suma: " + resultado);
        
        resultado = operador1 - operador2;//5
        System.out.println("resultado resta: " + resultado);
       
        resultado = operador1 / operador2;//1.333
        System.out.println("resultado division: " + resultado);
        
        resultado = operador1 * operador2;//300
        System.out.println("resultado multiplicacion: " + resultado);
        
        resultado = operador1 % operador2;//5
        System.out.println("resultado modulo: " + resultado);
        System.out.println("El usuario ingreso: " + operador1 + " " + operador2);
    }
   
}
