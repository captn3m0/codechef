---
{"category_name":"easy","problem_code":"TWOFL","problem_name":"Two Flowers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"iloveksh","problem_tester":"mgch","date_added":"1-04-2018","tags":{"0":"bfs","1":"dsu","2":"iloveksh","3":"iloveksh","4":"june18","5":"likecs","6":"medium"},"time":{"view_start_date":1528709405,"submit_start_date":1528709405,"visible_start_date":1528709405,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/JUNE18/mandarin/TWOFL.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/JUNE18/russian/TWOFL.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/JUNE18/vietnamese/TWOFL.pdf" target="_blank">Vietnamese</a> as well.</h3>


Chef Go has planted a flower field — a grid with $n$ rows and $m$ columns. In each cell of this grid, a single flower is planted; let's denote the type of the flower planted in cell $(i, j)$ by $a_{i,j}$.

Today, Chef Go is going to make a new menu with two dishes: *Tom Yum Goong* and *Tom Kha Kai*. He needs to pick as many flowers as possible to decorate the dishes and make them look attractive. Each dish can only be decorated with flowers of a single type, so he can only pick flowers of one type or two different types. Also, Chef Go wants the flowers he picks to form one connected area, so that he can finish his job quickly. A connected area is a set of cells such that we can move from any cell to any other cell in this set by only moving between side-adjacent cells from the set.

Help Chef Go find the size of the largest connected area in his flower field which contains at most two types of flowers.

### Input
- The first line of the input contains two space-separated integers $n$ and $m$ denoting the size of the field.
- $n$ lines follow. For each $i$ ($1 \le i \le n$), the $i$-th of these lines contains $m$ space-separated integers $a_{i, 1}, a_{i, 2}, \dots, a_{i, m}$.

### Output
Print a single line containing one integer — the maximum number of flowers that can be picked.

### Constraints
- $1 \le n, m \le 2,000$
- $1 \le a_{i, j} \le 4\cdot 10^6$ for each valid $i$ and $j$
- the size of the input will be less than 13 MB

### Subtasks
**Subtask #1 (20 points):**
- $1 \le n, m \le 100$
- $1 \le a_{i, j} \le 100$ for each valid $i$ and $j$

**Subtask #2 (20 points):**
- $1 \le n, m \le 1,000$
- $1 \le a_{i, j} \le 10^6$ for each valid $i$ and $j$

**Subtask #3 (60 points):** original constraints

### Example Input
```
4 5
1 1 2 3 1
3 1 2 5 2
5 2 1 5 6
1 3 1 2 1
```

### Example Output
```
10
```

### Explanation
One connected area with maximum size consists of the following flowers (flowers marked by dots are not picked):
```
1 1 2 . .
. 1 2 . .
. 2 1 . .
. . 1 2 1
```
