---
{"category_name":"school","problem_code":"MATXOR","problem_name":"Matrix XOR","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2 2 5\r\n2 3 7","output":"14\r\n5","explanation":"**Example case 1:** The matrix is\r\n$$A = \\begin{pmatrix}\r\n5 + 1 + 1 \u0026 5 + 1 + 2\\\\\r\n5 + 2 + 1 \u0026 5 + 2 + 2\\end{pmatrix}\r\n= \\begin{pmatrix}\r\n7 \u0026 8 \\\\\r\n8 \u0026 9 \r\n\\end{pmatrix} \\,.$$\r\n\r\nThe XOR of all its elements is $7 \\oplus 8 \\oplus 8 \\oplus 9 = 14$.\r\n\r\n**Example case 2:** The matrix is\r\n$$A = \\begin{pmatrix}\r\n7 + 1 + 1 \u0026 7 + 1 + 2 \u0026 7 + 1 + 3\\\\\r\n7 + 2 + 1 \u0026 7 + 2 + 2 \u0026 7 + 2 + 3\r\n\\end{pmatrix}\r\n= \\begin{pmatrix}\r\n9 \u0026 10 \u0026 11\\\\\r\n10 \u0026 11 \u0026 12\r\n\\end{pmatrix} \\,.$$\r\n\r\nThe XOR of all its elements is $9 \\oplus 10 \\oplus 11 \\oplus 10 \\oplus 11 \\oplus 12 = 5$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/E0y2SOZNXjI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"pshishod2645","problem_tester":"","date_added":"16-03-2021","tags":{"0":"cook127","1":"difference","2":"easy","3":"pshishod2645"},"problem_difficulty_level":"Easy","best_tag":"Difference Array","editorial_url":"https://discuss.codechef.com/problems/MATXOR","time":{"view_start_date":1616351402,"submit_start_date":1616351402,"visible_start_date":1616351402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MATXOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK127/mandarin/MATXOR.pdf), [Russian](https://www.codechef.com/download/translated/COOK127/russian/MATXOR.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK127/vietnamese/MATXOR.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK127/bengali/MATXOR.pdf) as well.

Chef has a *tasty ingredient* ― an integer $K$. He defines a *tasty matrix* $A$ with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$) as $A_{i, j} = K + i + j$ for each valid $i,j$.

Currently, Chef is busy in the kitchen making this tasty matrix. Help him find the bitwise XOR of all elements of this matrix.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $N$, $M$ and $K$.

### Output
For each test case, print a single line containing one integer ― the bitwise XOR of all elements of the tasty matrix with the given dimensions made with the given special ingredient. 

### Constraints
- $1 \leq T \leq 10^5$
- $1 \leq N, M \leq 2 \cdot 10^6$
- $1 \leq K \leq 10^9$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^6$
- the sum of $M$ over all test cases does not exceed $2 \cdot 10^6$

### Example Input
```
2
2 2 5
2 3 7
```

### Example Output
```
14
5
```

### Explanation
**Example case 1:** The matrix is
$$A = \begin{pmatrix}
5 + 1 + 1 & 5 + 1 + 2\\
5 + 2 + 1 & 5 + 2 + 2\end{pmatrix}
= \begin{pmatrix}
7 & 8 \\
8 & 9 
\end{pmatrix} \,.$$

The XOR of all its elements is $7 \oplus 8 \oplus 8 \oplus 9 = 14$.

**Example case 2:** The matrix is
$$A = \begin{pmatrix}
7 + 1 + 1 & 7 + 1 + 2 & 7 + 1 + 3\\
7 + 2 + 1 & 7 + 2 + 2 & 7 + 2 + 3
\end{pmatrix}
= \begin{pmatrix}
9 & 10 & 11\\
10 & 11 & 12
\end{pmatrix} \,.$$

The XOR of all its elements is $9 \oplus 10 \oplus 11 \oplus 10 \oplus 11 \oplus 12 = 5$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>