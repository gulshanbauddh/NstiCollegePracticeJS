# ☕ Core Java Practice Laboratory

Welcome to my Java development repository! This project serves as a dedicated space for mastering **Core Java fundamentals**, object-oriented programming (OOP) principles, and basic algorithmic problem-solving. 

Since I actively develop this project across both **Windows** and **Linux** environments, it also includes configurations to handle cross-platform development smoothly.

---

## 🌐 Cross-Platform Setup (Handling Windows & Linux Line Endings)

Windows uses `CRLF` (Carriage Return Line Feed) for line endings, while Linux uses `LF` (Line Feed). To prevent Git from showing fake modification warnings or breaking file formats when switching OS, run the appropriate command on your machine:

### For Windows Users:
Configure Git to convert LF to CRLF on checkout, and CRLF to LF on commit:
```bash
git config --global core.autocrlf true
```
### For Linux Users:
Configure Git to only convert CRLF to LF on commit:
```bash
git config --global core.autocrlf input
```
## 🚀 How to Run the Code Locally

### Prerequisites
Make sure you have the Java Development Kit (JDK) installed on your system.
- Check version: `java -version`

### Execution Steps
#### 1. Clone this repository:
``` bash
git clone [https://github.com/gulshanbauddh/java.git](https://github.com/gulshanbauddh/java.git)
```
#### 2. Navigate to the practice directory:
``` bash
cd java/practice
```
### 3. Compile any Java file:

``` bash
javac HelloWorld.java
```
### 4. Run the compiled class:

``` bash
java HelloWorld
```
## 🛠️ Environment & Tools Used
#### Languages: 
Java (JDK 17+)
#### Operating Systems: 
Windows & Linux (Cross-platform tested)
#### Version Control: 
Git & GitHub (with .gitignore optimized for Java/IDEs)
