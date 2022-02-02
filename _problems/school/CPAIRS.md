---
{"category_name":"school","problem_code":"CPAIRS","problem_name":"Chef and Pairs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"l_returns","problem_tester":null,"date_added":"28-05-2019","tags":{"0":"l_returns"},"time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Given an array $A$ of size $N$ , count number of pairs of index $i,j$ such that $A_i$ is even, $A_j$ is odd and $i < j$

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases.   
- The first line of each test case contains integer $N$.    
- The second line of each test case contains $N$ space separated integers $A_i$. 
 
### Output
For each test case, print a single line containing an integer denoting number of pairs.
 
### Constraints
- $1 \le T \le 100$
- $2 \le N \le 10^5$  
- $1 \le A_i \le 10^9$
- Sum of $N$ over all test cases doesn't exceed $10^6 $  
 
### Subtasks
**Subtask #1 (30 points):**
- $2 \le N \le 100$

**Subtask #2 (70 points):** original constraints
  
### Example Input
```
2
4
1 2 1 3
5
5 4 1 2 3
```

### Example Output
```
2
3
```

### Explanation
**Example case 1:** 
$(A_2,A_3)$ and $(A_2,A_4)$ . 

**Example case 2:** 
$(A_2,A_3)$ , $(A_2,A_5)$ and $(A_4,A_5)$  . 