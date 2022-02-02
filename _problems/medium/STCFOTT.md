---
{"category_name":"medium","problem_code":"STCFOTT","problem_name":"Selinas the Chefs Falling on the Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":20,"source_sizelimit":50000,"problem_author":"dolabmoon","problem_tester":null,"date_added":"16-07-2018","tags":{"0":"dolabmoon","1":"expected","2":"inverse","3":"matrix","4":"medium","5":"sept18"},"editorial_url":"https://discuss.codechef.com/problems/STCFOTT","time":{"view_start_date":1537176602,"submit_start_date":1537176602,"visible_start_date":1537176602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/SEPT18/hindi/STCFOTT.pdf) ,[Bengali](http://www.codechef.com/download/translated/SEPT18/bengali/STCFOTT.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/SEPT18/mandarin/STCFOTT.pdf) , [Russian](http://www.codechef.com/download/translated/SEPT18/russian/STCFOTT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT18/vietnamese/STCFOTT.pdf) as well.


You are given a tree with $N$ nodes numbered $1$ through $N$, rooted at node $1$. There are many really good ingredients on this tree, so $M$ chefs Selinas are going to pick them all up. For each $i$ ($1 \le i \le M$), the $i$-th Selina will start falling from the root in the $t_i$-th second.

Obviously, Selinas can only move in two directions — from each node, a Selina can *fall* to one of its children or *bounce* to its parent. When bouncing, there is only one path to take, but when falling, the Selina will choose the node to fall down to uniformly randomly among all children of the current node. One move in either direction takes one second.

Each Selina only changes her direction (from bouncing to falling or vice versa) when she cannot keep moving in the current direction without leaving the tree or hitting another Selina, that is, when one of the following happens:
- reaching a leaf when falling
- reaching the root when bouncing
- meeting another Selina that's moving in the opposite direction

At the $Q$-th second, we would like to know the expected number of Selinas that have passed through each node so far. Formally, let's denote the expected number of Selinas in node $i$ at the $j$-th second by $E_{i, j}$; for each node $i$, you should find the sum of $E_{i, j}$ over all seconds $j$ between $1$ and $Q$ (inclusive). Compute these numbers modulo $998244353$.

### Input
- The first line of the input contains a single integer $N$.
- Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between nodes $u$ and $v$.
- The next line contains a single integer $M$.
- The next line contains $M$ space-separated integers $t_1, t_2, \dots, t_M$ denoting the times when the Selinas start to fall from the root.
- The last line contains a single integer $Q$.

### Output
Print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should denote the sum of expected numbers of Selinas that have been in the $i$-th node in seconds $1$ through $Q$ (modulo $998244353$).

### Constraints
- $1 \le N \le 240$
- $1 \le M \le 240$
- $1 \le Q \le 1,020,000$
- $1 \le u, v \le N$
- $1 \le t_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (50 points):** the tree is generated randomly

**Subtask #2 (10 points):** for each valid $i$, the parent of node $i$ is node $(i-1)$

**Subtask #3 (10 points):** the parent of each non-root node is the root

**Subtask #4 (30 points):** original constraints

### Example Input
```
3
1 2
1 3
1
1
2
```

### Example Output
```
1 499122177 499122177
```

### Explanation
On second $1$, the only Selina can only be in the node $1$. Then, on second $2$, this Selina must fall either to node $2$ or to node $3$, with probability $1/2$ each. Overall, the expected number of Selinas that have been in node $1$ in seconds $1$ through $2$ is $1$ and the expected number for nodes $2$ and $3$ is $1/2 \equiv 499122177$ modulo $998244353$.
