package practice;

public class CalculatorArgs {
  public static void main(String[] args) {

    // Tareeqa 1: instanceof ka use karke check karna
    if (args instanceof String[]) {
      System.out.println("1. Confirmation: Yes, 'args' ek String Array (String[]) hai.");
    }

    // Tareeqa 2: Exact class ka naam print karna
    System.out.println("2. 'args' ka exact internal type: " + args.getClass().getName());

    // Tareeqa 3: Kisi ek element (jaise args[0]) ka type check karna
    if (args.length > 0) {
      System.out.println("3. 'args[0]' ka data type: " + args[0].getClass().getSimpleName());
    } else {
      System.out.println("3. args[0] check karne ke liye kripya koi argument pass karein!");
    }
  }
}