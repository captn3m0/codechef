---
{"category_name":"medium","problem_code":"TREASURE","problem_name":"Treasure Hunt","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"ashishgup","problem_tester":null,"date_added":"23-02-2019","tags":{"0":"ashishgup","1":"gauss","2":"march19","3":"medium","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/TREASURE","time":{"view_start_date":1552469402,"submit_start_date":1552469402,"visible_start_date":1552469402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAR19TST/hindi/TREASURE.pdf), [Bengali](http://www.codechef.com/download/translated/MAR19TST/bengali/TREASURE.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAR19TST/mandarin/TREASURE.pdf), [Russian](http://www.codechef.com/download/translated/MAR19TST/russian/TREASURE.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAR19TST/vietnamese/TREASURE.pdf) as well.

You are given a grid with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Let's denote the cell in row $r$ and column $c$ by $(r, c)$. Two cells of the grid are *adjacent* if they share a side.

Some of the cells of this grid contain treasures. You do not know exactly which cells contain them, but an analysis of the grid, called a treasure hunt map, is available. For each cell $(i, j)$, you are given an integer $A_{i, j}$ with the following meaning:
- $A_{i, j} = -1$: no information
- $A_{i, j} = 0$: there is an even number of cells containing a treasure which are adjacent to the cell $(i, j)$
- $A_{i, j} = 1$: there is an odd number of cells containing a treasure which are adjacent to the cell $(i, j)$

A *treasure layout* is the set of all cells containing treasures. Find the number of possible treasure layouts that are consistent with all the given information. Since the answer may be large, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $M$ space-separated integers $A_{i, 1}, A_{i, 2}, \ldots, A_{i, M}$.

### Output
For each test case, print a single line containing one integer — the number of treasure layouts modulo $10^9+7$.

### Constraints
- $1 \le T \le 100$
- $1 \le N, M \le 30$
- $|A_{i, j}| \le 1$ for each valid $i, j$

### Subtasks
**Subtask #1 (10 points):** $1 \le N, M \le 4$

**Subtask #2 (20 points):**
- $1 \le N \le 30$
- $1 \le M \le 4$

**Subtask #3 (70 points):** original constraints

### Example Input
```
1
3 2
1 -1 
1 -1 
1 0 
```

### Example Output
```
4
```
