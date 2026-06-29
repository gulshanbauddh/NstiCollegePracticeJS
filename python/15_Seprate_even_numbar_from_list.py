limit=int(input("Enter limit of list: "))
array=[]
for i in range(limit):
  array.append(int(input(f"Enter list elements {i}: ")))
print("Even elements ars: ")
for i in range(len(array)):
  if(array[i]%2==0):
    print(array[i])