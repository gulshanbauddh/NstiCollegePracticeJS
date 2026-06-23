package Polymorphism;
class Payment{
  void processPayment(){
    System.out.println("Processing generic payment.");
  }
}
class UPIPayment extends Payment{
  @Override
  void processPayment(){
    System.out.println("Processing UPI Payment via QR Code");
  }
}
public class Problem3_Payment_Gateway {
  public static void main(String[] args){
    Payment p1=new UPIPayment();
    p1.processPayment();
  }
}
