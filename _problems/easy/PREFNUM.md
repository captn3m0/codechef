---
{"category_name":"easy","problem_code":"PREFNUM","problem_name":"Prefix Numbers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1545157800,"submit_start_date":1545157800,"visible_start_date":1545157800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given two positive integers $x, y$.

Find the smallest positive integer $z$ such that $z$ contains $x$ as a prefix (in base 10) and $z$ is divisible by $y$.

If the smallest such $z > 10^{18}$, print -1.

### Input
- The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows.
- The first line of each test case contains two space-separated integers $x, y$.

### Output
For each test case, output an integer $z$ corresponding to the answer of the problem. If $z > 10^{18}$, output -1 instead.

###Constraints
- $1 \le T \le 10^5$
- $1 \le x, y \leq 10^{18}$

### Example Input
```
2
2 3
12 5
```

### Example Output
```
21
120
```

###Explanation:
**Testcase 1**: 21 has 2 as a prefix, and is divisible by 3. Hence this is a valid $z$. You can check that no smaller integer satisfies these conditions, and hence the answer is 21.

**Testcase 2**: 120 has 12 as a prefix, and is divisible by 5. Hence this is a valid $z$. You can check that no smaller integer satisfies these conditions, and hence the answer is 120.