---
{"category_name":"school","problem_code":"DIVTHREE","problem_name":"Chef and Division 3","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n1 5 31\r\n4\r\n1 10 3\r\n23\r\n2 5 7\r\n20 36\r\n2 5 10\r\n19 2\r\n3 3 300\r\n1 1 1","output":"0\r\n2\r\n7\r\n4\r\n1","explanation":"- **Example case 1:** Chef only has $A_1 = 4$ problems and he needs $K = 5$ problems for a Division-3 contest. So Chef won\u0027t be able to host any Division-3 contest in these 31 days. Hence the first output is $0$.\r\n    \r\n- **Example case 2:** Chef has $A_1 = 23$ problems and he needs $K = 10$ problems for a Division-3 contest. Chef can choose any $10+10 = 20$ problems and host $2$ Division-3 contests in these 3 days. Hence the second output is $2$.\r\n          \r\n- **Example case 3:** Chef has $A_1 = 20$ problems from setter-1 and $A_2 = 36$ problems from setter-2, and so has a total of $56$ problems. Chef needs $K = 5$ problems for each Division-3 contest. Hence Chef can prepare $11$ Division-3 contests. But since we are planning only for the next $D = 7$ days and Chef cannot host more than $1$ contest in a day, Chef cannot host more than $7$ contests. Hence the third output is $7$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/YrGLVyaVkE8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"smit_adm","problem_tester":"","date_added":"30-12-2020","tags":{"0":"akashbhalotia","1":"cakewalk","2":"jan21","3":"l_returns","4":"smit_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DIVTHREE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DIVTHREE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/DIVTHREE.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/DIVTHREE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/DIVTHREE.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/DIVTHREE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/DIVTHREE.pdf) as well.

Chef wants to host some Division-3 contests. Chef has $N$ setters who are busy creating new problems for him. The $i^{th}$ setter has made $A_i$ problems where $1 \leq i \leq N$.    
 
A Division-3 contest should have exactly $K$ problems. Chef wants to plan for the next $D$ days using the problems that they have currently. But Chef cannot host more than one Division-3 contest in a day.

Given these constraints, can you help Chef find the maximum number of Division-3 contests that can be hosted in these $D$ days?

### Input:
- The first line of input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers - $N$, $K$ and $D$ respectively.
- The second line of each test case contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$ respectively. 

### Output:
For each test case, print a single line containing one integer ― the maximum number of Division-3 contests Chef can host in these $D$ days.

### Constraints 
- $1 \leq T \leq 10^3$
- $1 \leq N \leq 10^2$
- $1 \le K \le 10^9$ 
- $1 \le D \le 10^9$
- $1 \le A_i \le 10^7$ for each valid $i$

### Subtasks
**Subtask #1 (40 points):**
- $N = 1$
- $1 \le A_1 \le 10^5$

**Subtask #2 (60 points):** Original constraints

### Sample Input:
```
5
1 5 31
4
1 10 3
23
2 5 7
20 36
2 5 10
19 2
3 3 300
1 1 1
```
### Sample Output:
```
0
2
7
4
1
```
### Explanation:
- **Example case 1:** Chef only has $A_1 = 4$ problems and he needs $K = 5$ problems for a Division-3 contest. So Chef won't be able to host any Division-3 contest in these 31 days. Hence the first output is $0$.
    
- **Example case 2:** Chef has $A_1 = 23$ problems and he needs $K = 10$ problems for a Division-3 contest. Chef can choose any $10+10 = 20$ problems and host $2$ Division-3 contests in these 3 days. Hence the second output is $2$.
          
- **Example case 3:** Chef has $A_1 = 20$ problems from setter-1 and $A_2 = 36$ problems from setter-2, and so has a total of $56$ problems. Chef needs $K = 5$ problems for each Division-3 contest. Hence Chef can prepare $11$ Division-3 contests. But since we are planning only for the next $D = 7$ days and Chef cannot host more than $1$ contest in a day, Chef cannot host more than $7$ contests. Hence the third output is $7$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>