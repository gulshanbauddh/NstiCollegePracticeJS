package practice;

abstract class Mobile {

  void switchOn() {
    System.out.println("Phone is starting... Booting animation loaded.");
  }

  abstract void unlockPhone();
}

class Samsung extends Mobile {
  void unlockPhone() {
    System.out.println("Samsung: Unlocked safely using Fingerprint Sensor!");
  }
}

class Apple extends Mobile {
  void unlockPhone() {
    System.out.println("Apple: Unlocked securely using Face ID scanning!");
  }
}

public class MobileDemo {
  public static void main(String[] args) {

    System.out.println("=== TESTING SAMSUNG ===");
    Samsung sam = new Samsung();
    sam.switchOn();
    sam.unlockPhone();

    System.out.println("\n=== TESTING APPLE ===");
    Apple iph = new Apple();
    iph.switchOn();
    iph.unlockPhone();

    System.out.println("\n=== TESTING ABSTRACT CLASS CONSTRAINT ===");
    System.out.println("Note: We cannot create an object of the abstract 'Mobile' class directly!");
  }
}