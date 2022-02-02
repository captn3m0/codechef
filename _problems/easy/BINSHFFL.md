---
{"category_name":"easy","problem_code":"BINSHFFL","problem_name":"Binary Shuffle","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sanroylozan","problem_tester":"mgch","date_added":"20-05-2018","tags":{"0":"binary","1":"easy","2":"floyd","3":"june18","4":"likecs","5":"sanroylozan","6":"sanroylozan"},"time":{"view_start_date":1528709405,"submit_start_date":1528709405,"visible_start_date":1528709405,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/JUNE18/mandarin/BINSHFFL.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/JUNE18/russian/BINSHFFL.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/JUNE18/vietnamese/BINSHFFL.pdf" target="_blank">Vietnamese</a> as well.</h3>

Chef has two integers $A$ and $B$. He can perform the following operation on $A$ an arbitrary number of times (including zero):
- write $A$ as a binary number with an arbitrary number of leading zeroes (possibly without any)
- shuffle the binary digits of $A$ in an arbitrary way, obtaining a number $s$
- replace $A$ by $s+1$

Chef is wondering about the minimum number of operations he has to perform on $A$ in order to obtain $B$. Compute this number or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $A$ and $B$. 

### Output
For each test case, print a single line containing one integer — the minimum number of operations or $-1$ if it is impossible to obtain $B$ from $A$.

### Constraints 
- $1 \le T \le 10^5$
- $0 \le A, B \le 10^{18}$

### Subtasks
**Subtask #1 (20 points):** $A, B \le 2^7$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
2 4
1 5
```

### Example Output
```
2
1
```

### Explanation
**Example case 1:** One optimal solution is to not shuffle anything, so Chef just adds $1$ twice. 

**Example case 2:** We can obtain $5$ from $1$ in one operation.
