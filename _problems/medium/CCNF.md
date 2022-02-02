---
{"category_name":"medium","problem_code":"CCNF","problem_name":"Clique Boolean Expression","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5 3 3\r\n00001\r\n1 4 2 3 7\r\n3 1 -2 4\r\n3 2 3 -5\r\n3 1 -3 2","output":3,"explanation":"**Example case 1:** The following figure depicts the graph used to generate the expression.\r\n\r\n\u003Cimg src=\u0027 https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/CCNF/CCNF.png\u0027\u003E\u003C/img\u003E\r\n\r\nThe boolean expression is $B = (X_1 \\lor \\neg X_2 \\lor X_4) \\land (X_2 \\lor X_3 \\lor \\neg X_5) \\land (X_1 \\lor \\neg X_3 \\lor X_2)$.\r\n\r\nOne optimal solution is to change the values of $X_1$ and $X_3$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/wWtAvClbr7Y","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 6","source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"2-03-2021","tags":{"0":2,"1":"alei","2":"dynamic","3":"graphs","4":"march21"},"problem_difficulty_level":"Unavailable","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CCNF","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CCNF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/CCNF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/CCNF.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/CCNF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/CCNF.pdf) as well.

Chef Ada constructed a simple undirected graph $G$ with $N$ vertices (numbered $1$ through $N$) as follows:

* Start with a [complete graph](https://en.wikipedia.org/wiki/Complete_graph) with $K$ vertices and $K \cdot (K-1)/2$ edges.
* Then, add $N-K$ vertices one by one. After adding each vetex, find some [clique](https://en.wikipedia.org/wiki/Clique_(graph_theory)) of $K-1$ vertices in the graph and connect the new vertex to all the vertices of that clique.

Consider $N$ boolean variables $X_1, X_2, \ldots, X_N$ and their negations $\neg X_1, \neg X_2, \ldots, \neg X_N$, corresponding to vertices of the graph. You are given the initial values of all variables.

A *CNF boolean expression* is defined as a [conjunction](https://en.wikipedia.org/wiki/Logical_conjunction) of clauses, where each clause is a [disjunction](https://en.wikipedia.org/wiki/Logical_disjunction) of two or more elements of the set of variables and their negations.

Using the graph $G$, Ada wrote a CNF boolean expression $B$ with $M$ clauses, where each clause corresponds to a clique in the graph with some (maybe none) of the variables (corresponding to vertices) negated. More formally, for each $i$ from $1$ to $M$:
- Ada chose some clique in the graph, consisting of $L_i$ vertices $Z_1, Z_2, \ldots, Z_{L_i}$
- then for each valid $j$, Ada chose a variable $P_{i,j}$ as either $X_{Z_j}$ or $\neg X_{Z_j}$
- the $i$-th clause in the expression $B$ had $L_i$ terms: $P_{i,1} \lor P_{i,2} \lor \ldots \lor P_{i,L_i}$

Ada wants the expression to evaluate to "true". In order to achieve that, she may change the values of variables; for each valid $i$, the cost of changing the value of $X_i$ (from "true" to "false" or vice versa) is $C_i$. Find the minimum total cost needed to make the expression $B$ evaluate to "true" or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $K$.
- The second line contains a single binary string $S$ with length $N$ describing the initial values of the variables. For each valid $i$, the $i$-th character of $S$ is '1' if $X_i$ is true or '0' if $X_i$ is false.
- The third line contains $N$ space-separated integers $C_1, C_2, \ldots, C_N$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains an integer $L_i$ followed by a space and $L_i$ space-separated integers representing the variables $P_{i,1}, \ldots, P_{i,L_i}$. For each valid $i$, the variable $X_i$ is represented by the integer $i$ and its negation is represented by $-i$.

### Output
For each test case, print a single line containing one integer ― the minimum cost needed to make the boolean expression evaluate to "true", or $-1$ if it is impossible.

### Constraints
- $1 \le T \le 10$
- $1 \le N, M \le 144$
- $3 \le K \le 9$
- each character of $S$ is either '0' or '1'
- $1 \le C_i \le 256$ for each valid $i$
- $1 \le L_i \le N$ for each valid $i$
- $1 \le |P_{i,j}| \le N$ for each valid $i,j$

### Subtasks
**Subtask #1 (25 points, time limit 1 second):** $K = 3$

**Subtask #2 (75 points, time limit 6 seconds):** original constraints

### Example Input
```
1
5 3 3
00001
1 4 2 3 7
3 1 -2 4
3 2 3 -5
3 1 -3 2
```

### Example Output
```
3
```

### Explanation
**Example case 1:** The following figure depicts the graph used to generate the expression.

<img src=' https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/CCNF/CCNF.png'></img>

The boolean expression is $B = (X_1 \lor \neg X_2 \lor X_4) \land (X_2 \lor X_3 \lor \neg X_5) \land (X_1 \lor \neg X_3 \lor X_2)$.

One optimal solution is to change the values of $X_1$ and $X_3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>