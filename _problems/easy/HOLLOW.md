---
{"category_name":"easy","problem_code":"HOLLOW","problem_name":"Maximum Size Hollow Square","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"26-12-2020","tags":{"0":"binary","1":"ccrc2021","2":"daanish_adm","3":"medium","4":"prefix"},"problem_difficulty_level":"Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/HOLLOW","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HOLLOW","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/CCRC2021/hindi/HOLLOW.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/CCRC2021/mandarin/HOLLOW.pdf), [Vietnamese](https://www.codechef.com/download/translated/CCRC2021/vietnamese/HOLLOW.pdf), and [Bengali](https://www.codechef.com/download/translated/CCRC2021/bengali/HOLLOW.pdf) as well.

You are given a grid with $N$ rows and $M$ columns, where each cell contains either '0' or '1'.

You may perform the following operation up to $K$ times: choose two different cells and swap the values in them. Find the largest possible side length of a square subgrid which contains only '0'-s after performing these operations.

### Input
- The first line of the input contains a single integer $T$, total number of testcases.
- Each testcase contains $N + 1$ lines of input.
- The first line contains three space-separated integers $N$, $M$ and $K$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains a single string with length $M$ describing the $i$-th row of the grid.

### Output
For each testcase, print a single line containing one integer ― the largest side length of a square subgrid containing only '0'-s.

### Constraints
- $1 \leq T \leq 2000$
- $1 \leq N, M \leq 1000$
- $0 \leq K \leq N * M$
- Sum of $N * M$ over all tests is atmost $3*10^6$
- Each string contains only characters '0' and '1'

### Example Input
```
3
5 5 10
11111
10001
10001
10001
11111
3 7 1
1100110
1000111
1100011
3 7 2
1100110
1000111
1100011
```

### Example Output
```
3
2
3
```

### Explanation
**Case 1:** Since all the '0'-s in the grid already form a square with side length $3$, no swaps are required.

**Case 2:** If we could swap the values in pairs of cells $(0, 1)$, $(0, 6)$ and $(2, 1)$, $(2, 4)$, we would get a square with side length $3$ using $2$ swaps. But since the maximum possible number of swaps is $1$, the answer cannot be greater than $2$.

**Case 3:** We can swap the values in pairs of cells $(0, 1)$, $(0, 6)$ and $(2, 1)$, $(2, 4)$. Then, we get a square with side length $3$ using $2$ swaps.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>