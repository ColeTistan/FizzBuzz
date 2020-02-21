def fizzbuzz():
    for i in range(1, 100):
        if i % 3 == 0:
            print("Fizz\n")
        elif i % 5 == 0:
            print("Buzz\n")
        elif i % 3 == 0 and i % 5 == 0:
            print("FizzBuzz\n")
        else:
            print(i)
            print("\n")

def main():
    fizzbuzz()
