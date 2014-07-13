import java.lang.Math;

public class HelloWorld {
  private static int shoot = 10000;
  
  public static void main(String[] args) {
    int enter = 0;
    for(int i = 0; i < shoot; i++) {
      double x = Math.random() * 2 - 1;
      double y = Math.random() * 2 - 1;
      double distance = Math.sqrt((x * x) + (y * y));
      if(distance < 1) {
        enter++;
      }
    }
    
    double pi = (4D * enter) / shoot;
    double diff = (Math.abs(pi - Math.PI) * 100) / Math.PI;
    
    System.out.println("In Circle " + enter + "/" + shoot + " times");
    System.out.println("PI Estimate: " + pi);
    System.out.println("Expected PI: " + Math.PI);
    System.out.println("% Diff: " + diff);
  }
}
