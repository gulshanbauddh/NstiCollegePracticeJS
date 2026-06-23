num = int(input("Enter number: "))
final=0
sum = 0

while(num>0):
  digit=num%10
  sum +=digit
  final=final*10+digit
  num=int(num/10)

print("Reverse number: ",final)
print("Sum: ",sum)