---
{"category_name":"hard","problem_code":"CHEFPIC","problem_name":"Picnic with Chef","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"hloya_ygrt","problem_tester":null,"date_added":"11-05-2018","tags":{"0":"binary","1":"bit","2":"cook94","3":"geometry","4":"hloya_ygrt","5":"scanline","6":"squares"},"editorial_url":"https://discuss.codechef.com/problems/CHEFPIC","time":{"view_start_date":1526841000,"submit_start_date":1526841000,"visible_start_date":1526841000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK94/mandarin/CHEFPIC.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK94/russian/CHEFPIC.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK94/vietnamese/CHEFPIC.pdf" target="_blank">Vietnamese</a> as well.</h3>


Chef decided to make a big picnic. He chose a beautiful place for this special event. Then, Chef placed $N$ picnic baskets on the ground at some points. The only thing remaining is placing some picnic blankets underneath the baskets in such a way that each basket lies on at least one blanket (the blankets are allowed to overlap and each basket may lie on more than one blanket).

Each picnic blanket can be represented as an axis-aligned square. Chef may place any number of blankets on the ground, arbitrarily and independently choosing the side length of each blanket. However, for each blanket, there must be at least three baskets lying on it.

Your task is to help Chef with the preparations by minimizing the size of the largest blanket. 

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$ denoting the number of baskets.
- Each of the following $N$ lines contains two space-separated integers $X$ and $Y$ denoting the coordinates of one basket.

### Output
For each test case, print a single line containing one integer — the minimum possible side length of the largest blanket (the blanket with the maximum side length).

### Constraints 
- $1 \le T \le 5$
- $3 \le N \le 10^4$
- $0 \le X, Y \le 10^9$

### Example Input
```
2
4 
1 1 
1 2 
2 2 
3 5
3 
1 1 
11 1
1 43
```

### Example Output
```
3
42
```

### Explanation

**Example case 1:** Chef can place two picnic blankets on the ground. The first blanket has two opposite corners at points $(1, 1)$ and $(2, 2)$, the second blanket at points $(1, 2)$ and $(4, 5)$. Then, the largest blanket (blanket 2) has side length $3$.
