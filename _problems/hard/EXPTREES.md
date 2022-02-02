---
{"category_name":"hard","problem_code":"EXPTREES","problem_name":"Expected Spanning Trees","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 2 4\r\n1 2\r\n2 3\r\n0\r\n1\r\n2\r\n3","output":"1\r\n1\r\n777777784\r\n777777784","explanation":"Initially, the graph is a tree, so it has a single spanning tree, so the answer to the first query is $1$.\r\n\r\nAfter one second, exactly one edge has been \u0022toggled\u0022. If this edge was initially present in the graph (with probability $2 / 3$), we have no spanning tree afterwards, otherwise (with probability $1 / 3$) we have $3$ spanning trees (since we get a complete graph on $3$ vertices). The expected value is still $1$.\r\n\r\nBoth after two seconds and after three seconds, the expected number of spanning trees is $\\frac{7}{9}$. The multiplicative inverse of $9$ modulo $10^9 + 7$ is $111,111,112$. Therefore, we print $7 \\cdot 111,111,112$ modulo $10^9 + 7$, which is $777,777,784$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":"","date_added":"15-06-2020","tags":{"0":"hard","1":"jtnydv25","2":"jtnydv25","3":"july20","4":"math"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EXPTREES","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXPTREES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/EXPTREES.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/EXPTREES.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/EXPTREES.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/EXPTREES.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/EXPTREES.pdf) as well.

You are given a simple undirected graph $G$ with $N$ vertices (numbered $1$ through $N$) and $M$ edges. Consider the following process performed for a fixed number of seconds:
- Each second, choose an unordered pair of vertices $(a, b)$ uniformly randomly (there are $N (N - 1) / 2$ such pairs).
- If the edge $(a, b)$ is present in the graph, remove it. Otherwise, add it to the graph.

We are interested in the number of spanning trees in the resulting graph. Two spanning trees are distinct if they contain different sets of edges. Note that the resulting graph may be disconnected, in which case the number of spanning trees is $0$. The initial graph does not have to be connected either.

You should answer $Q$ queries. In each query, you are given a time $T$ and you have to find the expected number of spanning trees in the graph after the process described above is performed for $T$ seconds, modulo $10^9 + 7$.

### Input
- The first line of the input contains three space-separated integers $N, M$ and $Q$.
- Each of the next $M$ lines contains two space-separated integers $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.
- Each of the next $Q$ lines contains a single integer $T$ describing a query.

### Output
For each query, print a single line containing one integer ― the expected number of spanning trees modulo $10^9 + 7$.

### Constraints
- $1 \le N \le 100$
- $0 \le M \le N(N - 1) / 2$
- $1 \le u, v \le N$
- the graph described on the input does not contain any parallel edges or self-loops
- $1 \le Q \le 10^5$
- $0 \le T \le 10^{18}$

### Subtasks
**Subtask #1 (10 points):**
- $N \le 8$
- $Q \le 100$
- $T \le 100$

**Subtask #2 (10 points):**
- $Q \le 100$
- $T \le 100$

**Subtask #3 (25 points):** $Q \le 100$

**Subtask #4 (55 points):** original constraints

### Example Input
```
3 2 4
1 2
2 3
0
1
2
3
```

### Example Output
```
1
1
777777784
777777784
```

### Explanation
Initially, the graph is a tree, so it has a single spanning tree, so the answer to the first query is $1$.

After one second, exactly one edge has been "toggled". If this edge was initially present in the graph (with probability $2 / 3$), we have no spanning tree afterwards, otherwise (with probability $1 / 3$) we have $3$ spanning trees (since we get a complete graph on $3$ vertices). The expected value is still $1$.

Both after two seconds and after three seconds, the expected number of spanning trees is $\frac{7}{9}$. The multiplicative inverse of $9$ modulo $10^9 + 7$ is $111,111,112$. Therefore, we print $7 \cdot 111,111,112$ modulo $10^9 + 7$, which is $777,777,784$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>