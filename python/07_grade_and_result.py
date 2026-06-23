js = int(input("Enter Java Script Mark = "))
net = int(input("Enter Networking Mark = "))
mysql = int(input("Enter MySQL Mark = "))
php = int(input("Enter PHP Mark = "))
python = int(input("Enter Python Mark = "))

total = js + net + mysql + php + python
per = total / 5

if per >= 90 and per <= 100:
    grade = "A+"
elif per >= 80:
    grade = "A"
elif per >= 70:
    grade = "B+"
elif per >= 60:
    grade = "B"
elif per >= 50:
    grade = "C+"
elif per >= 40:
    grade = "C"
elif per >= 30:
    grade = "D"
else:
    grade = "E"

result = "Passed"
if js < 30 or net < 30 or mysql < 30 or php < 30 or python < 30:
    result = "Failed !"

print("\n------------------------------")
print("Students Result Seat of Trainee :")
print("------------------------------")
print("Java Script :", js)
print("Networking  :", net)
print("MySQL       :", mysql)
print("PHP         :", php)
print("Python      :", python)
print("------------------------------")
print("Result      :", result)
print("Total Marks :", total)
print("Percentage  :", per, "%")
print("Grade       :", grade)
print("------------------------------")