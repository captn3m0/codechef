---
{"category_name":"easy","problem_code":"CHEFSORT","problem_name":"Chef and Sorting","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/tJltyC2hUxo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"l_returns","problem_tester":"","date_added":"15-03-2021","tags":{"0":"cook127","1":"easy","2":"l_returns","3":"l_returns","4":"xor"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHEFSORT","time":{"view_start_date":1616351402,"submit_start_date":1616351402,"visible_start_date":1616351402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFSORT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK127/mandarin/CHEFSORT.pdf), [Russian](https://www.codechef.com/download/translated/COOK127/russian/CHEFSORT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK127/vietnamese/CHEFSORT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK127/bengali/CHEFSORT.pdf) as well.

Chef has a sequence $A_1, A_2, \ldots, A_N$. He wants to sort it in non-decreasing order. Unfortunately, he can only modify it using specific operations. In each operation, Chef should do the following:
- Choose an integer $K$ such that $0 \lt K \lt 2^{30}$.
- Choose an integer $P$ such that $1 \leq P \leq N$.
- Perform one of the following actions:
    - type $t = 1$: for each $i$ ($1 \le i \le P$), change $A_i$ to $A_i+K$
    - type $t = 2$: for each $i$ ($P \le i \le N$), change $A_i$ to $A_i+K$
    - type $t = 3$: for each $i$ ($1 \le i \le P$), change $A_i$ to $A_i \oplus K$
    - type $t = 4$: for each $i$ ($P \le i \le N$), change $A_i$ to $A_i \oplus K$

Here, $\oplus$ denotes bitwise XOR. In different operations, Chef may choose different values of $t$, $K$ and $P$.

Can you help Chef make the sequence non-decreasing using at most $\lfloor N/2 \rfloor$ operations (possibly $0$ times)? Find one such sequence of operations.

Note that you do not need to minimise the number of operations. If there are multiple solutions, you may find any one of them. It is guaranteed that a solution using at most $\lfloor N/2 \rfloor$ operations always exists.
       
### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case:
- First, print a line containing a single integer $X$ ― the number of operations you want to perform ($0 \leq X \leq \lfloor N/2 \rfloor$).
- Then, print $X$ lines. Each of these lines should contain three space-separated integers $t$, $P$ and $K$ describing an operation ($1 \leq t \leq 4$).

### Constraints
- $1 \leq T \leq 10^5$
- $3 \leq N \leq 10^3$
- $0 \leq A_i \lt 2^{30}$ for each valid $i$
- the sum of $N^2$ over all test cases does not exceed $10^7$ 

### Example Input
```
5
3
1 10 9
4
4 3 5 1
6
12 13 15 3 7 5
3
1 2 3
3
1 2 3
```

### Example Output
```
1
4 2 11
2
4 4 4
2 2 2
2
3 3 12
4 3 2
1
1 3 3
0
```

### Explanation
**Example case 1:** After changing $A_2$ to $10 \oplus 11$ and $A_3$ to $9 \oplus 11$, the sequence becomes $[1, 1, 2]$, which is non-decreasing.

**Example case 2:** In the first operation, we change $A_4$ to $1 \oplus 4$ and the sequence becomes $[4, 3, 5, 5]$. Then, we add $2$ to $A_2$, $A_3$ and $A_4$. The sequence becomes $[4, 5, 7, 7]$, which is non-decreasing.

**Example case 3:** After the first operation, the sequence $A$ becomes $[0, 1, 3, 3, 7, 5]$. After the second operation, the sequence becomes $[0, 1, 1, 1, 5, 7]$, which is non-decreasing.

**Example case 4:** After performing the only operation, the sequence becomes $[4, 5, 6]$, which is non-decreasing.

**Example case 5:** The sequence $[1, 2, 3]$ is already non-decreasing, so we do not need to perform any operations.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>