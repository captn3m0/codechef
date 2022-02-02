---
{"category_name":"easy","problem_code":"CCIRCLES","problem_name":"Chef and Circles","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"l_returns","problem_tester":null,"date_added":"22-09-2018","tags":{"0":"easy","1":"geometry","2":"l_returns","3":"maths","4":"oct18"},"editorial_url":"https://discuss.codechef.com/problems/CCIRCLES","time":{"view_start_date":1540027803,"submit_start_date":1540027803,"visible_start_date":1540027803,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/OCT18/hindi/CCIRCLES.pdf) ,[Bengali](http://www.codechef.com/download/translated/OCT18/bengali/CCIRCLES.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/OCT18/mandarin/CCIRCLES.pdf) , [Russian](http://www.codechef.com/download/translated/OCT18/russian/CCIRCLES.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT18/vietnamese/CCIRCLES.pdf) as well.


There are $N$ circles in a plane. Circle $i$ and circle $j$ form a *good pair* if it is possible to choose a point $P_1$ on the perimeter of circle $i$ and a point $P_2$ on the perimeter of circle $j$ such that the Euclidean distance between $P_1$ and $P_2$ is exactly $K$. (Note that $P_1$ and $P_2$ do not need to have integer coordinates.)

You should answer $Q$ queries. In each query, you are given the required distance $K$. Chef is interested in finding the number of good pairs of distinct circles for each query. Please help him.

Note: Circle $i$ and circle $j$ are distinct when $i \neq j$. There may be any number of circles that coincide (have identical centers and radii).

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$ denoting the number of circles and the number of queries respectively.
- Each of the following $N$ lines contains three space-separated integers $X$, $Y$ and $R$ describing a circle with radius $R$ and center $(X, Y)$.
- Each of the next $Q$ lines contains one integer $K$ describing a query.
 
### Output
For each query, print a single line containing one integer — the number of good pairs of circles.
 
### Constraints
- $2 \le N \le 10^3$
- $1 \le Q \le 5\cdot 10^5$
- $X, Y \le |2\cdot 10^5|$
- $1 \le R \le 2\cdot 10^5$
- $0 \le K \le 10^6$
 
### Subtasks
**Subtask #1 (30 points):**
- $2 \le N \le 10^2$
- $1 \le Q \le 5\cdot 10^2$

**Subtask #2 (70 points):** original constraints
 
### Example Input
```
2 3
0 0 5
8 3 2
0
10
20
```

### Example Output
```
0
1
0
```

### Explanation
The distance between the point $(0.00, -5.00)$ on circle $1$ and the point $(8.00, 1.00)$ on circle $2$ is $10$. There is no pair of points on these two circles with distance $0$ or $20$.
