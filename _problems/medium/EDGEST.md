---
{"category_name":"medium","problem_code":"EDGEST","problem_name":"Edges in Spanning Trees","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"altruist_","problem_tester":null,"date_added":"1-04-2018","tags":{"0":"altruist_","1":"heavy","2":"may18","3":"segment"},"editorial_url":"https://discuss.codechef.com/problems/EDGEST","time":{"view_start_date":1526290200,"submit_start_date":1526290200,"visible_start_date":1526290200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/MAY18/mandarin/EDGEST.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/MAY18/russian/EDGEST.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/MAY18/vietnamese/EDGEST.pdf" target="_blank">Vietnamese</a> as well.</h3>

You are given two spanning trees $T_1$ and $T_2$ on the same set of $N$ vertices (numbered $1$ through $N$). For each edge $e_1$ in $T_1$, you have to calculate the number of edges $e_2 \in T_2$ which satisfy the following conditions:
- $T_1 - e_1 + e_2$ (the graph formed by removing the edge $e_1$ from $T_1$ and adding the edge $e_2$) is a spanning tree
- $T_2 - e_2 + e_1$ is also a spanning tree

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge in $T_1$ between vertices $u$ and $v$.
- The following $N-1$ lines describe the edges of $T_2$ in the same format.

### Output
For each test case, print $N-1$ space-separated integers — the number of valid edges $e_2$ for each edge $e_1 \in T_1$ (in the order in which they are given on the input).

### Constraints 
- $1 \le T \le 10$
- $2 \le N \le 2 \cdot 10^5$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (20 points):** the sum of $N$ over all test cases does not exceed $10^4$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
4
1 2
1 3
1 4
1 2
2 3
3 4
```

### Example Output
```
1 1 1
```
