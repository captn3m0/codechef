---
{"category_name":"medium","problem_code":"XTGR","problem_name":"X and Two Groups","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"allllekssssa","problem_tester":null,"date_added":"24-08-2018","tags":{"0":"allllekssssa","1":"greedy","2":"ltime63","3":"numbertheory"},"editorial_url":"https://discuss.codechef.com/problems/XTGR","time":{"view_start_date":1535216402,"submit_start_date":1535216402,"visible_start_date":1535216402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/LTIME63/mandarin/XTGR.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/LTIME63/russian/XTGR.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/LTIME63/vietnamese/XTGR.pdf" target="_blank">Vietnamese</a> as well.</h3>


Tumut, the best programmer in his village Applidz, invented a problem and decided to share it with you:

You are given two integer sequences $S_1, S_2, \dots, S_N$ and $T_1, T_2, \dots, T_M$ and an integer $x$. You are allowed to perform the following operation any number of times:
- choose an element of $S$ and an element of $T$ (let's denote them by $S_i$ and $T_j$ respectively)
- decrease both $S_i$ and $T_j$ by $x$, i.e. replace $S_i$ by $S_i-x$ and $T_j$ by $T_j-x$

Let's denote the minimum and maximum value in the sequence $S$ after performing the chosen operations (possibly none) by $minS$ and $maxS$ respectively. Similarly, let's denote the minimum and maximum value in $T$ after performing the chosen operations by $minT$ and $maxT$ respectively. The goal is minimizing the expression $(maxS+maxT) - (minS+minT)$. Compute the minimum value of this expression. 

### Input
- The first line of the input contains three space-separated integers $N$, $M$ and $x$.
- The second line contains $N$ space-separated integers $S_1, S_2 \dots S_N$.
- The third line contains $M$ space-separated integers $T_1, T_2 \dots T_M$.

### Output
Print a single line containing one integer — the minimum possible value of the expression $(maxS+maxT) - (minS+minT)$.

### Constraints
- $1 \le N, M \le 5\cdot 10^5$
- $1 \le S_i \le 10^9$ for each valid $i$
- $1 \le T_i \le 10^9$ for each valid $i$
- $1 \le x \le 10^9$

### Subtasks
**Subtask #1 (20 points):**
- $N, M \le 20$
- $S_i \le 20$ for each valid $i$
- $T_i \le 20$ for each valid $i$

**Subtask #2 (30 points):**
- $N, M \le 1,000$
- $S_i \le 1,000$ for each valid $i$
- $T_i \le 1,000$ for each valid $i$

**Subtask #3 (50 points):** original constraints

### Example Input
```
2 2 3
1 8
2 3
```

### Example Output
```
2
```

### Explanation
We can perform these two operations:
1. decrease $S_2$ and $T_1$ by $x$
2. decrease $S_2$ and $T_2$ by $x$

Afterwards, the sequence $S$ will be $[1, 2]$ and the sequence $T$ will be $[-1, 0]$. The resulting value of the given expression is $(2+0)-(1+(-1)) = 2$. It is impossible to obtain a smaller value no matter how many operations are performed.
