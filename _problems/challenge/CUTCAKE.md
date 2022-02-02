---
{"category_name":"challenge","problem_code":"CUTCAKE","problem_name":"Cut the Cake (Challenge)","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"27-01-2021","tags":{"0":"alei","1":"feb21","2":"heuristic","3":"tie","4":"triangulation"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CUTCAKE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CUTCAKE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB21/hindi/CUTCAKE.pdf), [Bengali](https://www.codechef.com/download/translated/FEB21/bengali/CUTCAKE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB21/mandarin/CUTCAKE.pdf), [Russian](https://www.codechef.com/download/translated/FEB21/russian/CUTCAKE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB21/vietnamese/CUTCAKE.pdf) as well.

There are $N$ points in a plane (numbered $1$ through $N$). For each valid $i$, the coordinates of the $i$-th point are $(X_i, Y_i)$. No three of these points are collinear. Let's denote a line segment between points $u$ and $v$ by $(u,v)$.

You are given a [Delaunay triangulation](https://en.wikipedia.org/wiki/Delaunay_triangulation) of those points, which consists of $M$ triangles (numbered $1$ through $M$). For each valid $i$, the vertices of the $i$-th triangle are the points $P_{i,1}, P_{i,2}, P_{i,3}$.

You may perform the following operation any number of times (possibly zero):
- Flip diagonal segment $(u,v)$: If there is a convex quadrilateral that contains this segment as a diagonal and does not contain any points other than its vertices, erase this segment and draw a new segment corresponding to the other diagonal of this quadrilateral. (Note that some segments cannot be flipped. It can be proved that if such a quadrilateral exists, it is unique and the result is also a triangulation.)

Then, you should perform the following operation some number of times:
- Remove a segment $(u,v)$ that is shared by two regions with finite areas. When it is removed, the number of regions decreases by one.

A *region* is defined as a maximal set in the plane such that it does not contain any of the given points or currently existing segments and it is possible to move from each point in this set to any other point in this set without crossing any edge. Note that a region is not necessarily convex. Two regions share a line segment if it is possible to move from one of these regions to the other one by crossing only this segment.

After performing all operations, there must be exactly $R$ regions with finite areas. Let $A_1, A_2, \ldots, A_R$ be these areas sorted in non-decreasing order. You are given the desired areas $B_1, B_2, \ldots, B_R$ of the regions, also sorted in non-decreasing order. Your goal is to make $\sum_{i=1}^R |B_i - 2\cdot A_i|$ as small as possible by performing operations. However, you may only perform up to $1,024$ operations of the first type; note that the number of operations of the second type must always be $M-R$.

### Input
- The first line of the input contains three space-separated integers $N$, $M$ and $R$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $X_i$ and $Y_i$.
- $M$ more lines follow. For each valid $i$, the $i$-th of these lines contains three space-separated integers $P_{i,1}$, $P_{i,2}$ and $P_{i,3}$.
- The last line contains $R$ space-separated integers $B_1, B_2, \ldots, B_R$.

### Output
- First, print a line containing a single integer $F$ ($F \leq 1024$) denoting the number of operations of the first type.
- Then, print $F$ lines. Each of these lines should contain two space-separated integers $u$ and $v$ denoting that you want to flip a diagonal segment $(u,v)$.
- Finally, print $M-R$ lines. Each of these lines should contain two space-separated integers $u$ and $v$ denoting that you want to remove a segment $(u,v)$.

### Example Input
```
8 7 5
0 11
1 5
2 12
5 0
10 12
12 6
13 5
13 11
1 2 3
5 3 2
8 5 6
7 8 6
4 7 6
2 4 6
5 2 6
13 17 18 48 135
```
### Example Output
```
2
6 8
2 5
2 6
6 7
```

### Explanation
The initial triangulation is

<img src="https://codechef_shared.s3.amazonaws.com/download/Images/FEB21/CUTCAKE/CUTCAKE00.png"></img>

After flipping edges $\mathsf{FH}$ and $\mathsf{BE}$, we obtain

<img src="https://codechef_shared.s3.amazonaws.com/download/Images/FEB21/CUTCAKE/CUTCAKE01.png"></img>

After removing edges $\mathsf{BF}$ and $\mathsf{FG}$, we obtain

<img src="https://codechef_shared.s3.amazonaws.com/download/Images/FEB21/CUTCAKE/CUTCAKE02.png"></img>

With this sequence of operations, we get the minimum possible score $0$.

### Test Generation
The source code in C++ used to generate test data can be downloaded [here](http://codechef.com/download/Images/FEB21/CUTCAKE/generator.cp). The generator may crash with some seeds, run it multiple times until it generates the test files.

- $N = 1,024$
- the coordinates of each point are chosen uniformly randomly between $0$ and $10^5$ inclusive, in such a way that no three points are collinear
- a Delaunay triangulation is calculated; this is the triangulation given on the input
- a parameter $F$ is chosen from the set $\{0, 64, 256\}$
- then, $F$ times, a diagonal segment is chosen uniformly randomly among segments in the Delaunay triangulation, and this segment is flipped
- let $V$ be the set of diagonal segments that can be removed from the triangulation after performing the flips.
- a parameter $S$ is chosen from the set $\{64, 128, 256, 512\}$
- then, $S$ uniformly randomly edges are chosen from $V$ and removed from the triangulation. If is not possible to remove all the $S$ edges, then the process is repeated.
- $R = M-S$ is the number of resulting regions with finite areas after removing the edges
- for each of these regions, its area is calculated and multiplied by $2$ (the resulting value is always an integer); $B_1, B_2, \ldots, B_R$ are these values sorted in non-decreasing order

There is one test file for each possible combination of the parameters $F$ and $S$.

### Scoring
If your output is invalid (in particular, if you try to flip a non-diagonal segment, or to remove an edge that is not between two regions with finite areas, or to perform too many flips), you will receive the Wrong Answer verdict.

The score for each test case (and therefore each test file) is $10^8 + \sum_{i=1}^R |B_i - 2\cdot A_i|$. The score of a submission is equal to the sum of its scores over all test cases. Your goal is to minimise the score of your submission.

There are 12 test files. During the contest, the displayed score will account for exactly 6 test files, i.e. your score reflects your submission's performance on 50% (6/12) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other six test files.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>