package practice;

import java.util.Scanner;

class Matrix {
  private int[][] matA;
  private int[][] matB;
  private int[][] matC;
  Scanner sc = new Scanner(System.in);

  // This is constructor
  public Matrix(int n, int m) {
    this.matA = new int[m][n];
    this.matB = new int[m][n];
    this.matC = new int[m][n];
    inputMat(m, n, 'A');
    addMat(m, n);
    displayMat(m, n, 'A');
  }

  // Input Method
  public void inputMat(int m, int n, int name) {
    System.out.printf("\nEnter matrix %c elements: \n", name);
    for (int i = 0; i < m; i++) {
      for (int j = 0; j < n; j++) {
        System.out.printf("matA [%d %d] = ", i + 1, j + 1);
        this.matA[i][j] = this.sc.nextInt();
      }
    }
    System.out.printf("\nEnter matrix %c elements: \n", name + 1);
    for (int i = 0; i < m; i++) {
      for (int j = 0; j < n; j++) {
        System.out.printf("matA [%d %d] = ", i + 1, j + 1);
        this.matB[i][j] = this.sc.nextInt();
      }
    }
  }

  // Sum Method
  public void addMat(int m, int n) {
    for (int i = 0; i < m; i++) {
      for (int j = 0; j < n; j++) {
        this.matC[i][j] = this.matA[i][j] + this.matB[i][j];
      }
    }
  }

  // Display Method
  public void displayMat(int m, int n, int name) {
    for (int mat = 1; mat <= 3; mat++) {
      System.out.printf("\nMatrix %c:\n", name++);
      for (int i = 0; i < m; i++) {
        for (int j = 0; j < n; j++) {
          if (mat == 1) System.out.printf("%-5d", this.matA[i][j]);
          else if (mat == 2) System.out.printf("%-5d", this.matB[i][j]);
          else System.out.printf("%-5d", this.matC[i][j]);
        }
        System.out.println();
      }
    }
  }
}

// This is main Class.
public class Matrix_Addition {
  public static void main(String[] args) {
    int m, n, p, q;
    Scanner sc = new Scanner(System.in);
    System.out.print("Enter row limit of Matrix A: ");
    m = sc.nextInt();
    System.out.print("Enter column limit of Matrix A: ");
    n = sc.nextInt();
    System.out.print("Enter row limit of Matrix B: ");
    p = sc.nextInt();
    System.out.print("Enter column limit of Matrix B: ");
    q = sc.nextInt();
    if ((m == p && n == q)) {
      System.out.println("Matrix Addition possible.");
      Matrix matrix = new Matrix(n, m);
      //matrix.inputMat(m, n, 'A');
      //matrix.addMat(m, n);
      //matrix.displayMat(m, n, 'A');
    } else {
      System.out.print("Matrix Addition not possible.");
    }
  }
}
