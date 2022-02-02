---
{"category_name":"easy","problem_code":"MEXSUB","problem_name":"Mex Subsequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n6\r\n1 0 0 1 0 1\r\n3\r\n1 2 3","output":"5\r\n4","explanation":"**Example case 1:** The five valid ways to divide the sequence are:\r\n- $[1, 0, 0, 1, 0, 1]$\r\n- $[1, 0], [0, 1, 0, 1]$\r\n- $[1, 0, 0], [1, 0, 1]$\r\n- $[1, 0, 0, 1], [0, 1]$\r\n- $[1, 0], [0, 1], [0, 1]$","isDeleted":false}}},"video_editorial_url":"https://youtu.be/zn9mD2SRG5o","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ridbit10","problem_tester":"","date_added":"13-12-2020","tags":{"0":"cook126","1":"dynamic","2":"easy","3":"ridbit10"},"problem_difficulty_level":"Easy","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/MEXSUB","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MEXSUB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK126/hindi/MEXSUB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK126/mandarin/MEXSUB.pdf), [Russian](https://www.codechef.com/download/translated/COOK126/russian/MEXSUB.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK126/vietnamese/MEXSUB.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK126/bengali/MEXSUB.pdf) as well.

Ridbit is given an array $a_1, a_2, \ldots, a_N$. He needs to find the number of ways to divide the array into contiguous subarrays such that:
- Each element of the sequence $a$ belongs to exactly one of the subarrays.
- There is an integer $m$ such that the MEX of every subarray is equal to $m$. The MEX of a sequence is the smallest non-negative integer which does not occur in this sequence.

Help Ridbit with this task.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer ― the number of ways to divide the sequence, modulo $10^9 + 7$.

### Constraints
- $1 \leq T \leq 10$
- $1 \leq N \leq 100,000$
- $0 \leq a_i \leq N$ for each valid $i$

### Example Input
```
2
6
1 0 0 1 0 1
3
1 2 3
```

### Example Output
```
5
4
```

### Explanation
**Example case 1:** The five valid ways to divide the sequence are:
- $[1, 0, 0, 1, 0, 1]$
- $[1, 0], [0, 1, 0, 1]$
- $[1, 0, 0], [1, 0, 1]$
- $[1, 0, 0, 1], [0, 1]$
- $[1, 0], [0, 1], [0, 1]$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>