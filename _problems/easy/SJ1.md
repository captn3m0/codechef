---
{"category_name":"easy","problem_code":"SJ1","problem_name":"Playing with Numbers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sj1397","problem_tester":null,"date_added":"19-03-2019","tags":{"0":"april19","1":"easy","2":"gcd","3":"number","4":"sj1397"},"editorial_url":"https://discuss.codechef.com/problems/SJ1","time":{"view_start_date":1555320602,"submit_start_date":1555320602,"visible_start_date":1555320602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/APRIL19/hindi/SJ1.pdf), [Bengali](http://www.codechef.com/download/translated/APRIL19/bengali/SJ1.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL19/mandarin/SJ1.pdf), [Russian](http://www.codechef.com/download/translated/APRIL19/russian/SJ1.pdf), and [Vietnamese](http://www.codechef.com/download/translated/APRIL19/vietnamese/SJ1.pdf) as well.

You are given a rooted tree with $N$ nodes (numbered $1$ through $N$); node $1$ is the root. For each valid $i$, the $i$-th node has a value $v_i$ and another parameter $m_i$.

A leaf is a node without sons. Let's denote the number of leaf nodes in the tree by $L$ and their numbers by $l_1, l_2, \ldots, l_L$, in increasing order. Then, for each valid $i$, let's define the *answer* for the leaf $l_i$ in the following way:
- Consider the path from the root to $l_i$. For each node on this path (including the root and this leaf), choose a non-negative integer and multiply the value of this node by it.
- Sum up the resulting values of all nodes on this path.
- The answer $a_i$ for this leaf is defined as the maximum possible remainder of this sum modulo $m_{l_i}$.

Find the answers for all leaves.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the following $N-1$ lines contains two space-separated integers $x$ and $y$ denoting that nodes $x$ and $y$ are connected by an edge.
- The next line contains $N$ space-separated integers $v_1, v_2, \ldots, v_N$.
- The last line contains $N$ space-separated integers $m_1, m_2, \ldots, m_N$.

### Output
For each test case, print a single line containing $L$ space-separated integers $a_1, a_2, \ldots, a_L$.

### Constraints 
- $1 \le T \le 8$
- $2 \le N \le 10^5$
- $1 \le x, y \le N$
- $1 \le v_i \le 10^{18}$ for each valid $i$
- $1 \le m_i \le 10^{18}$ for each valid $i$
- the graph described on the input is a tree

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
1
5
1 2
2 5
1 3
3 4
2 3 4 6 7
1 2 3 2 10
```

### Example Output
```
0 9
```

### Explanation
**Example case 1:** There are only two leaves, $l_1 = 4$ and $l_2 = 5$. The answers for them are $a_1 = 0$ and $a_2 = 9$.
