---
{"category_name":"medium","problem_code":"ADAPWN","problem_name":"Ada Pawns","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"29-04-2019","tags":{"0":"alei"},"time":{"view_start_date":1557739980,"submit_start_date":1557739980,"visible_start_date":1557739980,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAY19/hindi/ADAPWN.pdf), [Bengali](http://www.codechef.com/download/translated/MAY19/bengali/ADAPWN.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAY19/mandarin/ADAPWN.pdf), [Russian](http://www.codechef.com/download/translated/MAY19/russian/ADAPWN.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAY19/vietnamese/ADAPWN.pdf) as well.

In order to beat AlphaZero, Chef Ada is improving her chess calculation skills.

Today, Ada took a big chessboard with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$) and placed some pawns on this chessboard. Let's denote a cell in row $r$ and column $c$ of the chessboard by $(r, c)$.

Ada may perform any number of moves in any order. In one move, Ada must take one pawn and capture another pawn with it; just like in standard chess, a pawn in a cell $(r, c)$ may capture only pawns in cells $(r-1, c-1)$ or $(r-1, c+1)$. The captured pawn is removed and the pawn that captured it takes its place. It is not allowed to move pawns without capturing. Unlike in standard chess, the pawns do not have colours, so it is possible to use all pawns to capture and all pawns can be captured.

The number of moves Ada can make is finite, so the game can always reach a state where Ada has no valid moves. Ada is interested in the shortest possible sequence of moves such that there are no more valid moves afterwards. Help her find one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a single string with length $N$ describing the $i$-th row of the chessboard, where '.' denotes an empty cell and 'O' denotes a pawn.

### Output
For each test case:
- First, print a line containing a single integer $M$ — the minimum number of moves.
- Then, print $M$ lines describing the moves in some shortest game. Each of these lines should contain two space-separated integers $r$ and $c$ followed by a space and a character $d$, denoting that the pawn in cell $(r, c)$ captures the pawn in cell $(r-1, c-1)$ if $d$ is 'L' or that it captures the pawn in cell $(r-1, c+1)$ if $d$ is 'R'.
- If there are multiple solutions, you may print any one.

### Constraints 
- $1 \le N \le 100$
- the sum of $N^2$ over all test cases does not exceed $10^5$

### Subtasks

**Subtask #1 (20 points):** $N \le 7$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
3
.O.
O.O
...
```

### Example Output
```
2
2 1 R
2 3 L
```

### Explanation
After the first move, the chessboard becomes
```
.O.
..O
...
```
and after the second move, it becomes
```
.O.
...
...
```
