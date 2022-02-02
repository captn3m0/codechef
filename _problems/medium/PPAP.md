---
{"category_name":"medium","problem_code":"PPAP","problem_name":"Probability","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"nots0fast","problem_tester":null,"date_added":"21-11-2018","tags":{"0":"dynamic","1":"ltime66","2":"matrix","3":"nots0fast","4":"number"},"editorial_url":"https://discuss.codechef.com/problems/PPAP","time":{"view_start_date":1543078801,"submit_start_date":1543078801,"visible_start_date":1543078801,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME66/mandarin/PPAP.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME66/bengali/PPAP.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME66/hindi/PPAP.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME66/russian/PPAP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME66/vietnamese/PPAP.pdf) as well.

ShareChatland is a grid with $N$ rows (numbered $0$ through $N-1$) and $M$ columns (numbered $0$ through $M-1$). There is a prince and a princess in this land; initially, the prince is in cell $(0, 0)$ and the princess is in cell $(N-1, M-1)$.

The prince and princess want to meet. The prince has a *visibility radius* $R_1$. In one step, he can move to any cell such that the Manhattan distance between this cell and his current cell is $\le R_1$ (staying in the same cell is also possible). The princess has a visibility radius $R_2$ and moves in a similar way.

There are also $K$ evil minions in the grid. A minion is initially located at $(x_1, y_1)$ and moves to $(x_2, y_2)$; it is guaranteed that these cells are either in the same row or in the same column, i.e. $x_1 = x_2$ or $y_1 = y_2$. In one step, a minion moves to the adjacent cell that's closest to its target cell. When it reaches $(x_2, y_2)$, it starts moving to $(x_1, y_1)$, then back to $(x_2, y_2)$ and so on.

The prince and princess can see minions, but they cannot see each other. Therefore, in each step, the prince and princess both uniformly randomly choose cells within their visibility radii that are not occupied by minions after this step and move to these cells. Simultaneously, the minions make their moves. (That means it is allowed for the prince or princess and a minion to swap places in one step.) If the prince or princess does not have any cell to move to, then he or she dies.

Find the probability that the prince and princess meet (are located in the same cell) after exactly $t$ steps. This probability can be expressed as a fraction $P/Q$, where $P$ and $Q$ are coprime integers; you should compute $P \cdot Q^{-1}$ modulo $10^9+7$, where $Q^{-1}$ is the multiplicative inverse of $Q$ modulo $10^9+7$ (it can be proven that this number exists and is unique).

### Input
- The first line of the input contains six space-separated integers $N$, $M$, $R_1$, $R_2$, $K$ and $t$.
- Each of the following $K$ lines contains four space-separated integers $x_1$, $y_1$, $x_2$ and $y_2$ describing a minion.

### Output
Print a single line containing one integer — the required probability as $P \cdot Q^{-1}$ modulo $10^9+7$.

### Constraints 
- $1 \le N \cdot M \le 100$
- $1 \le R_1, R_2 \le N+M$
- $0 \le K \le 10$
- $1 \le t \le 10^9$
- $0 \le x_1, x_2 \le N-1$
- $0 \le y_1, y_2 \le M-1$
- for each minion, either $x_1 = x_2$ or $y_1 = y_2$
- $|x_1-x_2|+|y_1-y_2| \le 4$

### Subtasks
**Subtask #1 (30 points):** $K = 0$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2 2 1 1 1 1
1 0 1 1
```

### Example Output
```
333333336
```

### Explanation
There is one minion, initially in cell $(1, 0)$. This minion is moving back and forth between cells $(1, 0)$ and $(1, 1)$. That is, after $1$ step, its position is $(1, 1)$, after $2$ steps, it is $(1, 0)$ and so on.

We are interested in the situation after $1$ step. Then, the prince can be at $(0, 0)$, $(1, 0)$ or $(0, 1)$, and the princess can be at $(0, 1)$ or $(1, 0)$. Note that she cannot choose to stay at $(1, 1)$, since the minion is there at that time. The probability of them meeting is $1/3$, which is $333333336$ modulo $10^9+7$.
