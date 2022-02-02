---
{"category_name":"medium","problem_code":"PAIRFLIP","problem_name":"Chef and Pair Flips","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 3 1\r\n010\r\n101\r\n101\r\n100\r\n110\r\n?00\r\n2 2 0\r\n10\r\n01\r\n0?\r\n??\r\n1 3 1\r\n101\r\n010","output":"3\r\nC 2 1 2\r\nC 3 2 3\r\nC 1 3 1\r\n1\r\n-1","explanation":"**Example case 1:** This is not the only solution ? a valid sequence of $3$ row operations also exists.\r\n\r\n**Example case 2:** We did not restore the sequence of operations because $E = 0$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/jl2edycWboU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"bthero","problem_tester":"","date_added":"19-03-2021","tags":{"0":"april21","1":"bthero","2":"graphs","3":"greedy","4":"medium"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PAIRFLIP","time":{"view_start_date":1618219800,"submit_start_date":1618219800,"visible_start_date":1618219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PAIRFLIP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/APRIL21/bengali/PAIRFLIP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL21/mandarin/PAIRFLIP.pdf), [Russian](https://www.codechef.com/download/translated/APRIL21/russian/PAIRFLIP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL21/vietnamese/PAIRFLIP.pdf) as well.

Chef has two matrices $A$ and $B$, each with size $N \times M$. Each cell of the matrix $A$ contains a character '0' or '1', while each cell of the matrix $B$ contains '?', '0' or '1'.

The matrix $A$ can be modified using zero or more operations. In one operation, Chef can choose two cells in the matrix $A$ which lie either in the same row or in the same column and flip the characters in each of these cells (flipping means changing '1' to '0' or '0' to '1').

Chef wants the matrix $A$ to match the matrix $B$. Formally, for each row $r$ and column $c$, if the cell in row $r$ and column $c$ of $B$ contains '0' or '1', then he wants the cell in row $r$ and column $c$ of $A$ to contain the same character; otherwise (for cells containing '?'), it may contain either '0' or '1'.

The difficulty of your task is described by a parameter $E$. If $E = 0$, you should only find the smallest number of operations required to achieve this goal. If $E = 1$, you should also find one sequence of operations with the smallest length which achieves it.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $E$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains a single string $A_i$ with length $M$ describing the $i$-th row of the matrix $A$.
- $N$ more lines follow. For each valid $i$, the $i$-th of these lines contains a single string $B_i$ with length $M$ describing the $i$-th row of the matrix $B$.

### Output
For each test case:
- If it is not possible to make $A$ match $B$, print a single line containing the integer $-1$.
- Otherwise, first, print a line containing a single integer $K$ ― the smallest required number of operations.
- Then, if $E = 1$, print $K$ lines describing the sequence of operations you want to perform. An operation should be printed in one of the following formats:
    - `R r i j` to flip the characters in cells in row $r$ and columns $i$ and $j$ ($1 \le r \le N$, $1 \le i, j \le M$)
    - `C c i j` to flip the characters in cells in column $c$ and rows $i$ and $j$ ($1 \le c \le M$, $1 \le i, j \le N$)

If there are several possible answers, you may find any one of them.

### Constraints
- $1 \le T \le 100$
- $0 \le E \le 1$
- for each valid $i$, $A_i$ contains only characters '0' and '1'
- for each valid $i$, $B_i$ contains only characters '?', '0' and '1'
- the sum of $N \cdot M$ over all test cases does not exceed $200,000$

### Subtasks
**Subtask #1 (10 points):**
- $T \le 3$
- $N \cdot M \le 16$

**Subtask #2 (10 points):**
- initially, for each pair of side-adjacent cells in the matrix $A$, the characters in them are different ($A$ follows a chessboard pattern)
- for each valid $i$, each character of $B_i$ is '0'

**Subtask #3 (30 points):**
- $E = 0$
- for each valid $i$, $B_i$ contains only characters '0' and '1'

**Subtask #4 (50 points):** original constraints

### Example Input
```
3
3 3 1
010
101
101
100
110
?00
2 2 0
10
01
0?
??
1 3 1
101
010	
```

### Example Output
```
3
C 2 1 2
C 3 2 3
C 1 3 1
1
-1
```

### Explanation
**Example case 1:** This is not the only solution ― a valid sequence of $3$ row operations also exists.

**Example case 2:** We did not restore the sequence of operations because $E = 0$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>