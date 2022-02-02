---
{"category_name":"school","problem_code":"MGCSET","problem_name":"Magic Set","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"barenuz","problem_tester":null,"date_added":"1-07-2018","tags":{"0":"barenuz","1":"july18","2":"simple"},"editorial_url":"https://discuss.codechef.com/problems/MGCSET","time":{"view_start_date":1531733410,"submit_start_date":1531733410,"visible_start_date":1531733410,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/mandarin/MGCSET.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/russian/MGCSET.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/vietnamese/MGCSET.pdf">Vietnamese</a> as well.</h3>


Katya has a sequence of integers $a_1, a_2, \dots, a_n$ and an integer $m$.

She defines a *good* sequence of integers as a non-empty sequence such that the sum of the elements in each of its non-empty subsequences is divisible by $m$.

Katya wants to know the number of good subsequences of the sequence $a$. Can you help her?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $n$ and $m$.
- The second line contains $n$ space-separated integers $a_1, a_2, \dots, a_n$.

### Output
For each test case, print a single line containing one integer — the number of good subsequences.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le n \le 30$
- $1 \le m \le 1,000$
- $1 \le a_i \le 1,000$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $1 \le n \le 5$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
2 3
1 2
2 3
1 3
```

### Example Output
```
0
1
```

### Explanation
**Example case 1:** There are no good subsequences.

**Example case 2:** There is exactly one good subsequence of $a$: $[3]$.
