---
{"category_name":"school","problem_code":"EVENDIFF","problem_name":"Even Differences","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2\r\n2 4\r\n3\r\n4 1 2","output":"0\r\n1","explanation":"Note that an integer which is divisible by $2$ is considered even. For example, $0$, $4$ and $-6$ are even, but $5$ and $-3$ are not.\r\n\r\nIn the first test case, $2 - 2 = 0$, $2 - 4 = -2$, $4 - 2 = 2$, $4 - 4 = 0$, all of which are even. Thus we do not need to perform any operations.\r\n\r\nIn the second test case we may increment $1$. The pairwise differences then all become even. Thus one operation is required.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/xASaj99k2JY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"the_hyp0cr1t3","problem_tester":"","date_added":"30-01-2021","tags":{"0":"ltime92","1":"simple","2":"the_hyp0cr1t3"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EVENDIFF","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EVENDIFF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME92/hindi/EVENDIFF.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME92/bengali/EVENDIFF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME92/mandarin/EVENDIFF.pdf), [Russian](https://www.codechef.com/download/translated/LTIME92/russian/EVENDIFF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME92/vietnamese/EVENDIFF.pdf) as well.

You have an array consisting of $N$ integers $a_1, a_2... a_N$. You may perform the following operation zero or more times.

- Choose any index $i$ $(1 \leq i \leq N)$ and set $a_i := a_i + 1$

Determine the minimum number of operations you have to perform so that all pairwise differences in the resulting array are even. More formally, in the resulting array it should hold that, for every $i$ and $j$ $(1 \leq i, j \leq N)$, $a_i - a_j$ is even.

###Input:
- The first line contains a single integer $T$ — the number of test cases. The description of each test case is as follows.
- The first line of each test case contains a single integer $N$ — the length of the array.
- The second line of each test case contains $N$ integers, $a_1, a_2... a_N$ — the integers in the array.

###Output:
For each test case output a new line containing a single integer — the minimum operations you must perform to make all the pairwise differences even.

###Constraints 
- $1 \leq T \leq 1000$
- $1 \leq N \leq 500$
- $1 \leq a_i \leq 10^5$

### Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input:
```
2
2
2 4
3
4 1 2
```

###Sample Output:
```
0
1
```
    
###EXPLANATION:
Note that an integer which is divisible by $2$ is considered even. For example, $0$, $4$ and $-6$ are even, but $5$ and $-3$ are not.

In the first test case, $2 - 2 = 0$, $2 - 4 = -2$, $4 - 2 = 2$, $4 - 4 = 0$, all of which are even. Thus we do not need to perform any operations.

In the second test case we may increment $1$. The pairwise differences then all become even. Thus one operation is required.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>