---
{"category_name":"medium","problem_code":"PARTODD","problem_name":"Odd Sum Partition","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5\r\n01101","output":"-1 3 3 3 1","explanation":"Clearly if $m = 1$, no such partitioning is possible, as the first block must consist of a single $0$.\r\n\r\nFor $m = 2, 3, 4$, we can partition it as $\\boxed{01}\\boxed{10} \\boxed{1}$. Note that $\\fbox{01} \\fbox{1} \\fbox{01}$ is also a valid partition.\r\n\r\nIf $m = 5$, the partition consisting of a single block $\\fbox{01101}$ is valid as the total sum ($3$) is odd.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"um_nik","problem_tester":"","date_added":"27-05-2021","tags":{"0":"dynamic","1":"greedy","2":"ltime96","3":"medium","4":"um_nik"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/PARTODD","time":{"view_start_date":1622482204,"submit_start_date":1622482204,"visible_start_date":1622482204,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PARTODD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME96/bengali/PARTODD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME96/mandarin/PARTODD.pdf), [Russian](https://www.codechef.com/download/translated/LTIME96/russian/PARTODD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME96/vietnamese/PARTODD.pdf) as well.

You are given a string $A$ of length $N$, consisting of zeroes and ones. You want to partition it into blocks consisting of consecutive indices such that each block has an odd sum and has length at most $m$. For each $m$ from $1$ to $N$, find the minimum number of blocks required, or report that it is impossible.

###Input

- The first line contains an integer $T$, the number of test cases. Each test case contains two lines:
- The first line of each test case contains an integer $N$.
- The second line of each test case contains a string $A=a_1 a_2 \ldots a_N$. 

###Output
For each test case, print $N$ space-separated integers. The $m$-th of these integers should be the minimum number of blocks of length at most $m$ the array can be partitioned into, such that each block has an odd sum, or $-1$ if it is impossible to do so.

###Constraints 
- $1 \le N\le 10^6$
- The sum of $N$ over all test cases doesn't exceed $10^6$.

###Subtasks
- **Subtask 1 (9 Points)**: The sum of $N$ over all test cases doesn't exceed $200$.
- **Subtask 2 (13 Points)**: The sum of $N$ over all test cases doesn't exceed $2500$.
- **Subtask 3 (21 Points)**: The sum of $N$ over all test cases doesn't exceed $15000$.
- **Subtask 4 (17 Points)**: The sum of $N$ over all test cases doesn't exceed $50000$.
- **Subtask 5 (24 Points)**: The sum of $N$ over all test cases doesn't exceed $250000$.
- **Subtask 6 (16 Points)**: No additional constraints.

###Sample Input
```
1
5
01101
```

###Sample Output
```
-1 3 3 3 1
```
	
###Explanation
Clearly if $m = 1$, no such partitioning is possible, as the first block must consist of a single $0$.

For $m = 2, 3, 4$, we can partition it as $\boxed{01}\boxed{10} \boxed{1}$. Note that $\fbox{01} \fbox{1} \fbox{01}$ is also a valid partition.

If $m = 5$, the partition consisting of a single block $\fbox{01101}$ is valid as the total sum ($3$) is odd.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>