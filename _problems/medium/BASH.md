---
{"category_name":"medium","problem_code":"BASH","problem_name":"Bash Matrix","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/RAsI0IYWkjs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shaanknight","problem_tester":"","date_added":"31-01-2021","tags":{"0":"feb21","1":"medium","2":"mincut","3":"minimum","4":"shaanknight"},"problem_difficulty_level":"Medium-Hard","best_tag":"Minimum Spanning Tree","editorial_url":"https://discuss.codechef.com/problems/BASH","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BASH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB21/hindi/BASH.pdf), [Bengali](https://www.codechef.com/download/translated/FEB21/bengali/BASH.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB21/mandarin/BASH.pdf), [Russian](https://www.codechef.com/download/translated/FEB21/russian/BASH.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB21/vietnamese/BASH.pdf) as well.

A Bash matrix is a matrix with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$), where for each row $r$ and column $c$, the cell in row $r$ and column $c$ (denoted by $(r, c)$) contains one of the characters 'U', 'D', 'L' or 'R'.

We can move in the matrix while treating the characters as instructions:
- If the character in the cell $(r,c)$ is 'R', move to the right cell $(r,c+1)$.
- If the character in the cell $(r,c)$ is 'L', move to the left cell $(r,c-1)$.
- If the character in the cell $(r,c)$ is 'U', move to the top cell $(r-1,c)$.
- If the character in the cell $(r,c)$ is 'D', move to the bottom cell $(r+1,c)$.

In addition, it must be impossible to leave the matrix by following these instructions regardless of the cell we start in.

Once in his childhood, Chef had chosen a Bash matrix and for each cell $(r,c)$ of this matrix, he did the following:
- Mark all cells as not visited.
- Start in the cell $(r,c)$.
- While he has not previously visited the cell he is currently in, move in the matrix following the instructions. In other words, he stops moving as soon as he finds out that he is in a cell which he has visited before (possibly the starting cell).
- Note the cell $(x_{r,c}, y_{r,c})$ where he stops, i.e. the first cell he visits twice during this process.

For example, consider the following Bash matrix:
```
RLD
DLL
RRU
```

The corresponding notes for this matrix would be
$$
\begin{bmatrix}
(1,1) & (1,2) & (2,3)\\
(2,1) & (2,2) & (2,3)\\
(3,1) & (3,2) & (3,3)\\
\end{bmatrix}
$$

- Consider the starting cell $(1,1)$. He moves along the path $(1,1) \rightarrow (1,2) \rightarrow (1,1)$. At that point, since he has already visited $(1,1)$, he stops in this cell.
- Next, consider the starting cell $(1,3)$. He moves along the path $(1,3) \rightarrow (2,3) \rightarrow (2,2) \rightarrow (2,1) \rightarrow (3,1) \rightarrow (3,2) \rightarrow (3,3) \rightarrow (2,3)$. He had already visited $(2,3)$, so he stops moving in this cell.

Years later, he found his notes, but he couldn't remember the Bash matrix for which he made the notes. Therefore, he is asking you to construct a Bash matrix that satifies his notes or determine that no such matrix exists.

Additionally, putting characters 'U', 'L', 'D' or 'R' in a Bash matrix costs $P_U$, $P_L$, $P_D$ or $P_R$ per character respectively. If there are multiple solutions, you should find one with the smallest possible cost. If there are multiple solutions with this cost, you may find any one of them.

### Input
- The first line of the input contains a single integer $N$.
- The second line contains four space-separated integers $P_U$, $P_L$, $P_D$ and $P_R$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains $2N$ space-separated integers $x_{i,1},y_{i,1},x_{i,2},\ldots,x_{i,N},y_{i,N}$.

### Output
If there is no Bash matrix that satisfies Chef's notes, print a single line containing the integer $-1$.

Otherwise, print $N+1$ lines. The first line should contain a single integer — the minimum cost of a Bash matrix that satisfies Chef's notes. For each valid $i$, the $i+1$-th line should contain a single string with length $N$ describing the $i$-th row of your matrix.

### Constraints
- $1 \leq N \leq 50$
- $1 \leq P_U,P_L,P_D,P_R \leq 10^5$
- $1 \leq x_{i,j},y_{i,j} \leq N$ for each valid $i,j$

### Subtasks
**Subtask #1 (30 points):** $P_U = P_L = P_D = P_R$

**Subtask #2 (70 points):** original constraints

### Example Input
```
4
5 6 7 6
1 1 1 2 1 3 1 4
2 1 2 1 2 4 2 4
3 1 3 4 3 4 3 4
4 1 4 2 4 3 4 4
```

### Example Output
```
96
DLLL
DLRU
DRRU
RRRU
```

### Explanation
Consider any of the boundary cells as the starting cell. Chef is bound to follow the cyclic path along the boundary (either clockwise or counterclockwise). For the remaining starting cells:
- Starting in the cell $(2,2)$, Chef moves to $(2,1)$ and then follows the cyclic path, stopping at $(2,1)$ again.
- Starting in the cell $(2,3)$, Chef moves to $(2,4)$ and then follows the cyclic path, stopping at $(2,4)$ again.
- Starting in the cell $(3,2)$, Chef moves to $(3,3) \rightarrow (3,4)$ and then follows the cyclic path, stopping at $(3,4)$.
- Starting in the cell $(3,3)$, Chef moves to $(3,4)$ and then follows the cyclic path, stopping at $(3,4)$ again.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>