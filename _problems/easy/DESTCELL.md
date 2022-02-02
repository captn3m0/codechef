---
{"category_name":"easy","problem_code":"DESTCELL","problem_name":"Destroy Cells","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n2 3","output":"6 4 3 3 2 1","explanation":"**Example case 1:**\n- $K = 0$: All cells will be destroyed by the heroes.\n- $K = 1$: The first hero will destroy the cells $[(1,1), (1,3), (2,2)]$, while the second one will destroy the cells $[(1,1), (1,2), (1,3)]$.\n- $K = 2$: The first hero will destroy the cells $[(1,1), (2,1)]$, while the second one will destroy the cells $[(1,1), (2,2)]$.\n- $K = 3$: The first hero will destroy the cells $[(1,1), (2,2)]$, while the second one will destroy the cells $[(1,1), (1,3)]$.\n- $K = 4$: The first hero will destroy the cells $[(1,1), (2,3)]$ and the second one will also destroy the cells $[(1,1), (2,3)]$.\n- $K = 5$ : The first hero will destroy the cell $(1,1)$ and the second one will also destroy the cell $(1,1)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"i_love_islam","problem_tester":null,"date_added":"28-08-2019","tags":{"0":"easy","1":"i_love_islam","2":"ltime75","3":"sieve","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DESTCELL","time":{"view_start_date":1567272600,"submit_start_date":1567272600,"visible_start_date":1567272600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DESTCELL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME75/hindi/DESTCELL.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME75/bengali/DESTCELL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME75/mandarin/DESTCELL.pdf), [Russian](https://www.codechef.com/download/translated/LTIME75/russian/DESTCELL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME75/vietnamese/DESTCELL.pdf) as well.

Anas is playing an amazing game on a grid with $N$ rows and $M$ columns. The rows are numbered $1$ through $N$ from top to bottom and the columns are numbered $1$ through $M$ from left to right.

Anas wants to destroy this grid. To do that, he wants to send two heroes from the top left cell to the bottom right cell:
- The first hero visits cells in row-major order: $(1,1) \rightarrow (1,2) \rightarrow \ldots \rightarrow (1,M) \rightarrow (2,1) \rightarrow (2,2) \rightarrow \ldots \rightarrow (2,M) \rightarrow \ldots \rightarrow (N,M)$.
- The second hero visits cells in column-major order: $(1,1) \rightarrow (2,1) \rightarrow \ldots \rightarrow (N,1) \rightarrow (1,2) \rightarrow (2,2) \rightarrow \ldots \rightarrow (N,2) \rightarrow \ldots \rightarrow (N,M)$.
 
We know that each hero destroys the first cell he visits, rests in the next $K$ cells he visits without destroying them, then destroys the next cell he visits, rests in the next $K$ cells, destroys the next cell, and so on until he reaches (and rests in or destroys) the last cell he visits.

Anas does not know the value of $K$. Therefore, for each value of $K$ between $0$ and $N \cdot M - 1$ inclusive, he wants to calculate the number of cells that will be destroyed by at least one hero. Can you help him?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $M$.

### Output
For each test case, print a single line containing $N \cdot M$ space-separated integers as described above.

### Constraints
- $1 \le T \le 100$
- $2 \le N, M \le 1,000$
- the sum of $N \cdot M$ over all test cases does not exceed $2 \cdot 10^6$

### Subtasks
**Subtask #1 (30 points):**
- $2 \le N, M \le 50$
- the sum of $N \cdot M$ over all test cases does not exceed $5,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
2 3
```

### Example Output
```
6 4 3 3 2 1
```

### Explanation
**Example case 1:**
- $K = 0$: All cells will be destroyed by the heroes.
- $K = 1$: The first hero will destroy the cells $[(1,1), (1,3), (2,2)]$, while the second one will destroy the cells $[(1,1), (1,2), (1,3)]$.
- $K = 2$: The first hero will destroy the cells $[(1,1), (2,1)]$, while the second one will destroy the cells $[(1,1), (2,2)]$.
- $K = 3$: The first hero will destroy the cells $[(1,1), (2,2)]$, while the second one will destroy the cells $[(1,1), (1,3)]$.
- $K = 4$: The first hero will destroy the cells $[(1,1), (2,3)]$ and the second one will also destroy the cells $[(1,1), (2,3)]$.
- $K = 5$ : The first hero will destroy the cell $(1,1)$ and the second one will also destroy the cell $(1,1)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>