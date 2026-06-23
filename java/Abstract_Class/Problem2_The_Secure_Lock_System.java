package Abstract_Class;
abstract class SecuritySystem2{
  static void systemCheck() {
    System.out.println("Running global security scans...");
  }
  final void activateAlarm() {
    System.out.println("Emergency! Alarm activated!");
  }
  abstract void primaryLock();
}
class DigitalLock2 extends SecuritySystem2{
  @Override
  void primaryLock(){
    System.out.println("Scanning fingerprint to unlock...");
  }
}
public class Problem2_The_Secure_Lock_System {
  public static void main(String[] args){
//    SecuritySystem2 ss1=new SecuritySystem2(); // Why show error ?? => Kanuani apradh hai
    SecuritySystem2.systemCheck();
    SecuritySystem2 lock=new DigitalLock2();
    lock.primaryLock();
    lock.activateAlarm();
  }
}
