---
{"category_name":"easy","problem_code":"CNTGRP","problem_name":"Counting Graphs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n4 3\r\n1 2 1\r\n4 6\r\n1 2 1\r\n3 2\r\n2 2","output":"2\r\n0\r\n0","explanation":"**Example case 1:** The two graphs which satisfy all conditions are:\r\n![](https://i.ibb.co/whRxmGZ/graph2.png)\r\n![](https://i.ibb.co/rp8rjmc/graph1.png)","isDeleted":false}}},"video_editorial_url":"https://youtu.be/M8eCi06elJE","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sawarnik123","problem_tester":"","date_added":"23-08-2020","tags":{"0":"combinatorics","1":"easy","2":"ltime87","3":"modular","4":"modular","5":"psychik","6":"sawarnik","7":"sawarnik123"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CNTGRP","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CNTGRP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME87/hindi/CNTGRP.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME87/bengali/CNTGRP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME87/mandarin/CNTGRP.pdf), [Russian](https://www.codechef.com/download/translated/LTIME87/russian/CNTGRP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME87/vietnamese/CNTGRP.pdf) as well.

One day, Tanya was studying graph theory. She is very inquisitive, so the following problem soon came to her mind.

Find the number of undirected unweighted connected simple graphs with $N$ vertices (numbered $1$ through $N$) and $M$ edges, such that for each $i$ ($2 \le i \le N$), the shortest path from vertex $1$ to vertex $i$ is unique and its length is equal to $A_i$. In other words, for each $i$ ($2 \le i \le N$), there should be exactly one path with length $A_i$ between vertices $1$ and $i$, and there should be no paths with smaller length between these vertices.

Two graphs with $N$ vertices are distinct if we can find two vertices $u$ and $v$ such that there is an edge between these vertices in one graph, but not in the other graph.

Since the answer could be very large, compute it modulo $1,000,000,007$ ($10^9 + 7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N - 1$ space-separated integers $A_2, A_3, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the number of graphs modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 1,000$
- $2 \le N \le 10^5$
- $N-1 \le M \le \mathrm{min}\left(2\cdot 10^5, \frac{N(N-1)}{2}\right)$
- $1 \le A_i \le N-1$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$
- the sum of $M$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (50 points):** $M = N-1$

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
4 3
1 2 1
4 6
1 2 1
3 2
2 2
```

### Example Output
```
2
0
0
```

### Explanation
**Example case 1:** The two graphs which satisfy all conditions are:
![](https://i.ibb.co/whRxmGZ/graph2.png)
![](https://i.ibb.co/rp8rjmc/graph1.png)
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>