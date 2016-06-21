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
public class veintiuno {

    public void comparar() {

        int array1[] = {1, 2, 3};
        int array2[] = {1, 2, 3};

        System.out.println("primer pareja de arrays"+"\n");

        for (int i = 0; i < 3; i++) {
            for (int j = 0; j < 3; j++) {
                if (array1[i] == array2[j]) {
                    System.out.println("son iguales " + array1[i] + "y" + array2[j]);
                }
            }

        }
        System.out.println("segunda pareja de arrays"+"\n");
        int array3[] = {1, 2, 3, 4};
        int array4[] = {1, 2, 3};
        
        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 3; j++) {
                if (array3[i] == array4[j]) {
                    System.out.println("son iguales " + array3[i] + "y" + array4[j]);
                }
            }

        }
        System.out.println("tercera pareja de arrays"+"\n");
        int array5[] = {1, 2, 3};
        int array6[] = {1, 2, 2};
        
        for (int i = 0; i < 3; i++) {
            for (int j = 0; j < 3; j++) {
                if (array5[i] == array6[j]) {
                    System.out.println("son iguales " + array5[i] + "y" + array6[j]);
                }
            }

        }
    }

    public static void main(String[] args) {

        veintiuno ca = new veintiuno();
        ca.comparar();

    }
}
