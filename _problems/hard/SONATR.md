---
{"category_name":"hard","problem_code":"SONATR","problem_name":"Sonya and Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"smelskiy","problem_tester":null,"date_added":"31-01-2019","tags":{"0":"smelskiy"},"time":{"view_start_date":1552469402,"submit_start_date":1552469402,"visible_start_date":1552469402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAR19TST/hindi/SONATR.pdf), [Bengali](http://www.codechef.com/download/translated/MAR19TST/bengali/SONATR.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAR19TST/mandarin/SONATR.pdf), [Russian](http://www.codechef.com/download/translated/MAR19TST/russian/SONATR.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAR19TST/vietnamese/SONATR.pdf) as well.

Sonya is a very smart girl, so Danya wants to give her something interesting. He thought about it for a long time and decided that the best gift would be a tree. This tree has $N$ vertices (numbered $1$ through $N$); of course, it is a connected graph with $N-1$ edges connecting those vertices.

Danya realised that an ordinary tree probably would not surprise Sonya. Therefore, he decided to place integers $0$ through $N-1$ into the tree in such a way that each vertex contains exactly one integer and each of these integers appears in exactly one vertex. For each valid $i$, let's denote the integer placed in vertex $i$ by $p_i$.

The *beauty* of a tree is defined as the number of beautiful simple undirected paths in it. A path with length $L$ (containing $L$ vertices; possibly $L=1$) is *beautiful* if for each $i$ ($0 \le i \le L-1$), there is a vertex $v$ on this path such that $p_v = i$.

Danya doubts that this is the most beautiful tree, so he wants to perform $M$ operations. In each operation, he selects two (not necessarily distinct) vertices $u$ and $v$ and swaps $p_u$ with $p_v$. After each operation, he would like to know the current beauty of the tree. Please help him compute it so that he can decide when the tree will be the best gift for Sonya.

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $p_1, p_2, \ldots, p_N$ denoting the integers initially placed in the tree.
- Each of the next $N - 1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between vertices $u$ and $v$.
- The next line contains a single integer $M$.
- Each of the next $M$ lines contains two space-separated integers $u$ and $v$ describing one operation.

### Output
For each operation, print a single line containing one integer -  the beauty of the tree after this operation.

### Constraints 
- $1 \le N, M \le 5 \cdot 10^5$
- $0 \le p_i \le N - 1$ for each valid $i$
- $1 \le u, v \le N$

### Subtasks
**Subtask #1 (33 points):** Degree of each vertex is at most 2

**Subtask #2 (67 points):** original constraints 

### Example Input
```
5 
2 0 1 3 4
2 4
1 2
5 2
1 3
4
2 1
5 5
3 4
3 2
```

### Example Output
```
4
4
3
2
```
