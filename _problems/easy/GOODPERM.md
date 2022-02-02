---
{"category_name":"easy","problem_code":"GOODPERM","problem_name":"Good Permutations","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"barenuz","problem_tester":null,"date_added":"16-06-2018","tags":{"0":"barenuz","1":"brute","2":"cook95","3":"permutation","4":"simple"},"editorial_url":"https://discuss.codechef.com/problems/GOODPERM","time":{"view_start_date":1529260205,"submit_start_date":1529260205,"visible_start_date":1529260205,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK95/mandarin/GOODPERM.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK95/russian/GOODPERM.pdf" target="_blank">Russian</a>  and <a href="http://www.codechef.com/download/translated/COOK95/vietnamese/GOODPERM.pdf" target="_blank">Vietnamese</a> as well.</h3>


You have a sequence $a$ with length $N$ created by removing some elements (possibly zero) from a permutation of numbers $(1, 2, \dots, N)$. When an element is removed, the length of the sequence doesn't change, but there is an empty spot left where the removed element was. You also have an integer $K$.

Let's call a permutation $p_1, p_2, \dots, p_N$ *good* if:
- it is possible replace empty spots in $a$ by numbers in such a way that we obtain the permutation $p$
- the number of positions $i$ ($1 \lt i \le N$) such that $p_i \gt p_{i-1}$ is equal to $K$

Your task is to find the number of good permutations.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $a_1, a_2, \dots, a_N$. Each element of this sequence is either $0$ (indicating an empty spot previously occupied by a removed element) or an integer between $1$ and $N$ inclusive.

### Output
For each test case, print a single line containing one integer — the number of good permutations.

### Constraints 
- $1 \le T \le 300$
- $0 \le K \lt N \le 8$
- each integer between $1$ and $N$ inclusive appears in $a$ at most once

### Example Input
```
1
3 1
2 0 0
```

### Example Output
```
2
```

### Explanation
**Example case 1:** The two possible good permutations are $(2,3,1)$ and $(2,1,3)$.
