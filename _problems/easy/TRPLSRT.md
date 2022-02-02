---
{"category_name":"easy","problem_code":"TRPLSRT","problem_name":"Triple Sort","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4 2\r\n3 2 4 1","output":"1\r\n1 3 4","explanation":"**Example case 1:** We can sort the permutation by performing one cyclic right shift operation on the indices $1$, $3$ and $4$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"losmi247","problem_tester":null,"date_added":"19-02-2020","tags":{"0":"easy","1":"invariants","2":"losmi247","3":"losmi247","4":"maths","5":"may20","6":"permutation"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TRPLSRT","time":{"view_start_date":1589189402,"submit_start_date":1589189402,"visible_start_date":1589189402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRPLSRT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MAY20/hindi/TRPLSRT.pdf), [Bengali](https://www.codechef.com/download/translated/MAY20/bengali/TRPLSRT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY20/mandarin/TRPLSRT.pdf), [Russian](https://www.codechef.com/download/translated/MAY20/russian/TRPLSRT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY20/vietnamese/TRPLSRT.pdf) as well.

You are given a permutation $p_1, p_2, \ldots, p_N$ of the integers $1$ through $N$. You may perform up to $K$ operations of the following type:
- Choose three pairwise distinct valid indices $i_1, i_2, i_3$. Note that these indices do not have to be chosen in increasing order.
- Let's denote the values of $p_{i_1}$, $p_{i_2}$ and $p_{i_3}$ before this operation by $v_1$, $v_2$ and $v_3$ respectively.
- Change $p_{i_2}$ to $v_1$, $p_{i_3}$ to $v_2$ and $p_{i_1}$ to $v_3$. In other words, perform a cyclic right shift on the elements $p_{i_1}, p_{i_2}, p_{i_3}$ in this order.

For example, the permutation $(1,4,3,2,5)$ can be changed to the permutation $(1,5,3,4,2)$ in one operation by choosing $i_1 = 2$, $i_2 = 4$ and $i_3 = 5$.

Your task is to sort the permutation in increasing order. Note that you do not have to minimise the number of performed operations.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $p_1, p_2, \ldots, p_N$.

### Output
For each test case:
- If it is impossible to sort the given permutation using at most $K$ operations, print a single line containing the integer $-1$.
- Otherwise, first, print a line containing a single integer $M$ ($0 \le M \le K$) ― the number of operations you want to perform.
- Then, print $M$ lines describing these operations. For each $i$ ($1 \le i \le M$), the $i$-th of these lines should contain three space-separated integers $a_i$, $b_i$ and $c_i$ (pairwise distinct; $1 \le a_i, b_i, c_i \le N$) ― the indices on which the $i$-th operation is performed.

### Constraints
- $1 \le T \le 100$
- $3 \le N \le 2 \cdot 10^5$
- $1 \le p_i \le N$ for each valid $i$
- $p_1, p_2, \ldots, p_N$ are pairwise distinct
- the sum of all $N$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (5 points):**
- $p_i = N-i+1$ for each valid $i$
- $N \le 400$
- $K = N^2$

**Subtask #2 (45 points):** $K = \left\lfloor \frac{2N}{3} \right\rfloor$

**Subtask #3 (50 points):** $K = \left\lfloor \frac{N}{2} \right\rfloor$

### Example Input
```
1
4 2
3 2 4 1
```

### Example output
```
1
1 3 4
```

### Explanation
**Example case 1:** We can sort the permutation by performing one cyclic right shift operation on the indices $1$, $3$ and $4$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>