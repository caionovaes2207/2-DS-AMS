import javax.swing.JOptionPane;

// Declaração da classe chamada exemplo_dois
public class exemplo_dois
{
    // Método principal (ponto de entrada do programa)
    public static void main(String[] args)
    {
        // Declaração de uma variável inteira
        int t;

        // Declaração de uma variável do tipo String
        String p;

        // Mostra uma caixa para o usuário digitar uma palavra
        p = JOptionPane.showInputDialog("Digite uma palavra qualquer: ");

        // Chama o método tamanho() passando a palavra digitada
        // O valor retornado é armazenado em t
        t = tamanho(p);

        // Exibe uma mensagem mostrando a palavra digitada
        // e a quantidade de caracteres que ela possui
        JOptionPane.showMessageDialog(null, p + " possui " + t + " caracteres");
    }

    // Método com retorno (int)
    // Recebe uma String como parâmetro
    static int tamanho(String x)
    {
        
        return x.length(); // Retorna o tamanho da String 
    }

}
