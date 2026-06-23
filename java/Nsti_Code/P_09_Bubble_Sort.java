package Nsti_Code;

import java.util.Scanner;

public class P_09_Bubble_Sort {
  public static void main(String[] args) {
    int limit, temp = 0;
    Scanner sc = new Scanner(System.in);
    System.out.print("Enter limit of array: ");
    limit = sc.nextInt();
    int[] arr = new int[limit];
    System.out.println("Enter Array Elements:");
    for (int i = 0; i < limit; i++) {
      System.out.printf("arr[%d]=",i+1);
      arr[i] = sc.nextInt();
    }
    System.out.print("\n\nDisplay array before sorting elements:\n[");
    for (int i = 0; i < limit; i++) {
      System.out.print(arr[i] + " ");
    }
    // Bubble sorting
    for (int i = 0; i < limit; i++) {
      for (int j = 0; j < limit - i - 1; j++) {
        if (arr[j] > arr[j + 1]) {
          temp = arr[j];
          arr[j] = arr[j + 1];
          arr[j + 1] = temp;
        }
      }
    }
    System.out.print("]\n\nDisplay array after sorting elements:\n[");
    for (int i = 0; i < limit; i++) {
      System.out.print(arr[i] + " ");
    }
    System.out.print("]");
  }
}
