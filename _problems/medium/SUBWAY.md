---
{"category_name":"medium","problem_code":"SUBWAY","problem_name":"Subway Ride","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"lzr010506","problem_tester":null,"date_added":"28-06-2018","tags":{"0":"july18","1":"lzr010506","2":"medium"},"editorial_url":"https://discuss.codechef.com/problems/SUBWAY","time":{"view_start_date":1531733410,"submit_start_date":1531733410,"visible_start_date":1531733410,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/mandarin/SUBWAY.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/russian/SUBWAY.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/vietnamese/SUBWAY.pdf">Vietnamese</a> as well.</h3>



Being a newcomer to Computopia, Chef is confused by the countless subway lines in the city. Help him!

You are given an undirected graph with $N$ vertices and $M$ edges. There are no self-loops and no simple cycles that contain more than 2 edges in the graph (i.e. if we replaced each set of multiple edges connecting the same pair of vertices by one edge, we would obtain a tree). Each edge also has a colour.

Consider a simple path with length $K$ in the graph that passes through edges with colours $A_1, A_2, \dots, A_K$ in this order. The *cost* of this path is defined as $(A_1 \neq A_2) + (A_2 \neq A_3) + \dots + (A_{K-1} \neq A_K)$, where the boolean value `true` is interpreted as the integer $1$ and `false` is interpreted as $0$. In other words, the cost of a simple path is the number of pairs of neighbouring (consecutive) edges on this path with different colours. The cost of a path with length $0$ is defined to be $0$.

You need to answer $Q$ queries. In each query, you are given vertices $u$ and $v$; you should find the maximum possible cost of some simple path connecting them.

Note that a simple path may not visit a vertex more than once.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- Each of the next $M$ lines contains three space-separated integers $u$, $v$ and $w$ denoting an edge between vertices $u$ and $v$ with colour $w$.
- The next line contains an integer $Q$.
- Each of the next $Q$ lines contains two space-separated integers $u$ and $v$ describing a query.

### Output
For each query, print a single line containing one integer — the maximum cost of a simple path.

### Constraints 
- $1 \le N, Q \le 500,000$
- $1 \le M \le 1,000,000$
- $1 \le u, v \le N$
- for each edge, $u \neq v$
- $1 \le w \le M$

### Subtasks
**Subtask #1 (20 points):**
- $1 \le N, Q \le 10$
- $1 \le M \le 100$

**Subtask #2 (20 points):**
- $1 \le N, Q \le 500$
- $1 \le M \le 10,000$

**Subtask #3 (20 points):**
- $1 \le N, Q \le 5,000$
- $1 \le M \le 100,000$

**Subtask #4 (20 points):**
- $1 \le N, Q \le 100,000$
- $1 \le M \le 300,000$

**Subtask #5 (20 points):** original constraints

### Example Input
```
8 10
1 2 1
1 2 2
1 3 2
1 3 3
2 4 2
2 5 1
3 6 3
3 7 1
3 8 1
3 8 3
5
2 3
5 6
4 6
4 8
4 7
```

### Example Output
```
1
2
3
3
3
```
