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

/**
 *
 * @author Administrador
 */
public class FicherosJava {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws FileNotFoundException, IOException{
        // TODO code application logic here
   File archivo = new File("FicheroJava.txt");
   FileReader fr = new FileReader (archivo);
   BufferedReader br = new BufferedReader(fr);
   
   
   String linea = br.readLine();
   System.out.println(linea);
    }
    
}
