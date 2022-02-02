---
{"category_name":"medium","problem_code":"LCKDSAFE","problem_name":"Locked Safe","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4\r\n0 1 2 3\r\n6\r\n1 3 5 6 4 2","output":"6\r\n11","explanation":"**Example case 1:** The pairs $(l, r)$ satisfying the condition are $(1,1)$, $(1,2)$, $(1, 3)$, $(1, 4)$, $(2, 3)$ and $(2, 4)$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/m-vFtsWt3Ck","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"karpovich","problem_tester":"","date_added":"24-02-2021","tags":{"0":"data","1":"karpovich","2":"march21","3":"medium","4":"two"},"problem_difficulty_level":"Medium-Hard","best_tag":"Two Pointers","editorial_url":"https://discuss.codechef.com/problems/LCKDSAFE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LCKDSAFE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/LCKDSAFE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/LCKDSAFE.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/LCKDSAFE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/LCKDSAFE.pdf) as well.

Chef has met up with his old friend Jack recently. Jack told Chef that he found a recipe for an ancient dish, but unfortunately, it is locked in a safe and to open the safe, it is necessary to enter the solution to the following problem.

There is a sequence of non-negative integers $A_1, A_2, \ldots, A_N$ on the safe. Find the number of pairs $(l, r)$ ($1 \leq l \leq r \leq N$) which satisfy the condition $$(A_l \lor A_{l+1} \lor \ldots \lor A_r) \oplus (A_l \land A_{l+1} \land \ldots \land A_r) \geq \max(A_l, A_{l+1}, \ldots, A_r) \,.$$

Here, $\oplus$ denotes bitwise XOR, $\lor$ denotes bitwise OR and $\land$ denotes bitwise AND.

Jack and Chef cannot think of anything except the recipe, so you are asked to open the safe.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the number of pairs $(l,r)$ that satisfy the given condition.

### Constraints
- $1 \leq N \leq 10^6$
- $0 \leq A_i \lt 2^{60}$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (10 points):** for each valid $i$, $A_i$ is a power of $2$

**Subtask #2 (30 points):**
- $A_i \leq 3 \cdot 10^5$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $3 \cdot 10^5$

**Subtask #3 (60 points):** original constraints

### Example Input
```
2
4
0 1 2 3
6
1 3 5 6 4 2
```

### Example Output
```
6
11
```

### Explanation
**Example case 1:** The pairs $(l, r)$ satisfying the condition are $(1,1)$, $(1,2)$, $(1, 3)$, $(1, 4)$, $(2, 3)$ and $(2, 4)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>