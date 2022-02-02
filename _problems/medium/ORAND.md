---
{"category_name":"medium","problem_code":"ORAND","problem_name":"And-Or Game","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 1\r\n5 12 14\r\n15\r\n6 1\r\n0 1 3 6 12 14\r\n1\r\n4 3\r\n1 3 5 6\r\n3 6 10","output":"6\r\n9\r\n8","explanation":"**Example case 1:** $V$ can reach the values $\\{ 0,5,12,13,14,15 \\}$.\r\n\r\n**Example case 2:** $V$ can reach the values $\\{ 0,1,3,6,7,12,13,14,15 \\}$.\r\n\r\n**Example case 3:** $V$ can reach the values $\\{ 0,1,2,3,4,5,6,7 \\}$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Xsj_hz21B9I","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"2 - 5","source_sizelimit":50000,"problem_author":"triplem5ds","problem_tester":"","date_added":"25-12-2020","tags":{"0":"fast","1":"jan21","2":"medium","3":"triplem5ds"},"problem_difficulty_level":"Medium-Hard","best_tag":"Fast Walsh Hadamard Transform","editorial_url":"https://discuss.codechef.com/problems/ORAND","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ORAND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/ORAND.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/ORAND.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/ORAND.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/ORAND.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/ORAND.pdf) as well.

Chef is playing a game with two sequences of non-negative integers $A_1, A_2, \ldots, A_N$ and $B_1, B_2, \ldots, B_M$. He has an integer $V$, which is initially equal to $0$. Chef will play for a number of turns he chooses (possibly zero); he stops playing when he gets bored. In each turn of the game, Chef must perform one of the following operations:
- Choose an integer $X$ from $A$ and change $V$ to $V \lor X$, i.e. the [bitwise OR](https://en.wikipedia.org/wiki/Bitwise_operation#OR) of $V$ and $X$.
- Choose an integer $X$ from $B$ and change $V$ to $V \land X$, i.e. the [bitwise AND](https://en.wikipedia.org/wiki/Bitwise_operation#AND) of $V$ and $X$.

Find the number of possible distinct values which $V$ can have after the game ends.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $M$ space-separated integers $B_1, B_2, \ldots, B_M$.

### Output
For each test case, print a single line containing one integer ― the number of possible values of $V$ after the game ends.

### Constraints
- $1 \leq N,M \leq 2^{20}$
- $0 \leq A_i \lt 2^{20}$ for each valid $i$
- $0 \leq B_i \lt 2^{20}$ for each valid $i$
- $A_1, A_2, \ldots, A_N$ are pairwise distinct
- $B_1, B_2, \ldots, B_M$ are pairwise distinct
- the sum of $N$ over all test cases does not exceed $2^{20}$
- the sum of $M$ over all test cases does not exceed $2^{20}$

### Subtasks
**Subtask #1 (30 points, time limit 2 seconds):** 
- $1 \leq N,M \leq 2^{10}$
- $0 \leq A_i \lt 2^{10}$ for each valid $i$
- $0 \leq B_i \lt 2^{10}$ for each valid $i$

**Subtask #2 (30 points, time limit 2 seconds):** 
- $1 \leq N,M \leq 2^{15}$
- $0 \leq A_i \lt 2^{15}$ for each valid $i$
- $0 \leq B_i \lt 2^{15}$ for each valid $i$

**Subtask #3 (40 points, time limit 5 seconds):** original constraints

### Example Input
```
3
3 1
5 12 14
15
6 1
0 1 3 6 12 14
1
4 3
1 3 5 6
3 6 10
```

### Example Output
```
6
9
8
```
	
### Explanation
**Example case 1:** $V$ can reach the values $\{ 0,5,12,13,14,15 \}$.

**Example case 2:** $V$ can reach the values $\{ 0,1,3,6,7,12,13,14,15 \}$.

**Example case 3:** $V$ can reach the values $\{ 0,1,2,3,4,5,6,7 \}$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>