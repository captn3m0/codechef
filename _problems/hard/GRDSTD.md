---
{"category_name":"hard","problem_code":"GRDSTD","problem_name":"Greedy Students","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5 15\r\n0 0\r\n10 0\r\n10 10\r\n0 10\r\n5 5","output":"200 100 100 100 100 50 50 50 50 -1 -1 -1 -1 -1 -1","explanation":"The following figure describes the points and some polygons.\r\n\r\n\u003Cimg src=\u0022https://codechef_shared.s3.amazonaws.com/download/Images/JAN21/GRDSTD/GRDSTD.png\u0022\u003E\u003C/img\u003E\r\n\r\n- The first student chooses the largest polygon $\\mathsf{ABCD}$ with area $100$.\r\n- The next four students choose the triangles $\\mathsf{ABC}$, $\\mathsf{BCD}$, $\\mathsf{CDA}$ and $\\mathsf{DAB}$, each with area $50$. Note that for example, the polygon $\\mathsf{AECB}$ is not convex because it has one internal angle equal to $180^{\\circ}$.\r\n- The next four students choose the triangles $\\mathsf{AEB}$, $\\mathsf{BEC}$, $\\mathsf{CED}$ and $\\mathsf{DEA}$, each with area $25$.\r\n- There are no more polygons the students can choose, so the remaining six students are left without a polygon.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Im4Z1v4bXdA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"upobir","problem_tester":"","date_added":"23-12-2020","tags":{"0":"dag","1":"dynamic","2":"geometry","3":"jan21","4":"persistence","5":"super","6":"upobir"},"problem_difficulty_level":"Super-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/GRDSTD","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GRDSTD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/GRDSTD.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/GRDSTD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/GRDSTD.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/GRDSTD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/GRDSTD.pdf) as well.

Rafid is teaching his students plane geometry. Today they are talking about convex polygons. A [convex polygon](https://en.wikipedia.org/wiki/Convex_polygon) is a simple non-degenerate polygon such that each of its internal angles is strictly smaller than $180^\circ$.

Rafid drew $N$ points (numbered $1$ through $N$) on a blackboard (a two-dimensional plane) and told each student to choose some of the points and connect them to obtain a convex polygon. For each valid $i$, the coordinates of the $i$-th point are $(X_i, Y_i)$.

There are $K$ students (numbered $1$ through $K$). To prevent the students from choosing the same polygon over and over, Rafid told them that they have to choose polygons one by one in the order from student $1$ to student $K$ and each student has to choose a set of points which was not chosen by any earlier student. That means they have to choose $K$ different sets of points, resulting in $K$ different polygons. As a result, some students may end up unable to choose any polygon.

To encourage the students, Rafid announced that each student will receive a number of candies proportional to the area of this student's polygon. The students are very greedy, so the first student will choose the polygon with the largest area, the second student will choose the polygon with the largest area which does not use the same set of points as the first student's polygon, and so on.

For each student, help Rafid find the area of the polygon chosen by this student or determine that this student cannot choose a polygon anymore. Note that while there may be many ways in which the students could choose their polygons, their areas are uniquely determined.

### Input
- The first line of the input contains two space-separated integers $N$ and $K$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $X_i$ and $Y_i$.

### Output
Print a single line containing $K$ space-separated integers $A_1, A_2, \ldots, A_K$. For each valid $i$, $A_i$ should be twice the area of a polygon chosen by the $i$-th student, or $-1$ if all possible polygons have already been chosen by students before the $i$-th student.

### Constraints
- $3 \leq N \leq 120$
- $1 \leq K \leq 10^6$
- $|X_i|, |Y_i| \leq 10^6$ for each valid $i$
- the points $(X_1, Y_1), (X_2, Y_2), \ldots, (X_N, Y_N)$ are pairwise distinct

### Subtasks
**Subtask #1 (5 points):**
- $K = 2$
- it is possible to form at least $K$ convex polygons

**Subtask #2 (15 points):** $K \leq 1,000$

**Subtask #3 (80 points):** original constraints

### Example Input
```
5 15
0 0
10 0
10 10
0 10
5 5
```

### Example Output
```
200 100 100 100 100 50 50 50 50 -1 -1 -1 -1 -1 -1
```

### Explanation
The following figure describes the points and some polygons.

<img src="https://codechef_shared.s3.amazonaws.com/download/Images/JAN21/GRDSTD/GRDSTD.png"></img>

- The first student chooses the largest polygon $\mathsf{ABCD}$ with area $100$.
- The next four students choose the triangles $\mathsf{ABC}$, $\mathsf{BCD}$, $\mathsf{CDA}$ and $\mathsf{DAB}$, each with area $50$. Note that for example, the polygon $\mathsf{AECB}$ is not convex because it has one internal angle equal to $180^{\circ}$.
- The next four students choose the triangles $\mathsf{AEB}$, $\mathsf{BEC}$, $\mathsf{CED}$ and $\mathsf{DEA}$, each with area $25$.
- There are no more polygons the students can choose, so the remaining six students are left without a polygon.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>