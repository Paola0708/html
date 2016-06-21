
package tallerrepasojava;


public class ejercicios11 {
    
    static double suma=0;
    
   public static void cargar(){
       
       for (int i = 0; i < 100; i++) {
           
           double raiz;
           raiz=i;
           raiz=Math.sqrt(i);
           suma=suma+raiz;
           System.out.println("la suma dio: " + suma);
       }
       
   }
    public static void main(String[] args) {
        ejercicios11 ca= new ejercicios11();
        ca.cargar();
                
    }
}
