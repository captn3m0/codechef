---
{"category_name":"medium","problem_code":"GRAPHAND","problem_name":"AND on Graph","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"15-12-2018","tags":{"0":"jtnydv25"},"time":{"view_start_date":1544985000,"submit_start_date":1544985000,"visible_start_date":1544985000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given an undirected graph with $n$ nodes and $m$ edges. The nodes are numbered from 1 to $n$. Each edge $e$ of the graph has two integers associated with it, cost($c_e$) and value($v_e$). You are given three integers $s$, $t$, and $K$. 

The cost of a walk is the sum of costs of all the edges in the walk. Find the minimum cost of a walk from $s$ to $t$ ($s \neq t$ ), such that the bitwise AND of values for all edges in the walk is atleast $K$. If no such walk exists, print $-1$.

Note that the walk doesn't need to be a simple path. Any vertex or edge can come more than once in the walk you choose. If an edge $e$ comes $p$ times, we add its cost $p$ times to the cost of the walk.

Formally, a walk from $s$ to $t$ is a sequence of vertices and edges $u_1, e_1, u_2, e_2, \cdots, u_{l-1}, e_{l-1}, u_{l} $, where $e_i$ is the edge between vertices $u_{i}$ and $u_{i+1}$, $u_1 = s$ and $u_l = t$.

We need to minimize $\displaystyle \sum_{i=1}^{l-1} c_{e_i} $, while satisfying $ v_{e_1} \& v_{e_2} \& \cdots \& v_{e_{l-1}} \geq K$, where $\&$ denotes the bitwise AND operator.

###Input:

- First line will contain $n$ and $m$
- Each of the next $m$ lines will contain the description of an edge in the graph. It will consist of 4 integers $a, b, c, v$ denoting the endpoints, cost and val of the edge respectively.
- The last line contains $s, t, K$, as described in the statement.

###Output:
Print the minimum cost of a walk from $s$ to $t$, such that the bitwise AND of values for all edges in the walk is atleast $K$. Print $-1$ if no such walk exists.

###Constraints 
- $1 \leq n, m \leq 10^5$
- $1 \leq c_i, v_i \leq 10^9$
- $1 \le s, t \leq n$
- $s \neq t$
- $ 1 \le K \le 10^9$
- The graph contains no self loops and multiedges.

###Sample Input:

```
3 3
1 2 2 3
2 3 1 7
1 3 2 2
1 3 3
```

###Sample Output:
```
3
```
	
###Explanation:

Suppose we choose the edge between 1 and 3 and say that's our walk. Its cost is 2. But this is not a valid walk, because the AND of the edge values is 2. We need it to be $\ge$ 3.

So, instead suppose we choose the walk from $1$ to $3$ passing through $2$. The bitwise AND is 3 & 7 = 3, and cost is 1 + 2 = 3. This is a valid walk, and you can check that you cannot reduce the cost any further. Hence 3 is the answer.