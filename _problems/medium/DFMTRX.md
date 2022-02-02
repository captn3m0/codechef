---
{"category_name":"medium","problem_code":"DFMTRX","problem_name":"Doofish Matrix","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1\r\n2","output":"Hooray\r\n1\r\nHooray\r\n3 1\r\n2 3","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"14-10-2019","tags":{"0":"constructive","1":"jan20","2":"kmaaszraa","3":"kmaaszraa","4":"math","5":"medium","6":"vijju123"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/DFMTRX","time":{"view_start_date":1578907800,"submit_start_date":1578907800,"visible_start_date":1578907800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DFMTRX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN20/hindi/DFMTRX.pdf), [Bengali](https://www.codechef.com/download/translated/JAN20/bengali/DFMTRX.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN20/mandarin/DFMTRX.pdf), [Russian](https://www.codechef.com/download/translated/JAN20/russian/DFMTRX.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN20/vietnamese/DFMTRX.pdf) as well.

Dr.D is now fond of matrices. He is particularly interested in Doofish Matrices. A Doofish Matrix of order $N$ is a matrix with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$) such that:
- Each element of this matrix is an integer between $1$ and $2N-1$ inclusive.
- For each $i$ and $j$ ($1 \le i \le N$, $1 \le j \le 2N-1$), the integer $j$ appears in the $i$-th row and/or in the $i$-th column.

Now, for a given $N$, Dr.D is wondering if there is a Doofish Matrix of order $N$. Find such a matrix or determine that it does not exist. If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case:
- First, print a line containing the string `"Hooray"` if a Doofish Matrix of order $N$ exists or `"Boo"` if it does not.
- If it exists, print $N$ more lines describing one such matrix. For each valid $i$, the $i$-th of these lines should contain $N$ space-separated integers ― the elements in the $i$-th row.

### Constraints
- $1 \le T \le 2,000$
- $1 \le N \le 2,000$
- the sum of $N^2$ over all test cases does not exceed $4 \cdot 10^6$

### Subtasks
**Subtask #1 (29 points):** $N$ is a power of $2$

**Subtask #2 (71 points):** original constraints

### Example Input
```
2
1
2
```

### Example Output
```
Hooray
1
Hooray
3 1
2 3
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>