package Constructor;
class Voter{
  String name;
  int age;
  Voter(String name, int age){
    this.name = name;
    if (age<18){
      this.age=0;
      System.out.println("Age cannot be less than 18!");
    }else {
      this.age=age;
      System.out.println("Age is "+this.age);
      System.out.println("Age save successfully.");
    }
  }
}
public class Problem8_Smart_Voter {
  public static void main(String[] args) {
    System.out.println("Voter 1");
    Voter voter1 = new Voter("Gulshan",5);
    System.out.println("\nVoter 2");
    Voter voter2 = new Voter("Sandeep",25);
  }
}
