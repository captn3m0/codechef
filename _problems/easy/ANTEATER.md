---
{"category_name":"easy","problem_code":"ANTEATER","problem_name":"Ants and Anteaters","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"10\n3 3\nR--\n---\n--U\n1 4\nR--R\n2 2\n--\n--\n1 4\nR--L\n1 4\n-R-L\n1 4\n-R#L\n3 3\nR-D\n-#-\nR-U\n3 3\nR-D\n---\nR#U\n3 3\n-D-\nR-L\n-U-\n1 7\nRLLLLLL","output":"1\n0\n0\n0\n1\n0\n3\n2\n6\n3","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"19-06-2019","tags":{"0":"cook","1":"cook107","2":"erfaniaa"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ANTEATER","time":{"view_start_date":1561314600,"submit_start_date":1561314600,"visible_start_date":1561314600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ANTEATER","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK107/hindi/ANTEATER.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK107/mandarin/ANTEATER.pdf), [Russian](https://www.codechef.com/download/translated/COOK107/russian/ANTEATER.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK107/vietnamese/ANTEATER.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK107/bengali/ANTEATER.pdf) as well.

You are given a grid with $R$ rows (numbered $1$ through $R$) and $C$ columns (numbered $1$ through $C$). Initially, each cell of this grid is either empty, contains an ant or an anteater. Each ant is moving in a fixed direction: up, down, left or right. The anteaters do not move.

The movement of ants happens in discrete steps. For example, when an ant is in the cell in the $i$-th row and $j$-th column at some point in time (in some step) and it is moving down, then in the next step, it enters the cell in the $(i+1)$-th row and $j$-th column. Two ants *meet* each other when they enter the same cell at the same point in time (in the same step). When ants meet, they do not interact in any way and keep moving in their fixed directions.

If an ant reaches an anteater, that anteater eats the ant, so the ant completely disappears. If an ant attempts to leave the grid, it also disappears. When two ants enter a cell containing an anteater at the same time, they are eaten before they could meet.

Calculate the total number of pairs of ants that meet each other.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $R$ and $C$.
- Each of the following $R$ lines contains a single string with length $C$. For each valid $i, j$, the $j$-th character in the $i$-th string is:
    - '#' if the cell in the $i$-th row and $j$-th column of the grid contains an anteater
    - 'U', 'D', 'L' or 'R' if this cell contains an ant moving up, down, left or right respectively
    - '-' if this cell is empty

### Output
For each test case, print a single line containing one integer — the number of pairs of ants that meet.

### Constraints 
- $1 \le T \le 10$
- $1 \le R, C \le 50$
- each string contains only characters 'U', 'D', 'L', 'R', '#' and '-'

### Example Input
```
10
3 3
R--
---
--U
1 4
R--R
2 2
--
--
1 4
R--L
1 4
-R-L
1 4
-R#L
3 3
R-D
-#-
R-U
3 3
R-D
---
R#U
3 3
-D-
R-L
-U-
1 7
RLLLLLL
```

### Example Output
```
1
0
0
0
1
0
3
2
6
3
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>