---
{"category_name":"hard","problem_code":"SERSUM","problem_name":"Series Sum","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":null,"date_added":"28-02-2018","tags":{"0":"chemthan","1":"convolution","2":"fft","3":"may18","4":"power"},"editorial_url":"https://discuss.codechef.com/problems/SERSUM","time":{"view_start_date":1526290200,"submit_start_date":1526290200,"visible_start_date":1526290200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/MAY18/mandarin/SERSUM.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/MAY18/russian/SERSUM.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/MAY18/vietnamese/SERSUM.pdf" target="_blank">Vietnamese</a> as well.</h3>

You are given $N$ integers $a_1, a_2, \dots, a_N$. Let's define functions $f$ and $g$:

$$f(x, k) = (x + a_1)^k + (x + a_2)^k + \dots + (x + a_N)^k$$

$$g(t, k) = f(0, k) + f(1, k) + \dots + f(t, k)$$

You are also given integers $T$ and $K$. Calculate $g(T, i)$ modulo $10^9 + 7$ for each $i$ between $0$ and $K$ inclusive.

### Input
- The first line of the input contains three space-separated integers $N$, $K$ and $T$.
- The second line contains $N$ space-separated integers $a_1, a_2, \dots, a_N$.

### Output
Print a single line containing $K+1$ space-separated integers — the values of $g(T, 0), g(T, 1), \dots, g(T, K)$ modulo $10^9 + 7$.

### Constraints
- $1 \le N \le 10^5$
- $1 \le K \le 5 \cdot 10^4$
- $1 \le T \le 10^{18}$
- $0 \le a_i \lt 10^9 + 7$

### Subtasks
**Subtask #1 (10 points):** $N = 1$

**Subtask #2 (10 points):** $a_i = a_1 ^ i$ modulo $10^9 + 7$ for each valid $i$

**Subtask #3 (10 points):** $a_i = a_1 + i - 1$ modulo $10^9 + 7$ for each valid $i$

**Subtask #4 (70 points):** original constraints

### Example Input
```
2 3 4
0 1
```

### Example Output
```
10 25 85 325
```
