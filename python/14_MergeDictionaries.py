dict1={}
dict2={}

print("------------ Dictionary 1 ------------")
l1=int(input("Enter limit of Dictionary 1: "))
for i in range(l1):
  key=input("Enter key of Dictionary: ")
  value=input(f"Enter value at key {key} of Dictionary: ")
  dict1[key]=value

print("------------ Dictionary 2 ------------")
l2=int(input("Enter limit of Dictionary 2: "))
for i in range(l2):
  key=input("Enter key of Dictionary: ")
  value=input(f"Enter value at key {key} of Dictionary: ")
  dict2[key]=value
print(f"Dictionary 2: {dict2}")
mergeDice={**dict1,**dict2}
print("Merge Dictionary:")
print(f"Merge Dictionary: {mergeDice}")