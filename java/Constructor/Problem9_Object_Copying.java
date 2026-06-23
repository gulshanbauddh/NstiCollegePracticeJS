package Constructor;
class Point{
  int x,y;
  Point(int x,int y){
    this.x=x;
    this.y=y;
  }
  Point(Point p){
   this.x=p.x;
   this.y=p.y;
  }
  public void display(){
    System.out.println(x+","+y);
  }
}
public class Problem9_Object_Copying {
  public static void main(String[] args) {
    Point p1 = new Point(10,20);
    p1.display();
    Point p2 = new Point(p1);
    p2.display();
  }
}
