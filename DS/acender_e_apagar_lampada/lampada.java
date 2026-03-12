/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.acender_e_apagar_lampada;

/**
 *
 * @author Isabelly
 */
public class lampada {
    boolean estadolampada;
    
    void acender() {
        estadolampada = true;
        System.out.println("acessa");
    }
        void apagar() {
         estadolampada = false;
         System.out.println("desligado");
    }
        
        void comoEsta() {
            if (estadolampada) {
                System.out.println("a lampada esta ligada");
            } else {
                System.out.println("a lampada esta desligada");
            }
        }
    
}
