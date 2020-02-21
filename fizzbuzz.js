function fizzbuzz() {
  var i = 1;
  while(i <= 100) {
      if(i % 3 == 0) {
        document.write("Fizz");
      }

      else if(i % 5 == 0) {
        document.write("Buzz\n");
      }

      else if(i % 3 == 0 && i % 5 == 0) {
        document.write("FizzBuzz\n");
      }

      else {
        document.write(i);
        document.write("\n");
      }
      i++;
  }
}
