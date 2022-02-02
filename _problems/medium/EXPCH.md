---
{"category_name":"medium","problem_code":"EXPCH","problem_name":"Expected Change","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5\r\n((())","output":866666673,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"foyaz05","problem_tester":null,"date_added":"31-12-2019","tags":{"0":"combinatorics","1":"dynamic","2":"feb20","3":"foyaz05","4":"medium","5":"tmwilliamlin"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/EXPCH","time":{"view_start_date":1581931802,"submit_start_date":1581931802,"visible_start_date":1581931802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXPCH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB20/hindi/EXPCH.pdf), [Bengali](https://www.codechef.com/download/translated/FEB20/bengali/EXPCH.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB20/mandarin/EXPCH.pdf), [Russian](https://www.codechef.com/download/translated/FEB20/russian/EXPCH.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB20/vietnamese/EXPCH.pdf) as well.

Chef has a string $A$ with length $N$. It contains only characters '(', ')' and '*'. Chef wants to perform the following process:
- Uniformly randomly choose a pair of integers $(l, r)$ such that $1 \le l \le r \le N$.
- Consider the substring $S = [A_l, A_{l+1}, \ldots, A_r]$. Process the characters of this string from left to right.
- Let's denote the current number of closing brackets in $S$ up to the currently processed character (inclusive) by $n_c$. Similarly, let's denote the number of opening brackets by $n_o$. Note that the string $S$ may change; $n_c$ and $n_o$ correspond to the current state of $S$, not its initial state.
- Whenever $n_c$ becomes greater than $n_o$, the currently processed character must be ')'. Then, change it from ')' to '(' and continue processing the remaining characters of $S$.

Chef would like to know the expected number of characters that he would change in this process. Can you help him?

It can be proved that this expected value can be expressed as a fraction $P/Q$, where $P$ and $Q$ are non-negative integers and $Q$ is coprime to $10^9+7$. You should find $P \cdot Q^{-1}$ modulo $10^9+7$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $A$ with length $N$.

### Output
For each test case, print a single line containing one integer $P \cdot Q^{-1}$ modulo $10^9+7$.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^7$
- the sum of $N$ over all test cases does not exceed $10^7$

### Subtasks
**Subtask #1 (5 points):** $N \le 100$

**Subtask #2 (15 points):** $N \le 5,000$

**Subtask #3 (30 points):** $N \le 10^5$

**Subtask #4 (50 points):** original constraints

### Example Input
```
1
5
((())
```
 
### Example Output
```
866666673
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>