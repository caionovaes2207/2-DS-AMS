
import controle.TelaCadastrar;
import javax.swing.JFrame;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Admin
 */
public class Main {
    
    public static void Main(String[] args) {
    
        TelaCadastrar tela1 = new TelaCadastrar();
        
                tela1.setResizable(false);
        tela1.setLocationRelativeTo(null);

        tela1.setVisible(true);
        tela1.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        
    }
            
    
    
}
