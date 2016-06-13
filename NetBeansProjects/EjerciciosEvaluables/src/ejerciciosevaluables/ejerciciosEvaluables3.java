/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejerciciosevaluables;

import javax.swing.JOptionPane;

/**
 *
 * @author Administrador
 */
public class ejerciciosEvaluables3 {
    
    public static String Nombre = "Paola";
    public static int AñoNacimiento = 1998;
    public static int AñoActual = 2016;
    public static String Institucion = "Sena"; 
    public static String BarrioVivienda = "Sultana";
         
    public static void main(String[] args) {
         AñoActual -= AñoNacimiento;  
       System.out.println(Nombre + "\n" + AñoActual + "\n" + Institucion + "\n" + BarrioVivienda );
       
        JOptionPane.showMessageDialog(null, Nombre + "\n" + AñoActual + "\n" + Institucion + "\n" + BarrioVivienda);
    }
            
            
            
}
