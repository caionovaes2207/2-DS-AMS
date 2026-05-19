/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.interface_pitagoras;

/**
 *
 * @author Isabelly
 */
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
public class Interface_pitagoras extends JFrame{
    JLabel titulo, cateto1, cateto2, resultado;
    JTextField texto1, texto2;
    JButton calcular;
    public Interface_pitagoras() {
        super("calculo de pitagoras");
        Container tela = getContentPane();
        setLayout(null);
        
        
        titulo = new JLabel("teorema de pitagoras");
        cateto1 = new JLabel("cateto A");
        cateto2 = new JLabel("cateto B");
        resultado = new JLabel("resulatado");
        texto1 = new JTextField();
        texto2 = new JTextField();
        calcular = new JButton("calcular");
        
        titulo.setFont(new Font("Arial", Font.BOLD, 28));
        titulo.setBounds(50, 20, 300, 30);
        cateto1.setBounds(40, 90, 300, 30);
        cateto2.setBounds(40, 130, 100, 25);
        resultado.setBounds(40,230,250,25);
        texto1.setBounds(120, 90, 120, 25);
        texto2.setBounds(120, 130, 120, 25);
        calcular.setBounds(40, 180, 200, 30);
        
        calcular.addActionListener(e -> {
             
            double a = Double.parseDouble(texto1.getText());
            double b = Double.parseDouble(texto2.getText());
            double c = Math.sqrt((a * a) + (b * b));
            
            resultado.setText("hipotenusa = " + c);
        });
        
        tela.add(titulo);
        tela.add(cateto1);
        tela.add(cateto2);
        tela.add(texto1);
        tela.add(texto2);
        tela.add(calcular);
        tela.add(resultado);
        
        setSize(400, 400);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLocationRelativeTo(null);
        setVisible(true);
    }

    public static void main(String[] args) {
        
    }
}
