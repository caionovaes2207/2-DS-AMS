/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.calculo_de_temperatura;

/**
 *
 * @author Isabelly
 */
import java.util.Scanner;
public class Calculo_de_temperatura {

    public static void main(String[] args) {
        Scanner cal = new Scanner(System.in);
        
        fahrenheit f = new fahrenheit();
       System.out.println("digite a temperatura em fahrenheit");
       f.temp = cal.nextDouble();
       System.out.println("celsius: " + f.converteF());
       
       kelvin k = new kelvin();
       System.out.println("digite a temperatura em kelvin");
       k.temp = cal.nextDouble();
       System.out.println("celsius: " + k.converteK());
    }
}
