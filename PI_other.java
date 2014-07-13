import java.lang.Math;

public class PI_other {
  private static int cal_count = 1000000;
  
  public static void main(String[] args) {
    double result = 1;
    for(int i = 0, j = 3, op = 0; i < cal_count; i++, j += 2) {
      if(op == 0) {
        result -= 1D / (double)j;
        op = 1;
      } else {
        result += 1D / (double)j;
        op = 0;
      }
    }
    result *= 4;
    System.out.println(result);
  }
}
