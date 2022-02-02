---
{"category_name":"easy","problem_code":"BIGRES","problem_name":"The Biggest Restaurant","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5\r\n1 1\r\n2 2\r\n3 3\r\n4 4\r\n5 5","output":27,"explanation":"\u003Cimg width=\u0022400\u0022 src=\u0022https://codechef_shared.s3.amazonaws.com/download/Images/COOK112/BIGRES/BIGRES.jpg\u0022\u003E\u003C/img\u003E","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"20-08-2019","tags":{"0":"alei","1":"cook112","2":"easy","3":"greedy","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BIGRES","time":{"view_start_date":1574015400,"submit_start_date":1574015400,"visible_start_date":1574015400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BIGRES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK112/hindi/BIGRES.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK112/mandarin/BIGRES.pdf), [Russian](https://www.codechef.com/download/translated/COOK112/russian/BIGRES.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK112/vietnamese/BIGRES.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK112/bengali/BIGRES.pdf) as well.

Chef Ada is building a new restaurant in the following way:
- First, $N$ points $X_1, X_2, \ldots, X_N$ are chosen on the $x$-axis.
- Then, $N$ columns (numbered $1$ through $N$) are made. For simplicity, the columns are represented as vertical segments; for each valid $i$, the height of the $i$-th segment is $H_i$.
- Ada assigns a column to each of the points $X_1, X_2, \ldots, X_N$ in an arbitrary way (each column must be assigned to exactly one point).
- Finally, Ada constructs the roof of the restaurant, represented by a polyline with $N$ vertices. Let's denote the column assigned to the $i$-th point by $P_i$. For each valid $i$, the $i$-th of these vertices is $(X_i, H_{P_i})$, i.e. the polyline joins the tops of the columns from left to right.

Ada wants the biggest restaurant. Help her choose the positions of the columns in such a way that the area below the roof is the biggest possible. Formally, she wants to maximise the area of the polygon whose perimeter is formed by the roof and the segments $(X_N, H_{P_N}) - (X_N, 0) - (X_1, 0) - (X_1, H_{P_1})$. Let $S$ be this maximum area; you should compute $2 \cdot S$ (it is guaranteed that $2 \cdot S$ is an integer).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $X_i$ and $H_i$.

### Output
For each test case, print a single line containing one integer $2 \cdot S$.

### Constraints
- $1 \le T \le 3 \cdot 10^5$
- $2 \le N \le 10^5$
- $0 \le X_1 \lt X_2 \lt \ldots \lt X_N \le 2 \cdot 10^9$
- $1 \le H_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
1
5
1 1
2 2
3 3
4 4
5 5
```

### Example Output
```
27
```
### Explanation
<img width="400" src="https://codechef_shared.s3.amazonaws.com/download/Images/COOK112/BIGRES/BIGRES.jpg"></img>

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>