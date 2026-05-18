/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.tipo_triangulo;

import javax.swing.*;
import java.awt.*;

public class Tipo_triangulo extends JFrame {
    JLabel lado1, lado2, lado3, resultado;
    JTextField texto1, texto2, texto3;
    JButton verificar;
    public Tipo_triangulo() {
        super("tipo de triangulo");
        Container tela = getContentPane();
        setLayout(null);

        lado1 = new JLabel("Lado 1:");
        lado2 = new JLabel("Lado 2:");
        lado3 = new JLabel("Lado 3:");
        resultado = new JLabel("");
        texto1 = new JTextField();
        texto2 = new JTextField();
        texto3 = new JTextField();
        verificar = new JButton("Verificar Tipo");

        resultado.setFont(new Font("Arial", Font.BOLD, 16));
        lado1.setBounds(30, 30, 100, 25);
        lado2.setBounds(30, 70, 100, 25);
        lado3.setBounds(30, 110, 100, 25);
        texto1.setBounds(100, 30, 100, 25);
        texto2.setBounds(100, 70, 100, 25);
        texto3.setBounds(100, 110, 100, 25);
        verificar.setBounds(30, 160, 170, 30);
        resultado.setBounds(250, 80, 200, 30);
        

        verificar.addActionListener(e -> {

            int a = Integer.parseInt(texto1.getText());
            int b = Integer.parseInt(texto2.getText());
            int c = Integer.parseInt(texto3.getText());

            if (a == b && b == c) {

                resultado.setText("Triângulo Equilátero");

            } else if (a == b || a == c || b == c) {

                resultado.setText("Triângulo Isósceles");

            } else {

                resultado.setText("Triângulo Escaleno");
            }

        });

        tela.add(lado1);
        tela.add(lado2);
        tela.add(lado3);
        tela.add(texto1);
        tela.add(texto2);
        tela.add(texto3);
        tela.add(verificar);
        tela.add(resultado);

        setSize(500, 300);
        setLocationRelativeTo(null);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setVisible(true);
    }
}