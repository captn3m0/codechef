---
{"category_name":"easy","problem_code":"KAVGMAT","problem_name":"Worthy Matrix","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 3 4\r\n2 2 3\r\n3 4 5\r\n4 5 5","output":7,"explanation":"**Example case 1:** The following are the seven $4$-worthy submatrices:\r\n- $ \r\n\\begin{bmatrix}\r\n3 \u0026 4 \\\\\r\n4 \u0026 5 \\\\\r\n\\end{bmatrix}\r\n$\r\nwith average $4$; this matrix occurs only once\r\n- $\r\n\\begin{bmatrix}\r\n4 \u0026 5 \\\\\r\n5 \u0026 5 \\\\\r\n\\end{bmatrix}\r\n$\r\nwith average $4.75$; this matrix also occurs only once\r\n- $\r\n\\begin{bmatrix}\r\n4 \\\\\r\n\\end{bmatrix}\r\n$\r\nwith average $4$; we find this matrix twice in $A$\r\n- $\r\n\\begin{bmatrix}\r\n5 \\\\\r\n\\end{bmatrix}\r\n$\r\nwith average $5$; we find this matrix $3$ times in $A$","isDeleted":false}}},"video_editorial_url":"https://youtu.be/kFZXDUP7Yys","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shaanknight","problem_tester":"","date_added":"28-02-2021","tags":{"0":"april21","1":"binary","2":"easy","3":"shaanknight","4":"two"},"problem_difficulty_level":"Easy","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/KAVGMAT","time":{"view_start_date":1618219800,"submit_start_date":1618219800,"visible_start_date":1618219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KAVGMAT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/APRIL21/bengali/KAVGMAT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL21/mandarin/KAVGMAT.pdf), [Russian](https://www.codechef.com/download/translated/APRIL21/russian/KAVGMAT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL21/vietnamese/KAVGMAT.pdf) as well.

Chef found a matrix $A$ with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$), where for each row $r$ and column $c$, the cell in row $r$ and column $c$ (denoted by $(r,c)$) contains an integer $A_{r,c}$.

This matrix has two interesting properties:
- The integers in each row form a non-decreasing sequence, i.e. for each valid $i$, $A_{i,1} \leq A_{i,2} \leq \ldots \leq A_{i,M}$.
- The integers in each column also form a non-decreasing sequence, i.e. for each valid $j$, $A_{1,j} \leq A_{2,j} \leq \ldots \leq A_{N,j}$.

A $K$-worthy [submatrix](https://mathworld.wolfram.com/Submatrix.html) is a square submatrix of $A$, i.e. a submatrix with $l$ rows and $l$ columns, for any integer $l$, such that the average of all the integers in this submatrix is $\geq K$. 

Chef wants you to find the number of $K$-worthy submatrices of $A$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $K$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains $M$ space-separated integers $A_{i,1}, A_{i,2}, A_{i,3}, \ldots, A_{i,M}$.

### Output
For each test case, print a single line containing one integer ― the number of $K$-worthy submatrices of $A$.

### Constraints
- $1 \leq T \leq 10$
- $1 \leq N \cdot M \leq 10^6$
- $N \leq M$
- $0 \leq K \leq 10^9$
- $0 \leq A_{r,c} \leq 10^9$ for each valid $r,c$
- the sum of $N \cdot M$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (15 points):** the sum of $N \cdot M$ over all test cases does not exceed $10^3$

**Subtask #2 (25 points):** the sum of $N \cdot M$ over all test cases does not exceed $4 \cdot 10^5$

**Subtask #3 (60 points):** original constraints

### Example Input
```
1
3 3 4
2 2 3
3 4 5
4 5 5
```

### Example Output
```
7
```

### Explanation
**Example case 1:** The following are the seven $4$-worthy submatrices:
- $ 
\begin{bmatrix}
3 & 4 \\
4 & 5 \\
\end{bmatrix}
$
with average $4$; this matrix occurs only once
- $
\begin{bmatrix}
4 & 5 \\
5 & 5 \\
\end{bmatrix}
$
with average $4.75$; this matrix also occurs only once
- $
\begin{bmatrix}
4 \\
\end{bmatrix}
$
with average $4$; we find this matrix twice in $A$
- $
\begin{bmatrix}
5 \\
\end{bmatrix}
$
with average $5$; we find this matrix $3$ times in $A$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>