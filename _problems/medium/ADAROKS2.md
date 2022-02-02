---
{"category_name":"medium","problem_code":"ADAROKS2","problem_name":"Ada Rooks 2","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"18-04-2019","tags":{"0":"alei"},"time":{"view_start_date":1557739980,"submit_start_date":1557739980,"visible_start_date":1557739980,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAY19/hindi/ADAROKS2.pdf), [Bengali](http://www.codechef.com/download/translated/MAY19/bengali/ADAROKS2.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAY19/mandarin/ADAROKS2.pdf), [Russian](http://www.codechef.com/download/translated/MAY19/russian/ADAROKS2.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAY19/vietnamese/ADAROKS2.pdf) as well.

In order to beat AlphaZero, Chef Ada is improving her chess calculation skills.

Today, Ada took a big chessboard with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$). Let's denote the square in row $r$ and column $c$ of the chessboard by $(r, c)$. Ada wants to place some rooks on the chessboard in such a way that the following conditions are satisfied:
- Each square of the board contains at most one rook.
- There are no four rooks forming a rectangle. Formally, there should not be any four valid integers $r_1$, $c_1$, $r_2$, $c_2$ ($r_1 \neq r_2,  c_1 \neq c_2$) such that there are rooks on squares $(r_1, c_1)$, $(r_1, c_2)$, $(r_2, c_1)$ and $(r_2, c_2)$.
- The number of rooks is at least $8N$.

Help Ada find a possible distribution of rooks. If there are multiple solutions, you may find any one. It is guaranteed that under the given constraints, a solution always exists.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print $N$ lines. For each valid $i$, the $i$-th of these lines should contain a single string with length $N$ describing row $i$ of the chessboard; for each valid $j$, the $j$-th character of this string should be 'O' if there is a rook in the square $(i, j)$ or '.' if this square is empty.

### Constraints
- $100 \le N \le 1,000$
- the sum of $N^2$ over all test cases does not exceed $5 \cdot 10^6$

### Subtasks
**Subtask #1 (20 points):** $N \le 200$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
100
```

### Example Output
```
OO.O [96 characters follow]
O... [96 characters follow]
..O. [96 characters follow]
O... [96 characters follow]
[96 lines follow]
```

### Explanation
The output depicts the top left $4 \times 4$ square on the board. The rest of the board is cropped.
