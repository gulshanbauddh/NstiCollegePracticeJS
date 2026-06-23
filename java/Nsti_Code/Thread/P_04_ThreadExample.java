package Nsti_Code.Thread;

class NumberThread extends Thread {
  public void run() {
    for(int i = 1; i <= 10; i++) {
      System.out.println(
          "Child Thread: " + i);
      try {
        Thread.sleep(1000);
      }
      catch(Exception e) {}
    }
  }
}
public class P_04_ThreadExample {
  public static void main(String[] args) {
    NumberThread t = new NumberThread();
    t.start();
    for(int i = 1; i <= 10; i++) {
      System.out.println( "Main Thread: " + i);
    }
  }
}
