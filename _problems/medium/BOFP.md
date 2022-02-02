---
{"category_name":"medium","problem_code":"BOFP","problem_name":"Beauty of Pairs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n4\n1 1 0\n1 2\n1 3\n3 4","output":"4 2","explanation":"**Example case 1:** There are two valid orderings with value $4$:\n- $P = (2, 1, 3)$, $R = \\{2, 3\\}$; $C = (3, 1, 4)$ and $D = (1, 2, 3)$, so $F(C) = 3 \\cdot 1 + 1 \\cdot 1 + 4 \\cdot 0 = 4$\n- $P = (2, 1, 3)$, $R = \\{2\\}$; $C = (3, 1, 3)$ and $D = (1, 2, 4)$, so $F(C) = 3 \\cdot 1 + 1 \\cdot 1 + 3 \\cdot 0 = 4$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"farhod_farmon","problem_tester":null,"date_added":"20-06-2019","tags":{"0":"farhod_farmon","1":"ltime75","2":"medium","3":"observation","4":"segment","5":"taran_1407"},"problem_difficulty_level":"Medium-Hard","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/BOFP","time":{"view_start_date":1567272600,"submit_start_date":1567272600,"visible_start_date":1567272600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BOFP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME75/hindi/BOFP.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME75/bengali/BOFP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME75/mandarin/BOFP.pdf), [Russian](https://www.codechef.com/download/translated/LTIME75/russian/BOFP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME75/vietnamese/BOFP.pdf) as well.

You are given a tree with $N$ vertices numbered 1 through $N$ as a sequence of $N-1$ edges — pairs $(a_1, b_1), (a_2, b_2), \ldots, (a_{N-1}, b_{N-1})$. Let's define the *value* of a sequence $A$ with length $N-1$ as
$$F(A)=\sum_{i=1}^{N-1} A_i \cdot W_i \,,$$
where $W_1, W_2, \ldots, W_{N-1}$ are given weights.

You may change the order of the pairs and the order of elements within any pairs. Formally, consider a *reordering* $(P, R)$ — any permutation $P = (P_1, P_2, \ldots, P_{N-1})$ of the integers $1$ through $N-1$ and any subset $R$ of these integers (possibly containing all of them). Let's define two sequences $C = (c_{P_1}, c_{P_2}, \ldots, c_{P_{N-1}})$ and $D = (d_{P_1}, d_{P_2}, \ldots, d_{P_{N-1}})$, where for each valid $i$, $c_i = a_i$ and $d_i = b_i$ if $i \not\in R$, or $c_i = b_i$ and $d_i = a_i$ if $i \in R$. If $D$ is **strictly** increasing, the reordering is *valid* and its value is $F(C)$.

Find the maximum value of a valid reordering, i.e. the maximum $F(C)$, and the number of valid reorderings that have this maximum value.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N-1$ space-separated integers $W_1, W_2, \ldots, W_{N-1}$.
- $N-1$ lines follow. For each $i$ ($1 \le i \le N-1$), the $i$-th of these lines contains two space-separated integers $a_i$ and $b_i$.

### Output
For each test case, print a single line containing two space-separated integers — the maximum value of a reordering and the number of reorderings with the maximum value.

### Constraints
- $1 \le T \le 100$
- $2 \le N \le 2 \cdot 10^5$
- $|W_i| \le 10^4$ for each valid $i$
- $1 \le a_i, b_i \le N$ for each valid $i$
- pairs $(a_i, b_i)$ are edges of a tree
- the sum of $N$ over all test cases does not exceed $10^6$



### Subtasks
**Subtask #1 (50 points):**
- $N \le 1,000$
- the sum of $N$ over all test cases does not exceed $5,000$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
4
1 1 0
1 2
1 3
3 4
```

### Example Output
```
4 2
```

### Explanation
**Example case 1:** There are two valid orderings with value $4$:
- $P = (2, 1, 3)$, $R = \{2, 3\}$; $C = (3, 1, 4)$ and $D = (1, 2, 3)$, so $F(C) = 3 \cdot 1 + 1 \cdot 1 + 4 \cdot 0 = 4$
- $P = (2, 1, 3)$, $R = \{2\}$; $C = (3, 1, 3)$ and $D = (1, 2, 4)$, so $F(C) = 3 \cdot 1 + 1 \cdot 1 + 3 \cdot 0 = 4$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>