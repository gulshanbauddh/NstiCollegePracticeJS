print("BMI calculator:")
w=float(input("Enter weight in kg="))
h=float(input("Enter height in cm="))
h=h/100 #cm to m
bmi=w/(h*h) # calculate BMI
print("Your BMI is =",round(bmi,2))
if(bmi<18.5):
  print("Under Weight")
elif(bmi>=18.5 and bmi<25):
  print("Normal Weight")
elif(bmi>=25 and bmi<30):
  print("Over weight")
elif(bmi>=30):
  print("Obesity")