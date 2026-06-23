package Nsti_Code;

import java.awt.geom.Area;
import java.util.Scanner;

class CalculateArea{
  double Area(double radius){
    return (Math.PI*radius*radius);
  }
  int Area(int l, int b){
    return l*b;
  }
  double Area(float b, float h){
    return 0.5*b*h;
  }
}
public class P_17_Calculate_Area_Method_Overloading {
  public static void main(String[] args){
    Scanner sc=new Scanner(System.in);
    CalculateArea cal=new CalculateArea();
    // Area of Circle
    System.out.print("Enter Radius of Circle in cm: ");
    double radius=sc.nextDouble();
    System.out.printf("Area of circle is: %.2f cm²\n\n",cal.Area(radius));
    // Area of rectangular
    System.out.print("Enter Rectangular of length in cm: ");
    int l=sc.nextInt();
    System.out.print("Enter Rectangular of Width in cm: ");
    int w=sc.nextInt();
    System.out.printf("Area of Rectangular is: %d cm²\n\n",cal.Area(l, w));
    // Area or Equilateral Triangle
    System.out.print("Enter Triangle of height in cm: ");
    float height=sc.nextInt();
    System.out.print("Enter Triangle of base in cm: ");
    float base=sc.nextInt();
    System.out.printf("Area of Equilateral Triangle is: %.3f cm²",cal.Area(height, base));
  }
}