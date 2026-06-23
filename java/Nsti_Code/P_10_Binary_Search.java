package Nsti_Code;

import java.util.Scanner;

public class P_10_Binary_Search {
  // Binary Sorting
  public static void binarySearch(int searchKey, int[] arr){
    int start=0, end=arr.length, mid=0;
    boolean flag=false;
    System.out.printf("\nSearch key is: %d\n",searchKey);
    while (start<=end){
      mid=(end+start)/2;
      if (searchKey>arr[mid]){
        start=mid+1;
      } else if (searchKey<arr[mid]){
        end=mid-1;
      } else {
        flag=true;
        break;
      }
    }
    System.out.println(flag?"Element found at index: "+mid:"Element not found.");
  }
  // Main method
  public static void main(String[] args) {
    int limit, temp = 0, searchKey;
    Scanner sc = new Scanner(System.in);
    System.out.print("Enter limit of array: ");
    limit = sc.nextInt();
    int[] arr = new int[limit];
    System.out.println("Enter Array Elements:");
    for (int i = 0; i < limit; i++) {
      System.out.printf("arr[%d]=",i);
      arr[i] = sc.nextInt();
    }
    System.out.print("Enter Search key: ");
    searchKey=sc.nextInt();
    System.out.print("\nDisplay array before sorting elements:\n[");
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
    System.out.println("]");
    //
    binarySearch(searchKey, arr);
  }
}
