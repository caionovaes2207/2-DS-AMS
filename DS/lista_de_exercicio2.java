 import javax.swing.JOptionPane;

public class lista_de_exercicio2 {

    public static void main(String[] args) {

        double valor1, valor2, resultado;

        valor1 = Double.parseDouble(
                JOptionPane.showInputDialog("Digite o primeiro valor:"));

        valor2 = Double.parseDouble(
                JOptionPane.showInputDialog("Digite o segundo valor:"));

        resultado = diferenca(valor1, valor2);

        JOptionPane.showMessageDialog(null,
                "A diferença é: " + resultado);
    }

    static double diferenca(double v1, double v2) {

        if (v1 > v2) {
            return v1 - v2;
        } else {
            return v2 - v1;
        }
    }
}

