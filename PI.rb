shoot = 10000
enter = 0;

for i in 1..shoot
  x = rand() * 2 - 1
  y = rand() * 2 - 1
  distance = Math.sqrt((x * x) + (y * y));
  if distance < 1
    enter += 1
  end
end

pi = (4.0 * enter) / shoot;
diff = ((pi - Math::PI).abs * 100) / Math::PI;

print 'In Circle ',enter,'/',shoot,' times',"\n"
print 'PI Estimate: ',pi,"\n"
print 'Expected PI: ',Math::PI,"\n"
print '% Diff: ',diff,"\n"
