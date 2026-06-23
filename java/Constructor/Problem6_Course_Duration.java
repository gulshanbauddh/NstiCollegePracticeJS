package Constructor;
class Course{
  String courseName;
  int durationMonth;
  Course(String courseName, int durationMonth){
    this.courseName = courseName;
    this.durationMonth = durationMonth;
  }
  Course(String courseName){
    this(courseName,3);
  }
  public void display(){
    System.out.println("Course Name: "+this.courseName);
    System.out.println("Course Duration: "+this.durationMonth);
  }
}
public class Problem6_Course_Duration {
  public static void main(String[] args) {
    Course c1 = new Course("Gulshan");
    c1.display();

  }
}
