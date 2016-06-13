/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejemplo3;

/**
 *
 * @author Administrador
 */
public class Ejemplo1 {
    public static String[]Nombres= {"Andres", "jose", "Manuel", "Andrea", "Paola"};
    public static int[]Edades= {21, 19, 30, 15, 17};
    public static float est1=1.59f, est2=1.60f, est3=1.38f, est4=1.72f, est5=1.30f;
    
    
    public static void main(String[] args) {
        String[] Nombres = {"Andres", "Jose", "Manuel", "Andrea", "Paola"};
        int[] Edades ={21, 19, 30, 15, 17};
        float est1=1.59f, est2=1.60f, est3=1.38f, est4=1.72f, est5=1.30f;
        
        System.out.println(Nombres[0]+" "+ Edades[0]+" "+ est1
                +"\n"+Nombres[1]+" "+ Edades[1]+" "+ est2
                +"\n"+Nombres[2]+" "+ Edades[2]+" "+ est3
                +"\n"+Nombres[3]+" "+ Edades[3]+" "+ est4
                +"\n"+Nombres[4]+" "+ Edades[4]+" "+ est5+ "\n");
    }
}
