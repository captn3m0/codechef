---
{"category_name":"easy","problem_code":"DENSEGRP","problem_name":"Dense Graph","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 2 1 2\r\n1 2 4 5\r\n5 5 2 3\r\n6 1 3 4\r\n1 6 3 3\r\n2 1 2 2\r\n1 1 1 1","output":"2\r\n-1\r\n0","explanation":"**Example case 1:** The shortest path is $1 \\rightarrow 5 \\rightarrow 2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/_PybsTATV_U","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"sawarnik123","problem_tester":"","date_added":"12-12-2020","tags":{"0":"breadth","1":"easy","2":"march21","3":"sawarnik123","4":"segment","5":"shortest"},"problem_difficulty_level":"Easy-Medium","best_tag":"Shortest Path","editorial_url":"https://discuss.codechef.com/problems/DENSEGRP","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DENSEGRP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/DENSEGRP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/DENSEGRP.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/DENSEGRP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/DENSEGRP.pdf) as well.

You are given an unweighted directed graph with $N$ vertices (numbered $1$ through $N$). You are also given $2M$ ranges $[A_1, B_1], [A_2, B_2], \ldots, [A_M, B_M]$ and $[C_1, D_1], [C_2, D_2], \ldots, [C_M, D_M]$ describing the edges of the graph in the following way: For each $i$ ($1 \le i \le M$) and for each pair of vertices $u \in [A_i, B_i]$, $v \in [C_i, D_i]$, there is an edge from $u$ to $v$.

Finally, you are given two vertices $X$ and $Y$. Find the shortest distance from $X$ to $Y$ or determine that there is no path from $X$ to $Y$.
 
### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains four space-separated integers $N$, $M$, $X$ and $Y$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains four space-separated integers $A_i$, $B_i$, $C_i$ and $D_i$.

### Output
For each test case, print a single line containing one integer ― the shortest distance from vertex $X$ to vertex $Y$, or $-1$ if there is no path from $X$ to $Y$.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N \le 10^9$
- $1 \le M \le 2 \cdot 10^5$
- $1 \le X, Y \le N$
- $1 \le A_i \le B_i \le N$ and $1 \le C_i \le D_i \le N$ for each valid $i$
- the sum of $M$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (10 points):** 
- $1 \le N \le 10,000$
- $1 \le M \le 5,000$
- the sum of $M$ over all test cases does not exceed $5,000$

**Subtask #2 (10 points):** for any two of the $2M$ given ranges (denoted by $[x_1, x_2]$ and $[x_3, x_4]$), one of the following conditions holds:
- $[x_1, x_2] = [x_3, x_4]$
- they are non-overlapping, i.e. $x_2 \lt x_3$ or $x_4 \lt x_1$

**Subtask #3 (20 points):** for any two of the $2M$ given ranges (denoted by $[x_1, x_2]$ and $[x_3, x_4]$), one of the following conditions holds:
- one range lies inside the other, i.e. $x_1 \le x_3 \le x_4 \le x_2$ or $x_3 \le x_1 \le x_2 \le x_4$
- they are non-overlapping, i.e. $x_2 \lt x_3$ or $x_4 \lt x_1$

**Subtask #4 (60 points):** original constraints

### Example Input
```
3
5 2 1 2
1 2 4 5
5 5 2 3
6 1 3 4
1 6 3 3
2 1 2 2
1 1 1 1
```

### Example Output
```
2
-1
0
```

### Explanation
**Example case 1:** The shortest path is $1 \rightarrow 5 \rightarrow 2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>