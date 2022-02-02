---
{"category_name":"medium","problem_code":"HILLARR","problem_name":"Hill Sequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4 1 2\r\n4 2 4","output":"1\r\n10","explanation":"**Example case 1:** There are four hill sequences we can choose: $[1,0,0,0]$, $[0,1,0,0]$, $[0,0,1,0]$ and $[0,0,0,1]$. For each of them, $F(a,1) = 1$, so the expected value is $1$.\r\n\r\n**Example case 2:** There are 7 hill sequences we can choose:\r\n- $[2,0,0,0]$, $[0,2,0,0]$, $[0,0,2,0]$ and $[0,0,0,2]$, each with $F(a,2) = 16$\r\n- $[1,1,0,0]$, $[0,1,1,0]$ and $[0,0,1,1]$, each with $F(a,2) = 2$\r\n\r\nThe expected value is $\\frac{4 \\cdot 16 + 3 \\cdot 2}{7} = 10$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/WYptW9cdhmQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"isaacmoris","problem_tester":"","date_added":"16-03-2021","tags":{"0":"binomial","1":"cook127","2":"dynamic","3":"expected","4":"isaacmoris","5":"medium","6":"probability"},"problem_difficulty_level":"Medium","best_tag":"Binomial Theorem","editorial_url":"https://discuss.codechef.com/problems/HILLARR","time":{"view_start_date":1616351402,"submit_start_date":1616351402,"visible_start_date":1616351402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HILLARR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK127/mandarin/HILLARR.pdf), [Russian](https://www.codechef.com/download/translated/COOK127/russian/HILLARR.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK127/vietnamese/HILLARR.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK127/bengali/HILLARR.pdf) as well.

Chef has met up with his friend Isaac recently. Isaac told Chef that his team needs to solve the following problem to win ACPC and qualify to ICPC 2021. However, no one in the team is good at expected value problems ― can you help them qualify?

A sequence $a_1, a_2, \ldots, a_N$ is said to be a *hill sequence* if there is an integer $p$ ($1 \leq p \leq N$) such that $0 \leq a_1 \leq a_2 \ldots \leq a_p \geq a_{p+1} \ge \ldots \geq a_N \geq 0$. For example, the sequences $[1,2,2,3]$, $[1,2,5,5,2,0]$ and $[5,4,3,3]$ are hill sequences, but $[1,2,2,1,3]$ is not.

Consider all hill sequences $a_1, a_2, \ldots, a_N$ such that $\sum_{i=1}^N a_i = M$. We choose one of them uniformly randomly. Then, we define $F(a,K) = \sum_{i=1}^N a_i^K$. For the purposes of this problem, $0^0 = 1$. What is the expected value of $F(a,K)$ modulo $10^9 + 7$?

The answer can be expressed as a fraction $\frac{p}{q}$, where $p$ and $q$ are non-negative integers and $q$ is coprime with $10^9 + 7$ for the given constraints. You should compute $p \cdot q^{-1}$ modulo $10^9 + 7$, where $q^{-1}$ denotes the multiplicative inverse of $q$ modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $N$, $M$ and $K$.
 
### Output
For each test case, print a single line containing one integer $p \cdot q^{-1}$ modulo $10^9+7$.
 
### Constraints
- $1 \leq T \leq 10^6$
- $1 \leq N \leq 1,000$
- $0 \leq M \leq 1,000$
- $0 \leq K \leq 20$
 
### Example Input
```
2
4 1 2
4 2 4
```

### Example Output
```
1
10
```

### Explanation
**Example case 1:** There are four hill sequences we can choose: $[1,0,0,0]$, $[0,1,0,0]$, $[0,0,1,0]$ and $[0,0,0,1]$. For each of them, $F(a,1) = 1$, so the expected value is $1$.

**Example case 2:** There are 7 hill sequences we can choose:
- $[2,0,0,0]$, $[0,2,0,0]$, $[0,0,2,0]$ and $[0,0,0,2]$, each with $F(a,2) = 16$
- $[1,1,0,0]$, $[0,1,1,0]$ and $[0,0,1,1]$, each with $F(a,2) = 2$

The expected value is $\frac{4 \cdot 16 + 3 \cdot 2}{7} = 10$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>