---
{"category_name":"easy","problem_code":"MINIL","problem_name":"Maximise Islands","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2 2\r\n..\r\n*.\r\n2 4\r\n*..*\r\n*.*.","output":"1\r\n2","explanation":"**Example case 1:** The largest number of islands is $2$ and it can be achieved by converting one cell from water to land. The resulting grid is\r\n\r\n```\r\n.*\r\n*.\r\n```","isDeleted":false}}},"video_editorial_url":"https://youtu.be/CWRNefpt8N8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aomine23","problem_tester":"","date_added":"19-01-2021","tags":{"0":"aomine23","1":"cook126","2":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MINIL","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MINIL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK126/hindi/MINIL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK126/mandarin/MINIL.pdf), [Russian](https://www.codechef.com/download/translated/COOK126/russian/MINIL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK126/vietnamese/MINIL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK126/bengali/MINIL.pdf) as well.

You are given a grid with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Each cell of this grid contains either water or land. The initial state of the grid is described by strings $S_1, S_2, \ldots, S_N$; for each valid $i$ and $j$, the $j$-th character of $S_i$ is '.' if the cell in the $i$-th row and $j$-th column initially contains water or '*' if this cell initially contains land.

A maximal group of connected land cells (by moving between side-adjacent land cells) is called an *island*.

You may perform any number of operations (including zero). In one operation, you should choose one cell of the grid and convert it either to a land cell or to a water cell. Find the smallest number of operations required to maximise the number of islands in the grid.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains a single string $S_i$ with length $M$.

### Output
For each test case, print a single line containing one integer ― the smallest number of operations required to maximise the number of islands.

### Constraints
- $1 \le T \le 1,000$
- $2 \le N, M \le 10$
- $S_1, S_2, \ldots, S_N$ contain only characters '.' and '*' 

### Example Input
```
2
2 2
..
*.
2 4
*..*
*.*.
```

### Example Output
```
1
2
```

### Explanation
**Example case 1:** The largest number of islands is $2$ and it can be achieved by converting one cell from water to land. The resulting grid is

```
.*
*.
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>