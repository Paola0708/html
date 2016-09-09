/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ficherosjava;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.Scanner;

/**
 *
 * @author Administrador
 */
public class ficheroExcel {
    public static void main(String[] args) throws FileNotFoundException, IOException {
        File rutaArchivo =new File("numeros.txt");
        FileReader LecturaArchivo =new FileReader(rutaArchivo);
        BufferedReader LecturaPorLinea = new BufferedReader(LecturaArchivo);
        
        
        int numerosFichero, suma=0;
        Scanner entradaArchivo = null;
        entradaArchivo = new Scanner(rutaArchivo);
        while(entradaArchivo.hasNextInt()){
            numerosFichero = entradaArchivo.nextInt();
            System.out.println(numerosFichero);
            suma=suma+numerosFichero;
            System.out.println("LA suma del total de nros da: " + "\n" + suma);
        }
        
        LecturaPorLinea.close();
                
    }
    
}
