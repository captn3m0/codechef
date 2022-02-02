---
{"category_name":"medium","problem_code":"ROOKPATH","problem_name":"Rook Path","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/c2vU4mi20u0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"27-11-2020","tags":{"0":"eulerian","1":"graphs","2":"ildar_adm","3":"ltime90","4":"medium"},"problem_difficulty_level":"Medium","best_tag":"Eulerian Tour","editorial_url":"https://discuss.codechef.com/problems/ROOKPATH","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ROOKPATH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME90/hindi/ROOKPATH.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME90/bengali/ROOKPATH.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME90/mandarin/ROOKPATH.pdf), [Russian](https://www.codechef.com/download/translated/LTIME90/russian/ROOKPATH.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME90/vietnamese/ROOKPATH.pdf) as well.

There is a chessboard with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$). $M$ squares on this chessboard (numbered $1$ through $M$) are marked. For each valid $i$, the $i$-th of the marked squares is in the $r_i$-th row and $c_i$-th column.

You should perform the following process:
- First, you take a rook and put this rook on one of the marked squares.
- Then you move the rook $M-1$ times; since it is a rook, each of these moves must be to a marked square in the same row or the same column as the square where the rook was currently standing.
- The rook must visit each of the marked squares exactly once. In each move, squares strictly between those where the rook stands immediately before and after this move are not visited by the rook.
- Also, the directions of the moves must alternate ― you may not move the rook in the same row twice or in the same column twice in any two consecutive moves.

Find one valid path for the rook that visits the marked squares. It is guaranteed that at least one such path exists. If there are multiple solutions, you may find any one of them.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $r_i$ and $c_i$.

### Output
For each test case, print a single line containing $M$ space-separated integers ― the indices of marked squares in the order in which the rook should visit them. These integers should form a permutation of $1, 2, \ldots, M$.

### Constraints
- $1 \le T \le 10$
- $1 \le N, M \le 50,000$
- $1 \le r_i, c_i \le N$ for each valid $i$
- all marked squares are distinct

### Subtasks
**Subtask #1 (10 points):** $M \le 15$

**Subtask #2 (90 points):** original constraints

### Example Input
```
2
2 4
1 1
1 2
2 1
2 2
1 1
1 1
```

### Example Output
```
1 3 4 2
1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>