---
{"category_name":"medium","problem_code":"DRGRAC","problem_name":"Drag Racing","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":"3 - 10","source_sizelimit":50000,"problem_author":"vijju123","problem_tester":null,"date_added":"18-11-2018","tags":{"0":"vijju123"},"time":{"view_start_date":1542546000,"submit_start_date":1542546000,"visible_start_date":1542546000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are in charge of organizing a drag racing championship. The competition will be held at a large empty field, which can be modelled as an infinite plane. The most important thing is to take a lot of cool photos for the media, so you've identified $n$ points in the plane with the most beautiful scenery. Each of these points has to be a midpoint of a separate track, and each track has to be aligned with one of cardinal directions (either horizontal or vertical). Of course, no tracks may have a common point due to obvious safety reasons. Finally, all tracks should have equal length $2d$ for some integer $d$ so that all competitors are in equal conditions.

You now want to find the largest length of the tracks so that directions can be chosen for each track without any possible collision.

###Input:

The first line of input contains $T$, i.e. number of test cases per file.

The first line of each test case contains a single integer $n$ $-$ the number of tracks ($1 \leq n \leq 100\,000$).

Each of the next $n$ lines contains two integers $x_i$ and $y_i-$ midpoint of the respective track ($0 \leq x_i, y_i \leq 10^9$). All $n$ points are distinct.

###Output:
On the first line print a single integer $-$ the largest non-negative number $d$ such that directions of tracks of length $2d$ with given midpoints can be chosen without any collisions, or $-1$ if $d$ can be arbitrarily large. On the following line print a string of $n$ characters `|` and `-`, denoting directions of the tracks in the same order as given in the input.

###Constraints 
- $1  \leq  T  \leq  5$
- $1 \leq n \leq 100\,000$
- $0 \leq x_i, y_i \leq 10^9$
- **All $n$ points are distinct.**



###Sample Input:
```
3
4
0 0
2 0
0 2
2 2
3
0 0
1 0
0 1
3
0 0
1 0
2 2
```

###Sample Output:
```
1
-||-
0
---
-1
|||
```

