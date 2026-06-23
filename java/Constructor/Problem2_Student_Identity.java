package Constructor;
class Student{
  String name;
  int rollNo;
  Student(String name,int rollNo){
    this.name=name;
    this.rollNo=rollNo;
  }
  public void display(){
    System.out.println("Name: "+name);
    System.out.println("Roll No: "+rollNo);
  }
}
public class Problem2_Student_Identity {
  public static void main(String[] args) {
    Student student_1 = new Student("Gulshan",894);
    student_1.display();
  }
}
