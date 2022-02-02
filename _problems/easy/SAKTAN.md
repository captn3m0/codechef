---
{"category_name":"easy","problem_code":"SAKTAN","problem_name":"Operations on a Matrix","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2 2 3\r\n1 1\r\n1 2\r\n2 1","output":2,"explanation":"**Example case 1:** After applying the first operation, the matrix becomes:\r\n```\r\n2 1\r\n1 0\r\n```\r\n\r\nAfter applying the second operation, it becomes:\r\n```\r\n3 3\r\n1 1\r\n```\r\n\r\nFinally, after applying the third operation, it becomes:\r\n```\r\n4 3\r\n3 2\r\n```","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"iamabjain","problem_tester":null,"date_added":"19-09-2019","tags":{"0":"iamabjain","1":"math","2":"oct19","3":"r_64","4":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SAKTAN","time":{"view_start_date":1571045400,"submit_start_date":1571045400,"visible_start_date":1571045400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SAKTAN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT19/hindi/SAKTAN.pdf), [Bengali](https://www.codechef.com/download/translated/OCT19/bengali/SAKTAN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT19/mandarin/SAKTAN.pdf), [Russian](https://www.codechef.com/download/translated/OCT19/russian/SAKTAN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT19/vietnamese/SAKTAN.pdf) as well.

"It's totally fun to play troublemakers ― totally." - Lee Pace

Sakshi had a matrix with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Initially, all cells of this matrix contained $0$-s. Let's denote a cell in row $r$ and column $c$ by $(r, c)$.

Sakshi is well-known for troubling others. This time, her friends Nikki and Mansi planned to take revenge and teach her a lesson, so they changed her matrix by performing the following operation $Q$ times:
- Choose any valid cell $(x, y)$.
- Add $1$ to all the cells in row $x$.
- Add $1$ to all the cells in column $y$.

For each valid $i$, the cell chosen in the $i$-th operation was $(X_i, Y_i)$. Nikki and Mansi challenged Sakshi to find the number of cells in the resulting matrix which contain odd integers. Sakshi is not good at math, since she has spent all her life troubling others, so this time, she really needs your help. Help Sakshi find the answer.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $Q$.
- $Q$ lines follow. For each $i$ ($1 \le i \le Q$), the $i$-th of these lines contains two space-separated integers $X_i$ and $Y_i$.

### Output
For each test case, print a single line containing one integer ― the number of cells with odd values.

### Constraints
- $1 \le T \le 300$
- $1 \le N, M, Q \le 10^5$
- $1 \le X_i \le N$ for each valid $i$
- $1 \le Y_i \le M$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $3 \cdot 10^5$
- the sum of $M$ over all test cases does not exceed $3 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $3 \cdot 10^5$

### Subtasks
**Subtask #1 (40 points):**
- $1 \le N, M, Q \le 300$

**Subtask #2 (40 points):**
- $1 \le T \le 3$
- $1 \le N \cdot M \le 10^6$
- $1 \le Q \le 10^5$

**Subtask #3 (20 points):** original constraints

### Example Input
```
1
2 2 3
1 1
1 2
2 1
```

### Example Output
```
2
```

### Explanation
**Example case 1:** After applying the first operation, the matrix becomes:
```
2 1
1 0
```

After applying the second operation, it becomes:
```
3 3
1 1
```

Finally, after applying the third operation, it becomes:
```
4 3
3 2
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>