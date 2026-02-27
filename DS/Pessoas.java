/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.pessoas;

/**
 *
 * @author Admin
 */
public class Pessoas {

    public static void main(String[] args) {
       Pessoas apessoa = new Pessoas();
       
       
       apessoa.sexo = "masculino";
       apessoa.nome = "malaquias";
       apessoa.nacionalidade = "brasil";
       
       apessoa.anda();
       apessoa.fala();
       apessoa.corre();
       apessoa.estuda();
       apessoa.brinca();
       apessoa.atributos();
    }
    
    String sexo;
    String nome;
    String nacionalidade;
    
    void atributos() {
        System.out.printf("nome: " + nome + "\nsexo: " + sexo + "\npais: " + nacionalidade );
    }
    
    void anda() {
        System.out.println(nome + " esta andando");
    }
        void fala() {
        System.out.println(nome + " esta falando");
    }
        void corre() {
            System.out.println(nome + " corre");
        }
        void estuda() {
            System.out.println(nome + " estuda");
        }
        void brinca() {
            System.out.println(nome + " brinca");
        }
    
}
