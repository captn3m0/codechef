---
{"category_name":"school","problem_code":"NUMCOMP","problem_name":"Archi and Comparsion","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"barenuz","problem_tester":null,"date_added":"15-06-2018","tags":{"0":"barenuz","1":"cakewalk","2":"conditions","3":"cook95","4":"math"},"editorial_url":"https://discuss.codechef.com/problems/NUMCOMP","time":{"view_start_date":1529260205,"submit_start_date":1529260205,"visible_start_date":1529260205,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK95/mandarin/NUMCOMP.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK95/russian/NUMCOMP.pdf" target="_blank">Russian</a>  and <a href="http://www.codechef.com/download/translated/COOK95/vietnamese/NUMCOMP.pdf" target="_blank">Vietnamese</a> as well.</h3>

Danya gave integers $a$, $b$ and $n$ to Archi. Archi wants to compare $a^n$ and $b^n$. Help Archi with this task.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $a$, $b$ and $n$.

### Output
For each test case, print a single line containing one integer: $1$ if $a^n > b^n$, $2$ if $a^n < b^n$ or $0$ if $a^n = b^n$.

### Constraints 
- $1 \le T \le 1,000$
- $|a|, |b| \le 10^9$
- $1 \le n \le 10^9$

### Example Input
```
2
3 4 5
-3 2 4
```

### Example Output
```
2
1
```

### Explanation
**Example case 1:** $a^n = 243$ and $b^n = 1024$.

**Example case 2:** $a^n = 81$ and $b^n = 16$.
