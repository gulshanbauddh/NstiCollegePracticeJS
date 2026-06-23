package Constructor;
class Device{
  String brand;
  Device(String brand){
    this.brand = brand;
  }
}

class Smartphone extends Device{
  int ram;
  Smartphone(String brand, int ram){
    super(brand);
    this.ram = ram;
  }
  public void details(){
    System.out.println("Brand: "+super.brand);
    System.out.println("RAM: "+this.ram);
  }
}
public class Problem10_Device_Setup {
  public static void main(String[] args) {
    Smartphone s1 = new Smartphone("Nokia", 2);
    s1.details();
  }
}
