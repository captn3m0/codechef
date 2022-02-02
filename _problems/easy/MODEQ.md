---
{"category_name":"easy","problem_code":"MODEQ","problem_name":"Modular Equation","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 5\r\n3 6\r\n3 10","output":"2\r\n3\r\n2","explanation":"**Test Case $1$:** The valid pairs are $\\{(1, 2), (1, 3)\\}$.\r\n\r\n**Test Case $2$:** The valid pairs are $\\{(1, 2), (1, 3), (2, 3)\\}$.\r\n\r\n**Test Case $3$:** The valid pairs are $\\{(1, 2), (1, 3)\\}$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/_-uQqzffsGQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"28-04-2021","tags":{"0":"binary","1":"daanish_adm","2":"easy","3":"may21","4":"sieve"},"problem_difficulty_level":"Easy","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/MODEQ","time":{"view_start_date":1621243802,"submit_start_date":1621243802,"visible_start_date":1621243802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MODEQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MAY21/bengali/MODEQ.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY21/mandarin/MODEQ.pdf), [Russian](https://www.codechef.com/download/translated/MAY21/russian/MODEQ.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY21/vietnamese/MODEQ.pdf) as well.

Given integers $N$ and $M$, find the number of ordered pairs $(a, b)$ such that $1 \le a < b \le N$ and $((M\ \mathrm{mod}\ a)\ \mathrm{mod}\ b) = ((M\ \mathrm{mod}\ b)\ \mathrm{mod}\ a)$.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- The only line of each test case contains two integers $N$, $M$. 

###Output
For each testcase, output in a single line the answer to the problem.

###Constraints 
- $1 \leq T \leq 1000$
- $2 \leq N \leq 10^6$
- $1 \leq M \leq 5\cdot 10^5$
- The sum of $N$ over all test cases does not exceed $10^6$.

**Note:** Multiplier for JAVA for this problem is reduced to $1.25$ instead of usual $2$.

###Subtasks
**Subtask #1 (10 points):** 
- $1 \leq T \leq 10$
- $2 \leq N \leq 10^3$
- $1 \leq M \leq 10^5$

**Subtask #2 (40 points):** 
- $1 \leq T \leq 100$
- $2 \leq N \leq 10^5$
- $1 \leq M \leq 10^5$
- The sum of $N$ over all test cases does not exceed $10^6$.

**Subtask #3 (50 points):** Original Constraints

###Sample Input
```
3
3 5
3 6
3 10
```
###Sample Output
```
2
3
2
```
	
###Explanation
**Test Case $1$:** The valid pairs are $\{(1, 2), (1, 3)\}$.

**Test Case $2$:** The valid pairs are $\{(1, 2), (1, 3), (2, 3)\}$.

**Test Case $3$:** The valid pairs are $\{(1, 2), (1, 3)\}$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>