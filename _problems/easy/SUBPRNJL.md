---
{"category_name":"easy","problem_code":"SUBPRNJL","problem_name":"Yet Again a Subarray Problem","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"prnjl_rai","problem_tester":null,"date_added":"23-02-2019","tags":{"0":"binary","1":"easy","2":"march19","3":"partial","4":"prnjl_rai","5":"segment","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/SUBPRNJL","time":{"view_start_date":1552469402,"submit_start_date":1552469402,"visible_start_date":1552469402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAR19TST/hindi/SUBPRNJL.pdf), [Bengali](http://www.codechef.com/download/translated/MAR19TST/bengali/SUBPRNJL.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAR19TST/mandarin/SUBPRNJL.pdf), [Russian](http://www.codechef.com/download/translated/MAR19TST/russian/SUBPRNJL.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAR19TST/vietnamese/SUBPRNJL.pdf) as well.

"It does not matter how slowly you go as long as you do not stop." - Confucius

You are given an array $A_1, A_2, \ldots, A_N$ and an integer $K$. For each subarray $S = [A_l, A_{l+1}, \ldots, A_r]$ ($1 \le l \le r \le N$):
- Let's define an array $B$ as $S$ concatenated with itself $m$ times, where $m$ is the smallest integer such that $m(r-l+1) \ge K$.
- Next, let's sort $B$ and define $X = B_K$, i.e. as a $K$-th smallest element of $B$. Note that $|B| \ge K$.
- Then, let's define $F$ as the number of occurrences of $X$ in $S$.
- The subarray $S$ is *beautiful* if $F$ occurs in $S$ at least once.

Find the number of beautiful subarrays of $A$. Two subarrays $A_l, A_{l+1}, \ldots, A_r$ and $A_p, A_{p+1}, \ldots, A_q$ are different if $l \neq p$ or $r \neq q$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$. 
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer - the number of beautiful subarrays.

### Constraints
- $1 \le T \le 5$
- $1 \le N \le 2,000$
- $1 \le K \le 10^9$
- $1 \le A_i \le 2000$ for each valid $i$

### Subtasks
**Subtask #1 (20 points):** $1 \le N \le 200$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
3 3
1 2 3
```

### Example Output
```
3
```

### Explanation
**Example case 1:** There are six subarrays of $A$: $[1]$, $[2]$, $[3]$, $[1, 2]$, $[2, 3]$, $[1, 2, 3]$. The corresponding arrays $B$ are $[1, 1, 1]$, $[2, 2, 2]$, $[3, 3, 3]$, $[1, 2, 1, 2]$, $[2, 3, 2, 3]$, $[1, 2, 3]$.

Three of the subarrays are beautiful: $[1]$, $[1, 2]$ and $[1, 2, 3]$. For these subarrays, $X$ is $1$, $2$ and $3$ respectively (for example, for $S = [1, 2]$, $B = [1, 2, 1, 2]$ is sorted to $[1, 1, 2, 2]$ and $X = 2$ is the $3$-rd element). Then, $F = 1$ for each of these subarrays, and each of these subarrays contains $1$.
