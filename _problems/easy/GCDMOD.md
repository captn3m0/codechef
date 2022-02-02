---
{"category_name":"easy","problem_code":"GCDMOD","problem_name":"Modular GCD","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"likecs","problem_tester":null,"date_added":"16-10-2017","tags":{"0":"aug18","1":"easy","2":"exponentiation","3":"gcd","4":"likecs","5":"likecs"},"editorial_url":"https://discuss.codechef.com/problems/GCDMOD","time":{"view_start_date":1534152605,"submit_start_date":1534152605,"visible_start_date":1534152605,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/AUG18/hindi/GCDMOD.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/AUG18/mandarin/GCDMOD.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/AUG18/russian/GCDMOD.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/AUG18/vietnamese/GCDMOD.pdf" target="_blank">Vietnamese</a> as well.</h3>

At ShareChat, there are are plenty of interesting problems to solve. Here is one of them.

Given integers $A$, $B$ and $N$, you should calculate the [GCD](https://en.wikipedia.org/wiki/Greatest_common_divisor) of $A^N + B^N$ and $|A - B|$. (Assume that $GCD(0, a) = a$ for any positive integer $a$). Since this number could be very large, compute it modulo $1000000007$ ($10^9 + 7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $A$, $B$ and $N$.

### Output
For each test case, print a single line containing one integer — the required GCD modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 10$
- $1 \le A, B, N \le 10^{12}$
- $B \le A$

### Subtasks
**Subtask #1 (10 points):** $1 \le A, B, N \le 10$

**Subtask #2 (40 points):** $1 \le A, B, N \le 10^9$

**Subtask #3 (50 points):** original constraints

### Example Input
```
2
10 1 1
9 1 5
```

### Example Output
```
1
2
```

### Explanation
**Example case 1:** $GCD(10^1 + 1^1, 10 - 1) = GCD(11, 9) = 1$

**Example case 2:** $GCD(9^5 + 1^5, 9 - 1) = GCD(59050, 8) = 2$
