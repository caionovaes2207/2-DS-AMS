/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.calculadora_basica;

/**
 *
 * @author Isabelly
 */
public class MenuCalculadora {
    private calculadora calculadora;
    private int opcao;
    private ConversorNumeros conversor;
    private EntradaSaidaDados io;
    
    public MenuCalculadora() {
        this.calculadora = new calculadora();
        this.opcao = -1;
        this.conversor = new ConversorNumeros();
        this.io = new EntradaSaidaDados();
    }
    public void executarCalculadora() {
        do{
            this.executarMenuPrincipal();
            this.avaliarOpcaoEscolhida();
        }while(this.opcao!=5);
    }
    private void executarMenuPrincipal(){
        String mensagemMenu = "selecione uma opção "
                +"\n 1 - somar"
                +"\n 2 - subtrair"
                +"\n 3 - multiplicar"
                +"\n 4 - dividir"
                +"\n 5 -  sair";
        String entradaDados = io.entradaDados(mensagemMenu);
        this.opcao = conversor.StringToInt(entradaDados);
    }
    public void avaliarOpcaoEscolhida() {
        String saida;
        double num1=0, num2=0;
        if(this.opcao != 0 && this.opcao<=4){
            String mensagemEntrada = "digite o primeiro numero";
            num1 = conversor.StringToDouble(io.entradaDados(mensagemEntrada));
            calculadora.setNumero01(num1);
            mensagemEntrada = "digie o segundo numero";
            num2 = conversor.StringToDouble(io.entradaDados(mensagemEntrada));
            calculadora.setNumero02(num2);
        }
        switch(this.opcao){
            case 1:
                calculadora.somar(num1,num2);
                saida="resultado da soma: " + calculadora.getResultado();
                io.saidaDados(saida);
                break;
                
                case 2:
                calculadora.subtrair(num1,num2);
                saida="resultado da subtracao: " + calculadora.getResultado();
                io.saidaDados(saida);
                break;
                
                case 3:
                calculadora.multiplicar(num1,num2);
                saida="resultado da multiplicacao: " + calculadora.getResultado();
                io.saidaDados(saida);
                break;
                
                case 4:
                calculadora.dividir(num1,num2);
                saida="resultado da divisao: " + calculadora.getResultado();
                io.saidaDados(saida);
                break;
                
                case 5:
                calculadora.sair();
                io.saidaDados("saindo");
                break;       
        }
    }
}
