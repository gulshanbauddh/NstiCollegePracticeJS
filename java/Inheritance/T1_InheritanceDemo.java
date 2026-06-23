package Inheritance;

class Cycle {
    int speed;

    Cycle(int speed) {
        this.speed = speed;
        System.out.println("Parent: Cycle ka constructor chala. Speed set to: " + this.speed);
    }

    void applyBrake() {
        System.out.println("Brake applied! Speed kam ho rahi hai.");
    }
}

class ElectricCycle extends Cycle {
    int batteryCapacity;

    ElectricCycle(int speed, int batteryCapacity) {
        super(speed);
        this.batteryCapacity = batteryCapacity;
        System.out.println("Child: ElectricCycle ka constructor chala. Battery: " + this.batteryCapacity + "AH");
    }
    void chargeBattery() {
        System.out.println("Battery is charging... Green light blinking.");
    }
}

public class T1_InheritanceDemo {
    public static void main(String[] args) {

        System.out.println("--- Creating Electric Cycle Object ---");
        ElectricCycle myEbike = new ElectricCycle(25, 45);

//        System.out.println("\n--- Testing Features ---");
//        myEbike.applyBrake();
//        myEbike.chargeBattery();
    }
}