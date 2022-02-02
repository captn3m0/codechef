---
{"category_name":"easy","problem_code":"SUBREM","problem_name":"Subtree Removal","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ashishgup","problem_tester":null,"date_added":"25-03-2019","tags":{"0":"april19","1":"ashishgup","2":"dfs","3":"dynamic","4":"simple","5":"tree"},"editorial_url":"https://discuss.codechef.com/problems/SUBREM","time":{"view_start_date":1555320602,"submit_start_date":1555320602,"visible_start_date":1555320602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/APRIL19/hindi/SUBREM.pdf), [Bengali](http://www.codechef.com/download/translated/APRIL19/bengali/SUBREM.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL19/mandarin/SUBREM.pdf), [Russian](http://www.codechef.com/download/translated/APRIL19/russian/SUBREM.pdf), and [Vietnamese](http://www.codechef.com/download/translated/APRIL19/vietnamese/SUBREM.pdf) as well.

You are given a rooted tree with $N$ nodes (numbered $1$ through $N$); node $1$ is the root. Each node has a value; let's denote the value of node $i$ by $A_i$.

You may perform the following operation any number of times (including zero): choose any node which still exists in the tree and remove the whole subtree of this node including itself.

Let's define the *profit* as the sum of values of all nodes which currently exist in the tree minus $X \cdot k$, where $k$ denotes the number of times this operation was performed. Find the maximum possible profit.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $X$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that nodes $u$ and $v$ are connected by an edge.

### Output
For each test case, print a single line containing one integer — the maximum profit.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le X \le 10^9$
- $1 \le u, v \le N$
- $|A_i| \le 10^9$ for each valid $i$
- the graph described on the input is a tree

### Subtasks
**Subtask #1 (30 points):** $1 \le N \le 1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
3 5
1 -5 -10
1 2
2 3
```

### Example Output
```
-4
```
