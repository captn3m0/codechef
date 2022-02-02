---
{"category_name":"easy","problem_code":"APARTS","problem_name":"Washing Windows","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 4\r\n1 3 7 10\r\n9 2 4 11\r\n8 12 5 6","output":"1111\r\n1001\r\n0100","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"29-11-2019","tags":{"0":"deadwing97","1":"dynamic","2":"easy","3":"kingofnumbers","4":"ltime78"},"problem_difficulty_level":"Easy","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/APARTS","time":{"view_start_date":1575133202,"submit_start_date":1575133202,"visible_start_date":1575133202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=APARTS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME78/bengali/APARTS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME78/mandarin/APARTS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME78/russian/APARTS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME78/vietnamese/APARTS.pdf) as well.

There is a building with $N$ floors (numbered $1$ through $N$ from bottom to top); on each floor, there are $M$ windows (numbered $1$ through $M$ from left to right). Let's denote the $j$-th window on the $i$-th floor by $(i, j)$.

All windows in the building need to be cleaned one by one in a specific order. You are given this order as a matrix $A$ with $N$ rows and $M$ columns; for each valid $i$ and $j$, the window $(i, j)$ must be cleaned on the $A_{N-i+1,j}$-th turn. 

Whenever we clean a window $(i, j)$, it becomes clean, but the dirty water used for cleaning it flows down to windows $(i-1, j-1)$, $(i-1, j)$ and $(i-1, j+1)$ (more precisely, to all of these windows which exist), so these windows become dirty again. Then, the water flows further down, so the same applies for other windows below: whenever a window $(i, j)$ becomes dirty, windows $(i-1, j-1)$, $(i-1, j)$ and $(i-1, j+1)$ become dirty as well. For example, cleaning a window $(5, 3)$ will make the window $(3, 2)$ dirty. The next window is cleaned only after water flows down completely. Note that each window is cleaned only once and there may be dirty windows at the end.

For each window, determine whether it will be clean after the cleaning process ends.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$. 
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $M$ space-separated integers $A_{i, 1}, A_{i, 2}, \ldots, A_{i, M}$.

### Output
For each test case, print $N$ lines; each of them should contain a string with length $M$. For each valid $i$ and $j$, the $j$-th character on the $i$-th line should be '1' if the window $(N-i+1, j)$ is clean or '0' if it is dirty.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N, M \le 10^3$
- $1 \le A_{i, j} \le N \cdot M$ for each valid $i, j$
- the elements of the matrix $A$ are pairwise distinct
- the sum of $N \cdot M$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $N, M \le 25$
- the sum of $N \cdot M$ over all test cases does not exceed $625$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
3 4
1 3 7 10
9 2 4 11
8 12 5 6 
```

### Example Output
```
1111
1001
0100
```


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>