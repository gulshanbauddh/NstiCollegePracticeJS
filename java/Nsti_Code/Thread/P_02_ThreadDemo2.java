package Nsti_Code.Thread;

class MyRunnable implements Runnable {
  public void run() {
    for(int i = 1; i <= 5; i++) {
      System.out.println("Runnable Thread: " + i);
    }
  }
}

public class P_02_ThreadDemo2 {
  public static void main(String[] args) {
    MyRunnable obj = new MyRunnable();
    Thread t = new Thread(obj);
    t.start();

    for(int i = 1; i <= 5; i++) {
      System.out.println("Main Thread: " + i);
    }
  }
}