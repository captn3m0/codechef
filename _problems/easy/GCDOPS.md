---
{"category_name":"easy","problem_code":"GCDOPS","problem_name":"GCD operations","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n1 2 2\r\n4\r\n1 2 3 2","output":"NO\r\nYES","explanation":"**Example case 1:** We cannot make the third element of the sequence $(1, 2, 3)$ become $2$.\r\n\r\n**Example case 2:** We can perform one operation with $(i, j) = (2, 4)$, which changes the sequence $(1, 2, 3, 4)$ to $(1, 2, 3, 2)$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/YlSDSgrEUVk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anton_trygub","problem_tester":"","date_added":"12-09-2020","tags":{"0":"anton_trygub","1":"ltime88","2":"math","3":"number","4":"observation","5":"simple"},"problem_difficulty_level":"Simple","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/GCDOPS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GCDOPS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME88/hindi/GCDOPS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME88/bengali/GCDOPS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME88/mandarin/GCDOPS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME88/russian/GCDOPS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME88/vietnamese/GCDOPS.pdf) as well.

Consider a sequence $A_1, A_2, \ldots, A_N$, where initially, $A_i = i$ for each valid $i$. You may perform any number of operations on this sequence (including zero). In one operation, you should choose two valid indices $i$ and $j$, compute the greatest common divisor of $A_i$ and $A_j$ (let's denote it by $g$), and change both $A_i$ and $A_j$ to $g$.

You are given a sequence $B_1, B_2, \ldots, B_N$. Is it possible to obtain this sequence, i.e. change $A$ to $B$, using the given operations?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to obtain $A = B$ or `"NO"` if it is impossible.

### Constraints
- $1 \le N \le 10^4$
- $1 \le B_i \le i$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (10 points):** $N \le 4$

**Subtask #2 (20 points):** there is at most one valid index $p$ such that $B_p \neq p$

**Subtask #3 (70 points):** original constraints

### Example Input
```
2
3
1 2 2
4
1 2 3 2
```

### Example Output
```
NO
YES
```

### Explanation
**Example case 1:** We cannot make the third element of the sequence $(1, 2, 3)$ become $2$.

**Example case 2:** We can perform one operation with $(i, j) = (2, 4)$, which changes the sequence $(1, 2, 3, 4)$ to $(1, 2, 3, 2)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>