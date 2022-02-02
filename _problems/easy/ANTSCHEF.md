---
{"category_name":"easy","problem_code":"ANTSCHEF","problem_name":"Chef and Ants","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2\r\n2 -2 1\r\n1 2","output":2,"explanation":"**Example case 1:** First, the ants on the first line collide at the coordinate $-1/2$ and change directions. Finally, ant $2$ on the first line collides with the only ant on the second line; this happens at $\\mathsf{O}$. No collisions happen afterwards.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/MuTeQP5IN78","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"arayi","problem_tester":"","date_added":"28-10-2020","tags":{"0":"arayi","1":"easy","2":"greedy","3":"implementation","4":"jan21","5":"observation"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ANTSCHEF","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ANTSCHEF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/ANTSCHEF.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/ANTSCHEF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/ANTSCHEF.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/ANTSCHEF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/ANTSCHEF.pdf) as well.

Chef has been researching ant colonies for many years and finally discovered all their secrets.

An ant colony consists of $N$ distinct lines (numbered $1$ through $N$) that pass through a point $\mathsf{O}$, which is the queen's home. For each valid $i$, there are $M_i$ ants on the $i$-th line.

For each valid $i$ and $j$, the $j$-th ant on the $i$-th line initially has a non-zero coordinate $X_{i,j}$ with the following meaning:
- The distance of this ant from $\mathsf{O}$ is $|X_{i,j}|$.
- Let's choose a direction along the $i$-th line from $\mathsf{O}$. The exact way in which this direction is chosen does not matter here, it only needs to be the same for all ants on the same line.
- If $X_{i,j}$ is positive, this ant is at the distance $|X_{i,j}|$ from $\mathsf{O}$ in the chosen direction. Otherwise, it is at this distance from $\mathsf{O}$ in the opposite direction.

In other words, two ants $j$ and $k$ on a line $i$ are at the same side of $\mathsf{O}$ if the signs of $X_{i,j}$ and $X_{i,k}$ are the same or on opposite sides if the signs are different.

All ants move with the same constant speed. Initially, all of them are moving towards $\mathsf{O}$. Whenever two or more ants meet (possibly at $\mathsf{O}$), all of these ants turn around and start moving in the opposite directions with the same speed. We call this a *collision*. Even if an ant reaches $\mathsf{O}$ without meeting an ant there, it keeps moving in the same direction. An ant may change direction multiple times.

Help Chef find the total number of collisions between ants. Note that even if more than two ants meet, it counts as only one collision.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains an integer $M_i$, followed by a space and $M_i$ space-separated integers $X_{i,1}, X_{i,2}, \ldots, X_{i,M_i}$.

### Output
For each test case, print a single line containing one integer ― the number of collisions between ants.

### Constraints
- $1 \leq T \leq 1,000$
- $1 \leq N \leq 2 \cdot 10^5$
- $1 \leq M_i \leq 5 \cdot 10^5$ for each valid $i$
- $1 \leq |X_{i,j}| \leq 10^9$ for each valid $i,j$
- $X_{i,j} \lt X_{i,j+1}$ for each valid $i,j$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$
- the sum of $M_1 + M_2 + \ldots + M_N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (30 points):** $N = 1$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
2
2 -2 1
1 2
```

### Example Output
```
2
```

### Explanation
**Example case 1:** First, the ants on the first line collide at the coordinate $-1/2$ and change directions. Finally, ant $2$ on the first line collides with the only ant on the second line; this happens at $\mathsf{O}$. No collisions happen afterwards.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>