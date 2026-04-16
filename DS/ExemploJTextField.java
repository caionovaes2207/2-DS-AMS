/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.exemplojtextfield;
import javax.swing.*;
import java.awt.*;
public class ExemploJTextField extends JFrame{
    JLabel rotulo0,rotulo1,rotulo2,rotulo3,rotulo4,rotulo5,rotulo6,rotulo7;
    JTextField texto1,texto2,texto3,texto4,texto5,texto6,texto7;
    public ExemploJTextField (){
        super("Cadastro cliente");
        Container tela = getContentPane();
        setLayout(null);
        rotulo0 = new JLabel("Cadastro de cliente");
        rotulo1 = new JLabel("Nome");
        rotulo2 = new JLabel("CPF");
        rotulo3 = new JLabel("RG");
        rotulo4 = new JLabel("endereço");
        rotulo5 = new JLabel("cidade");
        rotulo6 = new JLabel("estado");
        rotulo7 = new JLabel("CEP:");
        texto1 = new JTextField(50);
        texto2 = new JTextField(10);
        texto3 = new JTextField(10);
        texto4 = new JTextField(10);
        texto5 = new JTextField(50);
        texto6 = new JTextField(50);
        texto7 = new JTextField(8);
        rotulo0.setBounds(200,1,110,20);
        rotulo1.setBounds(50,20,80,20);
        rotulo2.setBounds(50,60,80,20);
        rotulo3.setBounds(50,100,80,20);
        rotulo4.setBounds(50,140,80,20);
        rotulo5.setBounds(50,180,80,20);
        rotulo6.setBounds(50,220,80,20);
        rotulo7.setBounds(50,260,80,20);
        texto1.setBounds(110,20,200,20);
        texto2.setBounds(110,60,20,20);
        texto3.setBounds(110,100,80,20);
        texto4.setBounds(110,140,80,20);
        texto5.setBounds(110,180,80,20);
        texto6.setBounds(110,220,80,20);
        texto7.setBounds(110,260,80,20);
        rotulo0.setForeground(Color.red);
        tela.add(rotulo0);
        tela.add(rotulo1);
        tela.add(rotulo2);
        tela.add(rotulo3);
        tela.add(rotulo4);
        tela.add(rotulo5);
        tela.add(rotulo6);
        tela.add(rotulo7);
        tela.add(texto1);
        tela.add(texto2);
        tela.add(texto3);
        tela.add(texto4);
        tela.add(texto5);
        tela.add(texto6);
        tela.add(texto7);
        setSize(500,350);
        setVisible(true);
        setLocationRelativeTo(null);
    }
    public static void main(String args[]) {
        ExemploJTextField app = new ExemploJTextField();
        app.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}