---
{"category_name":"school","problem_code":"CHEFSTR1","problem_name":"Chef and Strings","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n6\r\n1 6 11 6 10 11\r\n4\r\n1 3 5 7","output":"15\r\n3","explanation":"**Test Case** $1$     \r\n - Chef skips $4$ strings $(2, 3, 4, 5)$ to move from $1$ to $6$     \r\n - Chef skips $4$ strings $(7, 8, 9, 10)$ to move from $6$ to $11$     \r\n - Chef skips $4$ strings $(10, 9, 8, 7)$ to move from $11$ to $6$     \r\n - Chef skips $3$ strings $(7, 8, 9)$ to move from $6$ to $10$     \r\n - Chef skips $0$ strings to move from $10$ to $11$     \r\n\r\nTherefore, the answer is $4 + 4 + 4 + 3 + 0 = 15$     \r\n\r\n**Test Case** $2$     \r\n - Chef skips $1$ string to move from $1$ to $3$     \r\n - Chef skips $1$ string to move from $3$ to $5$     \r\n - Chef skips $1$ string to move from $5$ to $7$     \r\n\r\nTherefore, the answer is $1 + 1 + 1 = 3$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aryanag_adm","problem_tester":"","date_added":"3-07-2020","tags":{"0":"aryanag_adm","1":"cakewalk","2":"implementation","3":"july20","4":"rajarshi_basu"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHEFSTR1","time":{"view_start_date":1594632600,"submit_start_date":1594632600,"visible_start_date":1594632600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFSTR1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/CHEFSTR1.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/CHEFSTR1.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/CHEFSTR1.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/CHEFSTR1.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/CHEFSTR1.pdf) as well.

Having already mastered cooking, Chef has now decided to learn how to play the guitar. Often while trying to play a song, Chef has to skip several strings to reach the string he has to pluck. Eg. he may have to pluck the $1^{st}$ string and then the $6^{th}$ string. This is easy in guitars with only $6$ strings; However, Chef is playing a guitar with $10^6$ strings. In order to simplify his task, Chef wants you to write a program that will tell him the total number of strings he has to skip while playing his favourite song.

![fig1](https://codechef_shared.s3.amazonaws.com/download/Images/JULY20/CHEFSTR1/CHEFSTR1.png =200x200)

This is how guitar strings are numbered (In ascending order from right to left). Eg. to switch from string $1$ to $6$, Chef would have to skip $4$ strings $(2, 3, 4, 5)$. 

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- The first line of each test case contains $N$, the number of times Chef has to pluck a string
- The second line of each test case contains $N$ space separated integers - $S_1$, $S_2$, ..., $S_N$, where $S_i$ is the number of the $i^{th}$ string Chef has to pluck.

###Output:
For each testcase, output the total number of strings Chef has to skip over while playing his favourite song. 

###Constraints 
- $1 \leq T \leq 10$
- $2 \leq N \leq 10^5$
- $1 \leq S_i \leq 10^6$
- For each valid $i$, $S_i \neq S_{i+1}$

###Subtasks
- 30 points : for each valid $i$, $S_i < S_{i+1}$
- 70 points : No additional constraints

###Sample Input:
```
2
6
1 6 11 6 10 11
4
1 3 5 7
```
###Sample Output:
```
15
3
```
###Explanation:
**Test Case** $1$     
 - Chef skips $4$ strings $(2, 3, 4, 5)$ to move from $1$ to $6$     
 - Chef skips $4$ strings $(7, 8, 9, 10)$ to move from $6$ to $11$     
 - Chef skips $4$ strings $(10, 9, 8, 7)$ to move from $11$ to $6$     
 - Chef skips $3$ strings $(7, 8, 9)$ to move from $6$ to $10$     
 - Chef skips $0$ strings to move from $10$ to $11$     

Therefore, the answer is $4 + 4 + 4 + 3 + 0 = 15$     

**Test Case** $2$     
 - Chef skips $1$ string to move from $1$ to $3$     
 - Chef skips $1$ string to move from $3$ to $5$     
 - Chef skips $1$ string to move from $5$ to $7$     

Therefore, the answer is $1 + 1 + 1 = 3$     

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>