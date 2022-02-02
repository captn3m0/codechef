---
{"category_name":"easy","problem_code":"EDGEDIR","problem_name":"Directing Edges","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"toonewbie","problem_tester":null,"date_added":"18-11-2018","tags":{"0":"dec18","1":"medium","2":"toonewbie"},"editorial_url":"https://discuss.codechef.com/problems/EDGEDIR","time":{"view_start_date":1545075122,"submit_start_date":1545075122,"visible_start_date":1545075122,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/DEC18/hindi/EDGEDIR.pdf) , [Vietnamese](http://www.codechef.com/download/translated/DEC18/vietnamese/EDGEDIR.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/DEC18/mandarin/EDGEDIR.pdf) , [Russian](http://www.codechef.com/download/translated/DEC18/russian/EDGEDIR.pdf) and [Bengali](http://www.codechef.com/download/translated/DEC18/bengali/EDGEDIR.pdf) as well.

There is only little time left until the New Year! For that reason, Chef decided to make a present for his best friend. He made a connected and undirected simple graph with $N$ vertices and $M$ edges.

Since Chef does not like odd numbers and his friend does not like undirected graphs, Chef decided to direct each edge in one of two possible directions in such a way that the indegrees of all vertices of the resulting graph are even. The indegree of a vertex is the number of edges directed to that vertex from another vertex. As usual, Chef is busy in the kitchen, so you need to help him with directing the edges. Find one possible way to direct them or determine that it is impossible under the given conditions, so that Chef could bake a cake as a present instead.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $M$ lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains two space-separated integers $u_i$ and $v_i$ denoting an edge between vertices $u_i$ and $v_i$.

### Output
For each test case:
- If a valid way to direct the edges does not exist, print a single line containing one integer $-1$.
- Otherwise, print a single line containing $M$ space-separated integers. For each valid $i$, the $i$-th of these integers should be $0$ if edge $i$ is directed from $u_i$ to $v_i$ or $1$ if it is directed from $v_i$ to $u_i$.

### Constraints 
- $1 \le T \le 5$
- $1 \le N, M \le 10^5$
- $1 \le u_i, v_i \le N$ for each valid $i$
- the graph on the input is connected, does not contain multiple edges or self-loops

### Subtasks
**Subtask #1 (30 points):** $1 \le N, M \le 1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
4 4
1 2
1 3
2 4
3 4
3 3
1 2
2 3
1 3
```

### Example Output
```
0 0 1 1
-1
```
