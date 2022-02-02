---
{"category_name":"medium","problem_code":"BENDSP5","problem_name":"5 - Calculate OR","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"","date_added":"29-06-2020","tags":{"0":"admin3"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1605438000,"submit_start_date":1605438000,"visible_start_date":1605438000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BENDSP5","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Given an array $A_1,A_2,\ldots,A_N$, calling the function $\texttt{calculate_or}(i)$ (described by the C++ code below) will return the **bitwise OR** of $A_i,A_{i+1},\ldots,A_N$, albeit quite inefficiently.

```
int calculate_or (int i) {
	if (i == N) return A[i];
	if (calculate_or(i+1) == A[i]) return A[i];
	return calculate_or(i+1) | A[i];
}
```

In particular, calling $\texttt{calculate_or}(1)$ will return the bitwise OR of the entire array. Your job is to permute the array $A$ such that calling $\texttt{calculate_or}(1)$ results in the least possible total number of calls to $\texttt{calculate_or}(i)$, and then output this number.

### Input:

- The first line will contain $T$, the number of test cases. Then $T$ test cases follow.
- Each test case consists of two lines of input in the following form:

  $N$

  $A_1, A_2, .... , A_N$

### Output:

For each testcase, output on a new line the least possible total number of calls to $\texttt{calculate_or}(i)$ when $\texttt{calculate_or}(1)$ is called over all permutations of the array $A$.

### Constraints

- $1 \leq T \leq 1000$
- $1 \leq N \leq 60$
- $1 \le A_i \le 10^6$

It is guaranteed that the sum of the maximum element in the array over all testcases doesn't exceed $5\times10^6$

###Subtasks
**Subtask #1 (10 points):**
- $1 \leq T \leq 100$
- $1 \leq N \leq 9$
- $1 \le A_i \le 100$

**Subtask #2 (20 points):**
- $1 \leq T \leq 100$
- $1 \leq N \leq 15$
- $1 \le A_i \le 1000$

**Subtask #3 (70 points):** original constraints


### Sample Input:

	2
	3
	1 2 3
	4
	1 3 3 7

### Sample Output:

	4
	9
	
### EXPLANATION:

**Sample case $1$:** If we leave $A$ unchanged, then the function $\texttt{calculate_or}(i)$ is called 7 times:

 - 1 time with $i=1$
 - 2 times with $i=2$
 - 4 times with $i=3$

If we permute $A$ such that it becomes $[3, 1, 2]$, then the function is called 4 times: 

 - 1 time with $i=1$
 - 1 time with $i=2$
 - 2 times with $i=3$

Since 4 is the least possible number that can be achieved, it is the answer.

**Sample case $2$:** If we leave $A$ unchanged, then the function $\texttt{calculate_or}(i)$ is called 15 times:

 - 1 time with $i=1$
 - 2 times with $i=2$
 - 4 times with $i=3$
 - 8 times with $i=4$

If we permute $A$ such that it becomes $[7,3,1,3]$, then the function is called 9 times: 

 - 1 time with $i=1$
 - 2 times with $i=2$
 - 2 times with $i=3$
 - 4 times with $i=4$

Since 9 is the least possible number that can be achieved, it is the answer.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>