---
{"category_name":"easy","problem_code":"TRIQRY","problem_name":"Triangle Query","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n6 3\r\n1 2\r\n14 7\r\n6 3\r\n8 7\r\n11 10\r\n14 2\r\n0 10\r\n2 22\r\n11 17","output":"1 3 1","explanation":"**Example case 1:** \r\n\u003Cimg src = \u0022https://codechef_shared.s3.amazonaws.com/download/Images/LTIME83/TRIQRY/Tri.PNG\u0022\u003E","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sajib_readd","problem_tester":null,"date_added":"19-04-2020","tags":{"0":"easy","1":"geometry","2":"ltime83","3":"sajib_readd","4":"segment","5":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/TRIQRY","time":{"view_start_date":1587834602,"submit_start_date":1587834602,"visible_start_date":1587834602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRIQRY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME83/hindi/TRIQRY.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME83/bengali/TRIQRY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME83/mandarin/TRIQRY.pdf), [Russian](https://www.codechef.com/download/translated/LTIME83/russian/TRIQRY.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME83/vietnamese/TRIQRY.pdf) as well.

You are given $N$ points (numbered $1$ through $N$) in a Cartesian coordinate system. For each valid $i$, the coordinates of the $i$-th point are $(x_i, y_i)$.

You should answer $Q$ queries (numbered $1$ through $Q$). For each valid $i$, in the $i$-th query:
- You are given two points $L = (l_i, 0)$ and $R = (r_i, 0)$.
- Consider an isosceles right triangle such that its hypothenuse is the line segment between the points $L$ and $R$ (two of its vertices) and the vertex opposite to it lies above the $x$-axis.
- The answer to this query is the number of points among the given $N$ points which lie inside or on the perimeter of this triangle.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $x_i$ and $y_i$.
- $Q$ more lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $l_i$ and $r_i$.

### Ouput
For each test case, print a single line containing $Q$ space separated integers. For each valid $i$, the $i$-th of these integers should be the answer to the $i$-th query.

### Constraints
- $1 \le T \le 100$
- $1 \le N, Q \le 10^6$
- $0 \le x_i, y_i \le 10^6$ for each valid $i$
- $0 \le l_i \lt r_i \le 10^6$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $Q$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $N \le 10^5$
- $r_1-l_1 = r_2-l_2 = \ldots = r_N-l_N$
- the sum of $N$ over all test cases does not exceed $10^5$
- the sum of $Q$ over all test cases does not exceed $10^5$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
6 3
1 2
14 7
6 3
8 7
11 10
14 2
0 10
2 22
11 17
```

### Example Output
```
1 3 1
```

### Explanation
**Example case 1:** 
<img src = "https://codechef_shared.s3.amazonaws.com/download/Images/LTIME83/TRIQRY/Tri.PNG">

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>