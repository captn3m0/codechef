---
{"category_name":"easy","problem_code":"DIFNEIGH","problem_name":"Different Neighbours","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"eartemov","problem_tester":null,"date_added":"31-05-2016","tags":{"0":"cases","1":"constructive","2":"eartemov","3":"easy","4":"jan19","5":"pigeonhole","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/DIFNEIGH","time":{"view_start_date":1547458202,"submit_start_date":1547458202,"visible_start_date":1547458202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problem statements in [Hindi](http://www.codechef.com/download/translated/JAN19/hindi/DIFNEIGH.pdf), [Bengali](http://www.codechef.com/download/translated/JAN19/bengali/DIFNEIGH.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/JAN19/mandarin/DIFNEIGH.pdf), [Russian](http://www.codechef.com/download/translated/JAN19/russian/DIFNEIGH.pdf), and [Vietnamese](http://www.codechef.com/download/translated/JAN19/vietnamese/DIFNEIGH.pdf) as well.

You are given an empty grid with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). You should fill this grid with integers in a way that satisfies the following rules:
- For any three cells $c_1$, $c_2$ and $c_3$ such that $c_1$ shares a side with $c_2$ and another side with $c_3$, the integers written in cells $c_2$ and $c_3$ are distinct.
- Let's denote the number of different integers in the grid by $K$; then, each of these integers should lie between $1$ and $K$ inclusive.
- $K$ should be minimum possible.

Find the minimum value of $K$ and a resulting (filled) grid. If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $M$.

### Output
- For each test case, print $N+1$ lines.
- The first line should contain a single integer — the minimum $K$.
- Each of the following $N$ lines should contain $M$ space-separated integers between $1$ and $K$ inclusive. For each valid $i, j$, the $j$-th integer on the $i$-th line should denote the number in the $i$-th row and $j$-th column of the grid.

### Constraints
- $1 \le T \le 500$
- $1 \le N, M \le 50$
- the sum of $N \cdot M$ over all test cases does not exceed $7 \cdot 10^5$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
1 1
2 3
```

### Example Output
```
1
1
3
1 1 2
2 3 3
```

### Explanation
**Example case 1:** There is only one cell in the grid, so the only valid way to fill it is to write $1$ in this cell. Note that we cannot use any other integer than $1$.

**Example case 2:** For example, the integers written in the neighbours of cell $(2, 2)$ are $1$, $2$ and $3$; all these numbers are pairwise distinct and the integer written inside the cell $(2, 2)$ does not matter. Note that there are pairs of neighbouring cells with the same integer written in them, but this is OK. 
