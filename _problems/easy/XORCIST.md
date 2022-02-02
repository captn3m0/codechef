---
{"category_name":"easy","problem_code":"XORCIST","problem_name":"The In-XOR-able Task","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5 4\r\n2 7 1 5 2\r\n1 5\r\n2 3\r\n4 5\r\n2 4\r\n10 1\r\n123 667 232 989 0 104 305 329 567 345\r\n1 10","output":"4\r\n1\r\n0\r\n2\r\n23","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"9-07-2020","tags":{"0":"bitwise","1":"cook120","2":"easy","3":"rajarshi_basu","4":"sjshohag"},"problem_difficulty_level":"Easy-Medium","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/XORCIST","time":{"view_start_date":1595183402,"submit_start_date":1595183402,"visible_start_date":1595183402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=XORCIST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK120/hindi/XORCIST.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK120/mandarin/XORCIST.pdf), [Russian](https://www.codechef.com/download/translated/COOK120/russian/XORCIST.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK120/vietnamese/XORCIST.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK120/bengali/XORCIST.pdf) as well.

You are given a sequence of integers $A_1, A_2, \ldots, A_N$. You have to answer $Q$ queries.

In each query, you are given two integers $L$ and $R$, and you have to find the number of ordered pairs $(X, Y)$ such that $L \le X, Y \le R$ and $A_X \le A_X \oplus A_Y \le A_Y$. Here, $\oplus$ is the bitwise XOR operator.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- Each of the next $Q$ lines contains two space-separated integers $L$ and $R$ describing a query.

### Output
For each query, print a single line containing one integer ― the number of valid pairs.

### Constraints
- $1 \le T \le 50,000$
- $1 \le N, Q \le 5 \cdot 10^5$
- $0 \le A_i \lt 2^{30}$ for each valid $i$
- $1 \le L \le R \le N$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $5 \cdot 10^5$

### Example Input
```
2
5 4
2 7 1 5 2
1 5
2 3
4 5
2 4
10 1
123 667 232 989 0 104 305 329 567 345
1 10
```

### Example Output
```
4
1
0
2
23
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>