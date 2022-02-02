---
{"category_name":"hard","problem_code":"TBGRAPH","problem_name":"Graph on a Table","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":null,"date_added":"23-06-2018","tags":{"0":"dsu","1":"dynamic","2":"hard","3":"isaf27","4":"isaf27","5":"likecs","6":"ltime61"},"editorial_url":"https://discuss.codechef.com/problems/TBGRAPH","time":{"view_start_date":1530378005,"submit_start_date":1530378005,"visible_start_date":1530378005,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME61/mandarin/TBGRAPH.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME61/russian/TBGRAPH.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME61/vietnamese/TBGRAPH.pdf">Vietnamese</a> as well.</h3>


You are given a table with $N$ rows and $M$ columns. Let's denote the cell in row $r$ and column $c$ by $(r, c)$. You are also given $Q$ rectangles in this table.

Consider a directed acyclic graph such that each vertex corresponds to a cell of the table (so there are $N \cdot M$ vertices) and there is an edge from cell $(r_1, c_1)$ to cell $(r_2, c_2)$ if and only if:
- $r_1 < r_2, c_1 < c_2$
- there is a rectangle containing cells $(r_1, c_1)$ and $(r_2, c_2)$

Let's define the length of a path as the number of vertices it contains. Find the length of the longest path and the number of different paths with maximum length in this graph. Two paths are different if their lengths are different or there is a cell which is visited in one path, but not in the other. Since the number of paths can be large, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $Q$.
- Each of the following $Q$ lines contains four space-separated integers $r_1$, $c_1$, $r_2$ and $c_2$ describing a rectangle which contains all cells $(r, c)$ such that $r_1 \le r \le r_2$ and $c_1 \le c \le c_2$.

### Output
For each test case, print a single line containing two space-separated integers — the length of the longest path in the graph and the number of paths with this length modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N, M \le 2,000$
- $1 \le Q \le 5 \cdot 10^5$
- $1 \le r_1 \le r_2 \le N$
- $1 \le c_1 \le c_2 \le M$
- the sum of $N \cdot M$ for all test cases does not exceed $10^7$
- the sum of $Q$ for all test cases does not exceed $5 \cdot 10^5$

### Subtasks

**Subtask #1 (5 points):**
- $1 \le T \le 100$
- $1 \le N, M, Q \le 10$

**Subtask #2 (10 points):**
- $1 \le T \le 100$
- $1 \le N, M, Q \le 100$

**Subtask #3 (20 points):**
- the sum of $Q$ does not exceed $2 \cdot 10^5$
- the sum of $N \cdot M$ does not exceed $4 \cdot 10^5$

**Subtask #4 (65 points):** original constraints

### Example Input
```
2
3 4 2
1 1 2 2
2 2 3 4
3 3 2
1 1 3 3
1 1 3 3
```

### Example Output
```
3 2
3 1
```

### Explanation
**Example case 1:** There are four edges in this graph: $(1, 1) \rightarrow (2, 2)$ due to the first rectangle and $(2, 2) \rightarrow (3, 3)$, $(2, 2) \rightarrow (3, 4)$, $(2, 3) \rightarrow (3, 4)$ due to the second rectangle.

There are no paths with lengths greater than $3$ and two paths with length $3$: $(1, 1) \rightarrow (2, 2) \rightarrow (3, 3)$ and $(1, 1) \rightarrow (2, 2) \rightarrow (3, 4)$.
