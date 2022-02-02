---
{"category_name":"medium","problem_code":"POLCON","problem_name":"Polygon Containment","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":null,"date_added":"21-12-2019","tags":{"0":"wittyceaser"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1577730600,"submit_start_date":1577730600,"visible_start_date":1577730600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=POLCON","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Bob has created $N$ convex polygons on a $2-D$ plane, which are numbered from $1$ to $N$. He wants Alice to pick a maximum subset of these polygons such that no two polygons, $i, j$ $(i \ne j)$, chosen in the subset are such that the $i^{th}$ polygon is contained strictly within the $j^{th}$ polygon or vice-versa.

Help Alice find the size of the maximum subset.

Note:
- By maximum subset, we mean a subset containing the maximum number of polygons.
- A convex polygon $A$ is said to be strictly inside another convex polygon $B$ if none of its vertices lie on an edge of $B$ or outside $B$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$, the number of polygons. The description of each polygon follows.
- The $i^{th}$ polygon is described as follows:
  - The first line contains an integer denoting the number of vertices of the polygon, $V_i$.
  - $V_i$ lines follow. Each line contains $2$ space-separated integers denoting the $x$ co-ordinate and $y$ co-ordinate of that vertex respectively.
  - The vertices are ordered in anti-clockwise direction.

### Output
For each test case, print a single line containing an integer - the size of the largest subset of polygons that can be chosen as per the requirements mentioned in the problem.

### Constraints
- $1 \le T \le 5$
- $2 \le N \le 100$, where $N$ denotes the number of polygons 
- $3 \le V_i \le 100$, where $V_i$ denotes the number of vertices in the $i^{th}$ polygon.
- $-10^9 \le$ all coordinates of vertices $\le 10^9$
- Sum of $N$ across all $T$ testcases does not exceed $100$.

### Example Input
```
3
2
4
0 0
1 0
1 1
0 1
4
2 0
3 0
3 1
2 1
3
10
56 0
85 14
93 24
97 33
99 52
96 69
91 78
6 75
4 71
0 59
5
50 42
74 33
77 36
76 55
56 57
30
110 147
111 142
112 139
114 134
117 129
122 123
126 119
132 115
136 113
141 111
146 110
163 110
181 118
184 120
189 125
194 132
195 134
199 145
198 167
192 180
183 190
178 193
167 198
161 199
142 198
137 196
124 188
117 180
113 173
110 164
2
4
0 2
0 0
2 0
2 2
4
0 2
0 1
1 1
1 2
```

### Example Output
```
2
2
2
```

### Explanation
**Example case 1:** Polygon $1$ is not contained inside Polygon $2$ and neither is Polygon $2$ contained in Polygon $1$. Hence, both of them can be selected in the optimal solution.

**Example case 2:** Polygon $2$ lies inside Polygon $1$. Hence, at most one of them can be selected in the subset.

<img src="https://CodeChef.com/uploads/2019/AR/2.jpeg" height="400" width="400">

**Example case 3:** Polygon $2$ has a vertex lying on a side of Polygon $1$ and hence, it is not strictly inside Polygon $1$. Both polygons can be selected in the optimal solution.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>