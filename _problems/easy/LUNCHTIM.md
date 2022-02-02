---
{"category_name":"easy","problem_code":"LUNCHTIM","problem_name":"Lunchtime","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5\r\n1 2 2 3 2","output":"0 1 1 0 0","explanation":"**Example case 1:** Student $3$ can see students $2$ and $4$, but only student $2$ has the same height (height $2$). On the other hand, student $3$ cannot see student $5$ since student $4$ is taller and therefore blocking the view.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Cpnw2n75w7A","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nbmnb","problem_tester":"","date_added":"2-01-2021","tags":{"0":"easy","1":"ltime94","2":"nbmnb","3":"stack"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/LUNCHTIM","time":{"view_start_date":1616864402,"submit_start_date":1616864402,"visible_start_date":1616864402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LUNCHTIM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/LTIME94/russian/LUNCHTIM.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME94/bengali/LUNCHTIM.pdf), and [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME94/mandarin/LUNCHTIM.pdf) as well.

There are $N$ students standing in a canteen queue, numbered $1$ to $N$ from left to right. For each valid $i$, the $i$-th student has a height $h_i$.

Two students $i$ and $j$ can see each other if there are no taller students standing between them. Formally, students $i$ and $j$ ($i \lt j$) can see each other if for each integer $k$ ($i \lt k \lt j$), $h_k \le h_i, h_j$.

For each valid $i$, determine the number $c_i$ of students that have the same height as student $i$ and can be seen by student $i$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $h_1, h_2, \ldots, h_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers $c_1, c_2, \ldots, c_N$.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le h_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (30 points):** the sum of $N$ over all test cases does not exceed $10^3$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
5
1 2 2 3 2
```

### Example Output
```
0 1 1 0 0
```

### Explanation
**Example case 1:** Student $3$ can see students $2$ and $4$, but only student $2$ has the same height (height $2$). On the other hand, student $3$ cannot see student $5$ since student $4$ is taller and therefore blocking the view.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>