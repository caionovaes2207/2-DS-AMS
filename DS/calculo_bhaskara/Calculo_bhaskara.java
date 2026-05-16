/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.calculo_bhaskara;

/**
 *
 * @author Isabelly
 */
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
public class Calculo_bhaskara extends JFrame {
    JLabel titulo, formula, rotulo1, rotulo2,rotulo3, x1, x2, exibir1, exibir2;
    JTextField texto1, texto2,texto3;
    JButton calcular;
    public Calculo_bhaskara(){
        super("calculo de bhaskara");
        Container tela = getContentPane();
        setLayout(null);
        
        titulo = new JLabel("formula de bhaskara");
        formula = new JLabel("ax² + bx + c = 0");
        rotulo1 = new JLabel("valor de a");
        rotulo2 = new JLabel("valor de b");
        rotulo3 = new JLabel("valor de c");
        x1 = new JLabel("x'");
        x2 = new JLabel("x''");
        exibir1 = new JLabel();
        exibir2 = new JLabel();
        
        texto1 = new JTextField();
        texto2 = new JTextField();
        texto3 = new JTextField();

        
        calcular = new JButton("calcular");
        
        titulo.setFont(new Font("Arial", Font.BOLD, 28));
        titulo.setBounds(50, 20, 300, 30);
        formula.setBounds(120, 50, 200, 20);
        rotulo1.setBounds(40, 90, 100, 25);
        rotulo2.setBounds(40, 130, 100, 25);
        rotulo3.setBounds(40, 170, 100, 25);
        x1.setBounds(100, 260, 30, 25);
        x2.setBounds(100, 290, 30, 25);
        texto1.setBounds(150, 90, 150, 25);
        texto2.setBounds(150, 130, 150, 25);
        texto3.setBounds(150, 170, 150, 25);
        exibir1.setBounds(140, 260, 30, 25);
        exibir2.setBounds(140, 290, 80, 25);
        calcular.setBounds(40, 210, 260, 30);
        
        calcular.addActionListener(e -> {

    double a = Double.parseDouble(texto1.getText());
    double b = Double.parseDouble(texto2.getText());
    double c = Double.parseDouble(texto3.getText());
    double delta = (b * b) - (4 * a * c);
    double x1 = (-b + Math.sqrt(delta)) / (2 * a);
    double x2 = (-b - Math.sqrt(delta)) / (2 * a);

    exibir1.setText("" + x1);
    exibir2.setText("" + x2);

});
        
        tela.setBackground(new Color(255,255,153));
        
        tela.add(titulo);
        tela.add(formula);
        tela.add(rotulo1);
        tela.add(rotulo2);
        tela.add(rotulo3);
        tela.add(x1);
        tela.add(x2);
        tela.add(texto1);
        tela.add(texto2);
        tela.add(texto3);
        tela.add(exibir1);
        tela.add(exibir2);
        tela.add(calcular);
        
        setSize(400, 400);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLocationRelativeTo(null);
        setVisible(true);
    }
}
