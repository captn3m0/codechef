---
{"category_name":"hard","problem_code":"CURMAT","problem_name":"Curious Matrix","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2 6 5\r\n1 1 3\r\n1 2 1\r\n2 1 1\r\n2 2 4\r\n1 2 1\r\n2 2 4","output":"16\r\n4\r\n1\r\n0\r\n1\r\n4","explanation":"The only non-trivial square submatrix here is the whole matrix.\r\n\r\nIn the $4$-th query, the matrix is completely filled, but it is not curious for $p=5$, so the answer is $0$.\r\n\r\nAfter the $5$-th query, there are $3$ filled cells: $(1,1) \\rightarrow 3$, $(2,1) \\rightarrow 1$ and $(2,2) \\rightarrow 4$. The cell $(1,2)$ is empty and if we want the determinant of the matrix to be divisible by $p=5$, we have to put $2$ in this cell. Then the determinant is $3 \\cdot 4 - 1 \\cdot 2 = 10$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/CugVd0a2kMM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shaanknight","problem_tester":"","date_added":"12-10-2020","tags":{"0":"ad","1":"disjoint","2":"hard","3":"jan21","4":"linear","5":"segment","6":"shaanknight"},"problem_difficulty_level":"Hard","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/CURMAT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CURMAT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/CURMAT.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/CURMAT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/CURMAT.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/CURMAT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/CURMAT.pdf) as well.

You are given a prime $p$ and a matrix $M$ with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$). For each row $r$ and column $c$, the cell in row $r$ and column $c$ can either be empty or contain an integer $M_{r, c}$. Initially, all cells are empty.

Now you should process $Q$ queries. In each query, you are given integers $x$, $y$ and $v$ and you should do the following:
- If the cell $(x,y)$ is empty before this query, put the value $v$ in it, i.e. set $M_{x, y}$ to $v$.
- Otherwise, i.e. if the cell $(x,y)$ is not empty, make this cell empty again. It is guaranteed that in such a case, $M_{x, y} = v$ before this query; $v$ is provided for convenience.
- Afterwards, Chef wants you to find the number of ways to fill all empty cells with (not necessarily the same) integers in such a way that the resulting matrix is *curious*. Since this number may be large, compute it modulo $10^9 + 7$.

In particular, when there are no empty cells in the matrix, the answer is $1$ if the matrix is curious or $0$ if it is not curious.

In a curious matrix:
- Each cell contains an integer between $1$ and $p-1$ inclusive.
- For each non-trivial square [submatrix](https://mathworld.wolfram.com/Submatrix.html) $A$ of $M$ (a submatrix containing more than one cell), its determinant $|A|$ is a multiple of $p$.

For example, consider the following matrix.
$$
A=
\begin{bmatrix}
1 & 2 & 1 \\
2 & 4 & 2 \\
2 & 4 & 2 \\
\end{bmatrix}
$$

This matrix is curious. For the prime $p=5$, each of the elements of the matrix is in the range $[1,p-1]$. Also, the determinant of each non-trivial square submatrix (there are five of them) is a multiple of the given prime ― for example, the determinant of the whole matrix is $0$.

$$
B=
\begin{bmatrix}
3 & 1 \\
1 & 4 \\
\end{bmatrix}
$$

The above matrix is not a curious matrix for $p=5$, since the determinant of the only non-trivial square submatrix (which is the whole matrix) is $11$, not a multiple of $p$.

### Input
- The first line of the input contains three space-separated integers $N$, $Q$ and $p$.
- $Q$ lines follow. Each of these lines contains three space-separated integers $x$, $y$ and $v$ describing a query.

### Output
After performing each query, print a single line containing one integer ― the number of ways to form a curious matrix, modulo $10^9+7$.

### Constraints
- $2 \leq N \leq 10^5$
- $1 \leq Q \leq 10^5$
- $2 \leq p \leq 998,244,353$
- $p$ is a prime number
- $1 \leq x,y \leq N$
- $1 \leq v \leq p-1$

### Subtasks
**Subtask #1 (20 points):** $1 \leq N,Q \leq 300$

**Subtask #2 (20 points):** no two queries affect the same cell, i.e. the pairs $(x,y)$ for all queries are pairwise distinct

**Subtask #3 (20 points):** after each query, there is at least one way to construct a curious matrix

**Subtask #4 (40 points):** original constraints

### Example Input
```
2 6 5
1 1 3
1 2 1
2 1 1
2 2 4
1 2 1
2 2 4
```

### Example Output
```
16
4
1
0
1
4
```

### Explanation
The only non-trivial square submatrix here is the whole matrix.

In the $4$-th query, the matrix is completely filled, but it is not curious for $p=5$, so the answer is $0$.

After the $5$-th query, there are $3$ filled cells: $(1,1) \rightarrow 3$, $(2,1) \rightarrow 1$ and $(2,2) \rightarrow 4$. The cell $(1,2)$ is empty and if we want the determinant of the matrix to be divisible by $p=5$, we have to put $2$ in this cell. Then the determinant is $3 \cdot 4 - 1 \cdot 2 = 10$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>