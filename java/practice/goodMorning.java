package practice;

import java.util.Scanner;
public class goodMorning {
  public static void main(String[] args) {
    String str;
    Scanner s = new Scanner(System.in);
    System.out.println("Enter your name");
    str = s.next();
    System.out.println("Good Morning " + str);
    s.close();
  }
}
