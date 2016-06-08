/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejerciciosevaluables;

import java.util.Scanner;
import javax.swing.JOptionPane;

/**
 *
 * @author Administrador
 */
public class ejerciciosEvaluables4 {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        String nombre;
        int edad;
        System.out.println("Por favor ingrese su nombre: ");
        nombre = entrada.next();
        
        System.out.println("Por favor ingrese su edad: ");
        edad = entrada.nextInt();
       
        System.out.println("El usuario ingreso: " + nombre + " " + edad);
        
        
    }
       
}
