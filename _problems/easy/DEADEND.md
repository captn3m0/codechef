---
{"category_name":"easy","problem_code":"DEADEND","problem_name":"Planting Trees","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3\r\n2 7 4","output":2,"explanation":"**Example case 1:** Kerim should plant trees at the positions $3$ and $6$ to make the grid beautiful, so the answer is $2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/1HnRg1GRzRY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"mrkerim","problem_tester":"","date_added":"23-11-2019","tags":{"0":"deadwing97","1":"easy","2":"greedy","3":"ltime78","4":"mrkerim"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DEADEND","time":{"view_start_date":1575133202,"submit_start_date":1575133202,"visible_start_date":1575133202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DEADEND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME78/bengali/DEADEND.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME78/mandarin/DEADEND.pdf), [Russian](https://www.codechef.com/download/translated/LTIME78/russian/DEADEND.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME78/vietnamese/DEADEND.pdf) as well.

Kerim is an environment-friendly guy. Today, he accepted Samir's challenge of planting 20 million trees by 2020. Currently, there are $N$ trees (numbered $1$ through $N$) planted at distinct positions on a line; for each valid $i$, the position of the $i$-th tree is $A_i$.

A set of trees is *beautiful* if for each tree in this set (let's denote its position by $x$), there is a tree at the position $x-1$ and/or a tree at the position $x+1$.

Kerim's task is to plant some (possibly zero) trees in such a way that the resulting set of all planted trees (the initial $N$ trees and those planted by Kerim) is beautiful. It is only allowed to plant trees at integer (possibly negative) positions. Find the minimum number of trees he needs to plant in order to achieve that.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the minimum number of trees Kerim needs to plant.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- $A_1, A_2, \ldots, A_N$ are pairwise distinct
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $N \le 1,000$
- $A_i \le 2,000$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^4$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
3
2 7 4
```

### Example Output
```
2
```

### Explanation
**Example case 1:** Kerim should plant trees at the positions $3$ and $6$ to make the grid beautiful, so the answer is $2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>