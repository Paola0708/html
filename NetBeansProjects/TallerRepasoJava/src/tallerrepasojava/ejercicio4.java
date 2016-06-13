
package tallerrepasojava;


public class ejercicio4 {
    
    public static int numero1 = 1234;
    public static int numero2 = 532;
    
    public void operaciones () {
        numero1 += numero2;
        System.out.println("El numero 1 es igual a: " + numero1 );
    }
    public static void main(String[] args) {
        ejercicio4 ayuda= new ejercicio4();
        ayuda.operaciones();
    }
}
