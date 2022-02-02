---
{"category_name":"easy","problem_code":"CHFNSWPS","problem_name":"Chefina and Swaps","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1\r\n1\r\n2\r\n2\r\n1 2\r\n2 1\r\n2\r\n1 1\r\n2 2","output":"-1\r\n0\r\n1","explanation":"**Example case 1:** There is no way to make the sequences identical, so the answer is $-1$.\r\n\r\n**Example case 2:** The sequence are identical initially, so the answer is $0$.\r\n\r\n**Example case 3:** We can swap $A_1$ with $B_2$, which makes the two sequences identical, so the answer is $1$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/zs9DcZREWTs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":"","date_added":"28-01-2020","tags":{"0":"easy","1":"july20","2":"rishup_nitdgp","3":"rishup_nitdgp","4":"sorting","5":"standard"},"problem_difficulty_level":"Easy","best_tag":"Standard Template Library","editorial_url":"https://discuss.codechef.com/problems/CHFNSWPS","time":{"view_start_date":1594632600,"submit_start_date":1594632600,"visible_start_date":1594632600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFNSWPS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/CHFNSWPS.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/CHFNSWPS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/CHFNSWPS.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/CHFNSWPS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/CHFNSWPS.pdf) as well.

Chefina has two sequences $A_1, A_2, \ldots, A_N$ and $B_1, B_2, \ldots, B_N$. She views two sequences with length $N$ as identical if, after they are sorted in non-decreasing order, the $i$-th element of one sequence is equal to the $i$-th element of the other sequence for each $i$ ($1 \le i \le N$).

To impress Chefina, Chef wants to make the sequences identical. He may perform the following operation zero or more times: choose two integers $i$ and $j$ $(1 \le i,j \le N)$ and swap $A_i$ with $B_j$. The cost of each such operation is $\mathrm{min}(A_i, B_j)$.

You have to find the minimum total cost with which Chef can make the two sequences identical.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
For each test case, print a single line containing one integer ― the minimum cost, or $-1$ if no valid sequence of operations exists.

### Constraints
- $1 \le T \le 2,000$
- $1 \le N \le 2 \cdot 10^5$
- $1 \le A_i, B_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^6$

### Subtasks
**Subtask #1 (15 points):**
- $T \le 20$
- $N \le 20$

**Subtask #2 (85 points):** original constraints

### Example Input
```
3
1
1
2
2
1 2
2 1
2
1 1
2 2
```

### Example Output
```
-1
0
1
```

### Explanation
**Example case 1:** There is no way to make the sequences identical, so the answer is $-1$.

**Example case 2:** The sequence are identical initially, so the answer is $0$.

**Example case 3:** We can swap $A_1$ with $B_2$, which makes the two sequences identical, so the answer is $1$. 

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>