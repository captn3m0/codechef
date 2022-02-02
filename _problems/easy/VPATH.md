---
{"category_name":"easy","problem_code":"VPATH","problem_name":"Valid Paths","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4\r\n1 2\r\n3 1\r\n2 4\r\n4\r\n1 2\r\n2 3\r\n2 4","output":"15\r\n13","explanation":"**Test Case $1$:** Every non-empty set is valid.\r\n\r\n**Test Case $2$:** The valid sets are $\\{1\\}$, $\\{2\\}$, $\\{3\\}$, $\\{4\\}$, $\\{1, 2\\}$, $\\{1, 3\\}$, $\\{1, 4\\}$, $\\{2, 3\\}$, $\\{2, 4\\}$, $\\{3, 4\\}$, $\\{1, 2, 3\\}$,  $\\{1, 2, 4\\}$, $\\{2, 3, 4\\}$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/2tAgrA2QMGk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"26-12-2020","tags":{"0":"combinatorics","1":"daanish_adm","2":"easy","3":"may21"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/VPATH","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=VPATH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MAY21/bengali/VPATH.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY21/mandarin/VPATH.pdf), [Russian](https://www.codechef.com/download/translated/MAY21/russian/VPATH.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY21/vietnamese/VPATH.pdf) as well.

You are given a tree with $N$ nodes numbered from $1$ to $N$. A set $S$ of nodes is called valid if there exist two vertices $u$ and $v$ (possibly, $u=v$) such that every node in $S$ lies on the simple path from $u$ to $v$.

Count the number of valid sets modulo $10^9+7$. Two sets are different if one node is included in one set and not in the other. If there are multiple pairs $(u, v)$ making a set valid, that set is still only counted once.

###Input
- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains $N$ lines of input.
- The first line contains a single integer $N$, the number of tree nodes. 
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ representing an edge between nodes $u$ and $v$. 

###Output
For each test case, output in a single line the number of valid sets modulo $10^9 + 7$.

###Constraints 
- $1 \leq T \leq 50$
- $1 \leq N \leq 10^5$
- $1 \leq u, v \leq N$
- Sum $N$ over all testcases is at most $5\cdot 10^5$.
- The given input is a valid tree.

###Subtasks
**Subtask #1 (20 points):** 
- $1 \leq T \leq 10$
- $1 \leq N \leq 3\cdot 10^3$

**Subtask #2 (80 points):** Original Constraints

###Sample Input
```
2
4
1 2
3 1
2 4
4
1 2
2 3
2 4
```

###Sample Output
```
15
13
```

###Explanation
**Test Case $1$:** Every non-empty set is valid.

**Test Case $2$:** The valid sets are $\{1\}$, $\{2\}$, $\{3\}$, $\{4\}$, $\{1, 2\}$, $\{1, 3\}$, $\{1, 4\}$, $\{2, 3\}$, $\{2, 4\}$, $\{3, 4\}$, $\{1, 2, 3\}$,  $\{1, 2, 4\}$, $\{2, 3, 4\}$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>