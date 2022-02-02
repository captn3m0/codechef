---
{"category_name":"medium","problem_code":"YASPP","problem_name":"Yet another shortest path problem","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"21-12-2018","tags":{"0":"jtnydv25"},"time":{"view_start_date":1545503400,"submit_start_date":1545503400,"visible_start_date":1545503400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given an undirected graph $G$ with $N$ nodes and $M$ edges. Each edge $e$ has a color $c_e$. Define the cost of a path as the number of times the edge color changes. 

Formally if the path consists of edges $e_1, e_2, \cdots, e_k$ in this order, the cost of the path is the number of $1 \leq i < k$, such that $c_{e_i} \neq c_{e_{i+1}}$.

You are given two nodes $s$ and $t$. Find the minimum cost of a path from $s$ to $t$.  The path is allowed to have cycles.

Please note that there **might** be multiple edges between two nodes but there are no self loops.

###Input:

- The first line contains $N$ and $M$, the number of nodes and edges in the graph respectively.
- Each of the next $M$ lines contain three integers, $u, v, c$ denoting an undirected edge between $u$ and $v$ having color $c$.
- The last line contains two integers, $s$ and $t$.

###Output:
Print the minimum cost (as defined in the statement ) of a path from $s$ to $t$ in the graph.

###Constraints 
- $1 \leq N, M \leq 10^5$
- $1 \leq s, t \leq N$
- $s \neq t$
- $ 1 \leq u, v \leq N$
- $ u \neq v$
- $1 \leq c \leq 10^5$
- There will be at least 1 path from $s$ to $t$

###Sample Input:
```
5 5
1 2 1
2 3 2
3 5 3
2 4 2
4 5 2
1 5
```

###Sample Output:
```
1
```
	
###EXPLANATION:

We choose the path $1 \rightarrow 2 \rightarrow 4 \rightarrow 5$. The sequence of edge colors is $1, 2, 2$. Clearly we change color only once, and that is the answer.
