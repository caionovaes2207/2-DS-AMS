/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.calculo_pitagoras;

/**
 *
 * @author Isabelly
 */
import javax.swing.JOptionPane;
public class Calculo_pitagoras {

    public static void main(String[] args) {
       String cateto1 = JOptionPane.showInputDialog("digite o primeiro cateto:");
       String cateto2 = JOptionPane.showInputDialog("digite o segundo cateto:");
       
       double c1 = Double.parseDouble(cateto1);
       double c2 = Double.parseDouble(cateto2);
       double hipotenusa = Math.sqrt((c1 * c2) + (c2 * c2));
       
       JOptionPane.showMessageDialog(null, "o resultado e: " + hipotenusa);
    }
}
