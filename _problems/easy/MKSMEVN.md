---
{"category_name":"easy","problem_code":"MKSMEVN","problem_name":"Make the Sum Even","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n4\r\n7 3 5 1\r\n5\r\n4 2 7 8 10\r\n2\r\n9 9\r\n3\r\n1 1 1","output":"0\r\n1\r\n0\r\n-1","explanation":"**Example case 1:** The sum of the sequence is $16$, which is already even.\r\n\r\n**Example case 2:** We can change $A_2$ to $1$, so that the sequence becomes $[4, 1, 7, 8, 10]$. The sum of this sequence is $30$, which is even.\r\n\r\n**Example case 3:** The sum of the sequence is $18$, which is already even.\r\n\r\n**Example case 4:** It is impossible to make the sum of the sequence even.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/3ANb84O1R6M","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"souradeep_adm","problem_tester":"","date_added":"26-03-2021","tags":{"0":"ltime94","1":"simple","2":"souradeep_adm"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MKSMEVN","time":{"view_start_date":1616864402,"submit_start_date":1616864402,"visible_start_date":1616864402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MKSMEVN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/LTIME94/russian/MKSMEVN.pdf)

Chef has a sequence $A_1, A_2, \ldots, A_N$. In one operation, Chef can choose one index $i$ ($1 \leq i \leq N$) and change $A_i$ to $A_i^p$, where $p = \max\left(0, {\lceil \frac{A_i}{2} \rceil} - 1\right)$.

Help Chef find the smallest number of operations needed to make the sum of the sequence even or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the minimum number of operations needed to make the sum of the sequence even, or $-1$ if it is impossible.

### Constraints
- $1 \leq T \leq 10$
- $1 \leq N \leq 10^5$
- $1 \leq A_i \leq 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):**
- $N \leq 100$
- $1 \leq A_i \leq 10$ for each valid $i$

**Subtask #2 (70 points):** original constraints

### Example Input
```
4
4
7 3 5 1
5
4 2 7 8 10
2
9 9
3
1 1 1
```

### Example Output
```
0
1
0
-1
```

### Explanation
**Example case 1:** The sum of the sequence is $16$, which is already even.

**Example case 2:** We can change $A_2$ to $1$, so that the sequence becomes $[4, 1, 7, 8, 10]$. The sum of this sequence is $30$, which is even.

**Example case 3:** The sum of the sequence is $18$, which is already even.

**Example case 4:** It is impossible to make the sum of the sequence even.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>