---
{"category_name":"medium","problem_code":"MTRXOP","problem_name":"Chef and Rotation","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vipsharmavip","problem_tester":null,"date_added":"8-02-2019","tags":{"0":"implementation","1":"medium","2":"snckfl19","3":"vipsharmavip"},"editorial_url":"https://discuss.codechef.com/problems/MTRXOP","time":{"view_start_date":1550311200,"submit_start_date":1550311200,"visible_start_date":1550311200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/SNCKFL19/hindi/MTRXOP.pdf), [Bengali](http://www.codechef.com/download/translated/SNCKFL19/bengali/MTRXOP.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL19/mandarin/MTRXOP.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL19/russian/MTRXOP.pdf), and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/MTRXOP.pdf) as well.

Chef loves to play with matrices. One day in the kitchen, he found the following problem in his cookbook: You are given a matrix of integers with $3$ rows and $3$ columns (both rows and columns are numbered $1, 2, 3$) and a target matrix, also with $3$ rows and $3$ columns. You should transform the initial matrix into the target matrix by performing $N$ operations.

Each operation is specified by parametres $A$, $X$, $D$, $S$ and corresponds to cyclically shifting a row or a column of the matrix. Valid operations must satisfy $1 \le X \le 3$ and $1 \le A, D, S \le 2$. There are four types of operations:
- $A=1$ and $D=1$: shift row $X$ to the left, i.e. move the first element of this row to the end, $S$ times
- $A=1$ and $D=2$: shift row $X$ to the right, i.e. move the last element of this row to the beginning, $S$ times
- $A=2$ and $D=1$: shift column $X$ upwards, i.e. move the top element of this column to the bottom, $S$ times
- $A=2$ and $D=2$: shift column $X$ downwards, i.e. move the bottom element of this row to the top, $S$ times

For example, applying an operation `1 2 1 2` on the matrix
```
7 7 7
2 4 5
7 7 7
```
results in the matrix
```
7 7 7
5 2 4
7 7 7
```
because it means that left cyclic shift should be applied two times on the second row, so this row is transformed from `2 4 5` into `4 5 2` and then into `5 2 4`.

Applying an operation `2 1 2 1` on the matrix
```
4 9 9
2 9 9
7 9 9
```
results in the matrix
```
7 9 9
4 9 9
2 9 9
```
because it means that right cyclic shift should be applied once on the first column, so this column is transformed from `4 2 7` into `7 4 2`.

In this case, Chef has the initial matrix $M$, the target matrix $T$ and a sequence of only $N-1$ operations. He wants to insert one operation into this sequence (possibly at the beginning or at the end) without reordering the remaining operations. The resulting sequence of $N$ operations is applied on the matrix $M$, i.e. the first operation is applied on $M$, the second operation on the result of the first one and so on. Let's call the result of the last operation the *final matrix*.

You have to find the number of ways to insert an operation into the sequence such that the final matrix is the matrix $T$. Two ways to insert an operation are different if the operation is inserted at a different position or if it has a different $A$, $X$, $D$ or $S$.

### Input
- The first line of the input contains a single integer $N$.
- $N-1$ lines follow. Each of these lines contains four space-separated integers $A$, $X$, $D$ and $S$ describing one operation.
- The following three lines describe the initial matrix. For each $i$ ($1 \le i \le 3$), the $i$-th of these lines contains three space-separated integers $M_{i, 1}$, $M_{i, 2}$ and $M_{i, 3}$ denoting the elements of the $i$-th row of this matrix.
- The following three lines describe the target matrix. For each $i$ ($1 \le i \le 3$), the $i$-th of these lines contains three space-separated integers $T_{i, 1}$, $T_{i, 2}$ and $T_{i, 3}$ denoting the elements of the $i$-th row of this matrix.

### Output
Print a single line containing one integer — the number of valid ways to insert an operation.

### Constraints
- $1 \le N \le 20,000$
- $1 \le M_{i, j}, T_{i, j} \le 9$ for each valid $i, j$
- $1 \le X \le 3$
- $1 \le A, D, S \le 2$

### Example Input 1
```
2
1 3 1 1
1 1 1
1 1 1
1 1 1
1 1 1
1 1 1
1 1 1
```

### Example Output 1
```
48
```

### Explanation 
You can insert any operation at any position, that is, either before or after the only given operation.

### Example Input 2 
```
2
1 3 1 1
1 1 1
1 1 1
1 1 1
1 1 1
1 1 1
1 1 2
```

### Example Output 2
```
0 
```

### Explanation 
There is no valid way to insert an operation, since it is impossible to obtain the target matrix.

### Example Input 3
```
1
1 2 3
4 5 6
7 8 9
1 2 9
4 5 3
7 8 6
```

### Example Output 3
```
2
```

### Explanation 
The sequence of $N-1$ operations is empty, so there is only one position in which one operation can be inserted. The two operations that can be used to obtain the target matrix from the initial matrix are `2 3 1 2` and `2 3 2 1`.
