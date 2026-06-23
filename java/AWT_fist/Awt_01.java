package AWT_fist;

import java.awt.*;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;

//    Method 1
//public class Awt_01 extends Frame{
//  public Awt_01(){
//    setSize(600,400);
//    setVisible(true);

//    Method 2
public class Awt_01{
  public Awt_01(){
    Frame frame=new Frame("Hello Gulshan");

    Label lable=new Label("Hello NSTI Mumbai");
    lable.setBounds(20,40,150,30);
    frame.add(lable);

    TextField textField=new TextField();
    textField.setBounds(20,80,200,30);
    frame.add(textField);

    Button btn1=new Button("Click me");
    btn1.setBounds(20,120,80,30);
    frame.add(btn1);

    frame.setSize(600,400);
    frame.setLayout(null);
    frame.setVisible(true);
    // For Close button
    frame.addWindowListener(new WindowAdapter() {
      @Override
      public void windowClosing(WindowEvent e) {
        frame.dispose();
      }
    });
  }
  static void main(String[] args) {
//    Method 1
//    new Awt_01();

//    Method 2
    Awt_01 obj=new Awt_01();
  }
}
