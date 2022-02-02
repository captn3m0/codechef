---
{"category_name":"hard","problem_code":"BHD","problem_name":"Before Having Donuts","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"dolabmoon","problem_tester":null,"date_added":"24-07-2018","tags":{"0":"dolabmoon"},"time":{"view_start_date":1545075122,"submit_start_date":1545075122,"visible_start_date":1545075122,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/DEC18/hindi/BHD.pdf) , [Vietnamese](http://www.codechef.com/download/translated/DEC18/vietnamese/BHD.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/DEC18/mandarin/BHD.pdf) , [Russian](http://www.codechef.com/download/translated/DEC18/russian/BHD.pdf) and [Bengali](http://www.codechef.com/download/translated/DEC18/bengali/BHD.pdf) as well.


When Chef was cooking donuts, thunder suddenly came across the gray-blue sky. That's how Lemon came to Earth, and that's also why she loves DONUTS! Since Lemon is a clever person, she often thinks about some problem before having donuts. This time, she thought about the following problem:

There are $N$ donuts. Each donut is a torus described by parameters $x$, $y$, $z$, $R$, $r$, where the center of the torus has Cartesian coordinates $(x, y, z)$, $R$ is the distance from the center of the torus to the center of its tube and $r$ is the radius of the tube. The rotational axis of each torus is parallel with the $z$-axis.

The tori may touch or intersect each other. What is the total volume they take up, i.e. the volume of the union of all $N$ tori?

### Input
- The first line of the input contains a single integer $N$.
- Each of the following $N$ lines contains five space-separated real numbers $x$, $y$, $z$, $R$ and $r$ describing one torus.

### Output
- Print a single line containing one real number — the total volume of the $N$ tori. Your answer will be considered correct if its absolute error does not exceed $10^{-2}$.

### Constraints
- $1\leq N \le 20$
- $-900 \leq x, y, z \leq 600$
- $ 0.1 \leq r \leq R \leq 50$

### Example Input
```
1
0 0 0 5 2
```

### Example Output
```
394.78417590
```