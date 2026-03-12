/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.acender_e_apagar_lampada;

/**
 *
 * @author Isabelly
 */
import java.util.Scanner;
public class Acender_e_apagar_lampada {
    public static void main(String[] args) {
        Scanner acao = new Scanner(System.in);
        lampada L = new lampada();
        
        System.out.println("voce quer oque?");
        System.out.println(" acender lampada digite 1");
        System.out.println(" desligar lampada digite 2");
       int opcao = acao.nextInt();
        
       if (opcao == 1) {
           L.acender();
           L.comoEsta();
       } 
       if (opcao == 2) {
           L.apagar();
        L.comoEsta();
       }
       
       
    }
}
