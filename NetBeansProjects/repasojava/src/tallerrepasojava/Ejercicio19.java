/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejercicios;

/**
 *
 * @author alvar
 */
public class diecinueve {
    
    public void cargar(){
        
        int numeros[]= new int [10];
        boolean valor=true,valor1=true;
        for (int i = -5; i < 6; i++) {
            
            if(i<0){
                if(valor==true){
                System.out.println("numero negativo");
                valor=false;
                }
                System.out.println(i);
            }else if(i==0){
                System.out.println("cero");
                
            }else if(i>0){
                if(valor1==true){
                System.out.println("numero positivo");
                valor1=false;
                }
                System.out.println(i);
            }
            
        }
        
    }
    
    public static void main(String[] args) {
        
        diecinueve ca = new diecinueve();
        ca.cargar();
        
    }
 
    
    
}
