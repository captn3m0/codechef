---
{"category_name":"easy","problem_code":"ISS","problem_name":"An Interesting Sequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n1","output":6,"explanation":"The first $2k+1$ terms of the sequence $A$ are $2, 5, 10$.\r\n\r\nSo the answer is $\\gcd(2,5) + \\gcd(5,10) = 1+5=6$","isDeleted":false}}},"video_editorial_url":"https://youtu.be/sCykmPz3nt4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"zankanotachi","problem_tester":"","date_added":"18-04-2021","tags":{"0":"easy","1":"inclusion","2":"may21","3":"zankanotachi"},"problem_difficulty_level":"Easy-Medium","best_tag":"Inclusion Exclusion","editorial_url":"https://discuss.codechef.com/problems/ISS","time":{"view_start_date":1621243802,"submit_start_date":1621243802,"visible_start_date":1621243802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ISS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MAY21/bengali/ISS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY21/mandarin/ISS.pdf), [Russian](https://www.codechef.com/download/translated/MAY21/russian/ISS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY21/vietnamese/ISS.pdf) as well.

Zanka finds fun in everyday simple things. One fine day he got interested in a very trivial sequence. Given a natural number $k$, he considers the sequence $A_i=k+i^2$ so that the terms are

$$k+1,k+4,k+9,k+16, \ldots $$
	
Now to make things more interesting, he considers the $\gcd$ of consecutive terms in the sequence, then takes the sum of the first $2k$ values. More formally, he wants to compute

$$\sum_{i=1}^{2k} \gcd(A_i,A_{i+1})$$

Denote this sum by $S$. Zanka wants you to print  the number $S$ for each $k$.

###Input
- The first line contains an integer $T$, the number of test cases. Descriptions of test cases follow.
- The only line of each test case contains a single integer $k$.

###Output
For each test case, output a single line containing the sum $S$ for the given $k$.

###Constraints
- $1 \leq T \leq 10^6$
- $1 \leq k \leq 10^6$

###Subtasks
**Subtask #1 (20 points):** $t \leq 10^3$,$k \leq 10^3$

**Subtask #2 (80 points):** Original Constraints

###Sample Input
```
1
1
```   

###Sample output
```
6
```

###Explanation
The first $2k+1$ terms of the sequence $A$ are $2, 5, 10$.

So the answer is $\gcd(2,5) + \gcd(5,10) = 1+5=6$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>