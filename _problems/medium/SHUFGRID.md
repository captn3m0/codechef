---
{"category_name":"medium","problem_code":"SHUFGRID","problem_name":"Grid Shuffle","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rumblefool","problem_tester":null,"date_added":"13-10-2019","tags":{"0":"rumblefool"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SHUFGRID","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a square grid $G$ with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$). Let's denote the element in the $i$-th row and $j$-th column by $G_{i, j}$. Initially, for each valid $i, j$, the element $G_{i, j}$ is equal to $i \cdot N+j$.

The grid is changing in steps. In one step, either one row or one column of the grid is selected uniformly randomly and then, all the elements in the selected row or column are shuffled uniformly randomly.

For a given cell in row $r$ and column $c$, find the probability that after $K$ steps, $G_{r, c}$ is equal to $r \cdot N + c$. It can be proved that this probability can be expressed as an irreducible fraction $p/q$, where $q$ is a positive integer coprime to $998,244,353$. You should compute $p \cdot q^{-1}$ modulo $998,244,353$, where $q^{-1}$ denotes the multiplicative inverse of $q$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $N$, $K$, $r$ and $c$.

### Output
For each test case, print a single line containing one integer $p \cdot q^{-1}\, \%\, 998,244,353$.

### Constraints 
- $1 \le T \le 5$
- $1 \le N, K \le 1,000$
- $1 \le r, c \le N$

### Example Input
```
2
1 2 1 1
2 1 1 1
```

### Example Output
```
1
249561089
```

### Explanation
**Example case 1:** Since there is only one row and one column, both with just one element, the grid after each step is the same as the initial grid.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>