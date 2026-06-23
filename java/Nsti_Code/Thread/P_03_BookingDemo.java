package Nsti_Code.Thread;

class TicketBooking {
  int tickets = 5;

  synchronized void bookTicket(String name) {
    if(tickets > 0) {
      System.out.println(name + " booked ticket");
      tickets--;
    } else {
      System.out.println("No tickets available for " + name);
    }
  }
}

public class P_03_BookingDemo {
  public static void main(String[] args) {
    TicketBooking obj = new TicketBooking();

    Thread t1 = new Thread(() -> obj.bookTicket("Rahul"));
    Thread t2 = new Thread(() -> obj.bookTicket("Priya"));

    t1.start();
    t2.start();
  }
}
