import javax.swing.JOptionPane;

public class exemplo_um {  // Declaração da classe principal

    
    public static void main(String[] args) {  //Método principal onde o programa começa a executar

        
        int a; // Declara uma variável inteira chamada a

       
        digite();  // Chama o método digite que apenas mostra uma mensagem na tela

        // Abre uma caixa para o usuário digitar um número
        // O valor digitado vem como String
        // Integer.parseInt converte a String para inteiro 
        a = Integer.parseInt(JOptionPane.showInputDialog("Digite um número: "));

        
        dobro(a); // Chama o método dobro passando o valor digitado como parâmetro
    }

    // Método sem retorno (void)
    // Apenas exibe uma mensagem solicitando um número
    static void digite() {

        // Mostra uma caixa de mensagem
        // O primeiro parâmetro (null) significa que não há componente pai
        JOptionPane.showMessageDialog(null, "Digite um número:");
    }

    
    static void dobro(int n) { // Método sem retorno que recebe um número inteiro como parâmetro

        
        int d = n * 2; // Calcula o dobro do número recebido

        // Mostra o resultado em uma caixa de mensagem
        JOptionPane.showMessageDialog(null, "Dobro de " + n + " é " + d);
    }
}

