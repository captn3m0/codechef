---
{"category_name":"medium","problem_code":"LONCYC","problem_name":"Lonely Cycles","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sanroylozan","problem_tester":null,"date_added":"27-07-2018","tags":{"0":"aug18","1":"cycle","2":"dfs","3":"likecs","4":"medium","5":"sanroylozan","6":"sanroylozan"},"editorial_url":"https://discuss.codechef.com/problems/LONCYC","time":{"view_start_date":1534152605,"submit_start_date":1534152605,"visible_start_date":1534152605,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/AUG18/hindi/LONCYC.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/AUG18/mandarin/LONCYC.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/AUG18/russian/LONCYC.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/AUG18/vietnamese/LONCYC.pdf" target="_blank">Vietnamese</a> as well.</h3>

The structure of the company ShareChat can be described by a simple graph (without multiedges and self-loops) with $N$ vertices numbered $1$ through $N$ and $M$ edges numbered $1$ through $M$. Each vertex of this graph is part of at most one simple cycle.

For each edge, you should find the number of simple paths that contain this edge and only contain at most one edge which belongs to a cycle.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $u$ and $v$, denoting the vertices connected by edge $i$.

### Output
For each test case, print $M$ lines. For each $i$ ($1 \le i \le M$), the $i$-th of these lines should contain a single integer — the number of paths for edge $i$.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 2 \cdot 10^5$
- $1 \le u, v \le N$
- the sum of $N+M$ for all test cases does not exceed $5 \cdot 10^6$

### Subtasks
**Subtask #1 (20 points):**
- the sum of answers for all edges in all test cases is smaller than $150 \cdot 10^6$
- the sum of $N+M$ for all test cases does not exceed $5 \cdot 10^5$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
7 7
1 2
2 3
3 4
2 5
3 5
5 6
6 7
3 3
1 2
2 3
3 1
```

### Example Output
```
6
4
6
6
6
10
6
1
1
1
```
