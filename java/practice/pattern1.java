package practice;
import java.util.Scanner;
public class pattern1 {
  public static void pattern(int num){
    for (int i = num; i >= 1; i--){
      for ( int j = i; j <= num; j++){
        System.out.print("* ");
      }
      System.out.println();
    }
  }
  public static void main(String[] args) {
    Scanner sc = new Scanner(System.in);
    System.out.print("Enter the number: " );
    int num = sc.nextInt();
    pattern(num);
  }
}
