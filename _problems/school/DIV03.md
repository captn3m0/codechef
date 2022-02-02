---
{"category_name":"school","problem_code":"DIV03","problem_name":"Daanish and Problems","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n1 10 1 5 3 2 4 9 0 100\r\n100\r\n2 0 1 0 0 0 0 0 0 10\r\n12\r\n2 0 1 0 0 0 0 10 0 0\r\n0\r\n2 0 1 0 0 0 0 0 0 10\r\n10\r\n1 10 1 5 3 2 4 9 0 100\r\n125","output":"8\r\n1\r\n8\r\n3\r\n2","explanation":"**Example case 1:** The participant can remove all $100$ problems with difficulty $10$. Then, there are no problems with difficulties $9$ and $10$, so the maximum difficulty among remaining problems is $8$.\r\n\r\n**Example case 2:** The participant can remove all problems with difficulties $3$ and $10$ and any one of the problems with difficulty $1$. Then, the only problem left has difficulty $1$.\r\n\r\n**Example case 3:** The participant cannot remove any problem. The document does not contain any problems with difficulties $9$ or $10$, so the maximum difficulty of a problem is $8$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/vqaHBrf4loE","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"smit_adm","problem_tester":"","date_added":"9-01-2021","tags":{"0":"cakewalk","1":"ltime93","2":"smit_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DIV03","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DIV03","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME93/hindi/DIV03.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME93/bengali/DIV03.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME93/mandarin/DIV03.pdf), [Russian](https://www.codechef.com/download/translated/LTIME93/russian/DIV03.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME93/vietnamese/DIV03.pdf) as well.

Daanish as always is busy creating and solving his favourite and interesting graph problems. Chef assigns each problem a difficulty — an integer between $1$ and $10$. For each valid $i$, there are $A_i$ problems with difficulty $i$.

A participant hacked Daanish's account and got access to the problem proposal document. He can delete up to $K$ problems from the document in order to reduce the difficulty of the contest for himself and his friends. Find the smallest possible value of the difficulty of the most difficult problem which remains after removing $K$ problems.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains $10$ space-separated integers $A_1, A_2, \ldots, A_{10}$.
- The second line contains a single integer $K$.

### Output
For each test case, print a single line containing one integer — the minimum difficulty of the most difficult remaining problem.

### Constraints
- $1 \leq T \leq 2 \cdot 10^4$
- $0 \leq A_i \leq 10^8$ for each valid $i$
- $A_1 + A_2 + \ldots + A_{10} \gt 0$
- $0 \leq K \lt A_1 + A_2 + \ldots + A_{10}$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
5
1 10 1 5 3 2 4 9 0 100
100
2 0 1 0 0 0 0 0 0 10
12
2 0 1 0 0 0 0 10 0 0
0
2 0 1 0 0 0 0 0 0 10
10
1 10 1 5 3 2 4 9 0 100
125
``` 

### Example Output
```
8
1
8
3
2
```	

### Explanation
**Example case 1:** The participant can remove all $100$ problems with difficulty $10$. Then, there are no problems with difficulties $9$ and $10$, so the maximum difficulty among remaining problems is $8$.

**Example case 2:** The participant can remove all problems with difficulties $3$ and $10$ and any one of the problems with difficulty $1$. Then, the only problem left has difficulty $1$.

**Example case 3:** The participant cannot remove any problem. The document does not contain any problems with difficulties $9$ or $10$, so the maximum difficulty of a problem is $8$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>