---
{"category_name":"challenge","problem_code":"NONCONVX","problem_name":"Not a Convex Hull (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"23-04-2018","tags":{"0":"mgch"},"editorial_url":"https://discuss.codechef.com/problems/NONCONVX","time":{"view_start_date":1526290200,"submit_start_date":1526290200,"visible_start_date":1526290200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/MAY18/mandarin/NONCONVX.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/MAY18/russian/NONCONVX.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/MAY18/vietnamese/NONCONVX.pdf" target="_blank">Vietnamese</a> as well.</h3>

### Be careful!!! You are not allowed to submit this problem more than 99 times!

Chef has $N$ randomly generated points with integer coordinates $(x_1, y_1), (x_2, y_2), \dots, (x_N, y_N)$. He asks you to perform the following operation:
- choose up to $K$ of these points, i.e. a subsequence $\left\lbrace(x_{k_i}, y_{k_i})\right\rbrace_{i=1}^L$, where $0 \le L \le K$
- for each $1 \le i \le L$, choose a vector $(dx_i, dy_i)$ with integer coordinates such that $dx_i^2+dy_i^2 \le R^2$
- add $(dx_i, dy_i)$ to $(x_{k_i}, y_{k_i})$, i.e. change $(x_{k_i}, y_{k_i})$ to $(x_{k_i} + dx_i, y_{k_i} + dy_i)$, for each valid $i$

The resulting $N$ points must be pairwise distinct.

Afterwards, you must find a hull containing all $N$ points. The hull must be a simple polygon and no three consecutive points on it may lie on the same line, but it does not have to be convex. You should minimise the area of this hull.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. 
- The first line of each test case contains three space-separated integers $N$, $K$ and $R$.
- For each $i$ ($1 \le i \le N$), the $i$-th of the following $N$ lines contains two space-separated integers $x_i$ and $y_i$. 

### Output
For each test case, print $N+2$ lines.

The first line should contain a single integer $M$ — the number of points on the hull. The second line should contain $M$ space-separated integers $b_1, b_2, \dots, b_M$ — the indices of points on the hull in the order in which they appear on its perimeter (in either direction). The following $N$ lines should describe the final coordinates of all points; for each valid $i$, the $i$-th of these lines should contain two space-separated integers — the coordinates of the $i$-th point.

Your answer must satisfy the following conditions:
- $3 \le M \le N$
- the indices $b_1, b_2, \dots, b_M$ are pairwise distinct
- $1 \le b_i \le N$ for each valid $i$
- no three consecutive points on the hull lie on the same line
- there are no more than $K$ points whose positions on the output are different from their initial positions
- for each valid pair $i, j$ ($i \neq j$), $x_i \neq x_j$ or $y_i \neq y_j$ — all points on the output are pairwise distinct
- all $N$ points are inside or on the perimeter of the hull
- the hull is a simple polygon — no two non-consecutive edges intersect or touch

### Constraints
- $T = 100$
- $N \in [50, 100, 200]$
- $1 \le K \le 10$
- $1 \le R \le 10,000$
- $|x_i|, |y_i| \le 10^5$ for each valid $i$
- all points on the input are pairwise distinct

### Example Input
```
2
6 1 4
0 0
2 0
2 2
0 2
1 0
1 1
6 1 4
0 0
2 0
2 2
0 2
1 0
1 1
```

### Example Output
```
6
4 1 5 6 2 3
0 1
2 0
2 2
0 2
1 0
1 1
4
1 2 3 4
0 0
2 0
2 2
0 2
1 0
1 1
```

### Explanation
Note that $T \neq 100$ in the example for clarity; in all real test files, $T = 100$.

**Example case 1:** We have $N=6$ points $(0, 0), (0, 2), (1, 1), (1, 0), (2, 0), (2, 2)$. We can only perform the operation described in the statement with $K=1$ point. If we had $R \ge 5$, we could change the point $(2, 2)$ to $(2 - 2, 2 - 1) = (0, 1)$ and obtain a set of distinct points $(0, 0), (0, 1), (0, 2), (1, 1), (1, 0), (2, 0)$; this set has a hull on $M=3$ points $(0, 0), (0, 2), (2, 0)$. However, for $R=4$, we can't move $(2, 2)$ to $(2 - 1, 2 - 1)$, since there is a point $(1, 1)$, so the points would not be distinct.

Therefore, we move $(0, 0)$ to $(0 + 0, 0 + 1) = (0, 1)$. Afterwards, we can build a hull on all six points in the order $(0, 2), (0, 1), (1, 0), (1, 1), (2, 0), (2, 2)$.

The area of this hull and the score for this output is $3$.

**Example case 2:** The same input, a different output with score $4$.

### Scoring
Your score for each test case is the area of the resulting hull. Your score for each test file is the sum of scores for all test cases. (For the above example, the score you would obtain is $3$+$4$=$7$.)

### Test Generation Process
There are twenty test files. All test files are generated in the same way. During the contest, the displayed score will account for exactly two test files, i.e. your score reflects your submission's performance on 10% (1/10) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to the sum of your program's scores over all test files.

The pseudocode used for generating the tests is given below. Assume that the function `rnd.next(l, r)` generates a random number uniformly in the range $l$ through $r$ (both inclusive) and `rnd.shuffle(p)` randomly shuffles all elements in $p$.

```
T := 100
Ns := []
for i := 1 to 60:
	Ns.append(50)
for i := 1 to 30:
	Ns.append(100)
for i := 1 to 10:
	Ns.append(200)
rnd.shuffle(Ns)
for i := 1 to 100:
	N := Ns[i - 1]
	K := rnd.next(1, 10)
	R := rnd.next(1, 10000)
	Points := []
	while size(Points) is less than N:
		X := rnd.next(-100000, 100000)
		Y := rnd.next(-100000, 100000)
		if (X, Y) not in Points:
			Points.append((X, Y))
```
