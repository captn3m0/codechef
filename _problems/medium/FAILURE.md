---
{"category_name":"medium","problem_code":"FAILURE","problem_name":"Single Point of Failure","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n5 5\r\n5 1\r\n5 2\r\n1 2\r\n2 3\r\n2 4\r\n5 6\r\n4 5\r\n4 1\r\n4 2\r\n4 3\r\n5 1\r\n5 2\r\n5 5\r\n3 4\r\n3 5\r\n3 1\r\n3 2\r\n4 2\r\n4 1\r\n3 4\r\n6 6\r\n1 2\r\n2 3\r\n3 1\r\n4 5\r\n5 6\r\n6 4","output":"1\r\n4\r\n2\r\n-1\r\n-1","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"28-09-2019","tags":{"0":"challenge","1":"depth","2":"erfaniaa","3":"graphs","4":"nov19","5":"watcher"},"problem_difficulty_level":"Medium","best_tag":"Depth First Search","editorial_url":"https://discuss.codechef.com/problems/FAILURE","time":{"view_start_date":1573464602,"submit_start_date":1573464602,"visible_start_date":1573464602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FAILURE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV19/hindi/FAILURE.pdf), [Bengali](https://www.codechef.com/download/translated/NOV19/bengali/FAILURE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV19/mandarin/FAILURE.pdf), [Russian](https://www.codechef.com/download/translated/NOV19/russian/FAILURE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV19/vietnamese/FAILURE.pdf) as well.

<img src="https://codechef_shared.s3.amazonaws.com/download/Images/NOV19/FAILURE/FAILURE.jpg" width="80%">

Chef has always dreamed of becoming an employee of the "Hack and Manipulate Group". Their work is simple ― attacking networks. They gave Chef the following task to assess his programming skills, but Chef is too busy cooking "Vegetable Gourmet". Can you solve the task for him?

A network consists of $N$ nodes (numbered $1$ through $N$) and $M$ bidirectional connections between pairs of these nodes. A *robust network* is a network that contains a cycle. Shutting down a node means removing that node (and all direct connections it is part of) from the network.

You may shut down at most one node. If the network was robust before it was shut down and is not robust afterwards, this node is called the *point of failure*.

Is the initial network robust? If it is robust, does it have a point of failure? If it does, find the point of failure with the smallest number.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- Each of the following $M$ lines contains two space-separated integers $u$ and $v$ denoting that nodes $u$ and $v$ are directly connected.

### Output
For each test case, print a single line containing one integer ― the smallest number of a point of failure, or $-1$ if the network does not have a point of failure.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $0 \le M \le 10^5$
- $1 \le u, v \le N$

### Subtasks
**Subtask #1 (10 points):**
- $N \le 100$
- $N - 1 \le M \le N + 1$
- the given graph is connected

**Subtask #2 (10 points):** $1 \le N \le 100$

**Subtask #3 (30 points):** $1 \le N \le 1,000$

**Subtask #4 (50 points):** original constraints

### Example Input
```
5
5 5
5 1
5 2
1 2
2 3
2 4
5 6
4 5
4 1
4 2
4 3
5 1
5 2
5 5
3 4
3 5
3 1
3 2
4 2
4 1
3 4
6 6
1 2
2 3
3 1
4 5
5 6
6 4
```

### Example Output
```
1
4
2
-1
-1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>