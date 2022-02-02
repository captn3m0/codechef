---
{"category_name":"medium","problem_code":"CNVX4HUL","problem_name":"Points and Convex Hulls","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"16-03-2019","tags":{"0":"cook","1":"cook104","2":"erfaniaa","3":"medium"},"editorial_url":"https://discuss.codechef.com/problems/CNVX4HUL","time":{"view_start_date":1553452200,"submit_start_date":1553452200,"visible_start_date":1553452200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>**New constraints are not updated in the translations.**

### Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK104/hindi/CNVX4HUL.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK104/mandarin/CNVX4HUL.pdf), [Russian](http://www.codechef.com/download/translated/COOK104/russian/CNVX4HUL.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK104/vietnamese/CNVX4HUL.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK104/bengali/CNVX4HUL.pdf) as well.

You are given $N$ distinct points on a two-dimensional plane. It is guaranteed that no three of them are collinear. Let's call a subset of these points *compact* if the [convex hull](https://en.wikipedia.org/wiki/Convex_hull) of this subset has exactly four vertices.

Find the number of compact non-empty subsets of the given points. Since this number may be very large, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $N$.
- Each of the next $N$ lines contains two space-separated integers $x$ and $y$ denoting the coordinates of one point.

### Output
Print a single line containing one integer ― the number of compact subsets modulo $10^9 + 7$.

### Constraints
- $1 \le N \le 300$
- $|x|, |y| \le 10^9$
- no two points coincide and no three points are collinear

### Example Input 1
```
4
0 0
100 0
0 100
100 100
```

### Example Output 1
```
1
```

### Example Input 2
```
5
0 0
100 0
0 100
100 100
50 60
```

### Example Output 2
```
4
```
