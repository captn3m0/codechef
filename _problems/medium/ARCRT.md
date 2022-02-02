---
{"category_name":"medium","problem_code":"ARCRT","problem_name":"Sequence Creation","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4\r\n2 2 3 2\r\n2 3 4 4\r\n5\r\n1 2 2 3 3\r\n2 1 2 3 1","output":"1 2 3 2\r\n2 1 1 1 2","explanation":"**Example case 1:**\r\n- $S_1$ can only be $(2, 3, 4)$.\r\n- $S_2$ can be $(2, 3, 4) $ or $(3, 4, 2)$.\r\n- $S_3$ can be $(3, 2)$, $(3, 4)$ or $(4, 2)$.\r\n- $S_4$ can be $(2)$ or $(4)$.\r\n\r\n**Example case 2:**\r\n- $S_1$ can be $(1, 2)$ or $(2, 1)$.\r\n- $S_2$ can only be $(1, 2, 3)$.\r\n- $S_3$ can only be $(2, 3, 1)$.\r\n- $S_4$ can only be $(3, 1)$.\r\n- $S_5$ can be $(3)$ or $(1)$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/PdCnYQqadlQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"theabd1234","problem_tester":"","date_added":"21-12-2020","tags":{"0":"connectivity","1":"disjoint","2":"jan21","3":"link","4":"medium","5":"theabd1234"},"problem_difficulty_level":"Medium-Hard","best_tag":"Disjoint Set Union","editorial_url":"https://discuss.codechef.com/problems/ARCRT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ARCRT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/ARCRT.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/ARCRT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/ARCRT.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/ARCRT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/ARCRT.pdf) as well.

Chef has two sequences of integers $(A_1, A_2, \ldots, A_N)$ and $(B_1, B_2, \ldots, B_N)$.

A sequence of integers is *beautiful* if it contains only distinct integers. For each valid $i$:
- Chef wants to create a beautiful sequence $S_i$. Let's denote the length of this sequence by $L_i$ and the sequence by $S_{i,1}, S_{i,2}, \ldots, S_{i,L_i}$.
- The sequence $S_i$ is *good* if for each valid $j$, $S_{i,j}$ is either equal to $A_{i+j-1}$ or $B_{i+j-1}$. Note that this means $L_i$ must be at most $N-i+1$.
- Let's denote the maximum possible value of $L_i$ (the maximum value such that some good sequence $S_i$ with this length exists) by $M_i$.
- Help Chef find the number of good sequences $S_i$ that have the maximum possible length $M_i$. Since this number may be enormous, compute it modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should be the number of possible sequences $S_i$ modulo $10^9+7$.

### Constraints
- $1 \leq T \leq 1,000$
- $1 \leq N \leq 10^5$
- $|A_i|, |B_i| \leq 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$
 
### Subtasks
**Subtask #1 (20 points):** 
- $N \le 1,000$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^3$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
4
2 2 3 2
2 3 4 4
5
1 2 2 3 3
2 1 2 3 1
```

### Example Output
```
1 2 3 2
2 1 1 1 2
```

### Explanation
**Example case 1:**
- $S_1$ can only be $(2, 3, 4)$.
- $S_2$ can be $(2, 3, 4) $ or $(3, 4, 2)$.
- $S_3$ can be $(3, 2)$, $(3, 4)$ or $(4, 2)$.
- $S_4$ can be $(2)$ or $(4)$.

**Example case 2:**
- $S_1$ can be $(1, 2)$ or $(2, 1)$.
- $S_2$ can only be $(1, 2, 3)$.
- $S_3$ can only be $(2, 3, 1)$.
- $S_4$ can only be $(3, 1)$.
- $S_5$ can be $(3)$ or $(1)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>