---
{"category_name":"easy","problem_code":"ROLLBAR","problem_name":"Roll the Bar","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"deva2802","problem_tester":null,"date_added":"21-02-2019","tags":{"0":"bfs","1":"deva2802","2":"easy","3":"graphtheory","4":"ltime69"},"editorial_url":"https://discuss.codechef.com/problems/ROLLBAR","time":{"view_start_date":1550941202,"submit_start_date":1550941202,"visible_start_date":1550941202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME69/mandarin/ROLLBAR.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME69/bengali/ROLLBAR.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME69/hindi/ROLLBAR.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME69/russian/ROLLBAR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME69/vietnamese/ROLLBAR.pdf) as well.

You are given a $1 \times 1 \times 2$ bar (a cuboid) and a grid $A$ with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Let's denote the cell in row $r$ and column $c$ by $(r, c)$. Some cells of the grid are blocked, the remaining cells are free.

Each cell has dimensions $1 \times 1$, the same as two opposite faces of the cuboid. When the bar is placed on the grid in such a way that one of its two $1 \times 1$ faces fully covers a cell $(r, c)$, we say that the bar is *standing on* the cell $(r, c)$. Initially, the bar is standing on a cell $(x, y)$.

When the bar is placed on the grid, one of its faces is touching the grid; this face is called the *base*. In one move, you must roll the bar over one of its base edges (sides of the base); this base edge does not move and the bar is rotated $90^\circ$ around it in such a way that it is still lying on the grid, but with a different base. In different moves, the bar may be rotated around different edges in different directions. After each move, the base of the bar must lie fully inside the grid and it must not cover any blocked cells.

An example sequence of moves is shown [here](http://freegifmaker.me/img/res/1/5/5/0/6/9/15506903141352867.gif).

For each cell of the grid, determine the minimum number of moves necessary to achieve the state where the bar is standing on this cell or determine that it is impossible to achieve.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains two space-separated integers $x$ and $y$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $M$ integers $A_{i, 1}, A_{i, 2}, \ldots, A_{i, M}$ (a string with length $M$). For each valid $i, j$, $A_{i, j} = 0$ denotes that the cell $(i, j)$ is blocked and $A_{i, j} = 1$ denotes that it is free.

### Output
For each test case, print $N$ lines, each containing $M$ space-separated integers. For each valid $i, j$, the $j$-th integer on the $i$-th of these lines should denote the minimum number of moves necessary to have the bar stand on cell $(i, j)$, or it should be $-1$ if it is impossible.

### Constraints 
- $1 \le T \le 50$
- $1 \le N, M \le 1,000$
- $1 \le x \le N$
- $1 \le y \le M$
- $0 \le A_{i, j} \le 1$ for each valid $i, j$
- $A_{x, y} = 1$
- the sum of $N \cdot M$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (15 points):**
- $x = 1$
- $y = 1$
- $A_{i, j} = 1$ for each valid $i, j$

**Subtask #2 (85 points):** original constraints

### Example Input
```
2
2 4
1 1
1111
0111
2 4
1 1
1111
0011
```

### Example Output
```
0 -1 -1 2
-1 -1 -1 3
0 -1 -1 2
-1 -1 -1 -1
```

### Explanation
**Example case 1:** Initially, the base of the bar occupies the cell $(1, 1)$. After the first move, it occupies the cells $(1, 2)$ and $(1, 3)$. After the second move, it can occupy the cell $(1, 4)$.

Alternatively, after the second move, it can occupy the cells $(2, 2)$ and $(2, 3)$, and after the third move, it can occupy the cell $(2, 4)$.
