---
{"category_name":"medium","problem_code":"SNKAPT","problem_name":"Snake and Apple Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 4","source_sizelimit":50000,"problem_author":"aviroop123","problem_tester":null,"date_added":"19-04-2019","tags":{"0":"aviroop123","1":"graphs","2":"july19","3":"medium","4":"min"},"problem_difficulty_level":"Medium","best_tag":"Min Cost Flow","editorial_url":"https://discuss.codechef.com/problems/SNKAPT","time":{"view_start_date":1563183002,"submit_start_date":1563183002,"visible_start_date":1563183002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SNKAPT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY19/hindi/SNKAPT.pdf), [Bengali](https://www.codechef.com/download/translated/JULY19/bengali/SNKAPT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY19/mandarin/SNKAPT.pdf), [Russian](https://www.codechef.com/download/translated/JULY19/russian/SNKAPT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY19/vietnamese/SNKAPT.pdf) as well.

Chef is playing a game called "Snake and Apple Tree". This game is played on a grid with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Some cells of this grid are blocked. Initially, there are also $S$ snakes present in $S$ non-blocked cells. The snakes do not grow, so each snake always takes up exactly one cell.

The game starts at second $0$ and will run for $T$ seconds. At the end of each second, each snake may (independently from the other snakes) move to an edge-adjacent non-blocked cell or stay in its current cell. During each second, there may be at most one snake in each cell, but when a snake is moving out of a cell, another snake is allowed to move into that cell at the same time.

During these $T$ seconds, $Z$ apple trees (numbered $1$ through $Z$) will grow in some cells, bear fruit and wither. For each valid $i$, the $i$-th tree will grow in the cell in row $X_i$ and column $Y_i$ and start bearing fruit at a time $P_i$. At a later time $Q_i$, the tree will wither and bear no fruit. At each second between the $P_i$-th and $Q_i$-th second (including $P_i$, but not including $Q_i$), if there is a snake in the same cell as this tree and it does not move to another cell at the end of this second, it may eat an apple from this tree. Eating one apple from the tree increases the *total happiness* of the snakes by $H_i$; if a snake eats multiple apples from this tree, the happiness increases by $H_i$ multiple times.

Each snake takes $1$ second to eat an apple. It cannot do anything else while eating and if there are multiple trees bearing fruit in the same cell, a snake in that cell may only eat an apple from one tree during each second (possibly from different trees during different seconds).

Initially, the total happiness of the snakes is $0$. Help Chef maximise their happiness after $T$ seconds.

### Input
- The first line of the input contains four space-separated integers $N$, $M$, $Z$ and $T$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a single string with length $M$ describing the $i$-th row of the grid: for each valid $j$, the $j$-th character of this string is '#' if the cell in the $j$-th column of this row is blocked, '.' if it is empty or 'S' if it contains a snake.
- $Z$ lines follow. For each $i$ ($1 \le i \le Z$), the $i$-th of these lines contains five space-separated integers $X_i$, $Y_i$, $P_i$, $Q_i$ and $H_i$.

### Output
Print a single line containing one integer — the maximum total happiness of the snakes.

### Constraints
- $1 \le S \le 25$
- $1 \le N, M \le 256$
- $1 \le N \cdot M \le 256$
- $1 \le Z \le 5,000$
- $1 \le T \le 80$
- $1 \le X_i \le N$ for each valid $i$
- $1 \le Y_i \le M$ for each valid $i$
- $0 \le P_i \lt Q_i \le T$ for each valid $i$
- $1 \le H_i \le 10^6$ for each valid $i$

### Subtasks
**Subtask #1 (20 points, time limit 1 second):** $S \le 2$

**Subtask #2 (80 points, time limit 4 seconds):** original constraints

### Example Input 1
```
3 3 1 30
...
.#.
.#S
3 1 0 20 4
```

### Example Output 1
```
56
```

### Explanation 1
There is only one snake. It starts in the cell $(3, 3)$ and it will reach the only tree at $(3, 1)$ during the $6$-th second. From then on, it will eat apples from this tree until the $20$-th second, so the total happiness is $(20 - 6) \cdot 4 = 56$.

### Example Input 2
```
1 4 2 20
SS..
1 3 0 4 20
1 4 0 4 10
```

### Example Output 2
```
60
```

### Explanation 2
During the first two seconds, both snakes will move simultaneously to the right. Then, they will simultaneously start eating apples. Each snake will eat two apples, so the total happiness will be $2 \cdot (10 + 20) = 60$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>