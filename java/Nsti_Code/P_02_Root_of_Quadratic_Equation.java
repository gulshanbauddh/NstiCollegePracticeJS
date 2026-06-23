package Nsti_Code;

import java.util.Scanner;

public class P_02_Root_of_Quadratic_Equation {
  public static void main(String[] args){
    float a, b, c;
    double d,root1, root2;
    Scanner sc= new Scanner(System.in);
    System.out.print("Enter value of a: ");
    a=sc.nextFloat();
    System.out.print("Enter value of b: ");
    b=sc.nextFloat();
    System.out.print("Enter value of c: ");
    c=sc.nextFloat();
    System.out.println("--------------------------------------------");
    d=(b*b)-(4*a*c);
    if(d>0){
      System.out.println("Root's are real and Different.");
      root1=(-b+Math.sqrt(d))/(2*a);
      root2=(-b-Math.sqrt(d))/(2*a);
      System.out.printf("Root 1 is: %.2f \n",root1);
      System.out.printf("Root 2 is: %.2f",root2);
    } else if(d==0){
      System.out.println("Root's are real and Same.");
      root1=(float)-b/(2*a);
      System.out.println("Root's are: "+root1);
    } else {
      float realPart, imgPart;
      System.out.println("Root's are Imaginary and Different.");
      realPart=(float) (-b)/(2*a);
      imgPart=(float) Math.sqrt(-d)/(2*a);
      System.out.printf("Root 1 is: %.2f + %.2f i\n",realPart,imgPart);
      System.out.printf("Root 2 is: %.2f - %.2f i",realPart,imgPart);
    }
  }
}
