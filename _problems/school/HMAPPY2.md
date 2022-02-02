---
{"category_name":"school","problem_code":"HMAPPY2","problem_name":"Appy and Contest","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hmrockstar","problem_tester":null,"date_added":"25-01-2019","tags":{"0":"cakewalk","1":"feb19","2":"gcd","3":"hmrockstar","4":"maths"},"editorial_url":"https://discuss.codechef.com/problems/HMAPPY2","time":{"view_start_date":1550050202,"submit_start_date":1550050202,"visible_start_date":1550050202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/FEB19TST/hindi/HMAPPY2.pdf), [Bengali](http://www.codechef.com/download/translated/FEB19TST/bengali/HMAPPY2.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/FEB19TST/mandarin/HMAPPY2.pdf), [Russian](http://www.codechef.com/download/translated/FEB19TST/russian/HMAPPY2.pdf), and [Vietnamese](http://www.codechef.com/download/translated/FEB19TST/vietnamese/HMAPPY2.pdf) as well.

Appy and Chef are participating in a contest. There are $N$ problems in this contest; each problem has a unique problem code between $1$ and $N$ inclusive. Appy and Chef decided to split the problems to solve between them ― Appy should solve the problems whose problem codes are divisible by $A$ but not divisible by $B$, and Chef should solve the problems whose problem codes are divisible by $B$ but not divisible by $A$ (they decided to not solve the problems whose codes are divisible by both $A$ and $B$).

To win, it is necessary to solve at least $K$ problems. You have to tell Appy whether they are going to win or lose.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $N$, $A$, $B$ and $K$.

### Output
For each test case, print a single line containing the string `"Win"` if they can solve at least $K$ problems or `"Lose"` otherwise (without quotes).

### Constraints 
- $1 \le T \le 15$
- $1 \le K \le N \le 10^{18}$
- $1 \le A, B \le 10^9$

### Subtasks
**Subtask #1 (15 points):**
- $1 \le T \le 15$
- $1 \le K \le N \le 10^6$
- $1 \le A, B \le 10^3$

**Subtask #2 (85 points):** original constraints

### Example Input
```
1
6 2 3 3
```

### Example Output
```
Win
```

### Explanation
**Example case 1:** Appy is solving the problems with codes $2$ and $4$, Chef is solving the problem with code $3$. Nobody is solving problem $6$, since $6$ is divisible by both $2$ and $3$. Therefore, they can solve $3$ problems and win.
