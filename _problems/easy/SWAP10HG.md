---
{"category_name":"easy","problem_code":"SWAP10HG","problem_name":"One Zero Swaps","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2\r\n00\r\n00\r\n3\r\n101\r\n010\r\n4\r\n0110\r\n0011","output":"Yes\r\nNo\r\nYes","explanation":"**Example case 1:** The strings are already equal.\r\n\r\n**Example case 2:** It can be showed that it is impossible to convert $S$ into $P$.\r\n\r\n**Example case 3:** You can swap $S_2$ with $S_4$. The strings will then be equal.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/zMElcW3Ot-4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"the_hyp0cr1t3","problem_tester":"","date_added":"25-12-2020","tags":{"0":"easy","1":"ltime91","2":"observation","3":"taran_1407","4":"the_hyp0cr1t3"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SWAP10HG","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SWAP10HG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME91/hindi/SWAP10HG.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME91/bengali/SWAP10HG.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME91/mandarin/SWAP10HG.pdf), [Russian](https://www.codechef.com/download/translated/LTIME91/russian/SWAP10HG.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME91/vietnamese/SWAP10HG.pdf) as well.

You are given two binary strings $S$ and $P$, each with length $N$. A binary string contains only characters '0' and '1'. For each valid $i$, let's denote the $i$-th character of $S$ by $S_i$.

You have to convert the string $S$ into $P$ using zero or more operations. In one operation, you should choose two indices $i$ and $j$ ($1 \leq i \lt j \leq N$) such that $S_i$ is '1' and $S_j$ is '0', and swap $S_i$ with $S_j$.

Determine if it is possible to convert $S$ into $P$ by performing some operations.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $S$.
- The third line contains a single string $P$.

### Output
For each test case, print a single line containing the string `"Yes"` if it is possible to convert $S$ into $P$ or `"No"` otherwise (without quotes).

### Constraints
- $1 \leq T \leq 10^5$
- $1 \leq N \leq 10^5$
- $S$ and $P$ contain only characters '0' and '1'
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (20 points):**
- $N \leq 14$
- the sum of $N$ over all test cases does not exceed $100$

**Subtask #2 (30 points):** the sum of $N$ over all test cases does not exceed $1,000$

**Subtask #3 (50 points):** original constraints

### Example Input
```
3
2
00
00
3
101
010
4
0110
0011
```

### Example Output
```
Yes
No
Yes
```

### Explanation
**Example case 1:** The strings are already equal.

**Example case 2:** It can be showed that it is impossible to convert $S$ into $P$.

**Example case 3:** You can swap $S_2$ with $S_4$. The strings will then be equal.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>