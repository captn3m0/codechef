---
{"category_name":"easy","problem_code":"NUMCOMP1","problem_name":"Total Components","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2\r\n4\r\n8","output":"1\r\n2\r\n3","explanation":"**Test Case $1$:** The final group is $\\{2\\}$.\r\n\r\n**Test Case $2$:** The final groups are $\\{2, 4\\}$, and $\\{3\\}$.\r\n\r\n**Test Case $3$:** The final groups are $\\{2, 3, 4, 6, 8\\}$, $\\{5\\}$, and $\\{7\\}$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/YWuq-siiJ3s","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"28-05-2021","tags":{"0":"daanish_adm","1":"erasthones","2":"ltime96","3":"sieve","4":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/NUMCOMP1","time":{"view_start_date":1622482204,"submit_start_date":1622482204,"visible_start_date":1622482204,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NUMCOMP1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME96/bengali/NUMCOMP1.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME96/mandarin/NUMCOMP1.pdf), [Russian](https://www.codechef.com/download/translated/LTIME96/russian/NUMCOMP1.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME96/vietnamese/NUMCOMP1.pdf) as well.

You are given all $N - 1$ integers in the range $[2, N]$. In each step, you choose $2$ distinct integers and if they share a common factor greater than $1$, you combine them into the same group. You keep doing it until no further merging is possible.

Belonging to a group is an equivalence relation. So if integers $a$ and $b$ are in the same group and integers $b$ and $c$ are in the same group, then integers $a$ and $c$ are also said to be in the same group.

Find the total number of groups formed in the end.

###Input

- First line will contain $T$, number of test cases. Then the test cases follow. 
- Each test case contains a single line of input, a single integer $N$. 

###Output
For each test case, output in a single line the answer to the problem.

###Constraints 
- $1 \leq T \leq 2\cdot 10^5$
- $2 \leq N \leq 10^7$

### Subtasks
**Subtask #1 (30 points):** 
- $1 \leq T \leq 200$
- $2 \leq N \leq 1000$

**Subtask #2 (70 points):** original constraints

###Sample Input
```
3
2
4
8
```

###Sample Output
```
1
2
3
```
	
###Explanation
**Test Case $1$:** The final group is $\{2\}$.

**Test Case $2$:** The final groups are $\{2, 4\}$, and $\{3\}$.

**Test Case $3$:** The final groups are $\{2, 3, 4, 6, 8\}$, $\{5\}$, and $\{7\}$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>