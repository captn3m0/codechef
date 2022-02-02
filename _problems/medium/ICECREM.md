---
{"category_name":"medium","problem_code":"ICECREM","problem_name":"Ice Cream Queue","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n2\n3 7 4\n7 10 5\n2\n3 7 4\n6 10 5","output":"9\n5","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"26-09-2019","tags":{"0":"deadwing97","1":"kingofnumbers","2":"ltime76"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ICECREM","time":{"view_start_date":1569690002,"submit_start_date":1569690002,"visible_start_date":1569690002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ICECREM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME76/hindi/ICECREM.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME76/bengali/ICECREM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME76/mandarin/ICECREM.pdf), [Russian](https://www.codechef.com/download/translated/LTIME76/russian/ICECREM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME76/vietnamese/ICECREM.pdf) as well.

There are $N$ people standing in a queue for Chef's ice cream. They are numbered $1$ through $N$ from the front to the back of the queue.

Chef's customers do not like to wait too long. For each valid $i$, we know that the ice cream ordered by the $i$-th person will take $P_i$ seconds to prepare and cost $V_i$ units of money, but if this person has to wait strictly more than $W_i$ seconds in the queue (until Chef starts preparing their order), they will leave. At any time, it is only allowed to prepare the ice cream of the person standing at the front of the queue.

Chef wants to maximise his profit (the sum of prices of sold ice creams). In order to do that, he may choose to kick some of the customers (possibly nobody) out of the queue. Find the maximum profit Chef can make.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), each of these lines contains three space-separated integers $W_i$, $P_i$ and $V_i$.

### Output
For each test case, print a single line containing one integer — the maximum possible profit.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 40$
- $1 \le P_i, W_i, V_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (50 points):** $1 \le N \le 20$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
2
3 7 4
7 10 5
2
3 7 4
6 10 5
```

### Example Output
```
9
5
```


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>