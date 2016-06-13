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
public class EjerciciosEvaluables {
//Tipos de visibilidad, declaracion e inicializacion:    
    private static int valor = 42; //declare una variable entera de visibilidad publica
    private static int importe_acumulado = 2100; 
    private static String profesor = "Yaneth";
    private static String ambienteFormacion = "sistemas 1";
    private static int capacidadEstudiantes = 35;
    private static boolean funciona = true;
    private static boolean esVisible = false;
    private static float diametro = 34.25f;
    private static float peso = 67.52f;
    private static short edad = 25;
    private static char letra1 = 'h';
    
          
    
     /**
     * @param args the command line arguments
     */
     
    public static void main(String[] args) {
        // TODO code application logic here
        System.out.println(valor + "\n " + importe_acumulado + "\n" + profesor + "\n" + ambienteFormacion + "\n" 
        + capacidadEstudiantes + "\n" + funciona + "\n" + esVisible + "\n" + diametro + "\n" + peso + "\n" + edad 
        + "\n" + letra1);
        
        
    }
    
    
}
