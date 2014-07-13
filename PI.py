import random
import math

shoot = 10000
enter = 0;

for i in range(1, shoot):
  x = random.random() * 2 - 1
  y = random.random() * 2 - 1
  distance = math.sqrt((x * x) + (y * y));
  if distance < 1:
    enter += 1

pi = (4.0 * enter) / shoot;
diff = (abs(pi - math.pi) * 100) / math.pi;

print 'In Circle ' + repr(enter) + '/' + repr(shoot) + ' times'
print 'PI Estimate: ' + repr(pi)
print 'Expected PI: ' + repr(math.pi)
print '% Diff: ' + repr(diff)
