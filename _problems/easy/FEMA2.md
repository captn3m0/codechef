---
{"category_name":"easy","problem_code":"FEMA2","problem_name":"Iron, Magnet and Wall","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4 5\r\nI::M\r\n9 10\r\nMIM_XII:M","output":"1\r\n2","explanation":"**Example case 1**: The attraction power between the only magnet and the only piece of iron is $5+1-3-2 = 1$. Note that it decreases with distance and the number of sheets.\r\n\r\n**Example case 2:**\r\nThe magnets in cells $1$ and $3$ can attract the piece of iron in cell $2$, since the attraction power is $10$ in both cases. They cannot attract iron in cells $6$ or $7$ because there is a wall between them.\r\n\r\nThe magnet in cell $9$ can attract the pieces of iron in cells $7$ and $6$; the attraction power is $8$ and $7$ respectively.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/tk0ZbBBSRg4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"a_coder_hack","problem_tester":"","date_added":"22-10-2020","tags":{"0":"a_coder_hack","1":"easy","2":"greedy","3":"nov20","4":"queue"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/FEMA2","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FEMA2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV20/hindi/FEMA2.pdf), [Bengali](https://www.codechef.com/download/translated/NOV20/bengali/FEMA2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV20/mandarin/FEMA2.pdf), [Russian](https://www.codechef.com/download/translated/NOV20/russian/FEMA2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV20/vietnamese/FEMA2.pdf) as well.

Chef loves to play with iron (Fe) and magnets (Ma). He took a row of $N$ cells (numbered $1$ through $N$) and placed some objects in some of these cells. You are given a string $S$ with length $N$ describing them; for each valid $i$, the $i$-th character of $S$ is one of the following:
- 'I' if the $i$-th cell contains a piece of iron
- 'M' if the $i$-th cell contains a magnet
- '_' if the $i$-th cell is empty
- ':' if the $i$-th cell contains a conducting sheet
- 'X' if the $i$-th cell is blocked

If there is a magnet in a cell $i$ and iron in a cell $j$, the *attraction power* between these cells is $P_{i,j} = K+1 - |j-i| - S_{i,j}$, where $S_{i,j}$ is the number of cells containing sheets between cells $i$ and $j$. This magnet can only *attract* this iron if $P_{i, j} \gt 0$ and there are no blocked cells between the cells $i$ and $j$.

Chef wants to choose some magnets (possibly none) and to each of these magnets, assign a piece of iron which this magnet should attract. Each piece of iron may only be attracted by at most one magnet and only if the attraction power between them is positive and there are no blocked cells between them. Find the maximum number of magnets Chef can choose.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing one integer ― the maximum number of magnets that can attract iron.

### Constraints
- $1 \le T \le 2,000$
- $1 \le N \le 10^5$
- $0 \le K \le 10^5$
- $S$ contains only characters 'I', 'M', '_', ':' and 'X'
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^6$

### Subtasks
**Subtask #1 (30 points):** there are no sheets, i.e. $S$ does not contain the character ':'

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
4 5
I::M
9 10
MIM_XII:M
```

### Example Output
```
1
2
```

### Explanation
**Example case 1**: The attraction power between the only magnet and the only piece of iron is $5+1-3-2 = 1$. Note that it decreases with distance and the number of sheets.

**Example case 2:**
The magnets in cells $1$ and $3$ can attract the piece of iron in cell $2$, since the attraction power is $10$ in both cases. They cannot attract iron in cells $6$ or $7$ because there is a wall between them.

The magnet in cell $9$ can attract the pieces of iron in cells $7$ and $6$; the attraction power is $8$ and $7$ respectively.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>