---
{"category_name":"easy","problem_code":"NOTALLFL","problem_name":"Not All Flavours","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n6 2\r\n1 1 1 2 2 1\r\n5 3\r\n1 1 2 2 1","output":"3\r\n5","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"28-02-2020","tags":{"0":"ad","1":"admin3","2":"ltime81","3":"simple","4":"tmwilliamlin","5":"two"},"problem_difficulty_level":"Simple","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/NOTALLFL","time":{"view_start_date":1582995602,"submit_start_date":1582995602,"visible_start_date":1582995602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NOTALLFL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME81/hindi/NOTALLFL.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME81/bengali/NOTALLFL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME81/mandarin/NOTALLFL.pdf), [Russian](https://www.codechef.com/download/translated/LTIME81/russian/NOTALLFL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME81/vietnamese/NOTALLFL.pdf) as well.

Chef made $N$ pieces of cakes, numbered them $1$ through $N$ and arranged them in a row in this order. There are $K$ possible types of flavours (numbered $1$ through $K$); for each valid $i$, the $i$-th piece of cake has a flavour $A_i$.

Chef wants to select a contiguous subsegment of the pieces of cake such that there is at least one flavour which does not occur in that subsegment. Find the maximum possible length of such a subsegment of cakes.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the maximum length of a valid subsegment.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $2 \le K \le 10^5$
- $1 \le A_i \le K$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $N \le 10^3$
- $K = 2$
- the sum of $N$ over all test cases does not exceed $10^4$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
6 2
1 1 1 2 2 1
5 3
1 1 2 2 1
```

### Example Output
```
3
5
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>