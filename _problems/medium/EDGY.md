---
{"category_name":"medium","problem_code":"EDGY","problem_name":"Edgy","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"watcher","problem_tester":null,"date_added":"27-03-2019","tags":{"0":"april19","1":"coloring","2":"hard","3":"heavy","4":"segment","5":"tree","6":"watcher"},"editorial_url":"https://discuss.codechef.com/problems/EDGY","time":{"view_start_date":1555320602,"submit_start_date":1555320602,"visible_start_date":1555320602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/APRIL19/hindi/EDGY.pdf), [Bengali](http://www.codechef.com/download/translated/APRIL19/bengali/EDGY.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL19/mandarin/EDGY.pdf), [Russian](http://www.codechef.com/download/translated/APRIL19/russian/EDGY.pdf), and [Vietnamese](http://www.codechef.com/download/translated/APRIL19/vietnamese/EDGY.pdf) as well.

You are given a tree with $N$ vertices (numbered $1$ through $N$). Each edge of this tree is coloured either black or white.

A *single-colour subtree* of this tree is a non-empty maximal set $S$ of its edges such that all edges in $S$ have the same colour and each of these edges can be reached from any other edge in $S$ by only traversing edges from $S$. A maximal set is a set to which we cannot add any edge without breaking this property.

You should process $Q$ queries. In each query, you are given two vertices $u$ and $v$. Flip the colour of each edge on the path between $u$ and $v$ (black edges become white and white edges become black) and then compute the number of single-colour subtrees of the tree. The colours of the edges remain flipped in the subsequent queries.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N-1$ lines contains three space-separated integers $a$, $b$ and $c$ denoting that there is an edge between vertices $a$ and $b$ with colour $c$; a black edge is denoted by $c = 0$ and a white edge by $c = 1$.
- The next line contains a single integer $Q$.
- The following $Q$ lines describe queries. Each of these lines contains two space-separated integers $u$ and $v$.

### Output
For each query, print a single line containing one integer — the number of single-colour subtrees.

### Constraints 
- $1 \le T \le 100$
- $1 \le N, Q \le 10^5$
- $1 \le a, b, u, v \le N$
- $0 \le c \le 1$
- the graph described on the input is a tree
- the sum of $N$ over all test cases does not exceed $3 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $3 \cdot 10^5$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
4
1 2 0
2 3 0
3 4 1
3
2 3
1 4
3 4
7
1 2 0
2 3 0
5 4 1
4 3 1
6 3 0
7 6 0
2
2 6
5 3
```

### Example Output
```
2
2
3
3
4
```
