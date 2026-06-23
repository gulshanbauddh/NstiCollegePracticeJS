package Nsti_Code;

import java.util.Scanner;

class Product {
  int p_code, p_qty;
  String p_name;
  double u_price, price, gst, Total_price;

  public Product(int c, String n, int q, double p) {
    this.p_code = c;
    this.p_name = n;
    this.p_qty = q;
    this.u_price = p;
    calculateTotalPrice();
  }

  public void calculateTotalPrice() {
    price = p_qty * u_price;
    gst = price * 0.18;
    Total_price = price + gst;
  }

  public void displayDetailsRowWise() {
    System.out.printf("%-15d %-20s %-10d %-15.2f %-12.2f %-13.2f %-10.2f \n",
        p_code, p_name, p_qty, u_price, price, gst, Total_price);
  }
}

public class P_14_Stock_Details {
  public static void main(String[] args) {
    Scanner sc = new Scanner(System.in);
    System.out.print("Enter the number of products : ");
    int N = sc.nextInt();
    Product[] products = new Product[N];

    for (int i = 0; i < products.length; i++) {
      System.out.println("Enter Details of Product " + (i + 1));
      System.out.print("Enter product Code : ");
      int code = sc.nextInt();
      System.out.print("Enter product Name : ");
      String name = sc.next();
      System.out.print("Enter p roduct Qty : ");
      int qty = sc.nextInt();
      System.out.print("Enter Unit Price : ");
      double price = sc.nextDouble();

      products[i] = new Product(code, name, qty, price);
      System.out.println();
    }

    System.out.println();
    System.out.println("                                      Product Details");
    System.out.println("                                     -------------------");
    System.out.println("Product Code    Product Name    product Qty     Unit Price      Price       GST(18%)      Total Price");

    for (int i = 0; i < products.length; i++) {
      products[i].displayDetailsRowWise();
    }
    sc.close();
  }
}