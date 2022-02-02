---
{"category_name":"easy","problem_code":"SHKNUM","problem_name":"Sheokand and Number","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jitendersheora","problem_tester":null,"date_added":"28-07-2018","tags":{"0":"aug18","1":"binary","2":"jitendersheora","3":"jitendersheora","4":"likecs","5":"precomputation","6":"simple"},"editorial_url":"https://discuss.codechef.com/problems/SHKNUM","time":{"view_start_date":1534152605,"submit_start_date":1534152605,"visible_start_date":1534152605,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/AUG18/hindi/SHKNUM.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/AUG18/mandarin/SHKNUM.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/AUG18/russian/SHKNUM.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/AUG18/vietnamese/SHKNUM.pdf" target="_blank">Vietnamese</a> as well.</h3>

Sheokand is good at mathematics. One day, to test his math skills, Kaali gave him an integer $N$. To impress Kaali, Sheokand has to convert $N$ into an integer $M$ that can be represented in the form $2^x + 2^y$ (where $x$ and $y$ are non-negative integers such that $x \neq y$). In order to do that, he can perform two types of operations:
- add $1$ to $N$
- subtract $1$ from $N$

However, Sheokand is preparing for his exams. Can you help him find the minimum number of operations required to convert $N$ into a valid integer $M$?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each testcase contains a single integer $N$.

### Output
For each test case, print a single line containing one integer — the minimum required number of operations.

### Constraints 
- $1 \le T \le 100,000$
- $1 \le N \le 10^9$

### Subtasks
**Subtask #1 (30 points):** $1 \le T \le 1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
10
22
4
```

### Example Output
```
0
2
1
```

### Explanation
**Example case 1:** $N=10$ is already in the form $2^x + 2^y$, with $x=3$ and $y=1$.

**Example case 2:** $N=22$ can be converted into $M=20=2^2+2^4$ or $M=24=2^3+2^4$ in two operations.

**Example case 3:** $N=4$ can be converted into $M=3=2^0+2^1$ or $M=5=2^0+2^2$ in one operation.
