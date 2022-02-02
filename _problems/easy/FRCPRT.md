---
{"category_name":"easy","problem_code":"FRCPRT","problem_name":"Forced Particles","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"fekete","problem_tester":null,"date_added":"25-07-2018","tags":{"0":"easy","1":"fekete","2":"fekete","3":"likecs","4":"ltime62","5":"observations"},"editorial_url":"https://discuss.codechef.com/problems/FRCPRT","time":{"view_start_date":1532797200,"submit_start_date":1532797200,"visible_start_date":1532797200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/LTIME62/hindi/FRCPRT.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/LTIME62/mandarin/FRCPRT.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/LTIME62/russian/FRCPRT.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/LTIME62/vietnamese/FRCPRT.pdf" target="_blank">Vietnamese</a> as well.</h3>


You are given a grid with $n$ rows and $m$ columns. Each cell of this grid can either be empty or it contains one particle. It can never contain more than one particle. Let's denote the cell in the $i$-th row and $j$-th column by $(i, j)$, with the top left corner being $(0, 0)$. From a cell $(i, j)$, a particle could move in one of the following four directions:
- to the left, i.e. to the cell $(i, j - 1)$
- to the right, i.e. to the cell $(i, j + 1)$
- up, i.e. to the cell $(i - 1, j)$
- down, i.e. to the cell $(i + 1, j)$

It is not possible for a particle to move to a cell that already contains a particle or to a cell that does not exist (leave the grid).

It is possible to *apply a force* in each of these directions. When a force is applied in a given direction, all particles will simultaneously start moving in this direction as long as it is still possible for them to move.

You are given a sequence of forces. Each subsequent force is applied only after all particles have stopped moving. Determine which cells of the grid contain particles after all forces from this sequence are applied in the given order.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $n$ and $m$.
- $n$ lines describing the initial grid follow. For each $i$ ($1 \le i \le n$), the $i$-th of these lines contains a binary string with length $m$ describing the $i$-th row of the grid. For each $j$ ($1 \le j \le m$), if the $j$-th character of this string is '1', then the cell $(i, j)$ contains a particle, and if it is '0', then the cell $(i, j)$ is empty.
- The last line contains a single string $S$ describing the sequence of applied forces. Each character of this string corresponds to applying a force in some direction; forces applied in the directions left, right, up, down correspond to characters 'L', 'R', 'U', 'D' respectively.

### Output
For each test case, print $n$ lines each containing a binary string of length $m$, describing the resulting grid (after all the forces are applied) in the same format as the input grid.

### Constraints
- $1 \le T \le 200$
- $1 \le n, m \le 100$
- $1 \le |S| \le 2 \cdot 10^4$

### Subtasks
**Subtaks #1 (30 points):**
- $1 \le T \le 10$
- $1 \le n, m \le 10$
- $1 \le |S| \le 100$


**Subtask #2 (70 points):** Original constraints

### Example Input
```
3
4 4
1010
0010
1001
0100
LRDU
4 3
000
010
001
101
LRL
3 2
01
10
00
D
```

### Example Output
```
0011
0011
0001
0001
000
100
100
110
00
00
11
```

### Explanation
**Example case 1:** The initial grid is:
```
1010
0010
1001
0100
```
After applying the first force (in the direction "L", i.e. to the left), the grid is:
```
1100
1000
1100
1000
```
After applying the second force (in the direction "R"), the grid is:
```
0011
0001
0011
0001
```
After applying the third force (in the direction "D"), the grid is:
```
0001
0001
0011
0011
```
After applying the fourth force (in the direction "U"), the final grid is:
```
0011
0011
0001
0001
```
