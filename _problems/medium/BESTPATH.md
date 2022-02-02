---
{"category_name":"medium","problem_code":"BESTPATH","problem_name":"Find Best Path","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"arpa","problem_tester":null,"date_added":"26-12-2018","tags":{"0":"arpa","1":"bellman","2":"ltime67"},"editorial_url":"https://discuss.codechef.com/problems/BESTPATH","time":{"view_start_date":1546103100,"submit_start_date":1546103100,"visible_start_date":1546103100,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTM67TST/mandarin/BESTPATH.pdf) , [Bengali](http://www.codechef.com/download/translated/LTM67TST/bengali/BESTPATH.pdf) , [Hindi](http://www.codechef.com/download/translated/LTM67TST/hindi/BESTPATH.pdf) , [Russian](http://www.codechef.com/download/translated/LTM67TST/russian/BESTPATH.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTM67TST/vietnamese/BESTPATH.pdf) as well.

You are given a directed graph with $N$ vertices (numbered $1$ through $N$) and $M$ weighted edges. For each vertex of the graph, find the minimum cost of a walk that passes through this vertex, or determine that the minimum does not exist, i.e. for any integer $m$, there is a walk with cost smaller than $m$.

**Notes:**
- A walk in a directed graph is a sequence of vertices $v_1, v_2, \ldots, v_K$ for some positive integer $K$, and an associated (possibly empty) sequence of edges $e_1, e_2, \ldots, e_{K-1}$ such that for each valid $i$, edge $e_i$ goes from vertex $v_i$ to vertex $v_{i+1}$.
- The cost of a walk is the sum of weights of edges $e_1, e_2, \ldots, e_{K-1}$; if $K = 1$, the cost is $0$.
- A walk *passes through* vertex $u$ if $u$ belongs to the sequence $v_1, v_2, \ldots, v_K$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- Each of the next $M$ lines contains three space-separated integers $u$, $v$ and $w$ describing an edge from vertex $u$ to vertex $v$ with weight $w$.

### Output
For each test case, print $N$ lines. For each valid $i$, if the minimum cost of a walk through vertex $i$ does not exist, the $i$-th of these lines should contain the string `"INF"`. Otherwise, it should contain a single integer — the minimum cost.

### Constraints
- $1 \le T \le 50$
- $1 \le N, M \le 1,000$
- $|w| \le 10^6$

### Subtasks
**Subtask #1 (30 points):** $1 \le N, M \le 100$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
7 7
1 3 2
5 1 -4
2 5 3
2 6 2
3 5 1
4 6 -3
7 4 -3
```

### Example Output
```
INF
INF
INF
-6
INF
-6
-6
```

### Explanation
**Example case 1:** The graph is depicted below.
![](http://s8.picofile.com/file/8346929976/graph.png)
