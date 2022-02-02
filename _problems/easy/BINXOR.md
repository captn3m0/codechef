---
{"category_name":"easy","problem_code":"BINXOR","problem_name":"Binary XOR","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2\r\n00\r\n10","output":2,"explanation":"**Example case 1:** The characters in each string can be reordered in two ways (swap them or do nothing), so there are four values of their XOR:\r\n- \u002200\u0022 XOR \u002210\u0022 is \u002210\u0022\r\n- \u002200\u0022 XOR \u002201\u0022 is \u002201\u0022\r\n- \u002200\u0022 XOR \u002210\u0022 is \u002210\u0022\r\n- \u002200\u0022 XOR \u002201\u0022 is \u002201\u0022\r\n\r\nThere are only two distinct values.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"black_truce","problem_tester":null,"date_added":"1-09-2019","tags":{"0":"binary","1":"black_truce","2":"dec19","3":"easy","4":"melfice","5":"modulo"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BINXOR","time":{"view_start_date":1576488720,"submit_start_date":1576488720,"visible_start_date":1576488720,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BINXOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC19/hindi/BINXOR.pdf), [Bengali](https://www.codechef.com/download/translated/DEC19/bengali/BINXOR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC19/mandarin/BINXOR.pdf), [Russian](https://www.codechef.com/download/translated/DEC19/russian/BINXOR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC19/vietnamese/BINXOR.pdf) as well.

You are given two binary strings $A$ and $B$, each with length $N$. You may reorder the characters of $A$ in an arbitrary way and reorder the characters of $B$ also in an arbitrary (not necessarily the same) way. Then, you should compute the XOR of the resulting strings. Find the number of distinct values of this XOR which can be obtained, modulo $1,000,000,007$ ($10^9 + 7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $A$ with length $N$.
- The third line contains a single string $B$ with length $N$.

### Output
For each test case, print a single line containing one integer ― the number of unique XORs modulo $1,000,000,007$.

### Constraints 
- $1 \le T \le 10^5$
- $1 \le N \le 10^5$
- $|A| = |B| = N$
- $A$ and $B$ contain only characters '0' and '1'
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (10 points):**
- $N \le 5$
- the sum of $N$ over all test cases does not exceed $10$

**Subtask #2 (30 points):**
- $N \le 1,000$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^3$

**Subtask #3 (60 points):** original constraints

### Example Input
```
1
2
00
10
```

### Example Output
```
2
```

### Explanation
**Example case 1:** The characters in each string can be reordered in two ways (swap them or do nothing), so there are four values of their XOR:
- "00" XOR "10" is "10"
- "00" XOR "01" is "01"
- "00" XOR "10" is "10"
- "00" XOR "01" is "01"

There are only two distinct values.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>