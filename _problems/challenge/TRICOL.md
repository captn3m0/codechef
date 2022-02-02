---
{"category_name":"challenge","problem_code":"TRICOL","problem_name":"(Challenge) Coloring Triangulations","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"17-10-2019","tags":{"0":"alei"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1573464602,"submit_start_date":1573464602,"visible_start_date":1573464602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRICOL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV19/hindi/TRICOL.pdf), [Bengali](https://www.codechef.com/download/translated/NOV19/bengali/TRICOL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV19/mandarin/TRICOL.pdf), [Russian](https://www.codechef.com/download/translated/NOV19/russian/TRICOL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV19/vietnamese/TRICOL.pdf) as well.

After solving the $64 \times 64 \times 64$ Rubik's cube, Chef Ada moved to arts.

For her next masterpiece, Ada drew an abstract painting as follows:
- $N$ points (numbered $1$ through $N$) are painted on a 2D canvas. Some of these points are red ('R'), some are blue ('B') and the rest are green ('G'). No three points are collinear.
- A <a href="https://en.wikipedia.org/wiki/Point_set_triangulation">triangulation</a>, i.e. a maximum set of non-intersecting triangles such that the vertices of each triangle are three of the points painted in the previous step, is drawn on the canvas. The edges of the triangles are black and the colours of the points are unaffected by this. Triangles may share edges or vertices, only intersections with positive area are not allowed.

Ada is not satisfied with her painting, so she wants to modify it a bit using the following operations:
- Change the colour of a point. The cost of this operation is $X$.
- Flip one edge: if there is a convex quadrilateral which contains this edge as a diagonal, erase this edge and draw a new edge corresponding to the other diagonal of this quadrilateral. (Note that some edges cannot be flipped. It can be proved that if such a quadrilateral exists, it is unique and the resulting drawing also corresponds to a triangulation.) The cost of this operation is $Y$.

The operations may be performed multiple times in any order. Let's denote the number of operations of the first type by $C$ and the number of operations of the second type by $F$. Performing many operations could ruin the painting, though, so Ada wants to perform at most $P$ operations of the first type ($C \le P$) and at most $Q$ operations of the second type ($F \le Q$).

Ada thinks that a triangle is ugly if at least two of its vertices have the the same colour. Let $U$ be the number of ugly triangles after performing the operations. Help Ada choose the operations to perform in a way that minimises $G = X \cdot C + Y \cdot F + U^2$, where $X$ and $Y$ are given coefficients.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$, where $M$ denotes the number of triangles in the original triangulation.
- The second line contains four space-separated integers $X$, $Y$, $P$ and $Q$.
- The third line contains a string $S$ with length $N$. For each valid $i$, the $i$-th character of $S$ denotes the colour of the $i$-th point.
- For each valid $i$, the $i$-th of the next $N$ lines contains two space-separated integers $x_i$ and $y_i$ denoting the coordinates of the $i$-th point.
- For each valid $i$, the $i$-th of the last $M$ lines contains three space-separated integers $a_i$, $b_i$ and $c_i$ denoting the points that are vertices of the $i$-th triangle.

### Output
- First, print a line containing two space-separated integers $C$ and $F$.
- Then, print a line containing a string with length $N$. For each valid $i$, the $i$-th character of this string should denote the final colour of the $i$-th point ('R', 'G' or 'B').
- Finally, print $F$ lines describing the sequence of performed edge flips. Each of these lines should contain two space-separated integers $u$ and $v$ denoting that the edge between points $u$ and $v$ should be flipped.

### Explanation
<img src="https://codechef_shared.s3.amazonaws.com/download/Images/NOV19/TRICOL/TRICOL.jpg" width="555"></img>

After performing the operations, the ugly triangles are $\triangle \mathsf{ABD}$, $\triangle \mathsf{ACG}$ and $\triangle \mathsf{ACF}$. Note that the edge $\mathsf{AC}$ cannot be flipped to $\mathsf{FG}$ because the quadrilateral $\mathsf{AGCF}$ is not convex.

### Constraints
- $N = 512$
- $M \le 2^{10}$
- $X \cdot Y \le 1,600$
- $1 \le P \le N$
- $1 \le Q \le 2^{10}$
- $S$ contains only characters 'R', 'G' and 'B'
- no three of the given points are collinear
- $1 \le x_i, y_i \le 10^4$ for each valid $i$
- $1 \le a_i, b_i, c_i \le N$ for each valid $i$

### Example Input
```
7 7
10 160 10 10
BBBBBBB
1 1
2 4
3 2
5 5
6 3
4 1
4 3
1 2 7
1 3 7
1 3 6
2 4 7
4 5 7
3 5 7
3 5 6
```


### Example Output
```
3 2
BBBGBGR
2 7
3 5
```

### Scoring
The score for each test case (and therefore each test file) is $G = X \cdot C + Y \cdot F + U^2$. The score of a submission is equal to the sum of its scores over all test cases. Your goal is to minimise the score of your submission.

There are ten test files. During the contest, the displayed score will account for exactly three test files, i.e. your score reflects your submission's performance on 30% (3/10) of the test files; However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other seven test files.

### Test generation
Each test is generated as follows:
- $N$ points are chosen uniformly randomly in such a way that no three of them are collinear.
- Each point is assigned a random colour: 'R', 'G' or 'B'.
- A Delaunay triangulation is calculated.
- A parameter $K$ is chosen manually.
- A sequence of $K$ edge flips is performed. In each flip, the edge to flip is chosen uniformly randomly among all edges that can be flipped in the current triangulation.

There is one test file for each combination of the following parameters:
- $K = 16$ or $K = 256$
- $P = N/2$
- $Q = 2^{10}$
- $(X, Y) = (10, 160)$, $(X, Y) = (20, 80)$, $(X, Y) = (40, 40)$, $(X, Y) = (80, 20)$ or $(X, Y) = (160, 10)$


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>