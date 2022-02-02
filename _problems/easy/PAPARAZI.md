---
{"category_name":"easy","problem_code":"PAPARAZI","problem_name":"Paparazzi Gennady","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n2\r\n1 2\r\n3\r\n1 2 3\r\n7\r\n3 2 5 3 2 4 3\r\n8\r\n1 2 4 3 5 4 2 1","output":"1\r\n2\r\n3\r\n2","explanation":"**Example case 3:**\r\n\r\n![](https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/PAPARAZI/PAPARAZI0.png)","isDeleted":false}}},"video_editorial_url":"https://youtu.be/OVwGyWHrjlQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"fairy_winx","problem_tester":"","date_added":"12-02-2021","tags":{"0":"convex","1":"easy","2":"fairy_winx","3":"march21"},"problem_difficulty_level":"Easy-Medium","best_tag":"Convex Hull","editorial_url":"https://discuss.codechef.com/problems/PAPARAZI","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PAPARAZI","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/PAPARAZI.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/PAPARAZI.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/PAPARAZI.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/PAPARAZI.pdf) as well.

The young but promising paparazzi Gennady wants to finally become famous. To do this, he wants to take a picture of a new super star during her walk in the mountains.

It is known that the star's path in the mountains consists of $N$ sections. For each valid $i$, the $i$-th section is a vertical half-open interval with coordinates $x = i$ and $y \in [0, h_i)$.

For each valid $i$ and $j$, our hero can take a picture of the star located in the $i$-th section of the walk when he is in the $j$-th section only if he can see the star ― that is, $i \lt j$ and for each $k$ ($i \lt k \lt j$), the half-open interval that makes up the $k$-th section must not intersect the line segment $[(i, h_i), (j, h_j)]$.

Gennady is a paparazzi, not a programmer, so he asks you to determine the maximum distance from which he can take a picture of the star, which is the maximum value of $j-i$ over all pairs $(i, j)$. Help him become famous!

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $h_1, h_2, \ldots, h_N$.

### Output
For each test case, print a single line containing one integer ― the maximum distance.

### Constraints
- $1 \leq T \leq 10^4$
- $2 \leq N \leq 5 \cdot 10^5$
- $1 \leq h_i \leq 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (10 points):** the sum of $N$ over all test cases does not exceed $500$

**Subtask #2 (10 points):** the sum of $N$ over all test cases does not exceed $8,000$

**Subtask #3 (80 points):** original constraints

### Example Input
```
4
2
1 2
3
1 2 3
7
3 2 5 3 2 4 3
8
1 2 4 3 5 4 2 1
```

### Example Output
```
1
2
3
2
```

### Explanation
**Example case 3:**

![](https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/PAPARAZI/PAPARAZI0.png)
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>