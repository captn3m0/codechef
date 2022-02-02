---
{"category_name":"easy","problem_code":"ADAMTR","problem_name":"Ada Matrix","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"14-01-2019","tags":{"0":2,"1":"alei","2":"dfs","3":"graph"},"editorial_url":"https://discuss.codechef.com/problems/ADAMTR","time":{"view_start_date":1548009002,"submit_start_date":1548009002,"visible_start_date":1548009002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK102/hindi/ADAMTR.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK102/mandarin/ADAMTR.pdf), [Russian](http://www.codechef.com/download/translated/COOK102/russian/ADAMTR.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK102/vietnamese/ADAMTR.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK102/bengali/ADAMTR.pdf) as well.

Ada has two matrices $A$ and $B$, each with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$).

Ada may perform the following operation any number of times (including zero): choose an integer $i$ ($1 \le i \le N$), then swap row $i$ and column $i$ in matrix $A$. (Formally, for each valid $j$, she swaps $A_{i, j}$ with $A_{j, i}$.)

Is it possible to transform matrix $A$ into matrix $B$?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $N$ space-separated integers $A_{i, 1}, A_{i, 2}, \ldots, A_{i, N}$.
- $N$ more lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $N$ space-separated integers $B_{i, 1}, B_{i, 2}, \ldots, B_{i, N}$.

### Output
For each test case, print a single line containing the string `"Yes"` if it is possible to transform $A$ into $B$ or `"No"` if it is impossible (without quotes).

### Constraints 
- $1 \le T \le 10^{5}$
- $1 \le N \le 2^{10}$
- $1 \le A_{i, j}, B_{i, j} \le 10^9$ for each valid $i, j$
- the sum of $N^2$ over all test cases does not exceed $3 \cdot 10^{6}$

### Example Input
```
1
3
1 2 3
4 5 6
7 8 9
1 2 7
4 5 8
3 6 9

```

### Example Output
```
Yes
```

### Explanation
**Example case 1:** We can swap the second row with the second column and in the resulting matrix, swap the first row with the first column.
