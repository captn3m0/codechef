---
{"category_name":"easy","problem_code":"AVGMAT","problem_name":"Chefland and Average Distance","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"18-10-2018","tags":{"0":"easy","1":"implementation","2":"kingofnumbers","3":"partial","4":"snck1a19","5":"taran_1407","6":"visual"},"editorial_url":"https://discuss.codechef.com/problems/AVGMAT","time":{"view_start_date":1540092600,"submit_start_date":1540092600,"visible_start_date":1540092600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S191ATST/hindi/AVGMAT.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S191ATST/mandarin/AVGMAT.pdf), [Russian](http://www.codechef.com/download/translated/S191ATST/russian/AVGMAT.pdf), [Vietnamese](http://www.codechef.com/download/translated/S191ATST/vietnamese/AVGMAT.pdf) and [Bengali](http://www.codechef.com/download/translated/S191ATST/bengali/AVGMAT.pdf) as well.

Chefland is a grid with $N$ rows and $M$ columns. Each cell of this grid is either empty or contains a house. The distance between a pair of houses is the Manhattan distance between the cells containing them.

For each $d$ between $1$ and $N+M-2$ inclusive, Chef wants to calculate the number of unordered pairs of distinct houses with distance equal to $d$. Please help him!

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a binary string with length $M$; for each $j$ ($1 \le j \le M$), the $j$-th character of this string is '1' if the cell in the $i$-th row and $j$-th column contains a house or '0' if it is empty.

### Output
For each test case, print a single line containing $N+M-2$ space-separated integers. For each valid $i$, the $i$-th integer should denote the number of pairs with distance $i$.

### Constraints 
- $1 \le T \le 3$
- $2 \le N, M \le 300$

### Subtasks
**Subtask #1 (50 points):** $N, M \le 50$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
3 4
0011
0000
0100
```

### Example Output
```
1 0 1 1 0
```
