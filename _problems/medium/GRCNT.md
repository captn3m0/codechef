---
{"category_name":"medium","problem_code":"GRCNT","problem_name":"Graph Count","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":"","date_added":"23-06-2021","tags":{"0":"combinatorics","1":"fast","2":"inclusion","3":"jtnydv25","4":"ltime97","5":"medium"},"problem_difficulty_level":"Medium-Hard","best_tag":"Fast Fourier Transform","editorial_url":"https://discuss.codechef.com/problems/GRCNT","time":{"view_start_date":1624727702,"submit_start_date":1624727702,"visible_start_date":1624727702,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GRCNT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME97/mandarin/GRCNT.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME97/bengali/GRCNT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME97/russian/GRCNT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME97/vietnamese/GRCNT.pdf) as well.

You are given an undirected graph with $N$ nodes and $M$ edges. There are exactly $K = \frac{N(N-1)}{2} - M$ unordered pairs $(i, j)$ such that the edge $(i, j)$ is not present in the graph. For each of these pairs, you can choose whether to add the edge $(i, j)$ to the graph. Out of all $2^K$ ways, find the number of ways in which each vertex has degree $2$ in the final graph.

Since the answer can be large, print it modulo $998\ 244\ 353$.

### Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow.
- The first line of each test case contains two integers $N$, $M$, the number of nodes and the number of edges in the graph.
- Each of the next $M$ lines contains two space-separated integers $u$, $v$, denoting an edge between nodes $u$ and $v$ in the graph.


### Output:
For each testcase, output in a single line, the number of ways in which all nodes of the final graph have degree $2$, modulo $998\ 244\ 353$.

### Constraints
- $1 \leq T \leq 1000$
- $0\le M\le N\le 3\cdot 10^5$
- $1\le N$
- $1\le u, v\le N$, $u\ne v$
- There is at most one edge between the same pair of nodes.
- The sum of $N$ over all test cases does not exceed $3 \cdot 10^5$

### Subtasks
- **Subtask 1 (10 points)**: $T \le 10$, $N \le 11$
- **Subtask 2 (15 points)**: $T \le 10$, $N \le 40$
- **Subtask 3 (20 points)**: $T \le 10$, $N \le 350$
- **Subtask 4 (30 points)**: The sum of $N$ over all test cases does not exceed $5000$
- **Subtask 5 (25 points)**: Original constraints

### Sample Input
```
3
4 3
1 4
3 2
2 4
4 4
1 2
2 3
1 3
1 4
6 0
```

### Sample Output
```
1
0
70
```

### Explanation

In the first test case, there is only one valid way: adding an edge between $1$ and $3$.

In the second test case, there is no valid way.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>