---
{"category_name":"hard","problem_code":"NGONS","problem_name":"Flipping Polygons","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"sidhant007","problem_tester":null,"date_added":"15-12-2018","tags":{"0":"sidhant007"},"time":{"view_start_date":1545126000,"submit_start_date":1545126000,"visible_start_date":1545126000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>The Fibonacci numbers is the series of numbers:
1, 1, 2, 3, 5, 8, 13, 21, 34, ...
The next number is found by adding up the two numbers before it. A fibonacci polygon is  polygon whose number of vertices is a fibonacci number.

You are given an array of $N$ regular fibonacci polygons, where each polygon is a regular $A_i$-gon. The vertices of this $A_i$-gon are numbered from $1$ to $A_i$ in clockwise order. If $A_i$ is odd, then imagine the polygon to be drawn in such a way that Vertex 1 is on the y-axis, and is the vertex with the largest y-coordinate. If $A_i$ is even, then imagine the polygon to be drawn in such a way that Vertex 1 and Vertex 2 are on either side of the y-axis (Vertex 1 with negative x-coordinate and Vertex 2 with positive x-coordinate), both with the same y-coordinate, and these are the two vertices with the largest y-coordinates among all the vertices.
 
Note that it is ensured that all $A_i$ are fibonacci numbers. 

There are $Q$ operations of three types going to be applied onto this array of polygons - 
- 1 $L$ $R$ $P$: Rotate all the polygons in the subarray $L$ to $R$ by $P$ clockwise rotations.

Note: $1$ clockwise rotation for a $k$-gon means rotating the $k$-gon by $360/k$ degrees.
- 2 $L$ $R$: Reflect all the polygons in the subarray $L$ to $R$ along their y-axis (if kept on paper in 2-D plane)
- 3 $X$ $Y$: For the $X_{th}$ polygon, print the location of the $Y_{th}$ vertex.

Note: Location of a vertex refers to the position it is sitting on currently. That is, which was the vertex which was originally at this position at the beginning? See the example below for better understanding.

###Input:
- The first line contains two integers $N$ and $Q$.
- The next line contains $N$ integers: $A_1, A_2, \ldots A_N$, denoting the number of vertices in each polygon in the array.
- The next $Q$ lines contain $Q$ queries in the format as described above.

###Output:
For each query of Type 3, output in a new line the location of the $Y_{th}$ vertex of the $X_{th}$ polygon.

###Constraints
- $1 \leq N \leq 10^5$
- $1 \leq Q \leq 10^5$
- $1 \leq A_i \leq 10^9$
- $A_i$ is a fibonacci number, for all $1 \leq i \leq N$

For all the queries - 
- $1 \leq L \leq R \leq N$
- $1 \leq P \leq 10^9 $
- $1 \leq Y \leq A_X$, for all $X, Y$ of Type 3

###Sample Input:
```
3 3
2 5 8
1 1 3 2
2 1 3
3 2 3
```

###Sample Output:
```
2
```

###Explanation:
Let us focus only on the second polygon. It is a pentagon. After 1st query, Vertex 3 moves to position 5. After 2nd query, i.e reflection,  Vertex 3 moves to position 2.


![Explanation for the sample](https://codechef_shared.s3.amazonaws.com/download/Images/TST18GWR/NGONS/1.png =600x500)