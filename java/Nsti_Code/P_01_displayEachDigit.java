package Nsti_Code;

import java.util.Scanner;

public class P_01_displayEachDigit {
  public static void main(String[] args){
    String number;
    String[] word= {"Zero","One","Two","Three","Four","Five","Six","Seven","Eight","Nine","Ten"};
    Scanner sc=new Scanner(System.in);
    System.out.print("Enter any number:");
    number=sc.next();
    System.out.print("Number in word: ");
    for(int i=0; i<number.length();i++) {
    int digit=number.charAt(i)-'0';
      System.out.print(word[digit]+" ");
    }
  }
}
