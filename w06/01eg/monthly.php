month

day

if (month % 2 == 0) {
  day = 2;
} else if (month % 3 == 0) {
day = 3;
} else if (month % 4 == 0) {
day = 4;
} else if (month % 5 == 0) {
day = 5;
}

switch (day) {

case 1:
print "no products are available.";

case 2:
print "specs are available";

case 3:
print "mugs are available";

case 4:
print "sausage rolls are available";


}