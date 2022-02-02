---
{"category_name":"medium","problem_code":"CCDSAP","problem_name":"CCDSAP Exam","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n3\r\n011\r\n5\r\n10111\r\n1\r\n1\r\n6\r\n000111","output":"1\r\nimpossible\r\n0\r\n3","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"23-01-2020","tags":{"0":"dynamic","1":"kingofnumbers","2":"ltime80","3":"medium","4":"slope","5":"taran_1407"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CCDSAP","time":{"view_start_date":1579971602,"submit_start_date":1579971602,"visible_start_date":1579971602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CCDSAP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Today is the day of the CCDSAP exam. Chef is responsible for monitoring the exam. The hall in which the exam will be held contains $N$ seats (numbered $1$ through $N$) arranged in a row. Initially, each seat is either empty or occupied by a participant in the exam. You are given a binary string $S$ with length $N$; for each valid $i$, the $i$-th character of $S$ is '1' if the $i$-th seat is occupied or '0' if this seat is empty.

Chef wants to make sure that no two participants are sitting next to each other, in order to prevent cheating. To do this, Chef may perform a number of operations (possibly zero). In each operation, he can ask a participant to move from his seat to an adjacent seat, either to its left or right, if such a seat exists and is empty.

Find the minimum number of operations required to make sure that no two participants are sitting next to each other (in adjacent seats), or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing one integer ― the minimum number of operations, or the string `"impossible"` if Chef cannot achieve his goal.

### Constraints
- $1 \le T \le 10,000$
- $1 \le N \le 2 * 10^5$
- the sum of $N$ over all test cases does not exceed $ 2 * 10^5$
- the exam has at least one participant

### Subtasks
**Subtask #1 (50 points):** the sum of $N$ over all test cases does not exceed $5,000$

**Subtask #2 (50 points):** original constraints

### Example Input
```
4
3
011
5
10111
1
1
6
000111
```

### Example Output
```
1
impossible
0
3
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>