---
{"category_name":"hard","problem_code":"PLUSEQ","problem_name":"Plus Equation","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"iloveksh","problem_tester":"mgch","date_added":"20-05-2018","tags":{"0":"iloveksh"},"time":{"view_start_date":1528709405,"submit_start_date":1528709405,"visible_start_date":1528709405,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/JUNE18/mandarin/PLUSEQ.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/JUNE18/russian/PLUSEQ.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/JUNE18/vietnamese/PLUSEQ.pdf" target="_blank">Vietnamese</a> as well.</h3>

You are given a string $S$ containing only decimal digits ('0' through '9') and a number $N$. Your task is to insert an arbitrary number (including zero) of plus signs '+' into $S$ in order to form a valid expression whose value is equal to $N$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a string $S$, followed by a space and an integer $N$.

### Output
For each test case, print a single line containing one string — your solution, i.e. the expression obtained after inserting some plus signs into $S$. If there are multiple solutions, you may output any one. It is guaranteed that at least one solution exists.

### Constraints 
- $T \le 5$
- $1 \le |S| \le 120$
- $N <= int(S)$. *Notes:* $int(S)$ is the integer value of $S$, if we consider $S$ as an integer.

### Subtasks
**Subtask #1 (20 points):** $N \lt 10^6$

**Subtask #2 (80 points):** original constraints

### Example Input
```
4
15112 28
120012 33
123 123
15489001 10549
```

### Example Output
```
15+11+2
1+20+012
123
1548+9001
```

### Explanation
**Example case 1:** $S$ is "15112" and $N=28$. We can put a plus sign before the third character and another plus sign before the last character of this string to form the expression $15+11+2$, which is equal to $28$.

