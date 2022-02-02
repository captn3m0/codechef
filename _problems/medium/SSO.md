---
{"category_name":"medium","problem_code":"SSO","problem_name":"Chef Is Just Throwing Random Words","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2\r\n1 1\r\n3\r\n1 9 8","output":"3\r\n27","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/OqASLKTbCxw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mohammed200218","problem_tester":"","date_added":"16-10-2020","tags":{"0":"bitwise","1":"easy","2":"ltime89","3":"mohammed200218","4":"mohammed200218"},"problem_difficulty_level":"Easy","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/SSO","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SSO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME89/hindi/SSO.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME89/bengali/SSO.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME89/mandarin/SSO.pdf), [Russian](https://www.codechef.com/download/translated/LTIME89/russian/SSO.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME89/vietnamese/SSO.pdf) as well.

Chef once had a deep epiphany and ended up saying: Given a sequence of positive integers $a_1, a_2, \ldots, a_N$, if you take each of its $2^N$ subsequences and write down the sum of elements of this subsequence, what will the bitwise OR of the written integers be?

Yes, you read it right, but can you solve it?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer ― the bitwise OR of sums of all subsequences.

### Constraints
- $1 \le T \le 5$
- $1 \le N \le 10^5$
- $1 \le a_i \lt 2^{30}$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
2
1 1
3
1 9 8
```

### Example Output
```
3
27
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>