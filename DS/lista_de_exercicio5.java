import javax.swing.JOptionPane;
public class lista_de_exercicio5 {
    public static void main(String[] args) {

        double cateto1, cateto2, resultado;

        // Lê os valores
        cateto1 = Double.parseDouble(
                JOptionPane.showInputDialog("Digite o primeiro cateto:"));

        cateto2 = Double.parseDouble(
                JOptionPane.showInputDialog("Digite o segundo cateto:"));

        // Chama o método que calcula a hipotenusa
        resultado = calcularHipotenusa(cateto1, cateto2);

        // Mostra o resultado
        JOptionPane.showMessageDialog(null,
                "A hipotenusa é: " + resultado);
    }

    // Método que calcula a hipotenusa
    static double calcularHipotenusa(double a, double b) {

        return Math.sqrt(Math.pow(a, 2) + Math.pow(b, 2));
    }
}

