---
{"category_name":"easy","problem_code":"CORUS","problem_name":"Isolation Centers","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n20 2\r\nstayinghomesaveslife\r\n1\r\n3","output":"6\r\n0","explanation":"**Example case 1:** In the pending queue for the first query, there should be $2$ people with \u0022eorona\u0022, $2$ with \u0022sorona\u0022, $1$ with \u0022aorona\u0022 and $1$ with \u0022iorona\u0022.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sahi1422","problem_tester":null,"date_added":"2-04-2020","tags":{"0":"may20","1":"sahi1422","2":"sahi1422","3":"simple","4":"string"},"problem_difficulty_level":"Simple","best_tag":"String Hashing","editorial_url":"https://discuss.codechef.com/problems/CORUS","time":{"view_start_date":1589189402,"submit_start_date":1589189402,"visible_start_date":1589189402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CORUS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MAY20/hindi/CORUS.pdf), [Bengali](https://www.codechef.com/download/translated/MAY20/bengali/CORUS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY20/mandarin/CORUS.pdf), [Russian](https://www.codechef.com/download/translated/MAY20/russian/CORUS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY20/vietnamese/CORUS.pdf) as well.

As a health expert, Vinay is keeping a close watch on the ongoing pandemic of coronavirus disease (COVID-19). He thought of a different situation where there are $26$ types of viruses, named "**a**orona", "**b**orona", "**c**orona", ..., "**z**orona".

You are given a string $S$ with length $N$. There are $N$ people (numbered $1$ through $N$) and for each valid $i$, the $i$-th person is infected by exactly one type of virus named $S_i$orona (i.e. "corona" with the first letter replaced by the $i$-th character of $S$).

You should answer $Q$ queries. In each query:
- You are given an integer $C$ denoting the number of available *isolation centers*.
- Each isolation center has an infinite capacity, but with the restriction that two people infected with the same type of virus cannot stay in the same isolation center.
- There is also a *pending queue* with an infinite capacity and there are no restrictions on which people can be in the pending queue.
- Initially, the isolation centers and pending queue are empty.
- Each of the $N$ people should be placed in either the pending queue or one of the isolation centers.
- Since Vinay is busy finding a vaccine, he asks Swapnil to find a way to place the people in the pending queue and isolation centers such that the number of people in the pending queue is the smallest possible.
- Help Swapnil find the size of the pending queue in that case.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains a single string $S$.
- Each of the following $Q$ lines contains a single integer $C$ describing a query.

### Output
For each query, print a single line containing one integer ― the minimum size of the pending queue.

### Constraints
- $1 \le T, N, Q \le 10^5$
- $0 \le C \le 10^9$
- $|S| = N$
- $S$ contains only lowercase English letters
- the sum of $N$ over all test cases does not exceed $10^5$
- the sum of $Q$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (20 points):** $T, N, Q, C \le 10$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
20 2
stayinghomesaveslife
1
3
```

### Example Output
```
6
0
```
	
### Explanation
**Example case 1:** In the pending queue for the first query, there should be $2$ people with "eorona", $2$ with "sorona", $1$ with "aorona" and $1$ with "iorona".

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>