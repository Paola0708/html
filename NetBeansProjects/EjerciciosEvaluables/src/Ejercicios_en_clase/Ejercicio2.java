/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicios_en_clase;

import ejemplo3.PruebaVector1;
import java.util.Scanner;

/**
 *
 * @author Administrador
 */
public class Ejercicio2 {
     public Scanner IngresoUserTeclado;
    private int[] Nombres;
    public void cargarNombres (){
        IngresoUserTeclado = new Scanner(System.in);
        System.out.println("Cantidad de Nombres a ingresar: ");
        int cantidad;
         cantidad = IngresoUserTeclado.nextInt();
        Nombres = new int[cantidad];
        for (int i = 0; i <Nombres.length; i++) {
            System.out.println("Ingrese los Nombres de la posicion "+ i);
            Nombres[i] = IngresoUserTeclado.nextInt();
        }
    }
    public void imprimirNombres(){
        System.out.println("Los Nombres ingresados fueron: " );
        for (int i = 0; i < Nombres.length; i++) {
            System.out.println(Nombres[i]); 
        }
    }
        public static void main(String[] args) {
        PruebaEjercicio2 pv2 = new PruebaEjercicio2();
        pv2.cargarNombres();
        pv2.imprimirNombres();
        }
}
