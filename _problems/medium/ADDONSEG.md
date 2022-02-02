---
{"category_name":"medium","problem_code":"ADDONSEG","problem_name":"Adding on Segments","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5\r\n1 1 3 3 2\r\n0 0 2 1 0\r\n4\r\n1 1 1 1\r\n2 2 2 2\r\n3\r\n2 0 1\r\n0 3 5","output":"YES\r\nNO\r\nNO","explanation":"**Example case 1:** We can make everything $0$ using two operations: choose $i = 4$ and change the circular sequence $(1, 1, 3, 3, 2)$ to $(1-1, 1-1, 3-1, 3-1, 2) = (0, 0, 2, 2, 2)$, then choose $i = 3$ and change it to $(0, 0, 2-2, 2-2, 2-2) = (0, 0, 0, 0, 0)$.\r\n\r\n**Example case 2:** The parities of integers on the circle cannot change, so they cannot become $0$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anton_trygub","problem_tester":"","date_added":"22-09-2020","tags":{"0":"anton_trygub","1":"ltime88","2":"math","3":"medium","4":"number"},"problem_difficulty_level":"Medium-Hard","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/ADDONSEG","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ADDONSEG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME88/hindi/ADDONSEG.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME88/bengali/ADDONSEG.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME88/mandarin/ADDONSEG.pdf), [Russian](https://www.codechef.com/download/translated/LTIME88/russian/ADDONSEG.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME88/vietnamese/ADDONSEG.pdf) as well.

There are $N$ integers $A_1, A_2, \ldots, A_N$ on a circle. For each valid $i$, $A_i$ and $A_{i+1}$ are adjacent; $A_1$ and $A_N$ are also adjacent.

Chef has a sequence of integers $B_1, B_2, \ldots, B_N$, which he may use to perform any number of operations (including zero). In one operation, he should do the following:
- Choose an integer $i$ ($1 \le i \le N$).
- Choose $i$ consecutive integers on the circle.
- Choose a sign $S = \pm 1$ and add $S \cdot B_i$ to each of the chosen integers. In other words, either add $B_i$ to each of them or subtract $B_i$ from each of them.

The goal is to make all the integers on the circle equal to $0$. Can Chef achieve it using these operations?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to make all integers on the circle equal to $0$ or `"NO"` if it is impossible.

### Constraints
- $1 \le N \le 10^3$
- $0 \le A_i, B_i \le 10^4$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^4$

### Subtasks
**Subtask #1 (40 points):** $A_1 = A_2 = \ldots = A_N$

**Subtask #2 (60 points):** original constraints

### Example Input
```
3
5
1 1 3 3 2
0 0 2 1 0
4
1 1 1 1
2 2 2 2
3
2 0 1
0 3 5
```

### Example Output
```
YES
NO
NO
```

### Explanation
**Example case 1:** We can make everything $0$ using two operations: choose $i = 4$ and change the circular sequence $(1, 1, 3, 3, 2)$ to $(1-1, 1-1, 3-1, 3-1, 2) = (0, 0, 2, 2, 2)$, then choose $i = 3$ and change it to $(0, 0, 2-2, 2-2, 2-2) = (0, 0, 0, 0, 0)$.

**Example case 2:** The parities of integers on the circle cannot change, so they cannot become $0$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>