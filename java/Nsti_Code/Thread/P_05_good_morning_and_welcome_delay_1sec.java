package Nsti_Code.Thread;
class goodMorningThread extends Thread{
  public void run(){
    for (int i=1; i<=10; i++){
      System.out.println("Good morning: "+i);
      try {
        Thread.sleep(1000);
      } catch (Exception e){}
    }
  }
}
public class P_05_good_morning_and_welcome_delay_1sec {
  public static void main(String[] args){
    goodMorningThread t1=new goodMorningThread();
    t1.start();
    for (int i=0; i<=10; i++){
      System.out.println("Welcome to NSTI Mumbai: "+i);
    }
  }
}
