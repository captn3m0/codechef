---
{"category_name":"medium","problem_code":"TREEWALK","problem_name":"Walk on Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"4-08-2018","tags":{"0":"hard","1":"jtnydv25","2":"math","3":"oct18","4":"recurrences"},"editorial_url":"https://discuss.codechef.com/problems/TREEWALK","time":{"view_start_date":1540027803,"submit_start_date":1540027803,"visible_start_date":1540027803,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/OCT18/hindi/TREEWALK.pdf) ,[Bengali](http://www.codechef.com/download/translated/OCT18/bengali/TREEWALK.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/OCT18/mandarin/TREEWALK.pdf) , [Russian](http://www.codechef.com/download/translated/OCT18/russian/TREEWALK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT18/vietnamese/TREEWALK.pdf) as well.


You are given a tree with $N$ nodes (numbered $1$ through $N$). The tree is rooted at node $r$. For each node, find the number of walks with length $K$ from the root to this node modulo $998244353$.

A *walk* from node $a$ to node $b$ with length $K$ is defined as a sequence of nodes $(u_1, u_2, \dots, u_{K+1})$, where $u_1 = a, u_{K+1} = b$ and for each valid $i$, there is an edge between nodes $u_i$ and $u_{i+1}$. Two walks $(u_1, u_2, \dots, u_{K+1})$ and $(v_1, v_2, \dots, v_{K+1})$ are considered different if there is a valid index $i$ such that $u_i \neq v_i$.

### Input
- The first line of the input contains a single integer $N$ denoting the number of nodes in the tree.
- Each of the next $N-1$ lines contains two space-separated integers $x$ and $y$ denoting an edge between nodes $x$ and $y$.
- The last line contains two space-separated integers $r$ and $K$.

### Output
Print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of them should denote the number of walks from node $r$ to node $i$ with length $K$, modulo $998244353$.

### Constraints 
- $1 \le N \le 3,000$
- $1 \le r \le N$
- $0 \le K \le 10^9$

### Subtasks
**Subtask #1 (10 points):** $1 \le N \le 200$

**Subtask #2 (10 points):** $0 \le K \le 3,000$

**Subtask #3 (80 points):** original constraints

### Example Input
```
5
1 2
1 3
1 4
4 5
3 4
```

### Example Output
```
0 3 3 4 0
```

### Explanation
There are three walks from node $3$ to itself: $(3, 1, 2, 1, 3)$, $(3, 1, 3, 1, 3)$ and $(3, 1, 4, 1, 3)$.
