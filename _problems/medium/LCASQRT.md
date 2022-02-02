---
{"category_name":"medium","problem_code":"LCASQRT","problem_name":"Square Root of LCA Convolution","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/8DfMco0nynA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 5","source_sizelimit":50000,"problem_author":"isaf27","problem_tester":"","date_added":"29-11-2020","tags":{"0":"dec20","1":"depth","2":"isaf27","3":"medium","4":"number","5":"quadratic","6":"subtree","7":"tonelli","8":"trees"},"problem_difficulty_level":"Medium","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/LCASQRT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LCASQRT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC20/hindi/LCASQRT.pdf), [Bengali](https://www.codechef.com/download/translated/DEC20/bengali/LCASQRT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC20/mandarin/LCASQRT.pdf), [Russian](https://www.codechef.com/download/translated/DEC20/russian/LCASQRT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC20/vietnamese/LCASQRT.pdf) as well.

You are given a rooted tree with $N$ vertices (numbered $1$ through $N$) and a prime number $P$. Vertex $1$ is the root of the tree and for each $v$ ($2 \le v \le N$), the parent of vertex $v$ is $p_v$ ($p_v \lt v$).

A vertex $s$ is an ancestor of another vertex $f$ if $s$ lies on the path between $1$ and $f$ (in particular, $f$ is its own ancestor). For two vertices $u$ and $v$, let's define $\mathrm{LCA}(u, v)$ as the vertex $s$ with the largest number which is an ancestor of both $u$ and $v$. Similarly, for two vertices $v$ and $s$, let $\mathbb{L}_{v,s}$ be the set of all vertices $u$ such that $s = \mathrm{LCA}(u, v)$.

Let's define a set $\mathbb{A}_P$ containing all sequences (indexed from $1$) with length $N$ whose elements are integers between $0$ and $P-1$ inclusive. For two sequences $a, b \in \mathbb{A}_P$, let's define an operation *LCA-convolution* as a sequence $c = a * b$ such that for each valid $x$, $$c_x = \left(\sum\limits_{i=1}^N \sum\limits_{j \in \mathbb{L}_{i,x}} a_i b_j\right) \bmod P \,.$$

You are also given some sequence $c \in \mathbb{A}_P$. You have two tasks:
- Find the number of sequences $a \in \mathbb{A}_P$ such that $c = a * a$. Since this number can be large, compute it modulo $998,244,353$.
- Find a sequence $a \in \mathbb{A}_P$ such that $c = a * a$ (if it exists).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $P$.
- The second line contains $N-1$ space-separated integers $p_2, p_3, \ldots, p_N$.
- The third line contains $N$ space-separated integers $c_1, c_2, \ldots, c_N$.

### Output
For each test case, print two lines:
- The first of these lines should contain a single integer ― the number of sequences from the first task modulo $998,244,353$.
- If there is no sequence $a \in \mathbb{A}_P$ such that $c = a * a$, the second line should contain the integer $-1$.
- Otherwise, the second line should contain $N$ space-separated integers $a_1, a_2, \ldots, a_N$, where $a \in \mathbb{A}_P$ and $c = a * a$ should hold. If there is more than one such sequence, you may find any one of them.

### Constraints
- $1 \le T \le 10^5$
- $2 \le N \le 5 \cdot 10^5$
- $3 \le P \le 10^9 + 9$
- $P$ is a prime
- $1 \le p_i \lt i$ for each valid $i$
- $0 \le c_i \lt P$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask 1 (10 points, 1 second time limit):**
- $T \le 100$
- $N \le 6$
- $P = 3$

**Subtask 2 (30 points, 1 second time limit):**
- $T \le 100$
- the sum of $N$ over all test cases does not exceed $1,000$

**Subtask 3 (60 points, 5 seconds time limit):** original constraints

### Example Input
```
3
6 3
1 1 2 3 2
1 2 0 1 1 1
5 3
1 1 1 3
2 1 0 2 1
9 101
1 1 2 3 2 4 3 5
18 77 44 82 4 20 19 43 97
```

### Example Output
```
32
2 2 0 1 2 2
0
-1
64
3 70 5 76 20 11 25 12 81
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>