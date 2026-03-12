/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.area_cilindro;

import javax.swing.JOptionPane;

/**
 *
 * @author Isabelly
 */
public class Area_cilindro {

    public static void main(String[] args) {
        String raio = JOptionPane.showInputDialog("digite o raio");
        String altura = JOptionPane.showInputDialog("digite a altura");
        
        double raioc = Double.parseDouble(raio);
        double alturac = Double.parseDouble(altura);
        double arealateral = 2 * Math.PI * raioc * alturac;
        double volume = Math.PI * raioc * alturac;
        
        JOptionPane.showMessageDialog(null, "area lateral: " + arealateral + "\nvolume: " + volume);
    }
}
