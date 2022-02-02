---
{"category_name":"easy","problem_code":"PLUS","problem_name":"Maximum Plus","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"24-05-2018","tags":{"0":"2darray","1":"dynamic","2":"easy","3":"kingofnumbers","4":"precomputation"},"editorial_url":"https://discuss.codechef.com/problems/PLUS","time":{"view_start_date":1527354000,"submit_start_date":1527354000,"visible_start_date":1527354000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME60/mandarin/PLUS.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME60/vietnamese/PLUS.pdf">Vietnamese</a> as well.</h3>

You are given a grid of (not necessarily non-negative) integers $G$ with $N$ rows and $M$ columns. Let's denote the integer in the cell $(i, j)$ of this grid by $G_{i,j}$; the rows and columns use 1-based indexing.

Formally, let's call a non-empty subset of cells of the grid a *plus sign* if:
- it is connected
- there is a central cell $(i, j)$ which belongs to the subset
- each other (non-central) cell from the subset is either in row $i$ or column $j$
- the central cell is adjacent to 4 other cells in all 4 directions


You should find the maximum possible sum of integers written in the cells belonging to a plus sign in the grid.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $M$ space-separated integers $G_{i,1}, G_{i,2}, \dots, G_{i, M}$.

### Output
For each test case, print a single line containing one integer — the maximum sum of a plus sign. 

### Constraints 
- $1 \le T \le 100$
- $3 \le N, M \le 1,000$
- the sum of $N$ in all test cases does not exceed $1,000$
- the sum of $M$ in all test cases does not exceed $1,000$
- $|G_{i,j}| \le 1,000,000$ for each valid $i, j$

### Subtasks
**Subtask #1 (20 points):**
- the sum of $N$ in all test cases does not exceed $100$
- the sum of $M$ in all test cases does not exceed $100$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
3 4
1 1 1 1
-6 1 1 -4
1 1 1 1
```
### Example Output
```
0
```