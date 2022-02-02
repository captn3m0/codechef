---
{"category_name":"medium","problem_code":"CHEFSSM","problem_name":"Chef and the Combination Lock","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2\r\n2 2\r\n2\r\n5 5\r\n3\r\n3 4 5","output":"443664157\r\n221832079\r\n598946612","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/zq45DyxIoUk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"choudhary463","problem_tester":"","date_added":"23-07-2020","tags":{"0":"choudhary463","1":"math","2":"medium","3":"nov20","4":"polynomial"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/CHEFSSM","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFSSM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV20/hindi/CHEFSSM.pdf), [Bengali](https://www.codechef.com/download/translated/NOV20/bengali/CHEFSSM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV20/mandarin/CHEFSSM.pdf), [Russian](https://www.codechef.com/download/translated/NOV20/russian/CHEFSSM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV20/vietnamese/CHEFSSM.pdf) as well.

Chef has a combination lock with $N$ wheels (numbered $1$ through $N$). For each valid $i$, on the $i$-th wheel, the integers from $0$ to $A_i$ (inclusive) are written in ascending order ($0$ and $A_i$ are also adjacent). Initially, one value on each wheel is selected uniformly randomly and independently.

The lock operates in a very peculiar way: it opens when there is at least one wheel where either $0$ or the largest value on that wheel is selected. Chef wants to open the lock using the smallest possible number of operations; in one operation, he may choose one wheel and rotate it clockwise or counterclockwise by $1$ unit (i.e. select a value that is adjacent to the previously selected value on that wheel).

Find the [expected value](https://en.wikipedia.org/wiki/Expected_value) of the number of operations which Chef needs to perform to open the lock.

The expected number of operations can be represented as a fraction $\frac{P}{Q}$, where $P$ is a non-negative integer and $Q$ a positive integer coprime with $998,244,353$. You should calculate $P \cdot Q^{-1}$ modulo $998,244,353$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer $P \cdot Q^{-1}$ modulo $998,244,353$.

### Constraints
- $1 \le T \le 10^3$
- $1 \le N \le 10^5$
- $0 \le A_i \lt 998,244,352$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (10 points):**
- $N \le 5,000$
- $A_i \le 5,000$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5,000$

**Subtask #2 (20 points):**
- $N \le 5,000$
- the sum of $N$ over all test cases does not exceed $5,000$

**Subtask #3 (70 points):** original constraints

### Example Input
```
3
2
2 2
2
5 5
3
3 4 5
```

### Example Output
```
443664157
221832079
598946612
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>