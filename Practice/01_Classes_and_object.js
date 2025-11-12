const car = {
  brand: "Tata",
  model: "Top Class",
  year: "2026",
  showBrand: function () {
    console.log("Car brand is: " + this.brand +" Modle is: "+this.model+" and year is: "+this.year);
  }, 
  showName: function () {
    console.log("Car brand is: " + this.brand +" Modle is: "+this.model+" and year is: "+this.year);
  }
};

car.showBrand();  // Output: Car brand is: Tata
car.showName();
