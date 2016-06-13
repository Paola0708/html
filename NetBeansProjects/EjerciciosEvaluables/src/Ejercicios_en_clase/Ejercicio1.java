/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicios_en_clase;



/**
 *
 * @author Administrador
 */
public class Ejercicio1 {
    public static String[]Nombres= {"Juan", "Yaneth", "Jeyson", "Leidy", "Paola"};
    public static int[]Edades= {47, 45, 27, 26, 18};
    public static float[]Estaturas= {1.69f, 1.55f, 1.72f, 1.63f, 1.58f};
    
    public static void main(String[] args) {
        String [] Nombres ={"Juan", "Yaneth", "Jeyson", "Leidy", "Paola"};
        int[]Edades= {47, 45, 27, 26, 18};
        float[]Estaturas= {1.69f, 1.55f, 1.72f, 1.63f, 1.58f};
        
        for (int i = 0; i < Nombres.length; i++) {
            System.out.println(Nombres[i]);
            System.out.println(Edades[i]);
            System.out.println(Estaturas[i]);
        }
    }
}