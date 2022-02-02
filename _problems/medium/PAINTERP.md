---
{"category_name":"medium","problem_code":"PAINTERP","problem_name":"Painter Problem","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4\r\n40 110\r\n100 140\r\n-100 100\r\n-100 60","output":8,"explanation":"**Example case 1:** The paper with all triangles and eight numbered districts is shown in the figure below.\r\n\r\n\u003Cimg src=\u0022https://s3.amazonaws.com/codechef_shared/uploads/2020/LTM81/LTM812.png\u0022 width=\u002275%\u0022 /\u003E","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"26-02-2020","tags":{"0":"admin3","1":"geometry","2":"ltime81","3":"medium","4":"sweep","5":"tmwilliamlin"},"problem_difficulty_level":"Medium","best_tag":"Sweep Line","editorial_url":"https://discuss.codechef.com/problems/PAINTERP","time":{"view_start_date":1582995602,"submit_start_date":1582995602,"visible_start_date":1582995602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PAINTERP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME81/hindi/PAINTERP.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME81/bengali/PAINTERP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME81/mandarin/PAINTERP.pdf), [Russian](https://www.codechef.com/download/translated/LTIME81/russian/PAINTERP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME81/vietnamese/PAINTERP.pdf) as well.

Chef is a painter. He likes to draw geometric figures and among them, he especially loves isosceles right triangles. The longest side of a right triangle is called its hypotenuse. Chef drew $N$ isosceles right triangles (numbered $1$ through $N$) on an infinite sheet of paper, which can be represented by a Cartesian half-plane (containing all points $(x, y)$ such that $y \ge 0$), in such a way that the hypotenuse of each triangle lies on the $x$-axis (the line $y=0$). For example, the resulting figure could look like this:

<img src="https://s3.amazonaws.com/codechef_shared/uploads/2020/LTM81/LTM811.png" width="75%"/>

The sides of the triangles and the $x$-axis split the paper into one or more contiguous regions, which Chef calls *districts*. Chef is fascinated by his drawing, so he would like to know how many districts are on his paper. For each valid $i$, the hypotenuse of the $i$-th triangle is the line segment between points $(l_i, 0)$ and $(r_i, 0)$; note that the triangles are uniquely defined by this information.

Help Chef calculate the number of districts in the painting.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $l_i$ and $r_i$.

### Output
For each test case, print a single line containing one integer ― the number of districts.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $-10^9 \le l_i \lt r_i \le 10^9$ for each valid $i$
- the pairs $(l_1, r_1), (l_2, r_2), \ldots, (l_N, r_N)$ are distinct

### Subtasks
**Subtask #1 (50 points):** $N \le 10^3$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
4
40 110
100 140
-100 100
-100 60
```

### Example Output
```
8
```
	
### Explanation
**Example case 1:** The paper with all triangles and eight numbered districts is shown in the figure below.

<img src="https://s3.amazonaws.com/codechef_shared/uploads/2020/LTM81/LTM812.png" width="75%" />

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>