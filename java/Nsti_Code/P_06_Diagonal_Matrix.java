package Nsti_Code;

import java.util.Scanner;
// This is main Class.
public class P_06_Diagonal_Matrix {
  // Input Method
  public static void inputMat(int m, int n, int[][] matA) {
    Scanner sc=new Scanner(System.in);
    System.out.println("\nEnter Matrix elements:");
    for (int i = 0; i < m; i++) {
      for (int j = 0; j < n; j++) {
        System.out.printf("mat [%d %d] = ", i + 1, j + 1);
        matA[i][j] = sc.nextInt();
      }
    }
  }

  // Diagonal Method
  public static void upperTri(int m, int n,int[][]matA, int[][] upper) {
    for (int i = 0; i < m; i++) {
      for (int j = 0; j < n; j++) if (i==j) upper[i][j] = matA[i][j];
      else upper[i][j] =0;
    }
  }
  // Display Method
  public static void displayMat(int m, int n, int[][]matA, int[][]trans) {
    System.out.println("\nOriginal Input Matrix matA is:");
    for (int i = 0; i < m; i++) {
      for (int j = 0; j < n; j++) {
        System.out.printf("%-5d", matA[i][j]);
      }
      System.out.println();
    }
    System.out.println("\nUpper Diagonal Matrix:");
    for (int i = 0; i < m; i++) {
      for (int j = 0; j < n; j++) {
        System.out.printf("%-5d", trans[i][j]);
      }
      System.out.println();
    }
  }

  public static void main(String[] args) {
    int m, n, p, q;
    Scanner sc = new Scanner(System.in);
    System.out.print("Enter row limit of Matrix A: ");
    m = sc.nextInt();
    System.out.print("Enter column limit of Matrix A: ");
    n = sc.nextInt();
    if ((m == n)) {
      int[][] matA=new int[m][n];
      int[][] trans=new int[m][n];
      inputMat(m, n, matA);
      upperTri(m, n, matA, trans);
      displayMat(m, n, matA, trans);
    } else {
      System.out.print("Diagonal is not possible.");
    }
  }
}
