---
{"category_name":"medium","problem_code":"SONYASEG","problem_name":"Sonya and Segments","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"barenuz","problem_tester":null,"date_added":"14-06-2018","tags":{"0":"barenuz","1":"combinatorics","2":"cook95","3":"easy","4":"geometry","5":"line","6":"looping"},"editorial_url":"https://discuss.codechef.com/problems/SONYASEG","time":{"view_start_date":1529260205,"submit_start_date":1529260205,"visible_start_date":1529260205,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK95/mandarin/SONYASEG.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK95/russian/SONYASEG.pdf" target="_blank">Russian</a>  and <a href="http://www.codechef.com/download/translated/COOK95/vietnamese/SONYASEG.pdf" target="_blank">Vietnamese</a> as well.</h3>

Sonya has $N$ segments on the $x$-axis. For each valid $i$, the $i$-th segment contains all points between $l_i$ and $r_i$ inclusive.

Maks gave Sonya a magic number $K$. Sonya wants to choose exactly $K$ of her segments in such a way that the intersection of the chosen segments is empty, i.e. there is no point which is contained in each of the chosen segments. Find the number of ways in which Sonya can choose $K$ segments. Since this number can be large, Sonya only needs to know its remainder modulo $1000000007$ ($10^9+7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $l_i$ and $r_i$.

### Output
For each test case, print a single line containing one integer — the number of ways to choose the segments, modulo $1000000007$ ($10^9+7$).

### Constraints 
- $1 \le T \le 1,000$
- $1 \le K \le N \le 4\cdot10^5$
- $1 \le l_i \le r_i \le 10^9$ for each valid $i$
- the sum of $N$ for all test cases does not exceed $4\cdot10^5$

### Example Input
```
1
5 2
1 4
2 5
5 10
4 7
8 9
```

### Example Output
```
4
```

### Explanation
**Example case 1:** We are looking for pairs of segments. The four pairs with empty intersections are $(1,3)$, $(1,5)$, $(2,5)$ and $(4,5)$.
