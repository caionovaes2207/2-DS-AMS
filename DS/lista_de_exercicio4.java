import javax.swing.JOptionPane;

public class lista_de_exercicio4 {

    public static void main(String[] args) {

        int opcao;

        do {

            opcao = Integer.parseInt(JOptionPane.showInputDialog(
            "MENU\n"
            + "1 – Soma\n"
            + "2 – Subtração\n"
            + "3 – Divisão\n"
            + "4 – Multiplicação\n"
            + "5 – Resto da Divisão\n"
            + "6 – Dobro\n"
            + "7 – Quadrado\n"
            + "8 – Cubo\n"
            + "9 – Raiz Quadrada\n"));

        } while (opcao != 0);

        JOptionPane.showMessageDialog(null, "Programa encerrado.");
    }

    // metodo primcipal dos calculos
    static void realizarCalculo(int opcao) {

        double n1, n2, resultado;

        switch (opcao) { // estrutura para desidir qual operação vai fazer

            case 1: // soma
                n1 = lerNumero("Digite o primeiro número:");
                n2 = lerNumero("Digite o segundo número:");
                resultado = n1 + n2;
                mostrarResultado(resultado);
                break;

            case 2: // subtração
                n1 = lerNumero("Digite o primeiro número:");
                n2 = lerNumero("Digite o segundo número:");
                resultado = n1 - n2;
                mostrarResultado(resultado);
                break;

            case 3: // divisão
                n1 = lerNumero("Digite o primeiro número:");
                n2 = lerNumero("Digite o segundo número:");
                resultado = n1 / n2;
                mostrarResultado(resultado);
                break;

            case 4: // multiplicação
                n1 = lerNumero("Digite o primeiro número:");
                n2 = lerNumero("Digite o segundo número:");
                resultado = n1 * n2;
                mostrarResultado(resultado);
                break;

            case 5: // resto da divisão
                n1 = lerNumero("Digite o primeiro número:");
                n2 = lerNumero("Digite o segundo número:");
                resultado = n1 % n2;
                mostrarResultado(resultado);
                break;

            case 6: // dobro 
                n1 = lerNumero("Digite um número:");
                resultado = n1 * 2;
                mostrarResultado(resultado);
                break;

            case 7: // quadrado
                n1 = lerNumero("Digite um número:");
                resultado = Math.pow(n1, 2);
                mostrarResultado(resultado);
                break;

            case 8: // cubo
                n1 = lerNumero("Digite um número:");
                resultado = Math.pow(n1, 3);
                mostrarResultado(resultado);
                break;

            case 9: // raiz quadrada
                n1 = lerNumero("Digite um número:");
                resultado = Math.sqrt(n1);
                mostrarResultado(resultado);
                break;

            default: // se a pessoa digitar errado
                JOptionPane.showMessageDialog(null, "Opção inválida!");
        }
    }

    // metodos auxiliares
    // recebe uma mensageme retorna o numero digitado
    static double lerNumero(String mensagem) {
        return Double.parseDouble(JOptionPane.showInputDialog(mensagem)); 
    }

    // mostra o resultado
    static void mostrarResultado(double resultado) {
        JOptionPane.showMessageDialog(null, "Resultado: " + resultado);
    }
}