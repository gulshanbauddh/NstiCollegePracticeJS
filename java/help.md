Yahan Git aur GitHub ke 15 sabse zyada use hone wale important commands ki list hai, unke kaam ke sath:

1. Setup & Initialization
   • `git init`: Ek naya, khali Git repository banane ya purane ko reinitialize karne ke liye.

• `git clone <repository-url>`: Kisi existing remote repository (jaise GitHub se) ko apne local machine par copy karne ke liye.

2. Staging & Committing Changes
   • `git status`: Yeh dekhne ke liye ki kaunsi files modify hui hain, kaunsi stage hui hain, aur kaunsi untracked hain.

• `git add <file-name>`: Kisi specific file ko staging area mein add karne ke liye. Sabhi files ke liye `git add .` use karte hain.

• `git commit -m "commit message"`: Staged changes ka ek snapshot (save point) banane ke liye, ek message ke sath.

3. Branching & Merging
   • `git branch`: Apni repository ki sabhi branches dekhne ke liye. Nayi branch banane ke liye `git branch <branch-name>` use hota hai.

• `git checkout <branch-name>`: Ek branch se doosri branch par switch karne ke liye. (Nayi branch banakar switch karne ke liye: `git checkout -b <branch-name>`).

• `git merge <branch-name>`: Kisi doosri branch ke changes ko apni current active branch mein jodne (merge karne) ke liye.

4. Sharing & Updating (GitHub Remote)
   • `git remote add origin `: Apne local repository ko ek remote GitHub repository se jodne ke liye.

• `git push -u origin <branch-name>`: Apne local commits ko GitHub (remote repository) par upload karne ke liye.

• `git pull`: Remote repository se latest changes ko fetch karke seedhe apne local branch mein merge karne ke liye.

• `git fetch`: Remote repository se sirf updates download karne ke liye (yeh local code ko automatic merge nahi karta).

5. Inspection & Undoing
   • `git log`: Commit history dekhne ke liye (kisne, kab, aur kya commit kiya).

• `git diff`: Files mein jo changes kiye gaye hain, unka exact difference dekhne ke liye.

• `git reset --hard <commit-id>`: Apne code aur working directory ko kisi purane specific commit par wapas le jaane ke liye (dhyan se use karein, isse naya data delete ho sakta hai).



# Run This 
1. Windows Machine par yeh command chalayein:
   Windows par terminal kholein aur yeh run karein. Yeh kya karega ki jab aap code GitHub par push karenge toh use LF (Linux format) bana dega, aur jab local par pull karenge toh Windows ke hisab se CRLF bana dega.

``` bash
git config --global core.autocrlf true
```
2. Linux Machine par yeh command chalayein:
   Linux par line endings ko chhedne ki zaroorat nahi hoti, isliye wahan Git ko bolna padta hai ki push karte waqt agar galti se koi CRLF file aa gayi ho toh use LF mein badal de, par pull karte waqt use LF hi rehne de.

``` bash
git config --global core.autocrlf input
```
# Frist Push Using Terminal
``` bash
PS D:\java> git status
```
On branch main
Your branch is up to date with 'origin/main'.

Changes not staged for commit:
(use "git add <file>..." to update what will be committed)
(use "git restore <file>..." to discard changes in working directory)
modified:   practice/FrequencyCount.java

no changes added to commit (use "git add" and/or "git commit -a")
``` bash
PS D:\java> git add .
PS D:\java> git commit -m "frist using Terminall"
```
[main 87ad7d5] frist using Terminall
1 file changed, 1 insertion(+), 1 deletion(-)
``` bash
PS D:\java> git push origin main
```
Enumerating objects: 7, done.
Counting objects: 100% (7/7), done.
Delta compression using up to 4 threads
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 414 bytes | 414.00 KiB/s, done.
Total 4 (delta 3), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (3/3), completed with 3 local objects.
To https://github.com/gulshanbauddh/java.git
cb8e23b..87ad7d5  main -> main
PS D:\java> 
