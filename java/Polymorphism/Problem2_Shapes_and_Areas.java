package Polymorphism;

import java.lang.reflect.Array;

class Shape{
  void draw(){
    System.out.println("Drawing a shape.");
  }
}

class Circle extends Shape{
  void draw(){
    System.out.println("Drawing a Circle.");
  }
}
class Square extends Shape{
  void draw(){
    System.out.println("Drawing a Square.");
  }
}
public class Problem2_Shapes_and_Areas {
  public static void main(String[] args){
    Shape[] s1={new Circle(),new Square()};
//    s1[0].draw();
    for (Shape sp:s1){
      sp.draw();;
    }
  }
}
