---
{"category_name":"easy","problem_code":"MINDSUM","problem_name":"Minimize Digitsum","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"pekempey","problem_tester":null,"date_added":"15-09-2018","tags":{"0":"digits","1":"easy","2":"oct18","3":"pekempey"},"editorial_url":"https://discuss.codechef.com/problems/MINDSUM","time":{"view_start_date":1540027803,"submit_start_date":1540027803,"visible_start_date":1540027803,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/OCT18/hindi/MINDSUM.pdf) ,[Bengali](http://www.codechef.com/download/translated/OCT18/bengali/MINDSUM.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/OCT18/mandarin/MINDSUM.pdf) , [Russian](http://www.codechef.com/download/translated/OCT18/russian/MINDSUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT18/vietnamese/MINDSUM.pdf) as well.


You are given positive integers $N$ and $D$. You may perform operations of the following two types:
- add $D$ to $N$, i.e. change $N$ to $N+D$
- change $N$ to $\mathop{\mathrm{digitsum}}(N)$

Here, $\mathop{\mathrm{digitsum}}(x)$ is the sum of decimal digits of $x$. For example, $\mathop{\mathrm{digitsum}}(123)=1+2+3=6$, $\mathop{\mathrm{digitsum}}(100)=1+0+0=1$, $\mathop{\mathrm{digitsum}}(365)=3+6+5=14$.

You may perform any number of operations (including zero) in any order. Please find the minimum obtainable value of $N$ and the minimum number of operations required to obtain this value.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $D$.

### Output
For each test case, print a single line containing two space-separated integers — the minimum value of $N$ and the minimum required number of operations.

### Constraints
- $1 \le T \le 10$
- $1 \le N, D \le 10^{10}$

### Subtasks
**Subtask #1 (30 points):** $1 \le N, D \le 100$

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
2 1
9 3
11 13
```

### Example Output
```
1 9
3 2
1 4
```

### Explanation
**Example case 1:** The value $N=1$ can be achieved by 8 successive "add" operations (changing $N$ to $10$) and one "digit-sum" operation.

**Example case 2:** You can prove that you cannot obtain $N=1$ and $N=2$, and you can obtain $N=3$.
The value $N=3$ can be achieved by one "add" and one "digitsum" operation, changing $9$ to $12$ and $12$ to $3$.  

**Example case 3:** $N=1$ can be achieved by operations "add", "add", "digitsum", "digitsum": $11 \rightarrow 24 \rightarrow 37 \rightarrow 10 \rightarrow 1$.
