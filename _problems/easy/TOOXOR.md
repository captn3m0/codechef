---
{"category_name":"easy","problem_code":"TOOXOR","problem_name":"Too Much Xor","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/KMjQ_OuKN38","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"akshitm16","problem_tester":"taran_1407","date_added":"18-05-2021","tags":{"0":"akshitm16","1":"bit","2":"cook130","3":"simple"},"problem_difficulty_level":"Simple","best_tag":"Bit Manipulation","editorial_url":"https://discuss.codechef.com/problems/TOOXOR","time":{"view_start_date":1624214704,"submit_start_date":1624214704,"visible_start_date":1624214704,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TOOXOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK130/mandarin/TOOXOR.pdf), [Russian](https://www.codechef.com/download/translated/COOK130/russian/TOOXOR.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK130/vietnamese/TOOXOR.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK130/bengali/TOOXOR.pdf) as well.

Chef calls a sequence of integers $A_1, A_2, \ldots, A_N$ *good* if it satisfies the following conditions:
- $A_i \oplus A_{i+1} \gt 0$ for each valid $i$
- $A_{i-1} \oplus A_i \oplus A_{i+1} = A_i$ for all valid $i$

In particular, any sequence with length $1$ is good and any sequence of length $2$ which satisfies the first condition is good.

Here, $\oplus$ denotes the [bitwise XOR operation](https://en.wikipedia.org/wiki/Bitwise_operation#XOR).

Chef gives you a sequence $A_1, A_2, \ldots, A_N$. You may perform the following operation on the sequence any number of times (possibly $0$): choose $3$ pairwise distinct valid indices $a$, $b$ and $c$ and change $A_c$ to $A_a \oplus A_b$. Note that this means the operation can only be performed if $N \geq 3$.

Chef is asking you to make the sequence good using at most $3 \cdot N$ operations or report that it is impossible. **Note that you do not have to minimise the number of performed operations.**

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case:
- If it is impossible to change the given sequence into a good sequence using at most $3 \cdot N$ operations, print a single line containing the integer $-1$.
- Otherwise, first, print a line containing a single integer $M$ ($0 \leq M \leq 3 \cdot N$) ― the number of operations you want to perform.
- Then, print $M$ lines describing these operations in the order in which you want to perform them. For each $i$ ($1 \leq i \leq M$), the $i$-th of these lines should contain three space-separated integers $a_i$, $b_i$ and $c_i$ (pairwise distinct; $1 \leq a_i, b_i, c_i \leq N$) ― the indices on which the $i$-th operation is performed.

If there are multiple solutions, you may find any one of them.

### Constraints
- $1 \leq T \leq 10^3$
- $1 \leq N \leq 10^4$
- $0 \leq A_i \lt 2^{30}$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^4$

### Example Input
```
4
1
69
3
1 2 3
3
1 3 1
2
10 10
```

### Example Output
```
0
-1
4
1 3 2
2 1 3
3 2 1
1 3 2
-1
```

### Explanation
**Example case 1:** The sequence is already good, so performing $0$ operations is a valid solution.

**Example case 2:** The sequence cannot be made good using at most $3 \cdot N$ operations.

**Example case 3:** We can make the sequence good by performing the $4$ operations shown on the output, in this order. Note that the initial sequence is also good, so performing $0$ operations is also a valid solution. 

**Example case 4:** The sequence does not satisfy the first condition and since $N=2$, we cannot perform any operations on it.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>