const fs = require('fs');

// Fake Data Lists
const firstNames = ["Aarav", "Satandar", "Kashish", "Sumit", "Bhankar", "Ravi", "Govind", "Ritik", "Ranjeet", "Bablesh", "Gulshan", "Kajal", "Abdul", "Ashwani", "Anil", "Vihaan", "Aditya", "Arjun", "Rohan"];
const lastNames = ["Yadav", "Kumar", "pal", "Bauddh", "Khan", "Boudh", "Verma", "", "Gupta", "Malik","Reddy"];
const schools = ["Kendriya Vidyalaya", "JKIC", "Vidya Academy", "Vidya Classes", "Quantam public school", "Khair Public School", "Delhi Public School", "St. Xaviers High", "gulshan International"];
const localities = ["MG Road", "Civil Lines", "Sector 14", "Gandhi Nagar", "Shastri Nagar", "Model Town", "Vasant Vihar"];
const cities = ["Delhi", "Mumbai", "Pune", "Bangalore", "Jaipur", "Lucknow", "Chennai", "Hyderabad"];

// --- Helper Functions ---

// Random element select karne ke liye
const pickRandom = (arr) => arr[Math.floor(Math.random() * arr.length)];

// Random date generate karne ke liye
function getRandomDate(startYear, endYear) {
    const start = new Date(startYear, 0, 1);
    const end = new Date(endYear, 11, 31);
    const date = new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime()));
    return date;
}

// Date ko YYYY-MM-DD format mein convert karne ke liye
const formatDate = (date) => date.toISOString().split('T')[0];

// --- File Generation ---
const filename = "students_full_data.sql";
const currentYear = 2025;

let sqlContent = "INSERT INTO students (id, name, roll_no, school_name, address, date_of_birth, age, admission_date) VALUES\n";

for (let i = 1; i <= 5000; i++) {
    // 1. Basic Info
    const fullName = `${pickRandom(firstNames)} ${pickRandom(lastNames)}`;
    const school = pickRandom(schools);
    const rollNo = 1000 + i;

    // 2. Address
    const houseNo = Math.floor(Math.random() * 999) + 1;
    const pincode = Math.floor(Math.random() * (800000 - 110001)) + 110001;
    const addr = `H.No ${houseNo}, ${pickRandom(localities)}, ${pickRandom(cities)} - ${pincode}`;

    // 3. DOB & Age
    const dobObj = getRandomDate(2007, 2020);
    const dobStr = formatDate(dobObj);
    const age = currentYear - dobObj.getFullYear();

    // 4. Admission Date Logic
    let admStartYear = dobObj.getFullYear() + 3;
    let admEndYear = Math.min(admStartYear + 10, currentYear);
    let admObj = getRandomDate(admStartYear, admEndYear);

    // Safety Check
    if (admObj <= dobObj) {
        admObj = new Date(dobObj);
        admObj.setDate(admObj.getDate() + 1500);
    }
    const admStr = formatDate(admObj);

    // 5. SQL Formatting
    const isLast = (i === 5000);
    sqlContent += `(${i}, '${fullName}', ${rollNo}, '${school}', '${addr}', '${dobStr}', ${age}, '${admStr}')${isLast ? ';' : ','}\n`;
}

// File Save karna
fs.writeFileSync(filename, sqlContent);

console.log(`Success! '${filename}' file ready hai (JavaScript version).`);



// CREATE TABLE students (
//     id INT PRIMARY KEY,
//     name VARCHAR(25),
//     roll_no INT,
//     school_name VARCHAR(100),
//     address VARCHAR(255),
//     date_of_birth DATE,
//     age INT,
//     admission_date DATE
// );