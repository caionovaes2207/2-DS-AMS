/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.interface_cfk;

import javax.swing.*;
import java.awt.*;

public class Interface_cfk extends JFrame {
    JLabel titulo, celsius, fahrenheit, kelvin;
    JTextField texto1, texto2, texto3;
    JButton converter;

    public Interface_cfk() {
        super("calculo de imc");
        Container tela = getContentPane();
        setLayout(null);

        
        titulo = new JLabel("Conversor de Temperatura");
        titulo.setFont(new Font("Arial", Font.BOLD, 22));
        celsius = new JLabel("Graus Celsius");
        fahrenheit = new JLabel("Graus Fahrenheit");
        kelvin = new JLabel("Graus Kelvin");
        texto1 = new JTextField();
        texto2 = new JTextField();
        texto3 = new JTextField();
        converter = new JButton("Converter");

        
        titulo.setBounds(70, 30, 300, 30);
        celsius.setBounds(40, 100, 120, 25);
        fahrenheit.setBounds(40, 150, 120, 25);
        kelvin.setBounds(40, 200, 120, 25);
        texto1.setBounds(180, 100, 120, 25);
        texto2.setBounds(180, 150, 120, 25);
        texto3.setBounds(180, 200, 120, 25);
        converter.setBounds(120, 270, 120, 30);

        
        converter.addActionListener(e -> {
            double c = Double.parseDouble(texto1.getText());
            double f = (c * 9 / 5) + 32;
            double k = c + 273.15;

            f = Math.round(f * 100.0) / 100.0;
            k = Math.round(k * 100.0) / 100.0;

            texto2.setText("" + f);
            texto3.setText("" + k);

        });

        tela.add(titulo);
        tela.add(celsius);
        tela.add(fahrenheit);
        tela.add(kelvin);
        tela.add(texto1);
        tela.add(texto2);
        tela.add(texto3);
        tela.add(converter);

        setSize(400, 400);
        setLocationRelativeTo(null);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setVisible(true);
    }

}
