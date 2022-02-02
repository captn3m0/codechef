---
{"category_name":"easy","problem_code":"ARRQRY","problem_name":"Convolution","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/ajenkcNauxs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"msi_cse_buet","problem_tester":"","date_added":"4-12-2019","tags":{"0":"msi_cse_buet"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ARRQRY","time":{"view_start_date":1578249000,"submit_start_date":1578249000,"visible_start_date":1578249000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ARRQRY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given two integer sequences $A_1, A_2, \ldots, A_N$ and $B_1, B_2, \ldots, B_M$. For any two sequences $U_1, U_2, \ldots, U_p$ and $V_1, V_2, \ldots, V_q$, we define
$$Score(U, V) = \sum_{i=1}^p \sum_{j=1}^q  U_i \cdot V_j \,.$$

You should process $Q$ queries of three types:
- $1$ $L$ $R$ $X$: Add $X$ to each of the elements $A_L, A_{L+1}, \ldots, A_R$.
- $2$ $L$ $R$ $X$: Add $X$ to each of the elements $B_L, B_{L+1}, \ldots, B_R$.
- $3$: Print $Score(A, B)$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two integers, $N$ and $M$, denoting the length of $A$ and $B$ respectively.
- The second line contains $N$ integers, elements of $A$.
- The third line contains $M$ integers, elements of $B$.
- The next line will contain an integer, $Q$, number of queries.
- Each of the next $Q$ lines will contain one of $3$ kinds of updates as mentioned in the statement

It’s guaranteed that each update is a valid update operation.

### Output
For each query of the third type, print a single line containing one integer - the answer to that query.

### Constraints 
- $1 \le T \le 10$
- $2 \le N, M, Q \le 10^5$
- $0 \le |A_i|, |B_i|, |X| \le 10^5$

### Example Input
```
1
3 4
2 -1 5
3 3 2 4
6
3
1 2 3 -2
3
1 1 3 1
2 2 4 2
3
```

### Example Output
```
72
24
90
```

### Explanation
Before the first operation, $A = [2, -1, 5],\ B = [3, 3, 2, 4]$

So, for the first operation,
$Score(A,\ B) = 2*3 + 2*3 + 2*2 + 2*4$ $+ (-1)*3$ $+ (-1)*3$ $+ (-1)*2$ $+$ $(-1)*4$ $+  5*3$ $+ 5*3$ $+ 5*2$ $+ 5*4$ $= 72.$

After the second query $A = [2, -3, 3]$, $B = [3, 3, 2, 4]$

So, for the third query, $Score(A, B) = 2*3 + 2*3 + 2*2$ $+ 2*4$ $+ (-3)*3$ $+ (-3)*3$ $+ (-3)*2$ $+ (-3)*4$ $+  3*3$ $+ 3*3$ $+ 3*2$ $+ 3*4$ $= 24$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>