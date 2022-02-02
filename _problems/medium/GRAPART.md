---
{"category_name":"medium","problem_code":"GRAPART","problem_name":"Partition the Graph","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"7-12-2018","tags":{"0":"admin2","1":"constructive","2":"jan19","3":"medium","4":"observations","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/GRAPART","time":{"view_start_date":1547458202,"submit_start_date":1547458202,"visible_start_date":1547458202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problem statements in [Hindi](http://www.codechef.com/download/translated/JAN19/hindi/GRAPART.pdf), [Bengali](http://www.codechef.com/download/translated/JAN19/bengali/GRAPART.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/JAN19/mandarin/GRAPART.pdf), [Russian](http://www.codechef.com/download/translated/JAN19/russian/GRAPART.pdf), and [Vietnamese](http://www.codechef.com/download/translated/JAN19/vietnamese/GRAPART.pdf) as well.

You are given a tree $G$ with $N$ vertices numbered $1$ through $N$. It is guaranteed that $N$ is even.

For a positive integer $k$, let's define a graph $H_k$ as follows:
- $H_k$ has $N$ vertices numbered $1$ through $N$.
- For each edge $(u, v)$ in $G$, there is an edge $(u, v)$ in $H_k$ too.
- For each pair of vertices $(u, v)$ in $G$ such that their distance is at most $k$, there is an edge $(u, v)$ in $H_k$.

We call a graph *good* if its vertices can be split into two sets $U$ and $V$ satisfying the following:
- Each vertex appears in exactly one set; $|U| = |V| = N/2$.
- Let $E$ be the set of edges $(u, v)$ such that $u \in U$ and $v \in V$. It is possible to reach any vertex from any other vertex using only the edges in $E$.

Your task is to find the minimum value of $k$ such that $H_k$ is a good graph, and one possible way to partition vertices of this graph $H_k$ into the sets $U$ and $V$ defined above. If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between vertices $u$ and $v$ in $G$.

### Output
- For each test case, print three lines.
- The first line should contain a single integer — the minimum value of $k$.
- The second line should contain $N/2$ space-separated integers — the numbers of vertices in your set $U$.
- The third line should also contain $N/2$ space-separated integers — the numbers of vertices in your set $V$.

### Constraints
- $1 \le T \le 100$
- $2 \le N \le 10,000$
- $N$ is even
- $1 \le u, v \le N$
- the graph on the input is a tree

### Subtasks
- 25 points: $1 \leq N  \leq 200$
- 75 points: no extra constraints

### Example Input
```
2
2
1 2
6
1 2
1 3
3 4
3 5
3 6
```

### Example Output
```
1
1
2
2
1 3 5
2 4 6
```
