---
{"category_name":"easy","problem_code":"CONSADD","problem_name":"Consecutive Adding","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 2 2\r\n1 2\r\n0 1\r\n0 0\r\n0 0\r\n2 2 2\r\n1 2\r\n0 1\r\n0 0\r\n-1 0\r\n3 2 2\r\n1 1\r\n2 2\r\n3 3\r\n1 0\r\n2 0\r\n3 0","output":"Yes\r\nNo\r\nNo","explanation":"**Example case 1:** We can add $-1$ to both elements in row $1$ and add $-1$ to both elements in column $2$.    \r\n\r\n**Example case 2:** After any operation, the sum of elements of $A$ remains even. However, the sum of elements of $B$ is odd, so $A$ cannot be changed to $B$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/d1BpoMW-3dw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"div5252","problem_tester":"","date_added":"11-02-2021","tags":{"0":"div5252","1":"easy","2":"graph","3":"march21","4":"math"},"problem_difficulty_level":"Easy-Medium","best_tag":"Graph Coloring","editorial_url":"https://discuss.codechef.com/problems/CONSADD","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CONSADD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/CONSADD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/CONSADD.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/CONSADD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/CONSADD.pdf) as well.

You are given two matrices $A$ and $B$, each with $R$ rows (numbered $1$ through $R$) and $C$ columns (numbered $1$ through $C$). Let's denote an element of $A$ or $B$ in row $i$ and column $j$ by $A_{i,j}$ or $B_{i,j}$ respectively.

You are also given an integer $X$. You may perform the following operation on $A$ any number of times:
- Choose an integer $v$.
- Choose $X$ consecutive elements of $A$, either in the same row or in the same column.
- Add $v$ to each of the chosen elements of $A$.

Determine whether it is possible to change $A$ to $B$ in a finite number of operations.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $R$, $C$ and $X$.
- $R$ lines follow. For each valid $i$, the $i$-th of these lines contains $C$ space-separated integers $A_{i,1}, A_{i,2}, \ldots, A_{i,C}$.
- $R$ more lines follow. For each valid $i$, the $i$-th of these lines contains $C$ space-separated integers $B_{i,1}, B_{i,2}, \ldots, B_{i,C}$.

### Output
For each test case, print a single line containing the string `"Yes"` if there is a sequence of operations that changes the matrix $A$ to $B$, or `"No"` if such a sequence of operations does not exist.

### Constraints
- $1 \leq T \leq 10^3$
- $2 \leq R,C \leq 10^3$
- $2 \leq X \leq \min(R,C)$
- $|A_{i,j}|, |B_{i,j}| \leq 10^9$ for each valid $i,j$
- the sum of $R$ over all test cases does not exceed $10^3$
- the sum of $C$ over all test cases does not exceed $10^3$

### Subtasks
**Subtask #1 (5 points):** $X=2$

**Subtask #2 (10 points):** $X=3$

**Subtask #3 (85 points):** original constraints

### Example Input
```
3
2 2 2
1 2
0 1
0 0
0 0
2 2 2
1 2
0 1
0 0
-1 0
3 2 2
1 1
2 2
3 3
1 0
2 0
3 0
```

### Example Output
```
Yes
No
No
```

### Explanation
**Example case 1:** We can add $-1$ to both elements in row $1$ and add $-1$ to both elements in column $2$.    

**Example case 2:** After any operation, the sum of elements of $A$ remains even. However, the sum of elements of $B$ is odd, so $A$ cannot be changed to $B$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>