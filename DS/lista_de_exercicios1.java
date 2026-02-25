import javax.swing.JOptionPane;

public class lista_de_exercicios1 {
    public static void main(String[] args) {
        
        String nome;
        double nota1, nota2, media;

        nome = JOptionPane.showInputDialog("digite o nome do aluno");

        nota1 = lerNota("digite a primeira nota");
        nota2 = lerNota("digite a segunda nota");
        media = calcularmedia(nota1, nota2);

        if (media >= 7.0) {
            JOptionPane.showConfirmDialog(null, nome + " foi aprovado com media " + media);
        } else {
            JOptionPane.showConfirmDialog(null, nome + " foi reprovado commmedia " + media);
        }
  }
        static double lerNota(String mensagem) {
            return Double.parseDouble(JOptionPane.showInputDialog(mensagem));
        }

        static double  calcularmedia(double n1, double n2) {
            return (n1 + n2) / 2;
        }
  
}

