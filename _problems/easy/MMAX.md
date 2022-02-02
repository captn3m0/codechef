---
{"category_name":"easy","problem_code":"MMAX","problem_name":"Minimum and Maximum","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n3\n2","output":2,"explanation":"**Example case 1:** To minimise $S_1$, Chef could give $1$ chocolate to person $1$ and $1$ chocolate to person $2$, so $S_1 = |1-1| + |1-0| = 1$.\n\nTo maximise $S_2$, Chef can give $1$ chocolate to person $1$ and $1$ chocolate to person $3$, since the sequence $B = (1, 0, 1)$ is a permutation of $A = (1, 1, 0)$. Then, $S_2 = |1-0| + |0-1| = 2$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mayank1601","problem_tester":null,"date_added":"20-06-2019","tags":{"0":"july19","1":"long","2":"math","3":"mayank1601","4":"modular","5":"simple"},"problem_difficulty_level":"Simple","best_tag":"Modular Arithmetic","editorial_url":"https://discuss.codechef.com/problems/MMAX","time":{"view_start_date":1563183002,"submit_start_date":1563183002,"visible_start_date":1563183002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MMAX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY19/hindi/MMAX.pdf), [Bengali](https://www.codechef.com/download/translated/JULY19/bengali/MMAX.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY19/mandarin/MMAX.pdf), [Russian](https://www.codechef.com/download/translated/JULY19/russian/MMAX.pdf) and [Vietnamese](https://www.codechef.com/download/translated/JULY19/vietnamese/MMAX.pdf) as well.

Chef has $K$ chocolates and he wants to distribute them to $N$ people (numbered $1$ through $N$). These people are standing in a line in such a way that for each $i$ ($1 \le i \le N-1$), person $i$ and person $i+1$ are adjacent.

First, consider some way to distribute chocolates such that for each valid $i$, the number of chocolates the $i$-th person would receive from Chef is $A_i$ and the sum $S_1 = \sum_{i=1}^{N-1} \left|A_i - A_{i+1}\right|$ is minimum possible. Of course, each person must receive a non-negative integer number of chocolates.

Then, Chef wants to create a new sequence $B_1, B_2, \ldots, B_N$ by rearranging (permuting) the elements of the sequence $A_1, A_2, \ldots, A_N$. For each valid $i$, the number of chocolates the $i$-th person actually receives from Chef is $B_i$. Chef wants to distribute the chocolates (choose $B_1, B_2, \ldots, B_N$ by permuting the sequence $A$ and give $B_i$ chocolates to the $i$-th person for each valid $i$) in such a way that $S_2 = \sum_{i=1}^{N-1} \left|B_i – B_{i+1}\right|$ is **maximum** possible. You need to find the maximum value of $S_2$.

It is guaranteed that $S_2$ does not depend on the exact choice of the sequence $A_1, A_2, \ldots, A_N$, as long as it is a sequence that minimises $S_1$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single integer $K$.

### Output
For each test case, print a single line containing one integer — the maximum value of the sum $S_2$.

### Constraints
- $1 \le T \le 10$
- $2 \le N \le 10^5$
- $2 \le K \le 10^{100,000}$

### Subtasks
**Subtask #1 (30 points):** $2 \le N, K \le 1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
3
2
```

### Example Output
```
2
```

### Explanation
**Example case 1:** To minimise $S_1$, Chef could give $1$ chocolate to person $1$ and $1$ chocolate to person $2$, so $S_1 = |1-1| + |1-0| = 1$.

To maximise $S_2$, Chef can give $1$ chocolate to person $1$ and $1$ chocolate to person $3$, since the sequence $B = (1, 0, 1)$ is a permutation of $A = (1, 1, 0)$. Then, $S_2 = |1-0| + |0-1| = 2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>