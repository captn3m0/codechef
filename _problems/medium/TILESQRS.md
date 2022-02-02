---
{"category_name":"medium","problem_code":"TILESQRS","problem_name":"Guess the Tiling","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/iJtRmesnVKk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jay_1048576","problem_tester":"","date_added":"2-12-2020","tags":{"0":"ad","1":"interactive","2":"jan21","3":"jay_1048576","4":"medium","5":"observation"},"problem_difficulty_level":"Medium","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/TILESQRS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TILESQRS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/TILESQRS.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/TILESQRS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/TILESQRS.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/TILESQRS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/TILESQRS.pdf) as well.

**This is an interactive problem.**

Chef wants to decorate his kitchen with tiles. However, he is running out of money and needs to get the work done at a discount. The Slash Decorators are very proud of their skills and give an offer to Chef.

The kitchen is a square grid with length $N$ units and width $N$ units. It is divided into $N$ rows and $N$ columns. The rows are numbered $1$ through $N$ from top to bottom. Similarly, the columns are numbered $1$ through $N$ from left to right. Let's denote a cell in the $i$-th row and $j$-th column by $(i,j)$. The Slash Decorators want to use $N^2$ colourful tiles with dimensions $1 \times 1$ to cover the whole kitchen. The tiles can be placed in two orientations as shown in the figure below.

![](https://codechef_shared.s3.amazonaws.com/download/Images/jay_1048576/Tilings.png)

Note that each of these two orientations can be converted to the other by rotating it $90^{\circ}$ clockwise.

The Slash Decorators initially filled all the cells of the kitchen with tiles, where each tile is placed in one of the two possible orientations. Chef does not know this initial configuration and his task is to find it by asking up to $Q$ queries. In each query:
- Chef chooses a cell in the grid.
- The Slash Decorators rotate the tile in the cell $90^{\circ}$ clockwise.
- Then, the Slash Decorators find all squares with area $2$ formed by the blue diagonal lines (shown in the figure below) and tell Chef the number of these squares.

![](https://codechef_shared.s3.amazonaws.com/download/Images/jay_1048576/Example%20Square%20of%20Area%202.png)

In addition, the Slash Decorators initially tell Chef the number of squares with area $2$ formed by the blue diagonal lines in the initial configuration. Let's denote this number by $K$.

For example, in the configuration shown below, there are $3$ squares with area $2$.

![](https://codechef_shared.s3.amazonaws.com/download/Images/jay_1048576/Sample%20Grid.png)

The queries are not independent, i.e. a tile rotated in a query stays rotated in subsequent queries. Chef may choose the same tile in multiple queries; in such a case, this tile is rotated multiple times.

The offer is that if Chef guesses the initial configuration correctly, the work will be done for free. Please help him. You play as Chef and the grader plays as the Slash Decorators. You should find the configuration the kitchen is in (the orientations of all tiles) when you finish asking queries; note that this is equivalent to finding the initial configuration.

### Interaction
- First, you should read a line containing a single integer $T$ ― the number of test cases. The description of interaction for $T$ test cases follows.
- For each test case, you should start by reading a line containing three space-separated integers $N$, $Q$ and $K$.
- Then, you may ask queries. For each query:
    - Print a line containing three space-separated integers $1$, $X$ and $Y$.
    - The grader rotates the tile in the cell $(X, Y)$.
    - Then, read a line containing a single integer $Z$. If you ask an invalid query or more than $Q$ queries, $Z = -1$. Otherwise, $Z$ denotes the number of squares with area $2$ formed by the blue diagonal lines.
- Once you know the current configuration:
    - Print a line containing a single integer $2$.
    - Then, for each $i$ ($1 \le i \le N$), print a line containing $N$ space-separated integers; for each valid $j$, the $j$-th of these integers should be $0$ or $1$ if the cell $(i,j)$ currently contains a tile in the first orientation or the second orientation, respectively, shown in the first figure.
- Finally, you should read a line containing a single integer. If your guess was incorrect, this integer is $-1$. Otherwise, this integer is $1$ and you should continue solving the remaining test cases.

If you receive $-1$, you should terminate your program immediately to receive the Wrong Answer verdict. Otherwise, you may receive any verdict. Don't forget to flush the output after printing each line!

### Constraints
- $1 \leq T \leq 1,000$
- $2 \le N \le 200$
- the sum of $Q$ over all test cases does not exceed $3 \cdot 10^5$

### Subtasks
**Subtask #1 (1 point):**
- $N \in \{2, 4\}$
- $Q=2^{N^2}$

**Subtask #2 (11 points):**
- $N \leq 100$
- $Q = 12 \cdot N^2$

**Subtask #3 (22 points):** $Q = 5 \cdot N^2$

**Subtask #4 (66 points):** $Q = 4 \cdot N^2$

### Example
```
You     Grader
        2
        2 16 0
1 2 2
        0
1 1 2
        1
1 1 1
        0
2
1 1
1 0
        1
        4 64 3
1 2 2
        1
1 3 2
        0
1 2 1
        0
1 3 1
        1
1 1 3
        1
1 1 4
        1
1 2 4
        2
1 4 3
        2
1 3 4
        2
1 4 4
        3
2
0 1 0 1
0 1 1 0
1 0 0 1
1 0 1 0
        1
```

### Explanation
**Example case 1:**

![](https://codechef_shared.s3.amazonaws.com/download/Images/jay_1048576/Sample%20Test%20Case%201%20Explanation.png)  

**Example case 2:** The initial configuration is depicted in the problem statement.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>