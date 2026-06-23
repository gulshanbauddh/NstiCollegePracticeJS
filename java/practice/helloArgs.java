package practice;

public class helloArgs {
  public static void main(String[] args) {
    // Checking if the user has passed at least 3 arguments
    if (args.length >= 3) {
      System.out.println("First Argument  (args[0]): " + args[0]);
      System.out.println("Second Argument (args[1]): " + args[1]);
      System.out.println("Third Argument  (args[2]): " + args[2]);
    } else {
      System.out.println("Error: Please provide at least 3 arguments!");
      System.out.println("Current argument count: " + args.length);
    }
    System.out.println("Hello World");
  }
}