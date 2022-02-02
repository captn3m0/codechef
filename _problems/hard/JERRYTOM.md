---
{"category_name":"hard","problem_code":"JERRYTOM","problem_name":"Tom and Jerry","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rajat1603","problem_tester":null,"date_added":"21-06-2018","tags":{"0":"rajat1603"},"editorial_url":"https://discuss.codechef.com/problems/JERRYTOM","time":{"view_start_date":1531733410,"submit_start_date":1531733410,"visible_start_date":1531733410,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/mandarin/JERRYTOM.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/russian/JERRYTOM.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/vietnamese/JERRYTOM.pdf">Vietnamese</a> as well.</h3>


As usual, Tom is trying to catch Jerry. To accomplish this task, Tom hired $K$ other cats (Tom does not take part in the chase). Formally, they are in a graph $G$ with $N$ vertices and $M$ edges. Let's denote the set of vertices of $G$ by $V$. The graph has a special property: for each simple cycle containing at least four vertices, there is an edge which is not part of this cycle, but connects two distinct vertices on the cycle.

Jerry can only move along the edges of the graph, but arbitrarily fast. The cats don't have to follow the edges — they can use a helicopter to go to any vertices they want.

The process of catching Jerry happens in several rounds as follows:
- In round $0$, the cats choose a set of vertices $X_0 \subseteq V$ with $|X_0| \le K$; Jerry chooses a vertex $v_0 \in V \setminus X_0$.
- For each $i \ge 0$, let's denote the set of vertices containing cats in round $i$ by $X_i$ and the vertex containing Jerry by $v_i$. In round $i+1$, the cats choose a subset $X_{i+1} \subseteq V$ with $|X_{i+1}| \le K$.
- Afterwards in round $i+1$, Jerry must choose a vertex $v_{i+1} \in V \setminus X_{i+1}$ such that there is a path from $v_i$ to $v_{i+1}$ which doesn't pass through any vertex in $X_i \cap X_{i+1}$. If Jerry cannot choose such a vertex, the cats win.

If this process can last forever ($K$ cats are not enough to catch Jerry), then Jerry wins.

Your task is to calculate the minimum number of cats $K$ which Tom has to call in order to guarantee that Jerry will be caught (there is no winning strategy for Jerry).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $M$ lines follow. Each of these lines contains two space-separated integers $u$ and $v$ denoting an edge between vertices $u$ and $v$.

### Output
For each test case, print a single line containing one integer — the minimum number of cats needed to catch Jerry.

### Constraints
- $1 \le T \le 10$
- $3 \le N \le 10^5$
- $1 \le M \le 2\cdot 10^5$
- $1 \le u, v \le N$
- $u \neq v$
- there is at most one edge between each pair of vertices

### Subtasks
**Subtask #1 (10 points):** $3 \le N \le 30$

**Subtask #2 (30 points):** $3 \le N \le 100$

**Subtask #3 (60 points):** $T \le 5$

### Example Input
```
2
7 6
1 2
1 3
2 4
2 5
3 6
3 7
4 6
1 2
1 3
1 4
2 3
2 4
3 4
```

### Example Output
```
2
4
```

### Explanation
**Example case 2:** Since $G$ is a complete graph, you need enough cats to cover all vertices, so the answer is $K=4$.

### Invalid Example

### Input
```
1
4 4
1 2
2 3
3 4
4 1
```

### Output
```
3
```

### Explanation
Note that this example is not valid, since the graph is a cycle with length $4$ and no additional edge. It was added just for further clarification of the chase.

**Example case 1:** The answer is $K=3$, since three cats can easily corner a mouse by confining it to one vertex, while 2 cats are not enough, because when one cat moves, the mouse can go anywhere without coming into contact with the only stationary cat.
