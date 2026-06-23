package AWT_fist;

import java.awt.*; // Abstract windows toolkit
import java.awt.event.*;
public class CalculatorAWT extends Frame implements ActionListener {
  TextField input;
  String operator = "";
  double num1 = 0, num2 = 0;
  CalculatorAWT() {
// Frame setup
    setTitle("AWT Calculator");
    setSize(300, 500);
    setLayout(null);
    setBackground(Color.LIGHT_GRAY);
    addWindowListener(new WindowAdapter() {
      public void windowClosing(WindowEvent e) {
        dispose();
        System.exit(0);
      }
    });
// Input field
    input = new TextField();
    input.setBounds(30, 50, 240, 30);
    add(input);
// AC button
    Button acBtn = new Button("AC");
    acBtn.setBounds(30, 90, 110, 40);
    acBtn.addActionListener(this);
    add(acBtn);
// Backspace button
    Button backBtn = new Button("←");
    backBtn.setBounds(160, 90, 110, 40);
    backBtn.addActionListener(this);
    add(backBtn);
// Main button labels
    String[] btnLabels = {
        "7", "8", "9", "/",
        "4", "5", "6", "*",
        "1", "2", "3", "-",
        "0", ".", "=", "+"
    };
// Create and place buttons
    int x = 30, y = 140;
    for (int i = 0; i < btnLabels.length; i++) {
      Button btn = new Button(btnLabels[i]);
      btn.setBounds(x, y, 50, 40);
      btn.addActionListener(this);
      add(btn);
      x += 60;
      if ((i + 1) % 4 == 0) {
        x = 30;
        y += 50;
      }
    }
    setVisible(true);
  }
  @Override
  public void actionPerformed(ActionEvent e) {
    String command = e.getActionCommand();
    switch (command) {
      case "AC":
        input.setText("");
        num1 = 0;
        num2 = 0;
        operator = "";
        break;
      case "←":
        String text = input.getText();
        if (text.length() > 0) {
          input.setText(text.substring(0, text.length() - 1));
        }
        break;
      case "=":
        try {
          num2 = Double.parseDouble(input.getText());
          switch (operator) {
            case "+":
              num1 += num2;
              break;
            case "-":
              num1 -= num2;
              break;
            case "*":
              num1 *= num2;
              break;
            case "/":
              if (num2 == 0) {
                input.setText("Cannot divide by 0");
                return;
              }
              num1 /= num2;
              break;
          }
          input.setText(String.valueOf(num1));
        } catch (Exception ex) {
          input.setText("Error");
        }
        break;
      case "+":
      case "-":
      case "*":
      case "/":
        try {
          num1 = Double.parseDouble(input.getText());
          operator = command;
          input.setText("");
        } catch (Exception ex) {
          input.setText("Error");
        }
        break;
      default:
// Digits and decimal point
        input.setText(input.getText() + command);
        break;
    }
  }
  public static void main(String[] args) {
    new CalculatorAWT();
  }
}