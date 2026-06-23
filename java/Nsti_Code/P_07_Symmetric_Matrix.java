package Nsti_Code;

import java.util.Scanner;

// This is main Class.
public class P_07_Symmetric_Matrix {
  // Input Method
  public static void inputMat(int m, int[][] mat) {
    Scanner sc=new Scanner(System.in);
    System.out.println("\nEnter Matrix elements:");
    for (int i = 0; i < m; i++) {
      for (int j = 0; j < m; j++) {
        System.out.printf("mat [%d %d] = ", i + 1, j + 1);
        mat[i][j] = sc.nextInt();
      }
    }
  }

  // Transpose Method
  public static void transpose(int m,int[][]mat, int[][] trans) {
    for (int i = 0; i < m; i++) {
      for (int j = 0; j < m; j++) trans[j][i] = mat[i][j];
    }
  }
  // Display Method
  public static void displayMat(int m, int[][]mat, int[][]trans) {
    System.out.println("\nOriginal Input Matrix mat is:");
    for (int i = 0; i < m; i++) {
      for (int j = 0; j < m; j++) {
        System.out.printf("%-5d", mat[i][j]);
      }
      System.out.println();
    }
    System.out.println("\nTranspose Matrix is:");
    for (int i = 0; i < m; i++) {
      for (int j = 0; j < m; j++) {
        System.out.printf("%-5d", trans[i][j]);
      }
      System.out.println();
    }
  }
  public static void checkSymmetric(int m,int[][] mat){
    boolean isSymatric=true;
    for (int i=0; i<m; i++){
      for (int j=0; j<m; j++){
        if (mat[i][j]!= mat[j][i]){
          isSymatric=false;
        }
      }
    }
    System.out.println((isSymatric)?"\nMatrix is Symmetric.":"\nMatrix is not Symmetric.");
  }
  // Main Method
  public static void main(String[] args) {
    int m, n, p, q;
    Scanner sc = new Scanner(System.in);
    System.out.print("Enter row limit of Matrix A: ");
    m = sc.nextInt();
    System.out.print("Enter column limit of Matrix A: ");
    n = sc.nextInt();
    if (m==n) {
      int[][] mat = new int[m][m];
      int[][] trans = new int[m][m];
      inputMat(m, mat);
      transpose(m, mat, trans);
      displayMat(m, mat, trans);
      checkSymmetric(m,mat);
    } else {
      System.out.println("Rows and Column must be same.");
    }
  }

}
