---
{"category_name":"easy","problem_code":"DINCPATH","problem_name":"Doubly Increasing Path","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mathecodician","problem_tester":null,"date_added":"13-04-2019","tags":{"0":"cook","1":"cook105","2":"directed","3":"easy","4":"mathecodician","5":"topologicalsort"},"editorial_url":"https://discuss.codechef.com/problems/DINCPATH","time":{"view_start_date":1555871402,"submit_start_date":1555871402,"visible_start_date":1555871402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK105/hindi/DINCPATH.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK105/mandarin/DINCPATH.pdf), [Russian](http://www.codechef.com/download/translated/COOK105/russian/DINCPATH.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK105/vietnamese/DINCPATH.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK105/bengali/DINCPATH.pdf) as well.

You are given an undirected graph with $N$ nodes (numbered $1$ through $N$) and $M$ edges. Each node has a value; let's denote the value of node $i$ by $A_i$. Note that the graph is not necessarily simple.

A *doubly increasing path* is a directed path such that both the values of nodes and differences of values of nodes on this path are strictly increasing. Formally, it is a sequence of nodes $p_1, p_2, p_3, \ldots, p_k$ for some integer (the length of this path) $k \ge 1$ such that $0 \lt A_{p_2} - A_{p_1} \lt A_{p_3} - A_{p_2} \lt \ldots \lt A_{p_k} - A_{p_{k-1}}$ and for each valid $i$, nodes $p_i$ and $p_{i-1}$ are connected by an edge.

You need to find the length of the longest doubly increasing path in the graph.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- Each of the following $M$ lines contains two space-separated integers $u$ and $v$ denoting that nodes $u$ and $v$ are connected by an edge.

### Output
For each test case, print a single line containing one integer — the maximum length of a doubly increasing path.

### Constraints 
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le M \le 10^5$
- $1 \le u, v \le N$
- $|A_i| \le 10^{15}$ for each valid $i$

### Example Input
```
2
5 4
1 2 3 4 5
2 4
1 5
1 3
3 5
5 4
1 2 3 4 5
3 5
1 2
4 5
5 2
```

### Example Output
```
2
3
```

### Explanation
**Example case 1:** Any path with length $2$ from a smaller node to a larger one is doubly increasing. There is no doubly increasing path with length greater than $2$.

**Example case 2:** The path $1 \rightarrow 2 \rightarrow 5$ is doubly increasing.
