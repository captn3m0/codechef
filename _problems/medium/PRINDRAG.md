---
{"category_name":"medium","problem_code":"PRINDRAG","problem_name":"Princess and Dragons","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"step_by_step","problem_tester":null,"date_added":"13-07-2018","tags":{"0":"aug18","1":"dynamic","2":"likecs","3":"medium","4":"step_by_step","5":"step_by_step"},"editorial_url":"https://discuss.codechef.com/problems/PRINDRAG","time":{"view_start_date":1534152605,"submit_start_date":1534152605,"visible_start_date":1534152605,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/AUG18/hindi/PRINDRAG.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/AUG18/mandarin/PRINDRAG.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/AUG18/russian/PRINDRAG.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/AUG18/vietnamese/PRINDRAG.pdf" target="_blank">Vietnamese</a> as well.</h3>

There are $N$ dragons in Wonderland (numbered $1$ through $N$). Each dragon lives in one of $N$ caves, which are located in a single row and numbered $1$ through $N$ in the order from left to right. Let's denote the strength of the $i$-th dragon by $S_i$.

Also, a beautiful princess lives in Wonderland. Many princes would like to marry her. But the princess feels self-sufficient, so she doesn't want to get married. She loves living in dragon caves and talking to dragons.

One day, the princess heard that a new prince is travelling to Wonderland to propose to her. She doesn't want to even see the prince — instead, she's going to choose some cave to live in and assign exactly one dragon to each cave to protect her from the prince.

Let's denote the cave the princess chose by $F$ and the strength of the dragon inhabiting the $i$-th cave after the princess assigns the dragons to caves by $X_i$. The prince will start his journey near some cave $V$ and move straight towards cave $F$, fighting the dragons in all caves between $V$ and $F$ (both inclusive). The prince initially has strength $P$; by defeating a dragon with strength $X$, the prince's strength decreases by $X$. If the prince's strength becomes non-positive at any time, he dies.

The princess does not know the cave the prince will choose to start from. Therefore, she wants to assign the dragons to caves in such a way that the number of caves the prince can start from and die while going to the princess (possibly after defeating all dragons) is maximum possible. Help the princess calculate this number for each possible choice of her cave $F$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $P$ denoting the number of dragons and the strength of the prince.
- The second line contains $N$ space-separated integers $S_1, S_2, \dots, S_N$ denoting the strengths of the dragons.

### Output
For each test case, print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should denote the number of starting caves for the prince such that the prince dies if the princess stays in the $i$-th cave.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le P \le 10^5$
- $1 \le S_i \le 10^5$ for each valid $i$

### Subtasks
**Subtask #1 (10 points):** $N \le 8$

**Subtask #2 (10 points):** $N \le 20$

**Subtask #3 (20 points):**
- $N, P \leq 2,000$
- $S_i \leq 2,000$ for each valid $i$

**Subtask #4 (20 points):**
- $N, P \leq 20,000$
- $S_i \leq 20,000$ for each valid $i$

**Subtask #5 (40 points):** original constraints

### Example Input
```
2
3 4
2 1 2
4 5
1 1 1 1
```

### Example Output
```
2 1 2
0 0 0 0
```

### Explanation
**Example case 1:**
- If $F = 1$, the optimal sequence $X$ is $[2, 2, 1]$. Then, if the prince starts at the second or third cave, he will die while going to the princess, so the answer is 2.
- If $F = 2$, the optimal sequence $X$ is again $[2, 2, 1]$; the prince will die if he starts near the first cave.
- If $F = 3$, the optimal sequence $X$ is $[1, 2, 2]$; the prince will die if he starts near the first or second cave.

On the contrary, if $X = [2, 1, 2]$ for $F = 2$, the prince would be able to reach the princess starting from any cave, so this is not an optimal assignment of dragons.
