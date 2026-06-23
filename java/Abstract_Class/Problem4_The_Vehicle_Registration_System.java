package Abstract_Class;
abstract class Vehicle{
  private final String  registrationNumber;
  Vehicle(String str){
    this.registrationNumber=str;
  }
  public String getRegistrationNumber(){
    return this.registrationNumber;
  }
  abstract void startEngine();
  abstract void checkMaxSpeed();
}

class Car extends Vehicle{
    Car(String regNum){
      super(regNum);
    }
    @Override
    void startEngine(){
      System.out.println("Car engine started with push button.");
    }
    @Override
  void checkMaxSpeed(){
      System.out.println("Max speed is 180 km/h.");
    }
}
class Truck extends Vehicle{
  Truck(String regNum){
    super(regNum);
  }
  @Override
  void startEngine(){
    System.out.println("Truck engine started with heavy key turn.");
  }
  @Override
  void checkMaxSpeed(){
    System.out.println("Max speed is 90 km/h.");
  }
}
public class Problem4_The_Vehicle_Registration_System {
  public static void main(String[] args){
    Vehicle[] vehicleaArr=new Vehicle[2];
    vehicleaArr[0]=new Car("UP55 AR3517");
    vehicleaArr[1]=new Truck("UP55 T3568");
    for (Vehicle vehicle : vehicleaArr) {
      System.out.println("Registration Number: " + vehicle.getRegistrationNumber());
      vehicle.startEngine();
      vehicle.checkMaxSpeed();
      System.out.println();
    }
  }

}
