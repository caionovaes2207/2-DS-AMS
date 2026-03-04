import javax.swing.JOptionPane;

public class lista_de_exercicio5 {
    public static void main(String[] args) {

        double base, altura, resultado;

        // Lê a base do triângulo
        base = Double.parseDouble(
                JOptionPane.showInputDialog("Digite o valor da base:"));

        // Lê a altura do triângulo
        altura = Double.parseDouble(
                JOptionPane.showInputDialog("Digite o valor da altura:"));

        // Chama o método hipotenusa
        resultado = hipotenusa(base, altura);

        // Mostra o resultado
        JOptionPane.showMessageDialog(null,
                "A hipotenusa é: " + resultado);
    }

    // Método que calcula e retorna a hipotenusa
    static double hipotenusa(double base, double altura) {

        // Fórmula: √(base² + altura²)
        return Math.sqrt(Math.pow(base, 2) + Math.pow(altura, 2));
    }
}


