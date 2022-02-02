---
{"category_name":"medium","problem_code":"CHEFDAG","problem_name":"Chef and DAG","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2 2\r\n1 2\r\n2 1\r\n2 2\r\n1 2\r\n1 2","output":"2\r\n0 0\r\n1\r\n2 0","explanation":"**Example case 1:** The graph must consist of just two disconnected nodes, since no edges are allowed. Hence, there are two nodes with indegree $0$.\r\n\r\n**Example case 2:** The graph may contain an edge from node $1$ to node $2$. Then, there is only one node with indegree $0$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rahuldugar","problem_tester":null,"date_added":"30-05-2019","tags":{"0":"bipartite","1":"graphs","2":"march20","3":"medium","4":"rahuldugar","5":"tmwilliamlin"},"problem_difficulty_level":"Medium","best_tag":"Bipartite Matching","editorial_url":"https://discuss.codechef.com/problems/CHEFDAG","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFDAG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MARCH20/hindi/CHEFDAG.pdf), [Bengali](https://www.codechef.com/download/translated/MARCH20/bengali/CHEFDAG.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH20/mandarin/CHEFDAG.pdf), [Russian](https://www.codechef.com/download/translated/MARCH20/russian/CHEFDAG.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH20/vietnamese/CHEFDAG.pdf) as well.

You are given $K$ permutations of integers $1$ through $N$. For each $i$ ($1 \le i \le K$), the $i$-th permutation is denoted by $A_{i,1}, A_{i,2}, \ldots, A_{i,N}$.

Construct a directed acyclic graph with $N$ nodes (numbered $1$ through $N$) such that:
- Each of the given permutations is a valid topological sort of the graph. Formally, for each valid $k$ and each $i, j$ ($1 \le i \lt j \le N$), there is no edge from the node $A_{k,j}$ to the node $A_{k,i}$.
- The outdegree of each node is at most $1$.
- The number of nodes with indegree $0$ is the smallest possible.

If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- $K$ lines follow. For each $i$ ($1 \le i \le K$), the $i$-th of these lines contains $N$ space-separated integers $A_{i,1}, A_{i,2}, \ldots, A_{i,N}$.

### Output
For each test case, print two lines.
- The first of these lines should contain one integer ― the minimum number of nodes with indegree $0$.
- The second line should contain $N$ space-separated integers $v_1, v_2, \ldots, v_N$ describing your graph in the following way: for each valid $i$, if $v_i = 0$, there is no outgoing edge from the $i$-th node; otherwise, there is an edge from the $i$-th node to the $v_i$-th node.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 500$
- $1 \le K \le 100$
- $1 \le A_{i,j} \le N$ for each valid $i,j$
- the sum of $N$ over all test cases does not exceed $2,000$

### Subtasks
**Subtask #1 (20 points):**
- $N \le 20$
- $K \le 10$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
2 2
1 2
2 1
2 2
1 2
1 2
```

### Example Output
```
2
0 0
1
2 0
```

### Explanation
**Example case 1:** The graph must consist of just two disconnected nodes, since no edges are allowed. Hence, there are two nodes with indegree $0$.

**Example case 2:** The graph may contain an edge from node $1$ to node $2$. Then, there is only one node with indegree $0$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>