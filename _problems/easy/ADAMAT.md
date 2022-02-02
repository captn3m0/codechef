---
{"category_name":"easy","problem_code":"ADAMAT","problem_name":"Ada Matrix","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4\r\n1 2 9 13\r\n5 6 10 14\r\n3 7 11 15\r\n4 8 12 16","output":2,"explanation":"**Example case 1:** After the first operation, with $L = 2$, the resulting matrix is\r\n```\r\n1 5 9 13\r\n2 6 10 14\r\n3 7 11 15\r\n4 8 12 16\r\n```\r\n\r\nAfter the second operation, with $L = 4$, the matrix becomes sorted\r\n```\r\n1 2 3 4\r\n5 6 7 8\r\n9 10 11 12\r\n13 14 15 16\r\n```","isDeleted":false}}},"video_editorial_url":"https://youtu.be/0qWUh8nUf4o","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"27-08-2020","tags":{"0":"alei","1":"alei","2":"matrices","3":"sept20"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ADAMAT","time":{"view_start_date":1600075802,"submit_start_date":1600075802,"visible_start_date":1600075802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ADAMAT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT20/hindi/ADAMAT.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT20/bengali/ADAMAT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT20/mandarin/ADAMAT.pdf), [Russian](https://www.codechef.com/download/translated/SEPT20/russian/ADAMAT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT20/vietnamese/ADAMAT.pdf) as well.

Chef Ada has a matrix with $N$ rows (numbered $1$ through $N$ from top to bottom) and $N$ columns (numbered $1$ through $N$ from left to right) containing all integers between $1$ and $N^2$ inclusive. For each valid $i$ and $j$, let's denote the cell in the $i$-th row and $j$-th column by $(i,j)$.

Ada wants to sort the matrix in row-major order ― for each valid $i$ and $j$, she wants the cell $(i, j)$ to contain the value $(i-1) \cdot N + j$.

In one operation, Ada should choose an integer $L$ and <a href="https://en.wikipedia.org/wiki/Transpose">transpose</a> the submatrix between rows $1$ and $L$ and columns $1$ and $L$ (inclusive). Formally, for each $i$ and $j$ ($1 \le i, j \le L$), the value in the cell $(i, j)$ after this operation is equal to the value in $(j, i)$ before it.

The initial state of the matrix is chosen in such a way that it is possible to sort it using a finite number of operations (possibly zero). Find the smallest number of operations required to sort the matrix.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The next $N$ lines describe the matrix. For each valid $i$, the $i$-th of these lines contains $N$ space-separated integers ― the initial values in cells $(i, 1), (i, 2), \ldots, (i, N)$.

### Output
For each test case, print a single line containing one integer ― the smallest number of operations required to sort the matrix.

### Constraints
- $4 \le N \le 64$
- the sum of $N^2$ over all test files does not exceed $3 \cdot 10^5$

### Subtasks
**Subtask #1 (10 points):**
- $T \le 50$
- $N = 4$

**Subtask #2 (90 points):** original constraints

### Example Input
```
1
4
1 2 9 13
5 6 10 14
3 7 11 15
4 8 12 16
```

### Example Output
```
2
```

### Explanation
**Example case 1:** After the first operation, with $L = 2$, the resulting matrix is
```
1 5 9 13
2 6 10 14
3 7 11 15
4 8 12 16
```

After the second operation, with $L = 4$, the matrix becomes sorted
```
1 2 3 4
5 6 7 8
9 10 11 12
13 14 15 16
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>