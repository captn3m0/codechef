---
{"category_name":"medium","problem_code":"SOLVEIT","problem_name":"H - Solve It Ashi","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"adikr_singh","problem_tester":"","date_added":"6-04-2021","tags":{"0":"adikr_singh","1":"bitmasking","2":"data","3":"medium","4":"spyb2021"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SOLVEIT","time":{"view_start_date":1618509602,"submit_start_date":1618509602,"visible_start_date":1618509602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SOLVEIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Ashi had been given an array $A$ having $N$ element and you are asked $Q$ queries of $3$ types.

$1$ $X$ :- If the array element at index $X$ is even, then move it to the beginning of the array, otherwise move it to the end of the array (if the element is moved to the beginning then all numbers behind the index $X$ will be shifted one position right to their initial positions and if it is moved to the end then all elements after the index $X$ will move one position left to their initial positions.)

For example, if the array is $A=[1, 2, 3, 4, 5]$ and after moving of $4^{th}$ element to the beginning, the changed array will be $A=[4, 1, 2, 3, 5]$.

$2$ $X$ $P$ :- Change element of the array at index $X$ to $P$

$3$ $L$ $R$ $K$ :- Find the count of numbers of the array $A$ from index $L$ to $R$ (including both $L$ and $R$) having $K$ set bits.

###Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$, the number of elements in the array $A$, and the number of queries.
- The second line contains $N$ space-separated integers of the array $A$.
- Next $Q$ lines contain two, there, or four space-separated integers according to the type of query, the first integer will represent the type of query.

### Output
- For each query of type $3$ print the required number in a new line.

### Constraints
- $1 \leq T  \leq 5$
- $1 \leq N,Q \leq 10^5$
- $0 \leq A[i] \leq 10^9$ , for $1 \leq i \leq N$
- $1 \leq X,L,R \leq N$
- $L \leq R $
- $0 \leq K \leq 32$
- $0 \leq P \leq 10^9$

### Example Input
```
1
7 3
1 2 3 4 5 6 7
2 3 10
1 6 
3 1 4 2
```

### Example Output
```
2
```

### Explanation:
- After $1^{st}$ query: $1$ $2$ $10$ $4$ $5$ $6$ $7$
- After $2^{nd}$ query: $6$ $1$ $2$ $10$ $4$ $5$ $7$
- For $3^{rd}$ query : there are $2$ numbers($6$ and $10$) in the range $1$ to $4$ which have $2$ set bits.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>