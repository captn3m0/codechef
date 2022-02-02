---
{"category_name":"medium","problem_code":"MMC","problem_name":"Mouse Meets Cheese","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"watcher","problem_tester":null,"date_added":"22-01-2019","tags":{"0":"dynamic","1":"ltime68","2":"watcher"},"editorial_url":"https://discuss.codechef.com/problems/MMC","time":{"view_start_date":1548522002,"submit_start_date":1548522002,"visible_start_date":1548522002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME68/mandarin/MMC.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME68/bengali/MMC.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME68/hindi/MMC.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME68/russian/MMC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME68/vietnamese/MMC.pdf) as well.

Arya has a pet mouse named Jack. She put Jack in a grid with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). There are $K$ cheese wedges scattered over the grid; for each wedge, we know how long it takes Jack to eat it.

Let's denote the cell in row $r$ and column $c$ by $(r, c)$. Initially, Jack is in the cell $(1, 1)$. When Jack is in a cell $(r, c)$, he can move to either of the cells $(r, c-1)$ or $(r, c+1)$ in $1$ second. If he is in the first or last column of the grid ($c=1$ or $c=M$), he can also move to the cell $(r+1, c)$ in $1$ second. Jack can only eat a cheese wedge if he is in the same cell as the wedge.

Your task is to help Jack find out, for each possible $i$, the minimum number of seconds Jack needs to eat $i$ cheese wedges.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $K$.
- $K$ lines follow. Each of these lines contains three space-separated integers $r$, $c$ and $t$, denoting that there is a cheese wedge in cell $(r, c)$ and it takes Jack $t$ seconds to eat it.

### Output
For each test case, print a single line containing $K$ space-separated integers. For each $i$ ($1 \le i \le K$), the $i$-th of them should denote the minimum number of seconds Jack needs to eat $i$ cheese wedges.

### Constraints 
- $1 \le T \le 1,000$
- $3 \le N, M \le 10^9$
- $1 \le K \le 10^4$
- $1 \le r \le N$
- $2 \le c \le M-1$
- $1 \le t \le 10^9$
- no two cheese wedges are in the same cell
- the sum of $K$ over all test cases does not exceed $10^4$

### Subtasks
**Subtask #1 (25 points):**
- $1 \le T \le 10$
- $ N, M, K \le 300$

**Subtask #2 (75 points):** original constraints

### Example Input
```
1
3 10 5
1 2 10
2 2 1
1 3 1
1 9 1 
2 9 1
```

### Example Output
```
3 8 14 22 32
```
