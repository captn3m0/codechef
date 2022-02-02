---
{"category_name":"medium","problem_code":"HIDDENPTS","problem_name":"Hidden Points","problemComponents":{"constraints":"- $1 \\le T \\le 10^4$\n- $3 \\le N \\le 10^5$\n- $-10^9 \\le P_i.x, P_i.y\\le 10^9$\n- No two points are similar, that is $P_i \\neq P_j$ for all $i \\neq j$\n- Sum of $N$ over all test cases does not exceed $10^5$","constraintsState":false,"subtasks":"- **Subtask 1 (30 points):** \n    - $1 \\le T \\le 200$\n    - $3 \\le N \\le 1000$\n    - Sum of $N$ over all test cases does not exceed $1000$.\n\n- **Subtask 2 (70 points):** Original constraints.\n","subtasksState":false,"inputFormat":"Refer interaction","inputFormatState":false,"outputFormat":"- For each test case, output a single integer, the maximum $f(i,j)$. \n","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/iAkKn0sXKiU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 2","source_sizelimit":50000,"problem_author":"dragonado","problem_tester":"","date_added":"30-09-2021","tags":{"0":"dragonado"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/HIDDENPTS","time":{"view_start_date":1633944600,"submit_start_date":1633944600,"visible_start_date":1633944600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HIDDENPTS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/OCT21/bengali/HIDDENPTS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT21/mandarin/HIDDENPTS.pdf), [Russian](https://www.codechef.com/download/translated/OCT21/russian/HIDDENPTS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT21/vietnamese/HIDDENPTS.pdf) as well.

**This is an interactive task**

There is an array $P$ of size $N$ consisting of distinct integer points on a 2D plane. $P$ are initially hidden from you, but you can ask queries to find out information about points in $P$.

To be specific, you can ask queries in the form: 

`? i j`

where $1 \le i \lt j \le N$, and you will be provided with the **square** of the Euclidean distance between $P_i$ and $P_j$.


More formally, define $f(i, j) = (P_i.x - P_j.x)^2 + (P_i.y - P_j.y)^2$, then the output of the query `? i j` is the value of $f(i, j)$.

You can ask at most $3N - 6$ queries. Find the minimum value among **all possible** $f(i, j)$ where $1 \le i \lt j \le N$.

### Interaction
- Begin the interaction by reading a single integer $T$ denoting the number of test cases. The test cases follow.
- For each test case, first read a single integer $N$ denoting the number of points in $P$. After this, you can start making queries.
- To ask a query, output `? i j` ($1 \le i \lt j \le N$), then read a single integer $f(i, j)$. 
- To output the answer, output `! X`, where $X$ is the minimum value among **all possible** $f(i, j)$ (not just the ones you made a query on). This is not considered a query. Suppose the true exact answer is $Y$, then your answer will be considered correct if and only if $\frac{|X-Y|}{Y} \le 10^{-6}$.
- If at any time you make an invalid query or exceed the query limit, the interaction is terminated and you will receive a Wrong Answer verdict.
- Don't forget to flush the output after printing each line!

### Constraints
- $1 \le T \le 10^4$
- $3 \le N \le 10^5$
- $-10^9 \le P_i.x, P_i.y\le 10^9$
- No two points are similar, that is $P_i \neq P_j$ for all $i \neq j$
- Sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
- **Subtask 1 (30 points):** 
    - $1 \le T \le 200$
    - $3 \le N \le 1000$
    - Sum of $N$ over all test cases does not exceed $1000$.
    - Time limit: $1$ second

- **Subtask 2 (70 points):** 
    - Original constraints
    - Time limit: $2$ seconds

### Sample Interaction
```
Grader                You
2
3
                      ? 1 2
1
                      ! 1
4
                      ? 1 4
8000000000000000000          
                      ? 2 3
8000000000000000000
                      ! 4000000000000000000
```

### Explanation
- **Test case $1$:** $P$ = $[(0,0), (0, 1), (2,0)]$.
    - The query `? 1 2`  gives $f(1,2) = (0-0)^2 + (0-1)^2 = 1$
    - The minimum value of all $f(i,j)  = 1$. So we output `! 1`

- **Test case $2$:** $P$ = $[(-10^9, -10^9), (-10^9, 10^9), (10^9, -10^9), (10^9, 10^9)]$.
    - The query `? 1 4`  gives $f(1,4) = (-2 \cdot 10^9)^2 + (-2 \cdot 10^9)^2 = 8 \cdot 10^{18}$
    - The query `? 2 3`  gives $f(2,3) = (-2 \cdot 10^9)^2 + (2 \cdot 10^9)^2 = 8 \cdot 10^{18}$
    - The minimum of all $f(i,j) = 4 \cdot 10^{18}$. So we output `! 4000000000000000000`
    - Since maximum relative error is $10^{-6}$, any integer in the range $[4 \cdot 10^{18} - 4 \cdot 10^{12}, 4 \cdot 10^{18} + 4 \cdot 10^{12}]$ will be considered correct. 


**NOTE**: The above queries are just to demonstrate the interaction. They may or may not be sufficient to deduce the final answer. 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>