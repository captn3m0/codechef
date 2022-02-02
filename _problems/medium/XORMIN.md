---
{"category_name":"medium","problem_code":"XORMIN","problem_name":"Mininum XOR over Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"evilbuggy","problem_tester":null,"date_added":"12-03-2019","tags":{"0":"april19","1":"data","2":"evilbuggy","3":"medium","4":"segment","5":"trie"},"editorial_url":"https://discuss.codechef.com/problems/XORMIN","time":{"view_start_date":1555320602,"submit_start_date":1555320602,"visible_start_date":1555320602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/APRIL19/hindi/XORMIN.pdf), [Bengali](http://www.codechef.com/download/translated/APRIL19/bengali/XORMIN.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL19/mandarin/XORMIN.pdf), [Russian](http://www.codechef.com/download/translated/APRIL19/russian/XORMIN.pdf), and [Vietnamese](http://www.codechef.com/download/translated/APRIL19/vietnamese/XORMIN.pdf) as well.

You are given a rooted tree with $N$ vertices (numbered $1$ through $N$); vertex $1$ is the root. Each vertex has a weight; let's denote the weight of vertex $i$ by $w_i$.

You should answer $Q$ queries. The queries have to be processed online, i.e. to obtain each query, you need the answer to the previous query.

In each query, you are given a vertex $v$ and a parameter $k$. For each vertex $u$ in the subtree of $v$ (including $v$), consider the value $w_u \oplus k$ ($\oplus$ denotes the bitwise XOR operation). The answer to this query is the maximum of these values and the smallest $u$ such that vertex $u$ is in the subtree of vertex $v$ and $w_u \oplus k$ is equal to this maximum.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $w_1, w_2, \ldots, w_N$.
- Each of the next $N-1$ lines contains two space-separated integers $x$ and $y$ denoting that there is an edge between nodes $x$ and $y$.
- The next $Q$ lines describe queries. Each of these lines contains two space-separated integers $a$ and $b$. The parameters $v$ and $k$ can be obtained in the following way: let's denote the value and vertex from the answer to the previous query by $x_l$ and $v_l$ respectively ($x_l = v_l = 0$ if this is the first query); then, $v = a \oplus v_l$ and $k = b \oplus x_l$.

### Output
For each query, print a single line containing two space-separated integers — the answer to the query, i.e. the number of the vertex for which we get the maximum value and the maximum value.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 2 \cdot 10^5$
- $1 \le Q \le 10^6$
- $1 \le x, y, v \le N$
- $1 \le w_i \lt 2^{20}$ for each valid $i$
- $1 \le k \lt 2^{20}$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (10 points):**
- the sum of $N$ over all test cases does not exceed $5,000$
- the sum of $Q$ over all test cases does not exceed $5,000$

**Subtask #2 (15 points):**
- the sum of $N$ over all test cases does not exceed $2,000$
- the sum of $Q$ over all test cases does not exceed $10^6$

**Subtask #3 (75 points):** original constraints

### Example Input
```
1
10 5
9 17 93 16 3 61 23 11 2 1
1 2
2 5
5 8
1 3
1 4
3 6
3 7
6 9
6 10
4 14
7 123
5 103
9 32
5 118
```

### Example Output
```
4 30
7 114
8 30
3 99
6 40
```
