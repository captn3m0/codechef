---
{"category_name":"easy","problem_code":"XXOORR","problem_name":"XxOoRr","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/wrCkffYatwg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"singlabharat","problem_tester":"","date_added":"9-06-2021","tags":{"0":"july21","1":"simple","2":"singlabharat"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/XXOORR","time":{"view_start_date":1626082200,"submit_start_date":1626082200,"visible_start_date":1626082200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=XXOORR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/JULY21/bengali/XXOORR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY21/mandarin/XXOORR.pdf), [Russian](https://www.codechef.com/download/translated/JULY21/russian/XXOORR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY21/vietnamese/XXOORR.pdf) as well.

Given an array $A_1, A_2 \ldots A_N$, find the minimum number of operations (possibly zero) required to convert all integers in $A$ to $0$.

In one operation, you
- choose a non-negative integer $p$ ($p \geq 0$),
- select at most $K$ indices in the array $A$, and
- for each selected index $i$, replace $A_i$ with $A_i\oplus 2^p$. Here, $\oplus$ denotes bitwise XOR.

### Input
- The first line contains an integer $T$ - the number of test cases. Then $T$ test cases follow.
- The first line of each test case contains two integers $N$, $K$ - the size of the array and the maximum number of elements you can select in an operation.
- The second line of each test case contains $N$ integers $A_1, A_2 \ldots A_N$.

### Output
For each test case, output the minimum number of operations to make all elements of the array $0$.

### Constraints 
- $1 \leq T \leq 10^5$
- $1 \leq N, K \leq 10^5$
- $0 \leq A_i \leq 10^9$
- The sum of $N$ over all test cases does not exceed $2\cdot 10^5$

### Subtasks
- **Subtask #1 (100 points)**: Original Constraints

### Sample Input
```
1
3 2
3 6 10
```

### Sample Output
```
5
```

### Explanation
Here is one way to achieve $[0, 0, 0]$ from $[3, 6, 10]$ in $5$ operations:
1. Choose $p = 0$ and indices $\{1\}$. Now $A$ becomes $[2, 6, 10]$.
2. Choose $p = 1$ and indices $\{1,2\}$. Now $A$ becomes $[0, 4, 10]$.
3. Choose $p = 1$ and indices $\{3\}$. Now $A$ becomes $[0, 4, 8]$.
4. Choose $p = 2$ and indices $\{2\}$. Now $A$ becomes $[0, 0, 8]$.
5. Choose $p = 3$ and indices $\{3\}$. Now $A$ becomes $[0, 0, 0]$.

It can be shown that at least $5$ operations are required.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>