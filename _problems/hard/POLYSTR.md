---
{"category_name":"hard","problem_code":"POLYSTR","problem_name":"Polygon and String","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"15-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1545157800,"submit_start_date":1545157800,"visible_start_date":1545157800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given a list of $n$ points $p_0, p_1, ..., p_{n-1}$ in convex position (ie. all of the points are vertices of their convex hull), such that no three points are collinear and no two points have the same $x$ or $y$ coordinate, so for any $i,j$ we have $x_i \not = x_j$ and $y_i \not = y_j$ where $p_i = (x_i, y_i)$ and $p_j= (x_j, y_j)$.

You will be given a number of queries. Each query is a string $S = s_0 s_1 \ldots s_{n-2}$ of length $n-1$ composed of only the letters $U$ and $D$. For each string, your task is to find a permutation of the points, $p_{\sigma(0)}, p_{\sigma(1)}, ..., p_{\sigma(n-1)}$, such that for $i = 0, 1, ..., n-2 $ we have:

- If the $s_i$ is a $U$ then y coordinate of $p_{\sigma(i)}$ is less than the y coordinate of $p_{\sigma(i+1)}$
- If the $s_i$ is a $D$ then y coordinate of $p_{\sigma(i)}$ is larger than the y coordinate of $p_{\sigma(i+1)}$

Furthermore, we require that the line segments $\overline{p_{\sigma(i)} p_{\sigma(i+1)}}$ for $i = 0, 1, ..., n-2$ intersect with each other only at their end points (if at all).

It is guaranteed that such a permutation exists. If there are multiple solutions, you can output any one.

Note: The vertices in the input are not guaranteed to be in any particular order.

### Input
- The first line of the input consists of two integers $n$ and $m$, the number of points and the number of queries respectively.
- The next $n$ lines contain pairs of space separated integers, corresponding to the $x$ and $y$ coordinate of the point.
- The next $m$ lines contain the queries, which are strings of length $n-1$.

### Output
For each query, print out on a new line the permutation $\sigma(0), \sigma(1), ..., \sigma(n-1)$ as a list of space separated integers.

###Constraints
- $3 \le n \le 5000$
- $1 \le n \cdot m \le 10000$
- $0 \le x, y \le 10^7$

### Example Input
```
3 2
2 2
3 4
1 1
UU
UD
```

### Example Output
```
2 0 1
2 1 0
```

###Explanation
**Testcase 1:** The outputted permutation corresponds to this:

![Initial](https://codechef_shared.s3.amazonaws.com/download/Images/TST18GWR/POLYSTR/1.png =375x375)

**Testcase 2:** The outputted permutation corresponds to this:

![Initial](https://codechef_shared.s3.amazonaws.com/download/Images/TST18GWR/POLYSTR/2.png =375x375)
