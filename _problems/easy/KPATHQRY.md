---
{"category_name":"easy","problem_code":"KPATHQRY","problem_name":"K Path Query","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/K14u39V0gtA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"souradeep_adm","problem_tester":"","date_added":"1-07-2021","tags":{"0":"easy","1":"eulerian","2":"july21","3":"souradeep_adm"},"problem_difficulty_level":"Easy","best_tag":"Eulerian Tour","editorial_url":"https://discuss.codechef.com/problems/KPATHQRY","time":{"view_start_date":1626082200,"submit_start_date":1626082200,"visible_start_date":1626082200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KPATHQRY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/JULY21/bengali/KPATHQRY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY21/mandarin/KPATHQRY.pdf), [Russian](https://www.codechef.com/download/translated/JULY21/russian/KPATHQRY.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY21/vietnamese/KPATHQRY.pdf) as well.

You're given a tree with $N$ vertices numbered from $1$ to $N$. Your goal is to handle $Q$ queries. For each query you are given $K$ nodes $v_1, v_2, \ldots, v_K$. Find if there exists a simple path in the tree covering all the given vertices.

### Input
- The first line contains a single integer $T$ - the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the following $N-1$ lines contains two integers $u$ and $v$ denoting an edge between nodes $u$ and $v$.
- The next line contains a single integer $Q$ - the number of queries.
- The next $Q$ lines describe queries. The $i$-th line describes the $i$-th query and starts with the integer $K_i$ — the number of vertices in the current query. Then $K_i$ integers follow: $v_1, v_2, \ldots, v_{K_i}$.
 
### Output
For each query print `"YES"` (without quotes) if there exists a simple path in the tree covering all the given nodes, otherwise print `"NO"` (without quotes).

You may print each character of the string in uppercase or lowercase (for example, the strings `"yEs"`, `"yes"`, `"Yes"` and `"YES"` will all be treated as identical).

### Constraints
- $1 \leq T \leq 10$
- $1 \leq N \leq 10^5$
- $1 \leq u, v, v_j \leq N$
- $1 \leq Q \leq 10^5$
- $1 \leq K_i \leq N$ for each valid $i$.
- The edges form a valid tree.
- All vertices in a single query are distinct.
- the sum of $N$ over all test cases does not exceed $2\cdot 10^5$.
- For each test case, the sum of $K_i$ over all queries does not exceed $10^5$.

### Subtasks
**Subtask #1 (100 points):** Original constraints

### Sample Input
```
1
6
1 2
1 3
2 4
2 5
3 6
2
3 6 2 4
4 2 3 4 5
```
 
### Sample Output
```
YES
NO
```
 
### Explanation
The structure of the given tree is shown below.
<img src="https://s3.amazonaws.com/discourseproduction/original/2X/d/d932b48ade701ee947490515af1060eacddd98ca.png" class="center" width="300" height="250">
- For the first query the path will be $4 - 2 - 1 - 3 - 6$.
- For the second query there is no simple path that covers all the given vertices.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>