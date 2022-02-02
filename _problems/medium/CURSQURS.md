---
{"category_name":"medium","problem_code":"CURSQURS","problem_name":"Curious Queries","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 4\r\n1 2 3\r\n4 3 2 1","output":"30 128 386 482","explanation":"**Example case 1:** The matrix $C$ is\r\n```\r\n5 2 3 0\r\n6 1 0 3\r\n7 0 1 2\r\n```\r\n\r\nFor $L=1$, the sum of beauties is $(5+2+3+0+6+1+0+3+7+0+1+2) \\cdot 1=30$. For $L=2$, the sum of beauties is $(5+2+3+0+6+1+0+3+7+0+1+2) \\cdot 1 + (7+1+3+7+1+3+7+1+3) \\cdot 2 + (3+1+3+1+3+1+3+1) \\cdot 2 + (0+0+0+0+0+0) \\cdot 4 = 128$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"9-05-2020","tags":{"0":"akashbhalotia","1":"bit","2":"cook118","3":"fast","4":"medium","5":"number","6":"rishup_nitdgp","7":"rishup_nitdgp"},"problem_difficulty_level":"Medium-Hard","best_tag":"Fast Fourier Transform","editorial_url":"https://discuss.codechef.com/problems/CURSQURS","time":{"view_start_date":1590345002,"submit_start_date":1590345002,"visible_start_date":1590345002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CURSQURS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK118/hindi/CURSQURS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK118/mandarin/CURSQURS.pdf), [Russian](https://www.codechef.com/download/translated/COOK118/russian/CURSQURS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK118/vietnamese/CURSQURS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK118/bengali/CURSQURS.pdf) as well.

Chef has an integer sequence $A_1, A_2, \ldots, A_N$ and Chefina has an integer sequence $B_1, B_2, \ldots, B_M$. Since Chef is a genius, he always keeps himself busy with some tasks. One day, Chef took the sequences $A$ and $B$ and constructed a matrix $C$ with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$) such that for each valid $i$ and $j$, the value in row $i$ and column $j$ is $C_{i,j} = A_i \oplus B_j$, where $\oplus$ denotes the bitwise XOR operator.

Chefina is curious about this matrix, but she does not have a lot of time, so she asked Chef to tell her some information about it. For each integer $L$ from $1$ to $\mathrm{max}(N, M)$ inclusive:
- For all integers $X$ and $Y$ such that $1 \le X, Y \le L$, consider all submatrices of $C$ with $X$ rows and $Y$ columns.
- The beauty of a submatrix is defined as its size (the number of elements in it) multiplied by the XOR of all elements in the submatrix.
- Chef should find the sum of beauties of all these submatrices modulo $1,000,000,007$.

**Note:** The definition of the submatrix is used according to [here](https://mathworld.wolfram.com/Submatrix.html).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $M$ space-separated integers $B_1, B_2, \ldots, B_M$.

### Output
For each test case, print a single line containing $\mathrm{max}(N, M)$ space-separated integers ― the sums of beauties for $L = 1, 2, \ldots, \mathrm{max}(N, M)$, modulo $1,000,000,007$.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N, M \le 65,000$
- $0 \le A_i \le 10^6$ for each valid $i$
- $0 \le B_i \le 10^6$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $65,000$
- the sum of $M$ over all test cases does not exceed $65,000$

### Example Input
```
1
3 4
1 2 3
4 3 2 1
```

### Example Output
```
30 128 386 482
```

### Explanation
**Example case 1:** The matrix $C$ is
```
5 2 3 0
6 1 0 3
7 0 1 2
```

For $L=1$, the sum of beauties is $(5+2+3+0+6+1+0+3+7+0+1+2) \cdot 1=30$. For $L=2$, the sum of beauties is $(5+2+3+0+6+1+0+3+7+0+1+2) \cdot 1 + (7+1+3+7+1+3+7+1+3) \cdot 2 + (3+1+3+1+3+1+3+1) \cdot 2 + (0+0+0+0+0+0) \cdot 4 = 128$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>