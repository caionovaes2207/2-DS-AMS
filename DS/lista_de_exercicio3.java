 import javax.swing.JOptionPane;
public class lista_de_exercicio3 {
    public static void main(String[] args) {

        double altura, pesoIdeal;
        String sexo;

        altura = Double.parseDouble(
                JOptionPane.showInputDialog("Digite sua altura: ")); // le a altura

        sexo = JOptionPane.showInputDialog("Digite seu sexo M ou F: "); // le o sexo

        pesoIdeal = calcularPesoIdeal(sexo, altura); // chama o metodo que clacula o pesso ideal

        JOptionPane.showMessageDialog(null, // mostra o resultado
                "Seu peso ideal é: " + pesoIdeal + " kg");
    }

    static double calcularPesoIdeal(String sexo, double altura) { // calcula o peso ideal

        if (sexo.equalsIgnoreCase("M")) { // calculo para homen
            return (72.7 * altura) - 58;
        } else {
            return (62.1 * altura) - 44.7; // claculo para mulher
        }
    }
}

