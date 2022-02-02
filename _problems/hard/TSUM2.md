---
{"category_name":"hard","problem_code":"TSUM2","problem_name":"Sum on Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"ratingoverflow","problem_tester":null,"date_added":"12-05-2018","tags":{"0":"centroid","1":"convex","2":"geometry","3":"hard","4":"lines","5":"ltime60","6":"ratingoverflow"},"editorial_url":"https://discuss.codechef.com/problems/TSUM2","time":{"view_start_date":1527354000,"submit_start_date":1527354000,"visible_start_date":1527354000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME60/mandarin/TSUM2.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME60/vietnamese/TSUM2.pdf">Vietnamese</a> as well.</h3>

You are given a tree with $N$ nodes (numbered $1$ through $N$) and $N-1$ edges. Each node has a value; let's denote the value of node $x$ by $W_x$.

Next, let's define the value of a simple path $v_1, v_2, \dots, v_k$ as $\sum_{i=1}^k i \cdot W_{v_i}$. A simple path in a tree is a sequence of nodes $v_1, v_2, \dots, v_k$ such that:
- $k \ge 1$
- there is an edge between nodes $v_i$ and $v_{i+1}$ for each $i$ ($1 \le i \le k-1$)
- $v_i \neq v_j$ for each $i, j$ ($1 \le i, j \le k$) such that $i \neq j$

You should find the maximum of values of all simple paths in the given tree.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $W_1, W_2, \dots, W_N$.
- Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between nodes $u$ and $v$.

### Output
For each test case, print a single line containing one integer — the maximum value of a simple path.

### Constraints
- $2 \le N \le 50,000$
- the sum of $N$ over all test cases does not exceed $400,000$
- $1 \le u, v \le N$
- $u \neq v$
- $|W_i| \le 1,000$ for each valid $i$
- the graph described in the input is a tree

### Subtasks
**Subtask #1 (30 points):** the tree is a binary tree rooted at node 1

**Subtask #2 (30 points):**
- the length (number of nodes) of any simple path in the tree is at most $200$
- the sum of $N$ over all test cases does not exceed $100,000$

**Subtask #3 (40 points):** original constraints

### Example Input
```
3
5
1 2 3 4 5
1 2
2 3
3 4
3 5
2
-1 -1
1 2
3
1 1000 -30
1 3
2 3
```

### Example Output
```
34
-1
2941
```
