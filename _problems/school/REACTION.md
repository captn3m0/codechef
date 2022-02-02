---
{"category_name":"school","problem_code":"REACTION","problem_name":"Chain Reaction","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"solaimanope","problem_tester":null,"date_added":"11-05-2019","tags":{"0":"cook106","1":"cookoff","2":"solaimanope"},"editorial_url":"https://discuss.codechef.com/problems/REACTION","time":{"view_start_date":1558290720,"submit_start_date":1558290720,"visible_start_date":1558290720,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK106/hindi/REACTION.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK106/mandarin/REACTION.pdf), [Russian](http://www.codechef.com/download/translated/COOK106/russian/REACTION.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK106/vietnamese/REACTION.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK106/bengali/REACTION.pdf) as well.

You are given a grid with $R$ rows (numbered $1$ through $R$) and $C$ columns (numbered $1$ through $C$). A cell in row $r$ and column $c$ is denoted by $(r, c)$. Two cells in the grid are adjacent if they have a common side. For each valid $i$ and $j$, there is a value $a_{i, j}$ written in cell $a_{i, j}$.

A cell in the grid is *stable* if the number of cells in the grid which are adjacent to this cell is strictly greater than the value written in this cell. The whole grid is stable if all cells in the grid are stable.

Can you determine whether the grid is stable?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $R$ and $C$.
- $R$ lines follow. For each $i$ ($1 \le i \le R$), the $i$-th of these lines contains $C$ space-separated integers $a_{i, 1}, a_{i, 2}, \ldots, a_{i, C}$.

### Output
For each test case, print a single line containing the string `"Stable"` if the grid is stable or `"Unstable"` if it is unstable (without quotes).

### Constraints 
- $1 \le T \le 3,000$
- $3 \le R, C \le 10$
- $0 \le a_{i, j} \le 4$ for each valid $i, j$

### Example Input
```
2
3 3
1 2 1
2 3 2
1 2 1
3 4
0 0 0 0
0 0 0 0
0 0 4 0
```

### Example Output
```
Stable
Unstable
```

### Explanation
**Example case 1:** Each cell of the grid is stable, so the grid is stable.

**Example case 2:** The cell in row $3$ and column $3$ is unstable since the number of cells adjacent to this cell is $3$.
