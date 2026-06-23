package Constructor;
class Laptop{
    private final int ram;
    public Laptop() {
        this.ram = 8;
        System.out.println("Lenovo Laptop Initialized!");
        System.out.println(("RAM: " + this.ram));
    }
}
public class Problem1_Default_Laptop {
    public static void main(String[] args) {
        System.out.println("Hello Laptop World");
        Laptop laptop_1 = new Laptop();
    }
}
