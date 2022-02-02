---
{"category_name":"hard","problem_code":"DANYANUM","problem_name":"Danya and Numbers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"barenuz","problem_tester":null,"date_added":"14-06-2018","tags":{"0":"barenuz","1":"cook95","2":"med","3":"sqrt"},"editorial_url":"https://discuss.codechef.com/problems/DANYANUM","time":{"view_start_date":1529260205,"submit_start_date":1529260205,"visible_start_date":1529260205,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK95/mandarin/DANYANUM.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK95/russian/DANYANUM.pdf" target="_blank">Russian</a>  and <a href="http://www.codechef.com/download/translated/COOK95/vietnamese/DANYANUM.pdf" target="_blank">Vietnamese</a> as well.</h3>

Danya has a sequence $A$ of non-negative integers. Initially, $A$ has length $N$.

Let's define a function $f(x, A)$, where $x$ is a positive integer $\le |A|$, as the maximum of bitwise ANDs of all subsequences of $A$ with length equal to $x$.

Kostya gives Danya $M$ requests. There are three types of requests:
- $1\;v$: append an integer $v$ to $A$
- $2\;v$: delete an element equal to $v$ from $A$; it is guaranteed that $A$ contains $v$ at least once, but if there are more elements equal to $v$, you should only delete one of them
- $3\;x$: calculate $f(x, A)$

Also, Kostya knows that at any time, all elements of $A$ are smaller than $2^k$ for a fixed $k$.

Help Danya process all of Kostya's requests.

### Input
- The first line of the input contains three space-separated integers $N$, $M$ and $k$.
- The second line contains $N$ space-separated integers $a_1, a_2, \dots, a_N$ denoting the initial sequence $A$.
- Each of the following $M$ lines contains two space-separated integers describing a request in the format $1\;v$, $2\;v$ or $3\;x$.

### Output
For each request of type 3, print a single line containing one integer — the value of $f(x, A)$.

### Constraints
- $1 \le N, M \le 75,000$
- $1 \le k \le 18$
- $0 \le v \lt 2^k$
- $1 \le x \le |A|$

### Example Input
```
4 7 3
6 7 5 2
3 2
3 3
1 7
3 3
2 7
2 6
3 2
```

### Example Output
```
6
4
6
5
```

### Explanation
Subsequences giving optimal answers for the requests of type 3 are, in order: $(6, 7)$; $(6, 7, 5)$; $(6, 7, 7)$; $(7, 5)$.
