/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.exemplocarro;

/**
 *
 * @author Admin
 */
public class Exemplocarro {

    public static void main(String[] args) {
        
        Carro meucarro = new Carro();
        
        meucarro.modelo = "gol";
        meucarro.cor = "preto";
        meucarro.motor = "1.0";
        
        System.out.println(meucarro.modelo);
        System.out.println(meucarro.cor);
        System.out.println(meucarro.motor);
        meucarro.ligar();
        meucarro.modarmarcha();
         meucarro.acelerar();
         meucarro.brecar();
          meucarro.desligar();
          
          meucarro = null;
    }
}
