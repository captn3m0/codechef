---
{"category_name":"medium","problem_code":"WEAKMID","problem_name":"Weak in the Middle","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"24-05-2018","tags":{"0":"array","1":"easy","2":"kingofnumbers","3":"kingofnumbers","4":"looping","5":"simulation","6":"stack"},"editorial_url":"https://discuss.codechef.com/problems/WEAKMID","time":{"view_start_date":1527354000,"submit_start_date":1527354000,"visible_start_date":1527354000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME60/mandarin/WEAKMID.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME60/vietnamese/WEAKMID.pdf">Vietnamese</a> as well.</h3>

You are given an array $A$ with length $N$. On each day, the following process was performed:
- a new array $R$ is created; this array contains all elements $A_i$ such that $i=1$, $i=N$ or $\mathop{\rm min}(A_{i-1}, A_{i+1}) \le A_i$ ($2 \le i \lt N$), in the original order
- $A$ is replaced by $R$ and $N$ is replaced by the length of $R$

In other words, all elements of $A$ that are between two bigger elements disappear.

For each element of the original array, calculate the number of the day on which it disappeared (the process starts with day $1$), or determine that it never disappeared.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should be the number of the day on which the $i$-th element of the original array disappeared, or $0$ if it never disappeared.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- the sum of $N$ in all test cases does not exceed $10^5$
- $1 \le A_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (20 points):** the sum of $N$ in all test cases does not exceed $1,000$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
6
3 2 5 4 1 7
```
### Example Output
```
0 1 0 2 1 0
```
### Explanation
