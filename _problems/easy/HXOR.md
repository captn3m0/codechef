---
{"category_name":"easy","problem_code":"HXOR","problem_name":"Hail XOR","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 3\r\n2 2 3","output":"0 0 3","explanation":"**Example case 1:** The original sequence is $(2, 2, 3)$. Consider the following three operations:\r\n- Choose $i = 1$, $j = 2$ and $p = 1$. Then, $A_1$ changes from $2$ to $2 \\oplus 2^1 = 0$ and similarly, $A_2$ changes from $2$ to $2 \\oplus 2^1 = 0$. Now the sequence is $(0, 0, 3)$.\r\n- Next, choose $i = 1$, $j = 2$ and $p = 1$. Then, $A_1$ changes to $0 \\oplus 2^1 = 2$ and $A_2$ changes to $0 \\oplus 2^1 = 2$. The sequence is $(2, 2, 3)$.\r\n- Next, again choose $i = 1$, $j = 2$ and $p = 1$. Then, $A_1$ changes to $2 \\oplus 2^1 = 0$ and $A_2$ changes to $2 \\oplus 2^1 = 0$. The sequence is $(0, 0, 3)$ again.\r\n\r\nWe can check that after exactly 3 operations, this is the lexicographically smallest sequence we can obtain.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/1Sb0fgcEcgE","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"fiction1729","problem_tester":"","date_added":"1-10-2020","tags":{"0":"bitwise","1":"dec20","2":"easy","3":"fiction1729"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/HXOR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HXOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC20/hindi/HXOR.pdf), [Bengali](https://www.codechef.com/download/translated/DEC20/bengali/HXOR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC20/mandarin/HXOR.pdf), [Russian](https://www.codechef.com/download/translated/DEC20/russian/HXOR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC20/vietnamese/HXOR.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$ and you have to perform the following operation exactly $X$ times:
- Choose two integers $i$ and $j$ such that $1 \le i \lt j \le N$.
- Choose a non-negative integer $p$.
- Change $A_i$ to $A_i \oplus 2^p$, and change $A_j$ to $A_j \oplus 2^p$, where $\oplus$ denotes [bitwise XOR](https://en.wikipedia.org/wiki/Bitwise_operation#XOR).

Find the lexicographically smallest sequence which can be obtained by performing this operation exactly $X$ times.

A sequence $B_1, B_2, \ldots, B_N$ is said to be lexicographically smaller than a sequence $C_1, C_2, \ldots, C_N$ if there is an index $i$ such that $B_i \lt C_i$ and for each valid $j \lt i$, $B_j = C_j$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $X$. 
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers ― the lexicographically smallest obtainable sequence.

### Constraints
- $1 \le T \le 10$
- $2 \le N \le 10^5$
- $1 \le X \le 10^9$
- $1 \le A_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $N \le 100$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
3 3
2 2 3
```

### Example Output
```
0 0 3
```

### Explanation
**Example case 1:** The original sequence is $(2, 2, 3)$. Consider the following three operations:
- Choose $i = 1$, $j = 2$ and $p = 1$. Then, $A_1$ changes from $2$ to $2 \oplus 2^1 = 0$ and similarly, $A_2$ changes from $2$ to $2 \oplus 2^1 = 0$. Now the sequence is $(0, 0, 3)$.
- Next, choose $i = 1$, $j = 2$ and $p = 1$. Then, $A_1$ changes to $0 \oplus 2^1 = 2$ and $A_2$ changes to $0 \oplus 2^1 = 2$. The sequence is $(2, 2, 3)$.
- Next, again choose $i = 1$, $j = 2$ and $p = 1$. Then, $A_1$ changes to $2 \oplus 2^1 = 0$ and $A_2$ changes to $2 \oplus 2^1 = 0$. The sequence is $(0, 0, 3)$ again.

We can check that after exactly 3 operations, this is the lexicographically smallest sequence we can obtain.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>