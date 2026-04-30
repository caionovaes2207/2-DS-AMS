/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.operacoesjbutton;


/**
 *
 * @author Admin
 */
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
public class OperacoesJbutton extends JFrame {
    JLabel rotulo1, rotulo2, rotulo3, rotulo4, rotulo5, rotulo6, rotulo7, rotulo8, rotulo9, rotulo10, exibir;
    JTextField texto1, texto2, texto3, texto4, texto5, texto6, texto7, texto8, texto9, texto10;
    JButton somar, multuplicar, subtrair, dividir, raiz;

    public OperacoesJbutton() {
        super("exemplo de operações");
        Container tela = getContentPane();
        setLayout(null);

        rotulo1 = new JLabel("1º numero da soma: ");
        rotulo2 = new JLabel("2º numero da soma: ");
        rotulo3 = new JLabel("1º numero da multiplicação: ");
        rotulo4 = new JLabel("2º numero da multiplicação: ");
        rotulo5 = new JLabel("1º numero da subtração: ");
        rotulo6 = new JLabel("2º numero da subtração: ");
        rotulo7 = new JLabel("1º numero da divisão: ");
        rotulo8 = new JLabel("2º numero da divisão: ");
        rotulo9 = new JLabel("1º numero da raiz: ");
        rotulo10 = new JLabel("2º numero da raiz: ");
        texto1 = new JTextField(5);
        texto2 = new JTextField(5);
        texto3 = new JTextField(5);
        texto4 = new JTextField(5);
        texto5 = new JTextField(5);
        texto6 = new JTextField(5);
        texto7 = new JTextField(5);
        texto8 = new JTextField(5);
        texto9 = new JTextField(5);
        texto10 = new JTextField(5);
        exibir = new JLabel("");
        somar = new JButton("Somar");
        multuplicar = new JButton("Multiplicar");
        subtrair = new JButton("Subtrair");
        dividir = new JButton("Dividir");
        raiz = new JButton("Raiz");

        rotulo1.setBounds(50,20,150,20);
        rotulo2.setBounds(50,60,150,20);
        texto1.setBounds(200,20,100,20);
        texto2.setBounds(200,60,100,20);

        rotulo3.setBounds(50,100,200,20);
        rotulo4.setBounds(50,140,200,20);
        texto3.setBounds(250,100,100,20);
        texto4.setBounds(250,140,100,20);

        rotulo5.setBounds(50,180,200,20);
        rotulo6.setBounds(50,220,200,20);
        texto5.setBounds(250,180,100,20);
        texto6.setBounds(250,220,100,20);

        rotulo7.setBounds(400,20,200,20);
        rotulo8.setBounds(400,60,200,20);
        texto7.setBounds(600,20,100,20);
        texto8.setBounds(600,60,100,20);

        rotulo9.setBounds(400,100,200,20);
        rotulo10.setBounds(400,140,200,20);
        texto9.setBounds(600,100,100,20);
        texto10.setBounds(600,140,100,20);

        exibir.setBounds(50,300,600,20);

        somar.setBounds(50,260,100,30);
        multuplicar.setBounds(160,260,120,30);
        subtrair.setBounds(290,260,100,30);
        dividir.setBounds(400,260,100,30);
        raiz.setBounds(510,260,100,30);
        

        // calculo de soma
        somar.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                int soma1 = Integer.parseInt(texto1.getText());
                int soma2 = Integer.parseInt(texto2.getText());
                int soma = soma1 + soma2;

                exibir.setVisible(true);
                exibir.setText("A soma é: " + soma);
            }
        });

        // calculo de multiplicação
        multuplicar.addActionListener(e -> {
            int n1 = Integer.parseInt(texto3.getText());
            int n2 = Integer.parseInt(texto4.getText());
            exibir.setText("Multiplicação: " + (n1 * n2));
            exibir.setVisible(true);
        });

        // calculo de subtracao
        subtrair.addActionListener(e -> {
            int n1 = Integer.parseInt(texto5.getText());
            int n2 = Integer.parseInt(texto6.getText());
            exibir.setText("Subtração: " + (n1 - n2));
            exibir.setVisible(true);
        });

        // calculo de divisao
        dividir.addActionListener(e -> {
            double n1 = Double.parseDouble(texto7.getText());
            double n2 = Double.parseDouble(texto8.getText());

            if (n2 == 0) {
                exibir.setText("Erro: divisão por zero");
            } else {
                exibir.setText("Divisão: " + (n1 / n2));
            }
            exibir.setVisible(true);
        });

        // calculo de raiz
        raiz.addActionListener(e -> {
            double n = Double.parseDouble(texto9.getText());
            exibir.setText("Raiz quadrada: " + Math.sqrt(n));
            exibir.setVisible(true);
        });

        tela.add(rotulo1);
        tela.add(rotulo2);
        tela.add(rotulo3);
        tela.add(rotulo4);
        tela.add(rotulo5);
        tela.add(rotulo6);
        tela.add(rotulo7);
        tela.add(rotulo8);
        tela.add(rotulo9);
        tela.add(rotulo10);

        tela.add(texto1);
        tela.add(texto2);
        tela.add(texto3);
        tela.add(texto4);
        tela.add(texto5);
        tela.add(texto6);
        tela.add(texto7);
        tela.add(texto8);
        tela.add(texto9);
        tela.add(texto10);

        tela.add(somar);
        tela.add(multuplicar);
        tela.add(subtrair);
        tela.add(dividir);
        tela.add(raiz);     
        tela.add(exibir);

        exibir.setVisible(false);

        setSize(850, 400);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLocationRelativeTo(null);
        setVisible(true);
    }

}