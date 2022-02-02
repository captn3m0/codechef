---
{"category_name":"hard","problem_code":"BIBOARD","problem_name":"Binary Board","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"ratingoverflow","problem_tester":"mgch","date_added":"20-05-2018","tags":{"0":"hard","1":"june18","2":"likecs","3":"minimum","4":"ratingoverflow","5":"ratingoverflow"},"time":{"view_start_date":1528709405,"submit_start_date":1528709405,"visible_start_date":1528709405,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/JUNE18/mandarin/BIBOARD.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/JUNE18/russian/BIBOARD.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/JUNE18/vietnamese/BIBOARD.pdf" target="_blank">Vietnamese</a> as well.</h3>

﻿﻿Chef loves single-colored squares, so he got a rectangular board with size $N \times M$ consisting only of black cells and white cells. He calculates the *cost* of the board in the following manner:
- Let's denote the number of ways to choose $k^2$ white cells which form a square with edge length $k$ (and edges parallel to the borders of the board) by $W_k$. For example, a $2 \times 3$ board consisting of 6 white cells and no black cells has $W_1=6$, $W_2=2$ and $W_3=0$. 
- Similarly, let's denote the number of ways to choose $k^2$ black cells forming a square by $B_k$.
- Chef chose two sequences of non-negative integers $C_W$ and $C_B$, each with length $\mathrm{min}(N, M)$. The cost of the board is defined as
$$\sum_{i=1}^{\mathrm{min}(N, M)} C_{B, i} \cdot B_i + C_{W, i} \cdot W_i\,.$$

However, Chef accidentally spilled some sauce on the board while cooking, so the colors of some cells cannot be determined. Now he wants to repaint each of these cells using black or white paint. What is the maximum achievable cost of the resulting board? Note that he may paint different cells using different colors.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a string with length $M$ describing the $i$-th row of the board — the character '0' stands for a white cell, '1' stands for a black cell and '?' stands for a cell with unknown color.
- The following line contains $K=\mathrm{min}(N, M)$ space-separated integers $C_{W, 1}, C_{W, 2}, \dots, C_{W, K}$.
- The last line contains $K=\mathrm{min}(N, M)$ space-separated integers $C_{B, 1}, C_{B, 2}, \dots, C_{B, K}$.

### Output
For each test case, print a single line containing one integer — the maximum possible cost.

### Constraints 
- $1 \le T \le 5$
- $1 \le N \cdot M \le 500$
- each string contains only characters '0', '1' and '?'
- $0 \le C_{W, i} \le 10^8$ for each valid $i$
- $0 \le C_{B, i} \le 10^8$ for each valid $i$

### Subtasks
**Subtask #1 (5 points):** $1 \le N \cdot M \le 10$

**Subtask #2 (15 points):** $1 \le N \cdot M \le 40$

**Subtask #3 (80 points):** original constraints

### Example Input
```
1
3 3
10?
01?
???
1 1 1
2 2 2
```

### Example Output
```
18
```

### Explanation
**Example case 1:** Replacing each '?' by '1' gives the optimal answer.
