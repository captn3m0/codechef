---
{"category_name":"school","problem_code":"MAXTOPO","problem_name":"Maximum Topological Sort","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4 2\r\n1 2\r\n2 3\r\n2 4","output":"4 2","explanation":"**Example case 1:** The tree is\r\n\r\n![](https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/MAXTOPO/MAXTOPO_sample.png)\r\n\r\n- For $u = 1$, there are $C_1 = 2$ possible topological orderings: $(3,4,2,1)$ and $(4,3,2,1)$\r\n- For $u = 2$, there are $C_2 = 6$ possible topological orderings: $(3,4,1,2)$, $(4,3,1,2)$, $(3,1,4,2)$, $(4,1,3,2)$, $(1,3,4,2)$ and $(1,4,3,2)$.\r\n- For $u = 3$, there are $C_3 = 2$ possible topological orderings: $(1,4,2,3)$ and $(4,1,2,3)$.\r\n- For $u = 4$, there are $C_4 = 2$ possible topological orderings: $(3,1,2,4)$ and $(1,3,2,4)$.\r\n\r\nThe sorted list of pairs is $((6,2), (2,4), (2,3), (2,1))$. The node for the $2$-nd pair is $4$ and the corresponding number of topological orderings modulo $10^9+7$ is $2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/prtZ6XVPfOQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"shaanknight","problem_tester":"","date_added":"28-02-2021","tags":{"0":"depth","1":"dynamic","2":"easy","3":"march21","4":"shaanknight"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/MAXTOPO","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXTOPO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/MAXTOPO.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/MAXTOPO.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/MAXTOPO.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/MAXTOPO.pdf) as well.

Chef has a tree $G$ with $N$ nodes (numbered $1$ through $N$) and $N-1$ undirected edges. For each node $u$ in the tree, he can assign directions to the edges in such a way that $u$ is reachable from all the other nodes. Let $C_u$ be the number of valid [topological orderings](https://en.wikipedia.org/wiki/Topological_sorting) in the resulting directed acyclic graph.

This way, Chef obtains $N$ pairs $(C_1,1), (C_2,2), \ldots, (C_N,N)$ and he sorts all these pairs $(C_i, i)$ in descending order (first by $C_i$ and in the case of a tie by $i$). 

For example, consider the tree below:

![](https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/MAXTOPO/MAXTOPO_eg.png)

The sorted list of pairs is $((2,2), (1,3), (1,1))$.

Chef quizzes you on this list ― he wants you to find the $K$-th pair in the sorted list. To make that task easier, Chef only asks for $K = 1$ (the largest pair) or $K = 2$ (the second largest pair). Since the number of topological orderings can be very large, compute it modulo $10^9+7$. 

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$, denoting that nodes $u$ and $v$ are connected by an edge.

### Output
For each test case, print a single line containing two space-separated integers $u$ and $C_u$ modulo $10^9+7$, where $(C_u, u)$ is the $K$-th pair in the sorted list.

### Constraints
- $1 \leq T \leq 5$
- $1 \leq N \leq 5 \cdot 10^5$
- $1 \leq K \leq 2$
- $1 \leq u,v \leq N$
- the graph described on the input is a tree
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (10 points):** $N \leq 10$

**Subtask #2 (30 points):** $K = 1$

**Subtask #3 (60 points):** $K = 2$

### Example Input
```
1
4 2
1 2
2 3
2 4
```

### Example Output
```
4 2
```

### Explanation
**Example case 1:** The tree is

![](https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/MAXTOPO/MAXTOPO_sample.png)

- For $u = 1$, there are $C_1 = 2$ possible topological orderings: $(3,4,2,1)$ and $(4,3,2,1)$
- For $u = 2$, there are $C_2 = 6$ possible topological orderings: $(3,4,1,2)$, $(4,3,1,2)$, $(3,1,4,2)$, $(4,1,3,2)$, $(1,3,4,2)$ and $(1,4,3,2)$.
- For $u = 3$, there are $C_3 = 2$ possible topological orderings: $(1,4,2,3)$ and $(4,1,2,3)$.
- For $u = 4$, there are $C_4 = 2$ possible topological orderings: $(3,1,2,4)$ and $(1,3,2,4)$.

The sorted list of pairs is $((6,2), (2,4), (2,3), (2,1))$. The node for the $2$-nd pair is $4$ and the corresponding number of topological orderings modulo $10^9+7$ is $2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>