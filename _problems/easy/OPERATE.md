---
{"category_name":"easy","problem_code":"OPERATE","problem_name":"E - Minimum Operation","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"adikr_singh","problem_tester":"","date_added":"6-04-2021","tags":{"0":"adikr_singh","1":"binary","2":"easy","3":"greedy","4":"spyb2021"},"problem_difficulty_level":"Easy","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/OPERATE","time":{"view_start_date":1618509602,"submit_start_date":1618509602,"visible_start_date":1618509602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=OPERATE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Given $K$ arrays of length $N$ where the elements are bounded in the range $[L, R]$.

The **Function value** of an array is defined as the sum of all elements present in it.

In one move you can change at most $1$ element from all the arrays and the changed value must lie within the range $[L, R]$. 

What is the minimum number of operations required to make the function value of all arrays equal?

###Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains four space-separated integers $K$, $N$, $L$, $R$.
- Next $K$ lines contains an array of length $N$.

### Output 
For each test case, print the minimum number of operations needed to make the function value of all arrays equal in a new line.

### Constraints
- $1 \leq T \leq 5$
- $1 \leq K \leq 10^5$
- $1 \leq N \leq 10^5$
- $1 \leq N*K \leq 10^5$
- $1 \leq L \leq R \leq 10^9$

### Example Input
```
1
4 3 1 9
1 1 2
1 2 3
1 2 4
1 2 2
```

### Example Output
```
1
```

### Explanation 
- Change array $1$ to $[1, 3, 2]$
- No change in array $2$ 
- Change array $3$ to $[1, 2, 3]$
- Change array $4$ to $[1, 2, 3]$
- Sum of all arrays is equal.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>