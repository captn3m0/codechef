---
{"category_name":"easy","problem_code":"ADASHOP2","problem_name":"Ada Bishop 2","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"13-12-2019","tags":{"0":"alei","1":"constructive","2":"march20","3":"simple","4":"tmwilliamlin"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ADASHOP2","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ADASHOP2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MARCH20/hindi/ADASHOP2.pdf), [Bengali](https://www.codechef.com/download/translated/MARCH20/bengali/ADASHOP2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH20/mandarin/ADASHOP2.pdf), [Russian](https://www.codechef.com/download/translated/MARCH20/russian/ADASHOP2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH20/vietnamese/ADASHOP2.pdf) as well.

Ada is training for her match against Magnus Carlsen in the <a href="https://en.wikipedia.org/wiki/World_Chess_Championship_2020">World Chess Championship 2020</a>.

Ada took a standard [chessboard](https://en.wikipedia.org/wiki/Chessboard) with $8$ rows (numbered $1$ through $8$) and $8$ columns (numbered $1$ through $8$); let's denote a cell in row $r$ and column $c$ by $(r, c)$. Then, Ada placed a [bishop](https://en.wikipedia.org/wiki/Bishop_(chess)) in a cell $(r_0, c_0)$; it is guaranteed that this cell is black. Ada's goal is to move the bishop in such a way that it visits all black cells.

Remember that a bishop is a piece that moves diagonally ― formally, the bishop may move from a cell $(r_s, c_s)$ to a cell $(r_t, c_t)$ if and only if either $r_s+c_s=r_t+c_t$ or $r_s-c_s=r_t-c_t$. In such a move, the bishop visits all cells between $(r_s, c_s)$ and $(r_t, c_t)$ on this diagonal (inclusive).

Help Ada find a sequence of at most $64$ moves for the bishop such that when the bishop follows this route, it visits all black cells on the chessboard. Note that each cell may be visited multiple times and it is not necessary to return to the starting point.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $r_0$ and $c_0$.

### Output
For each test case:
- First, print a line containing a single integer $M$ ($M \le 64$) ― the number of moves in the bishop's route.
- Then, print $M$ lines. For each $i$ ($1 \le i \le M$), the $i$-th of these lines should contain two space-separated integers $r_i$ and $c_i$, where the route followed by the bishop is $(r_0,c_0) \rightarrow (r_1,c_1) \rightarrow (r_2,c_2) \rightarrow \ldots \rightarrow (r_M,c_M)$.

### Constraints
- $1 \le T \le 32$
- $1 \le r_0, c_0 \le 8$
- $(r_0, c_0)$ is a black cell, i.e. $r_0+c_0$ is even

### Subtasks
**Subtask #1 (99 points):** $r_0 = c_0 = 1$

**Subtask #2 (1 points):** original constraints

### Example Input
```
1
5 3
```

### Example Output
```
31
3 5
4 6
7 3
5 1
1 5
[26 more lines follow]
```	

### Explanation
**Example case 1:** The first five moves of the bishop are shown in the figure below.

<img src="https://codechef_shared.s3.amazonaws.com/download/MARCH20/ADASHOP2/ADASHOP2.png"></img>

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>