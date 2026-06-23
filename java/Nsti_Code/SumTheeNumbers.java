package Nsti_Code;
import java.util.Scanner;

public class SumTheeNumbers {
  public static void main(String[] args) {
    int a, b, c, d;
    Scanner s = new Scanner(System.in);
    System.out.print("Enter Value a: ");
    a = s.nextInt();
    System.out.print("Enter Value b: ");
    b = s.nextInt();
    System.out.print("Enter Value c: ");
    c = s.nextInt();
    d = a + b + c;
    System.out.print("Sum= " + d);
    s.close();
  }
}
