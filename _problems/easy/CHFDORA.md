---
{"category_name":"easy","problem_code":"CHFDORA","problem_name":"Doraemon","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 3\r\n2 1 2\r\n1 1 1\r\n2 1 2","output":10,"explanation":"**Example case 1:** Each element forms a valid pair (where the sub-row and sub-column contain only this element) and the middle row and middle column also form one valid pair.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/5Jg8YI2n3IU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":"","date_added":"1-10-2019","tags":{"0":2,"1":"brute","2":"easy","3":"jan20","4":"observation","5":"rishup_nitdgp","6":"rishup_nitdgp","7":"vijju123"},"problem_difficulty_level":"Easy","best_tag":"Brute Force","editorial_url":"https://discuss.codechef.com/problems/CHFDORA","time":{"view_start_date":1578907800,"submit_start_date":1578907800,"visible_start_date":1578907800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFDORA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN20/hindi/CHFDORA.pdf), [Bengali](https://www.codechef.com/download/translated/JAN20/bengali/CHFDORA.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN20/mandarin/CHFDORA.pdf), [Russian](https://www.codechef.com/download/translated/JAN20/russian/CHFDORA.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN20/vietnamese/CHFDORA.pdf) as well.

Doraemon has a matrix with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Let's denote the element in row $i$ and column $j$ by $A_{i,j}$. Next, let's define a sub-row of a row $r$ as a sequence $A_{r, x}, A_{r, x+1}, \ldots, A_{r, y}$ for some $x$ and $y$ ($1 \le x \le y \le M$) and a sub-column of a column $c$ by $A_{x, c}, A_{x+1, c}, \ldots, A_{y, c}$ for some $x$ and $y$ ($1 \le x \le y \le N$).

You need to find the number of pairs (sub-row of some row, sub-column of some column) with the following properties:
1. Both sequences (the sub-row and the sub-column) have the same length.
2. This length is odd.
3. The central elements of both sequences are the same (they correspond to the same element of the matrix).
4. Both sequences are palindromes.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$. 
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $M$ space-separated integers $A_{i, 1}, A_{i, 2}, \ldots, A_{i, M}$.

### Output
For each test case, print a single line containing one integer ― the number of valid pairs.

### Constraints
- $1 \le T \le 100$
- $1 \le N, M$
- $N \cdot M \le 10^5$
- $1 \le A_{i, j} \le 10^6$ for each valid $i, j$
- the sum of $N \cdot M$ over all test cases does not exceed $3 \cdot 10^5$

### Subtasks
**Subtask #1 (30 points):**
- $T \le 10$
- $N \cdot M \le 10^3$  

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
3 3
2 1 2
1 1 1
2 1 2
```

### Example Output
```
10
```

### Explanation
**Example case 1:** Each element forms a valid pair (where the sub-row and sub-column contain only this element) and the middle row and middle column also form one valid pair.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>