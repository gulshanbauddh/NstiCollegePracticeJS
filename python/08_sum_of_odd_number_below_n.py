no = int(input("Enter number: "))

sum = 0

for i in range(1, no, 2):
    sum = sum + i
    
print("Your entered number is :", no)
print("Sum of all Odd number below is :", sum)