---
{"category_name":"easy","problem_code":"GCDSET","problem_name":"Misha and Nice Sets","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anachor","problem_tester":null,"date_added":"13-05-2019","tags":{"0":"anachor","1":"cook","2":"cook106"},"editorial_url":"https://discuss.codechef.com/problems/GCDSET","time":{"view_start_date":1558290720,"submit_start_date":1558290720,"visible_start_date":1558290720,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK106/hindi/GCDSET.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK106/mandarin/GCDSET.pdf), [Russian](http://www.codechef.com/download/translated/COOK106/russian/GCDSET.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK106/vietnamese/GCDSET.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK106/bengali/GCDSET.pdf) as well.

Misha calls a non-empty set of positive integers *nice* if it has the following properties:
- Each element of the set is between $l$ and $r$ (inclusive).
- The greatest positive integer which divides each element of the set is exactly $g$.

Misha likes nice sets, so she wants to find the size of the largest nice set. Help her solve the problem.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $l$, $r$ and $g$.

### Output
For each test case, print a single line containing one integer — the maximum number of elements in a nice set, or $0$ if no nice set exists.

### Constraints 
- $1 \le T \le 200$
- $1 \le g \le 10^{18}$
- $1 \le l \le r \le 10^{18}$

### Example Input
```
2
5 15 4
15 20 35
```

### Example Output
```
2
0
```

### Explanation
**Example case 1:** Misha can choose the set $\{8, 12\}$.

**Example case 2:** All numbers in the range $[l, r]$ are smaller than $35$, so there is no way to choose a non-empty subset of these numbers where each element is divisible by $35$ and the answer is $0$.
