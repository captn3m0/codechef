---
{"category_name":"easy","problem_code":"XOREQUAL","problem_name":"Xor Equality","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1\r\n2","output":"1\r\n2","explanation":"**Test Case $1$:** The possible values of $x$ are $\\{0\\}$.\r\n\r\n**Test Case $2$:** The possible values of $x$ are $\\{0, 2\\}$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/INjLADepTEw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"23-04-2021","tags":{"0":"daanish_adm","1":"may21","2":"observation","3":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/XOREQUAL","time":{"view_start_date":1621243802,"submit_start_date":1621243802,"visible_start_date":1621243802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=XOREQUAL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MAY21/bengali/XOREQUAL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY21/mandarin/XOREQUAL.pdf), [Russian](https://www.codechef.com/download/translated/MAY21/russian/XOREQUAL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY21/vietnamese/XOREQUAL.pdf) as well.

For a given $N$, find the number of ways to choose an integer $x$ from the range $[0, 2^N - 1]$ such that $x \oplus (x+1) = (x+2) \oplus (x+3)$, where $\oplus$ denotes the bitwise XOR operator.

Since the number of valid $x$ can be large, output it modulo $10^9+7$.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- The only line of each test case contains a single integer $N$. 

###Output
For each test case, output in a single line the answer to the problem modulo $10^9 + 7$.

###Constraints 
- $1 \leq T \leq 10^5$
- $1 \leq N \leq 10^5$

###Subtasks
**Subtask #1 (100 points):** Original Constraints

###Sample Input
```
2
1
2
```

###Sample Output
```
1
2
```
	
###Explanation
**Test Case $1$:** The possible values of $x$ are $\{0\}$.

**Test Case $2$:** The possible values of $x$ are $\{0, 2\}$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>