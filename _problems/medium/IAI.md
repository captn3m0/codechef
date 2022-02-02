---
{"category_name":"medium","problem_code":"IAI","problem_name":"Intervals and Intersections","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"vivek_1998299","problem_tester":null,"date_added":"17-05-2019","tags":{"0":"convex","1":"ltime72","2":"medium","3":"prefix","4":"segment","5":"taran_1407","6":"vivek_1998299"},"time":{"view_start_date":1558803600,"submit_start_date":1558803600,"visible_start_date":1558803600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/LTIME72/hindi/IAI.pdf), [Bengali](http://www.codechef.com/download/translated/LTIME72/bengali/IAI.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME72/mandarin/IAI.pdf), [Russian](http://www.codechef.com/download/translated/LTIME72/russian/IAI.pdf), and [Vietnamese](http://www.codechef.com/download/translated/LTIME72/vietnamese/IAI.pdf) as well.

Vivek believes that this problem is the hardest problem ever and no one can solve it. Please prove him wrong.

You are given a sequence $A_1, A_2, \ldots, A_N$ and $M$ intervals $[L_1, R_1], [L_2, R_2], \ldots, [L_M, R_M]$. For any subset $S$ of these intervals:
- If $S$ is non-empty, let's define $L = \mathrm{max}_{i \in S}\,(L_i)$ and $R = \mathrm{min}_{i \in S}\,(R_i)$.
- The set $S$ is *disjoint* if $S$ is empty or $L \gt R$. Otherwise, the intersection of the intervals from this set is the interval $[L, R]$.
- If $S$ is not disjoint, its value is $\sum_{j=L}^{R} (j-L+1) \cdot A_j$.

Find the maximum of values of all non-disjoint subsets of the given intervals.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- $M$ lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains two space-separated integers $L_i$ and $R_i$.

### Output
For each test case, print a single line containing one integer ― the maximum value of a non-disjoint subset.

### Constraints 
- $1 \le T \le 5$
- $1 \le N \le 10^5$
- $1 \le M \le 5 \cdot 10^4$
- $|A_i| \le 10^6$ for each valid $i$
- $1 \le L \le R \le N$

### Subtasks
**Subtask #1 (30 points):** $1 \le M \le 3 \cdot 10^3$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
3 2
-2 1 -2
1 2
2 3
3 2
2 3 4
1 2
2 3	
```

### Example Output
```
1
11
```

### Explanation
**Example case 1:** It is optimal to choose the intervals $[1, 2]$ and $[2, 3]$. Their intersection is the interval $[2, 2]$ (so the set of these two intervals is not disjoint) and its value is $A_2 \cdot 1 = 1$.
