package Inheritance;

class GrandFather {
  String land = "50 Acor";
}

class Father extends GrandFather {
  String house = "2 BHK";
}

class son extends Father {
  String car = "Thar";
}

public class Problem2_Multilevel_Inheritance {
  public static void main(String[] args) {
    son s1 = new son();
    System.out.println("GrandFather Land: " + s1.land);
    System.out.println("Father house: " + s1.house);
    System.out.println("Son Car: " + s1.car);
  }
}
