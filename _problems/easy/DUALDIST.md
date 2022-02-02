---
{"category_name":"easy","problem_code":"DUALDIST","problem_name":"Dual Distance","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4 2\r\n1 2\r\n2 3\r\n3 4\r\n1 2\r\n3 1\r\n7 1\r\n1 2\r\n1 3\r\n2 4\r\n2 5\r\n3 6\r\n3 7\r\n2 6","output":"3\r\n2\r\n6","explanation":"**Test Case $1$:** \r\n- **Query $1$:** Answer = $\\min(\\mathrm{dist}(1, 1), \\mathrm{dist}(1, 2))$ + $\\min(\\mathrm{dist}(2, 1), \\mathrm{dist}(2, 2))$ + $\\min(\\mathrm{dist}(3, 1), \\mathrm{dist}(3, 2))$ + $\\min(\\mathrm{dist}(4, 1), \\mathrm{dist}(4, 2))$  = $\\min(0, 1)$ + $\\min(1, 0)$ + $\\min(2, 1)$ + $\\min(3, 2)$ = $0 + 0 + 1 + 2$ = $3$.\r\n\r\n- **Query $2$:** Answer = $\\min(\\mathrm{dist}(1, 1), \\mathrm{dist}(1, 3))$ + $\\min(\\mathrm{dist}(2, 1), \\mathrm{dist}(2, 3))$ + $\\min(\\mathrm{dist}(3, 1), \\mathrm{dist}(3, 3))$ + $\\min(\\mathrm{dist}(4, 1), \\mathrm{dist}(4, 3))$  = $\\min(0, 2)$ + $\\min(1, 1)$ + $\\min(2, 0)$ + $\\min(3, 1)$ = $0 + 1 + 0 + 1$ = $2$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"0.5 - 2","source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"iscsi","date_added":"30-05-2021","tags":{"0":"binary","1":"daanish_adm","2":"dp","3":"easy","4":"june21"},"problem_difficulty_level":"Easy-Medium","best_tag":"Binary Lifting","editorial_url":"https://discuss.codechef.com/problems/DUALDIST","time":{"view_start_date":1623663000,"submit_start_date":1623663000,"visible_start_date":1623663000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DUALDIST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Vietnamese](https://www.codechef.com/download/translated/JUNE21/vietnamese/DUALDIST.pdf),
[Bengali](https://www.codechef.com/download/translated/JUNE21/bengali/DUALDIST.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE21/mandarin/DUALDIST.pdf), and [Russian](https://www.codechef.com/download/translated/JUNE21/russian/DUALDIST.pdf) as well. 

Given a tree with $N$ nodes, answer $Q$ queries of the following type:

- $a, b$ (where $a \ne b$) which asks you to calculate $\sum_{i=1}^{N} \min(\mathrm{dist}(i, a), \mathrm{dist}(i, b))$ where $\mathrm{dist}(x, y)$ is the number of edges on the shortest path between the nodes $x$ and $y$ in the tree.

**Note:** The input and output of this problem are large, so prefer using fast input/output methods.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains $N + Q$ lines of input.
- The first line contains two integers $N$ and $Q$.
- The next $N - 1$ lines each contains two integers $u$, $v$ representing an edge between nodes $u$ and $v$ in the tree.
- The next $Q$ lines each contains two integers $a$, $b$, the nodes considered for the respective query.

###Output
For each query of each test case, output the answer in a new line.

###Constraints 
- $1 \leq T \leq 8$
- $2 \leq N \leq 10^5$
- $1 \leq Q \leq 10^5$
- $a \ne b$
- The sum of $N$ over all test cases is at most $5\cdot 10^5$.
- The sum of $Q$ over all test cases is at most $5\cdot 10^5$.
- Its guaranteed that the given input is a valid tree.

###Subtasks
**Subtask #1 (20 points):** 
- $2 \leq N \leq 10^3$
- $1 \leq Q \leq 10^3$
- The sum of $N$ over all test cases is at most $5\cdot 10^3$.
- The sum of $Q$ over all test cases is at most $5\cdot 10^3$.
- Time limit: $0.5$ sec.

**Subtask #2 (80 points):** 
- original constraints
- Time limit: $2$ sec.

###Sample Input
```
2
4 2
1 2
2 3
3 4
1 2
3 1
7 1
1 2
1 3
2 4
2 5
3 6
3 7
2 6
```

###Sample Output
```
3
2
6
```
	
###Explanation:
**Test Case $1$:** 
- **Query $1$:** Answer = $\min(\mathrm{dist}(1, 1), \mathrm{dist}(1, 2))$ + $\min(\mathrm{dist}(2, 1), \mathrm{dist}(2, 2))$ + $\min(\mathrm{dist}(3, 1), \mathrm{dist}(3, 2))$ + $\min(\mathrm{dist}(4, 1), \mathrm{dist}(4, 2))$  = $\min(0, 1)$ + $\min(1, 0)$ + $\min(2, 1)$ + $\min(3, 2)$ = $0 + 0 + 1 + 2$ = $3$.

- **Query $2$:** Answer = $\min(\mathrm{dist}(1, 1), \mathrm{dist}(1, 3))$ + $\min(\mathrm{dist}(2, 1), \mathrm{dist}(2, 3))$ + $\min(\mathrm{dist}(3, 1), \mathrm{dist}(3, 3))$ + $\min(\mathrm{dist}(4, 1), \mathrm{dist}(4, 3))$  = $\min(0, 2)$ + $\min(1, 1)$ + $\min(2, 0)$ + $\min(3, 1)$ = $0 + 1 + 0 + 1$ = $2$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>