package Nsti_Code;

import java.util.Scanner;

// This is main Class.
public class P_08_Transpose_Matrix {
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

  // Transpose Method
  public static void transpose(int m, int n,int[][]matA, int[][] trans) {
    for (int i = 0; i < m; i++) {
      for (int j = 0; j < n; j++) trans[j][i] = matA[i][j];
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
    System.out.println("\nTranspose Matrix is:");
    for (int i = 0; i < n; i++) {
      for (int j = 0; j < m; j++) {
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
      int[][] matA=new int[m][n];
      int[][] trans=new int[n][m];
      inputMat(m, n, matA);
      transpose(m, n, matA, trans);
      displayMat(m, n, matA, trans);
  }
}
