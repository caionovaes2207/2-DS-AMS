/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.exemplojbutton;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
public class ExemploJbutton extends JFrame{
    JButton botao1,botao2,botao3;
    ImageIcon icone;
    public ExemploJbutton(){
        super("exemplo com Jbutton");
        Container tela = getContentPane();
        setLayout(null);
        
        botao1 = new JButton ("novo");
        botao2 = new JButton ("abrir");
        botao3 = new JButton ();
        botao1.setBounds(50,20,100,20);
        
         botao1.setBounds(140,20,100,20);
         botao2.setBounds(140,60,100,20);
         botao3.setBounds(140,100,100,20);
       
        icone = new ImageIcon("abrir.gif");
       
        botao2.setIcon(icone);
        botao3.setIcon(icone);

        tela.add(botao1);
        tela.add(botao2);
        tela.add(botao3);
        setSize(400,250);
        setVisible(true);
        setLocationRelativeTo(null);
    }

    public static void main(String[] args) {
        ExemploJbutton app = new ExemploJbutton();
        app.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}