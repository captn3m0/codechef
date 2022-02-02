---
{"category_name":"easy","problem_code":"GRIDTOUR","problem_name":"Grid Tour","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abdullah768","problem_tester":null,"date_added":"15-05-2019","tags":{"0":"abdullah768","1":"easy","2":"ltime72","3":"modular","4":"observations","5":"taran_1407"},"time":{"view_start_date":1558803600,"submit_start_date":1558803600,"visible_start_date":1558803600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/LTIME72/hindi/GRIDTOUR.pdf), [Bengali](http://www.codechef.com/download/translated/LTIME72/bengali/GRIDTOUR.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME72/mandarin/GRIDTOUR.pdf), [Russian](http://www.codechef.com/download/translated/LTIME72/russian/GRIDTOUR.pdf), and [Vietnamese](http://www.codechef.com/download/translated/LTIME72/vietnamese/GRIDTOUR.pdf) as well.

Chef has an integer $K$ and a grid with $N$ rows (numbered $0$ through $N-1$) and $M$ columns (numbered $0$ through $M-1$). Let's denote the cell in row $r$ and column $c$ by $(r, c)$.

A *tour* in the grid is a sequence of cells such that each cell of the grid occurs in this sequence at least once. The starting cell may be chosen arbitrarily. Then, for each cell $(x, y)$ except the final cell (but including the starting cell), the next cell in the sequence must be one of the following:
- $\left( x, (y+K) \% M \right)$
- $\left( (x+K) \% N, y \right)$
- $\left( (x+K) \% N, (y+K) \% M \right)$

Each cell may occur multiple times in the sequence and the final cell does not have to be the same as the starting cell.

Find the length of the shortest possible tour of the grid, or determine that it is impossible to create a tour.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $N$, $M$ and $K$.

### Output
For each test case, print a single line containing one integer ― the minimum length of a tour, or $-1$ if no tour exists.

### Constraints 
- $1 \le T \le 10^5$
- $1 \le N, M, K \le 10^9$

### Subtasks
**Subtask #1 (30 points):** $1 \le K \le 2$

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
2 3 1
2 2 2
1 4 3
```

### Example Output
```
6
-1
4
```

### Explanation
**Example case 1:** One possible tour is $(0,1) \rightarrow (1,2) \rightarrow (0,0) \rightarrow (1,0) \rightarrow (1,1) \rightarrow (0,2)$.

**Example case 2:** Regardless of where Chef starts and what moves he makes, he will always be stuck at the same position.

**Example case 3:** One possible tour is $(0,2) \rightarrow (0,1) \rightarrow (0,0) \rightarrow (0,3)$.
