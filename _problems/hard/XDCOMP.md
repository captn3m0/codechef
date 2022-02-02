---
{"category_name":"hard","problem_code":"XDCOMP","problem_name":"Xor Decomposition","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"stevens","problem_tester":null,"date_added":"24-01-2019","tags":{"0":"combinatorics","1":"feb19","2":"medium","3":"observations","4":"stevens","5":"tree"},"editorial_url":"https://discuss.codechef.com/problems/XDCOMP","time":{"view_start_date":1550050202,"submit_start_date":1550050202,"visible_start_date":1550050202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/FEB19TST/hindi/XDCOMP.pdf), [Bengali](http://www.codechef.com/download/translated/FEB19TST/bengali/XDCOMP.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/FEB19TST/mandarin/XDCOMP.pdf), [Russian](http://www.codechef.com/download/translated/FEB19TST/russian/XDCOMP.pdf), and [Vietnamese](http://www.codechef.com/download/translated/FEB19TST/vietnamese/XDCOMP.pdf) as well.

Chef has a tree with $N$ nodes (numbered $1$ through $N$) and a non-negative integer $x$. The nodes of the tree have non-negative integer weights; let's denote the weight of node $i$ by $a_i$.

Next, let's define the *XOR value* of a tree as the bitwise XOR of weights of all its nodes.

Chef wants to remove zero or more edges from his tree in such a way that each individual tree in the forest formed by removing these edges has XOR value $x$. Help him compute the number of ways to remove a set of edges such that this condition is satisfied. Since the answer may be large, compute it modulo $10^9+7$.

### Input
- The first line of the input contains two space-separated integers $N$ and $x$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between nodes $u$ and $v$ in Chef's tree.

### Output
Print a single line containing one integer ― the number of ways to remove edges, modulo $10^9+7$.

### Constraints 
- $1 \le N \le 10^5$
- $0 \le x \le 10^9$
- $0 \le a_i \le 10^9$ for each valid $i$
- $1 \le u, v \le N$

### Subtasks
**Subtask #1 (10 points):** $N \le 100$

**Subtask #2 (20 points):** $N \le 5,000$

**Subtask #3 (70 points):** original constraints

### Example Input
```
7 1
1 0 1 0 1 0 1 
1 2
1 3
2 4
2 5
3 6
3 7
```

### Example Output
```
5
```

### Explanation
There are five valid ways to remove edges, splitting the tree into subtrees on nodes:
- [1, 2, 3, 4, 5, 6] and [7] by removing the edge (3-7)
- [1, 2, 3, 4, 6, 7] and [5] by removing the edge (2-5)
- [2, 4, 5] and [1, 3, 6, 7] by removing the edge (1-2)
- [2, 4, 5], [1], [3,6] and [7] by removing edges (1-2), (1-3) and (3-7)
- [1, 2, 4], [5], [3,6] and [7] by removing edges (2-5), (1-3) and (3-7)
