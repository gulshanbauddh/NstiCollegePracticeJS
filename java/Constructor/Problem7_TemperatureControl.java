package Constructor;
class Room{
  double fahrenheit;
  Room(double celsius){
    this.fahrenheit = (celsius * 9/5) + 32;
  }
  public void temprature(){
    System.out.println("Fahrenheit: "+this.fahrenheit);
  }
}
public class Problem7_TemperatureControl {
  public static void main(String[] args) {
    Room room = new Room(23);
    room.temprature();
  }
}
