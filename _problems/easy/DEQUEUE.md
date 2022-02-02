---
{"category_name":"easy","problem_code":"DEQUEUE","problem_name":"Minimum Popping","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 2\r\n1 2\r\n2 3\r\n1 2 1\r\n3 6\r\n1 1 1 3 2 2","output":"2\r\n2\r\n4","explanation":"**Example case 1:** Since $N = M$ and all elements are pairwise distinct, we have to pop everything to get each value at least once.\r\n\r\n**Example case 2:** We can pop the first $2$ or the last $2$ elements.\r\n\r\n**Example case 3:** We can pop the first element and the last $3$ elements, so the answer is $1 + 3 = 4$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/T5jzmqEEXmU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"30-03-2021","tags":{"0":"daanish_adm","1":"easy","2":"optimization","3":"start4"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DEQUEUE","time":{"view_start_date":1622381400,"submit_start_date":1622381400,"visible_start_date":1622381400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DEQUEUE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/START4/bengali/DEQUEUE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START4/mandarin/DEQUEUE.pdf), [Russian](https://www.codechef.com/download/translated/START4/russian/DEQUEUE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START4/vietnamese/DEQUEUE.pdf) as well.

You are given a double-ended queue $Q$. Initially, it contains elements $Q_1, Q_2, \ldots, Q_M$ in this order. Each of these elements is an integer between $1$ and $N$ (inclusive) and each integer between $1$ and $N$ (inclusive) occurs in the queue at least once.

We want to pop some (possibly zero) elements from the front of the queue and some (not necessarily the same number, possibly zero) elements from the back. Among all the popped elements, each integer between $1$ and $N$ (inclusive) should appear at least once. Find the smallest possible total number of elements we need to pop.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $M$ space-separated integers $Q_1, Q_2, \ldots, Q_M$.

### Output
For each test case, print a single line containing one integer — the minimum number of elements we need to pop.

### Constraints
- $1 \leq T \leq 10$
- $1 \leq N \leq 10^5$
- $N \leq M \leq 2 \cdot 10^5$
- for each $i$ ($1 \le i \le N$), there is at least one element equal to $i$ in the queue
- the sum of $N$ over all test cases does not exceed $10^5$
- the sum of $M$ over all test cases does not exceed $2 \cdot 10^5$

### Example Input
```
3
2 2
1 2
2 3
1 2 1
3 6
1 1 1 3 2 2
```

### Example Output
```
2
2
4
```

### Explanation
**Example case 1:** Since $N = M$ and all elements are pairwise distinct, we have to pop everything to get each value at least once.

**Example case 2:** We can pop the first $2$ or the last $2$ elements.

**Example case 3:** We can pop the first element and the last $3$ elements, so the answer is $1 + 3 = 4$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>