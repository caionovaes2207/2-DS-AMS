/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.calculo_de_formas;

/**
 *
 * @author Isabelly
 */
public class Calculo_de_formas {

    public static void main(String[] args) {
        Circulo c = new Circulo();
        c.raio = 5;
        
        System.out.println("are do circulo: " + c.calculararea());
        
        Quadrado q = new Quadrado();
        q.lado = 5;
        
        System.out.println("area do quadrado: " + q.calculararea());
        
        Retangulo r = new Retangulo();
        r.base = 5;
        r.altura = 5;
        
        System.out.println("area do retangulo: " + r.calculararea());
    }
}
