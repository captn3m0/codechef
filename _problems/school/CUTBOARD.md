---
{"category_name":"school","problem_code":"CUTBOARD","problem_name":"Cut the Board","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"15-04-2018","tags":{"0":"alei","1":"cakewalk","2":"chess","3":"cook93"},"editorial_url":"https://discuss.codechef.com/problems/CUTBOARD","time":{"view_start_date":1524421800,"submit_start_date":1524421800,"visible_start_date":1524421800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problem statement in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK93/mandarin/CUTBOARD.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK93/vietnamese/CUTBOARD.pdf">Vietnamese</a>.</h3>

Suzumo has a chessboard with $N$ rows and $M$ columns. In one step, he can choose two cells of the chessboard which share a common edge (that has not been cut yet) and cut this edge.

Formally, the chessboard is *split* into two or more pieces if it is possible to partition its cells into two non-empty subsets $S_1$ and $S_2$ ($S_1\cap S_2 = \emptyset$, $|S_1|+|S_2|=NM$) such that there is no pair of cells $c_1, c_2$ ($c_1 \in S_1, c_2 \in S_2$) which share a common edge that has not been cut.

Suzumo does not want the board to split into two or more pieces. Compute the maximum number of steps he can perform while satisfying this condition.

### Input

- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. 
- The first and only line of each test case contains two space-separated integers $N$ and $M$.

### Output

For each test case, print a single line containing one integer — the maximum possible number of steps.

### Constraints 
- $1 \le T \le 64$
- $1 \le N, M \le 8$

### Example Input
```
4
2 4
3 3
6 8
7 5
```

### Example Output
```
3
4
35
24
```

### Explanation

**Example case 1:**

<img src="https://codechef_shared.s3.amazonaws.com/download/upload/COOK93/CUTBOARD.png"></img>

The edges cut by Suzumo in one optimal solution are marked by red lines.
