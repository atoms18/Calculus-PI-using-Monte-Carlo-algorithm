#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int shoot = 10000;

double random() {
	srand(time(NULL));
	return (double)rand() / (double)RAND_MAX;
}

void main() {
	int i = 0;
	int enter = 0;
	while(i < shoot) {
		double x = random() * 2 - 1;
		double y = random() * 2 - 1;
		double distance = sqrt((x * x) + (y * y));
		if(distance < 1) {
			enter++;
		}
		i++;
	}

	double pi = (4 * enter) / shoot;
    double diff = (abs(pi - M_PI) * 100) / M_PI;

    printf("In Circle %d/%d times\n", enter, shoot);
    printf("PI Estimate: %f\n", pi);
    printf("Expected PI: %f\n", M_PI);
    printf("%% Diff: %f\n", diff);
}
