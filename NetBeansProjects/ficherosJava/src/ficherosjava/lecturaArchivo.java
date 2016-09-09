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
import java.io.Reader;

/**
 *
 * @author Administrador
 */
public class lecturaArchivo {
    public static void main(String[] args) throws FileNotFoundException, IOException {
        File rutaArchivo = new File ("lectura.txt");
        FileReader lecturaArchivo = new FileReader (rutaArchivo);
        BufferedReader lecturaPorLinea = new BufferedReader(lecturaArchivo);
        
        String cadenaTexto;
        while ((cadenaTexto = lecturaPorLinea.readLine())!=null){
            System.out.println(cadenaTexto);
            
        }
        lecturaPorLinea.close();
    }
}
