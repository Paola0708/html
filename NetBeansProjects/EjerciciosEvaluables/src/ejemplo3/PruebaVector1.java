
package ejemplo3;

import java.util.Scanner;



public class PruebaVector1 {
    //Declaracion de variables
    public Scanner IngresoUserTeclado;
    private int[] Sueldos;
    
    //Creacion primer metodo
    public void cargarSuedos (){
        IngresoUserTeclado = new Scanner(System.in);
        System.out.println("Cantidad de sueldos a ingresar: ");
        //Declaracion nueva variable cantidad
        int cantidad;
        //Asignacion de lo que ingreso el user por teclado
        //a la variable cantidad
        cantidad = IngresoUserTeclado.nextInt();
        Sueldos = new int[cantidad];
        //Recorre la cantidad de sueldos que dijo el usuario
        for (int i = 0; i <Sueldos.length; i++) {
            System.out.println("Ingrese el sueldo de la posicion "+ i);
            //Le asigna a cada posicion del vector el valor
            //que ingresa el user
            Sueldos[i] = IngresoUserTeclado.nextInt();
        }
        
    }
    public void imprimirSueldos(){
        System.out.println("Los sueldos ingresados fueron: " );
        for (int i = 0; i < Sueldos.length; i++) {
            System.out.println(Sueldos[i]);    
        }
        
    }
   
    public static void main(String[] args) {
        PruebaVector1 pv1 = new PruebaVector1();
        pv1.cargarSuedos();
        pv1.imprimirSueldos();
    }
}
