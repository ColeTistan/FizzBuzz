int main(){
  for(int i = 1; i <= 100; i++) {
    if(i % 3 == 0) {
      puts("Fizz\n");
    }

    else if(i % 5 == 0) {
      puts("Buzz\n");
    }

    else if(i % 3 == 0 && i % 5 == 0) {
      puts("FizzBuzz\n");
    }

    else {
      puts("%d\n", i);
    }
  }
}
