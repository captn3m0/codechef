---
{"category_name":"easy","problem_code":"SEDMAX","problem_name":"Sed Max","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2\r\n1 2\r\n3\r\n5 1 3","output":"1\r\n2","explanation":"**Example case 1:** $[1, 2]$ is the only possible subarray that satisfies $l \\lt r$. For this subarray, the cost is $2 - 1 = 1$. The set of all possible costs is $\\{1\\}$ and the answer is its size, $1$.\r\n\r\n**Example case 2:** There are three subarray that can be chosen: $[5, 1]$, $[1, 3]$ and $[5, 1, 3]$. The costs for them are $4$, $2$ and $2$ respectively. Hence, the set of possible costs is $\\{2, 4\\}$ and the answer is its size, $2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/t9JbrjKXKks","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"bhvdsi","problem_tester":"","date_added":"21-02-2021","tags":{"0":"bhvdsi","1":"easy","2":"ltime93","3":"stack"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SEDMAX","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SEDMAX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME93/hindi/SEDMAX.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME93/bengali/SEDMAX.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME93/mandarin/SEDMAX.pdf), [Russian](https://www.codechef.com/download/translated/LTIME93/russian/SEDMAX.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME93/vietnamese/SEDMAX.pdf) as well.

JJ has a magical sequence $A_1, A_2, \ldots, A_N$. The group of high magicians Sed wants to buy this sequence from him. They calculate its cost as follows:
- Choose a subarray of length atleast $2$, i.e. a contiguous subsequence $A_l, A_{l+1}, \ldots, A_r$ such that $1 \le l \lt r \le N$.
- The cost is the difference between the largest and the second largest element in this subarray (note that if there is more than one element with the maximum value, the cost is $0$).

Clearly, the cost is not uniquely determined, but depends on the choice of the subarray in the first step. JJ is careful, so he wants to find the number of different possible amounts of money he can obtain, i.e. the size of the set of all possible costs for all valid choices of this subarray.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-seperated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the number of possible costs.

### Constraints 
- $1 \leq T \leq 10^5$
- $2 \leq N \leq 10^5$
- $1 \leq A_i \leq 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (30 points):** the sum of $N$ over all test cases does not exceed $5 \cdot 10^3$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
2
1 2
3
5 1 3
```

### Example Output
```
1
2
```

### Explanation
**Example case 1:** $[1, 2]$ is the only possible subarray that satisfies $l \lt r$. For this subarray, the cost is $2 - 1 = 1$. The set of all possible costs is $\{1\}$ and the answer is its size, $1$.

**Example case 2:** There are three subarray that can be chosen: $[5, 1]$, $[1, 3]$ and $[5, 1, 3]$. The costs for them are $4$, $2$ and $2$ respectively. Hence, the set of possible costs is $\{2, 4\}$ and the answer is its size, $2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>