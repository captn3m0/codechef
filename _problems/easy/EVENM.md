---
{"category_name":"easy","problem_code":"EVENM","problem_name":"Even Matrix","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2","output":"1 2\r\n4 3","explanation":"**Example case 1:** The matrix $M$ has five square submatrices. Four of them ($[1]$, $[2]$, $[4]$, $[3]$) have $a=0$, so they obviously satisfy all conditions. The last square submatrix is the whole matrix $M$, with $r=c=a=1$, and we can see that $M_{1,1} + M_{2,2} = 1 + 3 = 4$ and $M_{1,2} + M_{2,1} = 2 + 4 = 6$ are both even.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/aTleBMSjMes","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vitz_6","problem_tester":"","date_added":"19-01-2020","tags":{"0":"ad","1":"implementation","2":"june20","3":"rajarshi_basu","4":"simple","5":"vitz_6"},"problem_difficulty_level":"Simple-Easy","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/EVENM","time":{"view_start_date":1592213402,"submit_start_date":1592213402,"visible_start_date":1592213402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EVENM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE20/hindi/EVENM.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE20/bengali/EVENM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE20/mandarin/EVENM.pdf), [Russian](https://www.codechef.com/download/translated/JUNE20/russian/EVENM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE20/vietnamese/EVENM.pdf) as well.

Chef has an integer $N$ and he wants to generate a matrix $M$ with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$). He thinks that $M$ would be *delicious* if:
- Each element of this matrix is an integer between $1$ and $N^2$ inclusive.
- All the elements of the matrix are pairwise distinct.
- For each square submatrix containing cells in rows $r$ through $r+a$ and in columns $c$ through $c+a$ (inclusive) for some valid integers $r$, $c$ and $a \ge 0$:
    - $M_{r,c} + M_{r+a,c+a}$ is even
    - $M_{r,c+a} + M_{r+a,c}$ is even

Can you help Chef generate a delicious matrix? It can be proved that a solution always exists. If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print $N$ lines describing a delicious matrix $M$. For each valid $i$, the $i$-th of these lines should contain $N$ space-separated integers $M_{i,1}, M_{i,2}, \ldots, M_{i,N}$.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^3$
- the sum of $N$ over all test cases does not exceed $10^3$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
1
2
```

### Example Output
```
1 2
4 3
```

### Explanation
**Example case 1:** The matrix $M$ has five square submatrices. Four of them ($[1]$, $[2]$, $[4]$, $[3]$) have $a=0$, so they obviously satisfy all conditions. The last square submatrix is the whole matrix $M$, with $r=c=a=1$, and we can see that $M_{1,1} + M_{2,2} = 1 + 3 = 4$ and $M_{1,2} + M_{2,1} = 2 + 4 = 6$ are both even.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>