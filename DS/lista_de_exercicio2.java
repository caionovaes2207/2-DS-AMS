 import javax.swing.JOptionPane;

public class lista_de_exercicio2 {

    public static void main(String[] args) {

        double valor1, valor2, resultado;

        // le os dois valores digitados
        valor1 = Double.parseDouble(
                JOptionPane.showInputDialog("Digite o primeiro valor:"));

        valor2 = Double.parseDouble(
                JOptionPane.showInputDialog("Digite o segundo valor:"));

        // chama o metodo que calcula a diferença
        resultado = diferenca(valor1, valor2);

        // mostra o resultado
        JOptionPane.showMessageDialog(null,
                "A diferença é: " + resultado);
    }

    static double diferenca(double v1, double v2) { // metodo que calcula a diferença do maior para o menor

        // verifica qual numero e maior
        if (v1 > v2) {
            return v1 - v2;
        } else {
            return v2 - v1;
        }
    }
}


