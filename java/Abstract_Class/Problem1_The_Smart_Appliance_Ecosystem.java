  package Abstract_Class;
  abstract class SmartAppliance{
    String brand;
    boolean isOn;
    SmartAppliance(String brand){
      this.brand=brand;
      this.isOn=false;
    }
    void turnOn(){
      this.isOn=true;
      System.out.printf("Brand_Name: %s Appliance is now ON.\n",this.brand);
    }
    abstract void doWork();
  }

  class smartTV extends SmartAppliance{
        smartTV(String brand){
          super(brand);
        }
        @Override
      void doWork(){
        System.out.println("Streaming movies in 4K on " + this.brand + " TV...");
      }
    }
  public class Problem1_The_Smart_Appliance_Ecosystem {
    public static void main(String[] args){
      SmartAppliance myTV=new smartTV("Lenovo");
      myTV.turnOn();
      myTV.doWork();
    }
  }
