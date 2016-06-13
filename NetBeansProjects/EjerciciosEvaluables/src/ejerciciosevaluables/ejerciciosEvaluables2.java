/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejerciciosevaluables;

/**
 *
 * @author Administrador
 */
public class ejerciciosEvaluables2 {
    
    public static int operador1 = 20;
    public static int operador2 = 15;
    public static int resultado = 0;
    
    
    public static void main(String[] args) {
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
        
        
        
        //Ejercicio 3
        
        operador1 += operador2;// 15 + 20 = 35
        System.out.println("suma sin variable resultado: " + operador1);
        
        operador1 -= operador2;// 35 - 15 = 20
        System.out.println("resta sin variable resultado: " + operador1);
        
        operador1 /= operador2;// 20 / 15 = 1
        System.out.println("division sin variable resultado: " + operador1);

        operador1 *= operador2;// 1 * 15 = 15
        System.out.println("multiplicacion sin variable resultado: " + operador1);
        
        operador1 %= operador2;//15 / 15 = 0
        System.out.println("modulo sin variable resultado: " + operador1);



        
    }
}
