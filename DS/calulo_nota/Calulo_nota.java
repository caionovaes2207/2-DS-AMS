/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.calulo_nota;

/**
 *
 * @author Isabelly
 */
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
public class Calulo_nota extends JFrame{
    JLabel rotulo1, rotulo2, rotulo3, rotulo4, exibir; 
    JTextField texto1, texto2, texto3, texto4;
    JButton resultado;
    public Calulo_nota(){
        super("calculo nota");
        Container tela = getContentPane();
        setLayout(null);
        
        rotulo1 = new JLabel("fale a primeira nota ");
        rotulo2 = new JLabel("fale a segunda nota ");
        rotulo3 = new JLabel("fale a terceira nota ");
        rotulo4 = new JLabel("fale a quarta nota ");
        exibir = new JLabel("");
        texto1 = new JTextField(5);
        texto2 = new JTextField(5);
        texto3 = new JTextField(5);
        texto4 = new JTextField(5);
        resultado = new JButton("ver nota final");
        
        rotulo1.setBounds(50,20,150,20);
        rotulo2.setBounds(50,60,150,20);
        rotulo3.setBounds(50,100,200,20);
        rotulo4.setBounds(50,140,200,20);
        texto1.setBounds(250,20,100,20);
        texto2.setBounds(250,60,100,20);
        texto3.setBounds(250,100,100,20);
        texto4.setBounds(250,140,100,20);
        resultado.setBounds(50,180,150,20);
        exibir.setBounds(50,220,100,20);
        
        resultado.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                int nota1 = Integer.parseInt(texto1.getText());
                int nota2 = Integer.parseInt(texto2.getText());
                int nota3 = Integer.parseInt(texto3.getText());
                int nota4 = Integer.parseInt(texto4.getText());
                int soma = (nota1 + nota2 + nota3 + nota4) / 4;

                exibir.setVisible(true);
                exibir.setText("A sua nota é: " + soma);
            }
        });
        
        tela.add(rotulo1);
        tela.add(rotulo2);
        tela.add(rotulo3);
        tela.add(rotulo4);
        tela.add(texto1);
        tela.add(texto2);
        tela.add(texto3);
        tela.add(texto4);
        tela.add(resultado);
        tela.add(exibir);
        exibir.setVisible(false);
        
        setSize(850, 400);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLocationRelativeTo(null);
        setVisible(true);
        
        
    }

   
        
}



    

