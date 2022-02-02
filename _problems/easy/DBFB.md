---
{"category_name":"easy","problem_code":"DBFB","problem_name":"Dibs on Fibs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anuj_2106","problem_tester":null,"date_added":"1-05-2018","tags":{"0":"anuj_2106","1":"easy","2":"fibonacci","3":"may18"},"editorial_url":"https://discuss.codechef.com/problems/DBFB","time":{"view_start_date":1526290200,"submit_start_date":1526290200,"visible_start_date":1526290200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/MAY18/mandarin/DBFB.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/MAY18/russian/DBFB.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/MAY18/vietnamese/DBFB.pdf" target="_blank">Vietnamese</a> as well.</h3>

You are given two sequences $A$ and $B$, each with size $M$, and an integer $N$. Consider the following pseudocode:

```
result := 0
for i := 1 to M
    for j := 1 to M
        array fib[1..max(2, N)]
        fib[1] := A[i]
        fib[2] := B[j]
        for k := 3 to N
            fib[k] := fib[k-1] + fib[k-2]
        result := result + fib[N]
```

Compute the final value of the variable `result`. Since it can be very large, compute its remainder modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-seperated integers $M$ and $N$.
- The second line contains $M$ space-seperated integers $A_1, A_2, \dots, A_M$.
- The third line contains $M$ space-seperated integers $B_1, B_2, \dots, B_M$.

### Output
For each test case, print the final value of `result` modulo $10^9+7$.

### Constraints 
- $1 \le T \le 10$
- $1 \le M \le 10^5$
- $1 \le N \le 10^5$
- $0 \le A_i, B_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (20 points):** $1 \le N, M \le 100$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
3 3
1 2 3
4 5 6
```

### Example Output
```
63
```

### Explanation
**Example case 1:** The innermost loop is ran for 9 pairs of initial values: $(1,4), (1,5), (1,6), (2,4), (2,5), (2,6), (3,4), (3,5), (3,6)$. The corresponding values added to `result` are 
$5, 6, 7, 6, 7, 8, 7, 8, 9$, and their sum is 63.
