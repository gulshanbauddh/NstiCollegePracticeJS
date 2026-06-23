package Constructor;
class Book{
  private String title;
  private float price;
  Book(){
    this.title = "Unknown";
    this.price = 0.0f;
  }
  Book(String title, float price){
    this.title = title;
    this.price = price;
  }
  public void Display(){
    System.out.println("Book Title: "+this.title);
    System.out.println("Book Price: "+this.price);
  }
}
public class Problem4_Book_Store {
  public static void main(String[] args) {
    System.out.println("Book 1");
    Book book1 = new Book();
    book1.Display();
    System.out.println("Book 2");
    Book book2 = new Book("Book 1", 10.0f);
    book2.Display();
  }
}
