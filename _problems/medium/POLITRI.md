---
{"category_name":"medium","problem_code":"POLITRI","problem_name":"Points, Lines, Triangles and Graphs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"12-12-2018","tags":{"0":"jtnydv25"},"editorial_url":"https://discuss.codechef.com/problems/POLITRI","time":{"view_start_date":1544985000,"submit_start_date":1544985000,"visible_start_date":1544985000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given an integer $k$. You want to choose $n$ points on the plane and join some pairs of those points with line segments (let us call them edges), such that :

- $n \lt 510$
- Any two points are distinct
- No three points are collinear
- The points have non-negative integer coordinates $\leq 10^9$.
- No two edges (drawn line segments) intersect at a point which is not an endpoint of either edge.
- The number of triangles in the figure is exactly $k$.

Note : A triangle means a triple of points such that there is an edge between any two of them.

It is guaranteed that it is possible to select a set of points and line segments satisfying the above conditions.

###Input:

- The only line of the input contains $k$, the number of required triangles.

###Output:
- In first line print two integers, $n$ and $m$, the number of chosen points and number of line segments (edges) drawn between them. They must satisfy $1 \leq n \lt 510$ and $0 \leq m \leq \frac{n(n-1)}{2}$
- $i^{\text{th}}$ of the next $n$ lines should contain two space separated integers, $x_i, y_i$ denoting the $i^{th}$ chosen point. The coordinates must be non-negative and $\leq 10^9$, i.e. $0 \leq x_i, y_i \le 10^9$.
-  $i^{\text{th}}$ of the next $m$ lines should contain two integers $u_i$ and $v_i$, denoting a line segment connecting the $u_i^{th}$ chosen point and the $v_i^{th}$ chosen point. $ 1 \leq u_i, v_i \leq n$ should be satisfied. No edge should be printed more than once.

If there are multiple solutions, you can print any of them.

###Constraints 
- $ 1 \leq k \leq 1500$

###Sample Input:
```
2
```

###Sample Output:
```
4 5
0 0
0 1
1 0
1 1
1 2
1 3
2 3
2 4
3 4
```
	
###Explanation:
The figure shows the configuration corresponding to the given output. It contains 4 points, and 5 edges. Clearly there are 2 triangles, as the input requires it to be.

![After second second](https://codechef_shared.s3.amazonaws.com/download/Images/TST18KGP/POLITRI/1.png =275x275)

