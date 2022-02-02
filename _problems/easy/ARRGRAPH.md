---
{"category_name":"easy","problem_code":"ARRGRAPH","problem_name":"Graph on an Array","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"16-10-2018","tags":{"0":"admin2","1":"easy","2":"graph","3":"number","4":"snck1a19","5":"taran_1407","6":"union"},"editorial_url":"https://discuss.codechef.com/problems/ARRGRAPH","time":{"view_start_date":1540092600,"submit_start_date":1540092600,"visible_start_date":1540092600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S191ATST/hindi/ARRGRAPH.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S191ATST/mandarin/ARRGRAPH.pdf), [Russian](http://www.codechef.com/download/translated/S191ATST/russian/ARRGRAPH.pdf), [Vietnamese](http://www.codechef.com/download/translated/S191ATST/vietnamese/ARRGRAPH.pdf) and [Bengali](http://www.codechef.com/download/translated/S191ATST/bengali/ARRGRAPH.pdf) as well.

You are given a sequence of integers $A_1, A_2, \dots, A_N$. You may change any number of its elements (possibly zero), obtaining a new sequence of positive integers $B_1, B_2, \dots, B_N$. Each element of $B$ must be an integer between $2$ and $50$ (both inclusive).

Let's define an undirected graph $G$ with $N$ vertices (numbered $1$ through $N$). For each pair of different vertices $i$ and $j$, there is an edge between $i$ and $j$ if and only if $B_i$ and $B_j$ are coprime.

You should choose the sequence $B$ in such a way that $G$ is a connected graph. The number of elements which need to be changed to obtain $B$ from $A$ should be minimum possible. Find one such sequence $B$ and the minimum required number of changes.

It can be proven that a solution always exists — it is always possible to modify sequence $A$ in such a way that $G$ is connected.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print two lines. The first line should contain a single integer — the minimum required number of changes. The second line should contain $N$ space-separated integers $B_1, B_2, \dots, B_N$ — the modified sequence.

If there are multiple solutions, you may print any one.

### Constraints
- $1 \le T \le 3 \cdot 10^4$
- $1 \le N \le 50$
- $2 \le A_i \le 50$ for each valid $i$

### Subtasks

**Subtask #1 (100 points):** original constraints


### Example Input
```
2
2
2 3
2
2 4
```

### Example Output
```
0
2 3
1
2 3
```

### Explanation
**Example 1**: There is an edge in $G$ between vertices $1$ and $2$. This graph is connected, so there is no need to change any elements.

**Example 2**: There is no edge between vertices $1$ and $2$ since $\mathrm{gcd}(2, 4) \neq 1$. This graph is not connected. We can change element $A_2=4$ to $3$ and make this graph connected.
