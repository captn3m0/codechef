---
{"category_name":"medium","problem_code":"BINLAND","problem_name":"Binary Land","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5 9\r\nadd 11101\r\npath 1 2\r\nadd 01110\r\npath 3 2\r\nadd 00100\r\npath 3 3\r\nadd 10110\r\nremove\r\npath 1 2","output":"0\r\n1\r\n3\r\n2","explanation":"After the first query, the city is:\r\n```\r\n11101\r\n```\r\n\r\nThere is no way to move from column $1$ to column $2$.\r\n\r\nAfter the third query, the city is:\r\n```\r\n11101\r\n01110\r\n```\r\n\r\nThere is only one way to move from the cell $(1, 3)$ to the cell $(2, 2)$: $(1, 3) \\rightarrow (2, 2)$.\r\n\r\nAfter the fifth query, the city is:\r\n```\r\n11101\r\n01110\r\n00100\r\n```\r\n\r\nThere are $3$ ways to move from the cell $(1, 3)$ to the cell $(3, 3)$:\r\n- $(1, 3) \\rightarrow (2, 2) \\rightarrow (3, 3)$\r\n- $(1, 3) \\rightarrow (2, 3) \\rightarrow (3, 3)$\r\n- $(1, 3) \\rightarrow (2, 4) \\rightarrow (3, 3)$\r\n\r\nAfter the eighth query, the city is:\r\n```\r\n01110\r\n00100\r\n10110\r\n```\r\n\r\nThere are $2$ ways to move from the cell $(1, 1)$ to the cell $(3, 2)$:\r\n- $(1, 1) \\rightarrow (2, 1) \\rightarrow (3, 2)$\r\n- $(1, 1) \\rightarrow (2, 2) \\rightarrow (3, 2)$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.1,"source_sizelimit":50000,"problem_author":"fmota","problem_tester":null,"date_added":"27-02-2020","tags":{"0":"dynamic","1":"fmota","2":"fmota","3":"may20","4":"medium","5":"queue","6":"stack"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/BINLAND","time":{"view_start_date":1589189402,"submit_start_date":1589189402,"visible_start_date":1589189402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BINLAND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MAY20/hindi/BINLAND.pdf), [Bengali](https://www.codechef.com/download/translated/MAY20/bengali/BINLAND.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY20/mandarin/BINLAND.pdf), [Russian](https://www.codechef.com/download/translated/MAY20/russian/BINLAND.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY20/vietnamese/BINLAND.pdf) as well.

Chefland is a city that always changes. It can be viewed as a grid with a fixed width $N$ (with $N$ columns numbered $1$ through $N$) and changing height. The rows of the grid are numbered with positive integers. Each cell in Chefland has a colour, which is either '0' or '1'.

From a cell $(x, y)$, it is possible to move to one of the cells $(x+1, y-1)$, $(x+1, y)$ and $(x+1, y+1)$, but only if the destination cell exists and has the same colour as the origin cell.

In Chefland, rows sometimes appear or disappear. However, a row may only appear at the bottom of the grid or disappear if it was at the top of the grid; whenever that happens, rows are renumbered with positive integers from top to bottom in such a way that the topmost row has number $1$.

Now, Chef received a difficult task ― keeping track of the number of ways to move from the topmost row to the bottommost row. He is asking you to help him answer $Q$ queries. Initially, the grid is empty ― it has $0$ rows. There are three types of queries:
- `add L`: You are given a string $L$ with length $N$. A new row appears; for each valid $i$, the colour of the cell in this row and the $i$-th column is $L_i$.
- `remove`: The topmost row disappears.
- `path c d`: Find the number of paths starting in the cell in the topmost row and $c$-th column and ending in the cell in the bottommost row and $d$-th column. Two paths are considered different if there is a cell which is visited in one path, but not in the other. Since this number can be very big, compute it modulo $1,000,000,007$.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- Each of the following $Q$ lines describes a query in the format described above.

### Output
For each `path` query, print a single line containing one integer ― the number of paths modulo $1,000,000,007$.

### Constraints
- $1 \le N \le 20$
- $1 \le Q \le 300,000$
- $|L| = N$
- $L$ contains only characters '0' and '1'
- $1 \le c, d \le N$
- for each `path` or `remove` query, the grid is not empty

### Subtasks
**Subtask #1 (10 points):**
- $N \le 10$
- $Q \le 300$

**Subtask #2 (30 points):**
- $N \le 10$
- $Q \le 30,000$

**Subtask #3 (60 points):** original constraints

### Example Input
```
5 9
add 11101
path 1 2
add 01110
path 3 2
add 00100
path 3 3
add 10110
remove
path 1 2
```

### Example Output
```
0
1
3
2
```

### Explanation
After the first query, the city is:
```
11101
```

There is no way to move from column $1$ to column $2$.

After the third query, the city is:
```
11101
01110
```

There is only one way to move from the cell $(1, 3)$ to the cell $(2, 2)$: $(1, 3) \rightarrow (2, 2)$.

After the fifth query, the city is:
```
11101
01110
00100
```

There are $3$ ways to move from the cell $(1, 3)$ to the cell $(3, 3)$:
- $(1, 3) \rightarrow (2, 2) \rightarrow (3, 3)$
- $(1, 3) \rightarrow (2, 3) \rightarrow (3, 3)$
- $(1, 3) \rightarrow (2, 4) \rightarrow (3, 3)$

After the eighth query, the city is:
```
01110
00100
10110
```

There are $2$ ways to move from the cell $(1, 1)$ to the cell $(3, 2)$:
- $(1, 1) \rightarrow (2, 1) \rightarrow (3, 2)$
- $(1, 1) \rightarrow (2, 2) \rightarrow (3, 2)$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>