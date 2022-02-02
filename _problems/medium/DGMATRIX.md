---
{"category_name":"medium","problem_code":"DGMATRIX","problem_name":"Digit Matrix","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"29-11-2020","tags":{"0":"ad","1":"dec20","2":"ildar_adm","3":"medium","4":"shortest"},"problem_difficulty_level":"Medium-Hard","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/DGMATRIX","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DGMATRIX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC20/hindi/DGMATRIX.pdf), [Bengali](https://www.codechef.com/download/translated/DEC20/bengali/DGMATRIX.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC20/mandarin/DGMATRIX.pdf), [Russian](https://www.codechef.com/download/translated/DEC20/russian/DGMATRIX.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC20/vietnamese/DGMATRIX.pdf) as well.

You are given a matrix $A$ of non-negative integers with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$). For each valid $i$ and $j$, let's denote the element in the $i$-th row and $j$-th column by $A_{i,j}$.

You need to find a matrix $B$ with $N+1$ rows and $N+1$ columns (numbered similarly) such that:
- each element of this matrix is a digit between $0$ and $9$ (inclusive)
- $A_{i,j} = B_{i,j}+B_{i+1,j}+B_{i,j+1}+B_{i+1,j+1}$ for each valid $i,j$

The matrix $A$ is chosen in such a way that at least one solution exists. If there are multiple solutions, you may find any one of them.

### Input
- The first line of the input contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains $N$ space-separated integers $A_{i,1}, A_{i,2}, \ldots, A_{i,N}$.

### Output
Print $N+1$ lines. For each valid $i$, the $i$-th of these lines should contain $N+1$ characters $B_{i,1}, B_{i,2}, \ldots, B_{i,N+1}$.

### Constraints
- $1 \le N \le 100$
- for the matrix $A$, at least one valid matrix $B$ exists

### Subtasks
**Subtask #1 (10 points):** $N \le 5$

**Subtask #2 (90 points):** original constraints

### Example Input
```
2
12 16
24 28
```

### Example Output
```
123
456
789
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>