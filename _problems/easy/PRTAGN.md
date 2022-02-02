---
{"category_name":"easy","problem_code":"PRTAGN","problem_name":"Parity Again","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n3\n4\n2\n7","output":"0 1\n1 2\n3 4","explanation":"**Example case 1:**\n- Initially, the set is empty: $S = \\{\\}$.\n- After the first query, $S = \\{4\\}$, so there is only one element with an odd number of $1$-s in the binary representation (\u0022100\u0022).\n- After the second query, $S = \\{4,2,6\\}$, there is one element with an even number of $1$-s in the binary representation ($6$ is \u0022110\u0022) and the other two elements have an odd number of $1$-s.\n- After the third query, $S = \\{4,2,6,7,3,5,1\\}$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"prnjl_rai","problem_tester":null,"date_added":"21-05-2019","tags":{"0":"ad","1":"easy","2":"july19","3":"long","4":"prnjl_rai","5":"xor"},"problem_difficulty_level":"Easy","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/PRTAGN","time":{"view_start_date":1563183002,"submit_start_date":1563183002,"visible_start_date":1563183002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PRTAGN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY19/hindi/PRTAGN.pdf), [Bengali](https://www.codechef.com/download/translated/JULY19/bengali/PRTAGN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY19/mandarin/PRTAGN.pdf), [Russian](https://www.codechef.com/download/translated/JULY19/russian/PRTAGN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY19/vietnamese/PRTAGN.pdf) as well.

You are given a set $S$ and $Q$ queries. Initially, $S$ is empty. In each query:
- You are given a positive integer $X$.
- You should insert $X$ into $S$.
- For each $y \in S$ before this query such that $y \neq X$, you should also insert $y \oplus X$ into $S$ ($\oplus$ denotes the XOR operation).
- Then, you should find two values $E$ and $O$: the number of elements of $S$ with an even number of $1$-s and with an odd number of $1$-s in the binary representation, respectively.

Note that a set cannot have duplicate elements, so if you try to insert into $S$ an element that is already present in $S$, then nothing happens.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $Q$.
- Each of the next $Q$ lines contains a single integer $X$ describing a query.

### Output
For each query, print a single line containing two space-separated integers $E$ and $O$.

### Constraints 
- $1 \le T \le 5$
- $1 \le Q, X \le 10^5$

### Subtasks
**Subtask #1 (30 points):**
- $1 \le Q \le 1,000$
- $1 \le X \le 128$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
3
4
2
7
```

### Example Output
```
0 1
1 2
3 4
```

### Explanation
**Example case 1:**
- Initially, the set is empty: $S = \{\}$.
- After the first query, $S = \{4\}$, so there is only one element with an odd number of $1$-s in the binary representation ("100").
- After the second query, $S = \{4,2,6\}$, there is one element with an even number of $1$-s in the binary representation ($6$ is "110") and the other two elements have an odd number of $1$-s.
- After the third query, $S = \{4,2,6,7,3,5,1\}$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>