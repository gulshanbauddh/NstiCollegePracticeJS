const fs = require('fs');

// Fake Data Lists
const firstNames = ["Aarav", "Satandar", "Kashish","Sandeep", "Sumit","Rahul", "Bhankar", "Ravi", "Govind", "Ritik", "Ranjeet", "Bablesh", "Gulshan", "Kajal", "Abdul", "Ashwani", "Anil", "Vihaan", "Aditya", "Arjun", "Rohan", "Ishaan", "Rahul", "Amit", "Sneha", "Priya", "Anjali", "Kavya"];
const lastNames = ["Sharma", "Kumar", "pal", "Bauddh", "Khan", "Boudh", "Katara","Verma", "pal", "Gupta", "Malik", "Singh", "Patel", "Yadav", "Kumar", "Mishra", "Reddy"];
const schools = ["Kendriya Vidyalaya", "JKIC", "Vidya Academy","Secondery School", "Vidya Classes", "Quantam public school", "Khair Public School", "Delhi Public School", "St. Xaviers High", "gulshan International", "Army Public School", "Navodaya Vidyalaya"];

// --- Helper Functions ---

// 1. Get random item from array
const getRandom = (arr) => arr[Math.floor(Math.random() * arr.length)];

// 2. Get random number between min and max
const getRandomNumber = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;

// 3. Get random Date (Format: YYYY-MM-DD)
const getRandomDate = (startYear, endYear) => {
    const year = getRandomNumber(startYear, endYear);
    const month = String(getRandomNumber(1, 12)).padStart(2, '0');
    const day = String(getRandomNumber(1, 28)).padStart(2, '0'); // Safety for Feb
    return `${year}-${month}-${day}`;
};

// --- Execution ---

const totalEntries = 400000;
// Updated Column Names
let sqlContent = "INSERT INTO students (id, name, roll_no, school_name, dob, age, admission_date, fee) VALUES\n";

for (let i = 1; i <= totalEntries; i++) {
    const fullName = `${getRandom(firstNames)} ${getRandom(lastNames)}`;
    const school = getRandom(schools);
    const rollNo = 100 + i;
    
    // New Fields Logic
    const age = getRandomNumber(15, 25); // Age between 15 and 25
    const dob = getRandomDate(2000, 2010); // DOB between 2000 and 2010
    const admissionDate = getRandomDate(2020, 2024); // Admission between 2020 and 2024
    const fee = getRandomNumber(5000, 50000); // Fee between 5k and 50k

    // SQL format building
    const isLast = (i === totalEntries);
    // const line = `(${i}, '${fullName}', ${rollNo}, '${school}', '${dob}', ${age}, '${admissionDate}', ${fee})${isLast ? ';' : ','}\n`;
    const line = `('${fullName}', ${rollNo}, '${school}', '${dob}', ${age}, '${admissionDate}', ${fee})${isLast ? ';' : ','}\n`;
    
    sqlContent += line;
}

// Write file
fs.writeFile('students_data.sql', sqlContent, (err) => {
    if (err) {
        console.error("Error:", err);
    } else {
        console.log("Success! File with DOB, Age, Admission Date, and Fee created.");
    }
});
