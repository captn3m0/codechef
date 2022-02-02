---
{"category_name":"easy","problem_code":"DELARRAY","problem_name":"Delete a Subarray","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n3\n1 1 2\n4\n2 4 3 5","output":"4\n7","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"24-07-2019","tags":{"0":"binary","1":"erfaniaa","2":"ltime74","3":"two"},"problem_difficulty_level":"Easy","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/DELARRAY","time":{"view_start_date":1564246800,"submit_start_date":1564246800,"visible_start_date":1564246800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DELARRAY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME74/hindi/DELARRAY.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME74/bengali/DELARRAY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME74/mandarin/DELARRAY.pdf), [Russian](https://www.codechef.com/download/translated/LTIME74/russian/DELARRAY.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME74/vietnamese/DELARRAY.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$. Calculate the number of ways to remove a non-empty **contiguous** subsequence from it such that the resulting sequence is non-empty and strictly increasing.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the number of ways.

### Constraints 
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $|A_i| \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (40 points):** $N \le 1,000$

**Subtask #2 (60 points):** original constraints

### Example Input
```
2
3
1 1 2
4
2 4 3 5
```

### Example Output
```
4
7
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>