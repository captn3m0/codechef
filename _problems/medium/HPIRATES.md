---
{"category_name":"medium","problem_code":"HPIRATES","problem_name":"Heap Pirates","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":null,"date_added":"1-11-2018","tags":{"0":"bciobanu","1":"constructive","2":"easy","3":"observations","4":"snckpe19","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/HPIRATES","time":{"view_start_date":1541269800,"submit_start_date":1541269800,"visible_start_date":1541269800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Russian](http://www.codechef.com/download/translated/S19PETST/russian/HPIRATES.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19PETST/vietnamese/HPIRATES.pdf), [Hindi](http://www.codechef.com/download/translated/S19PETST/hindi/HPIRATES.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S19PETST/mandarin/HPIRATES.pdf) and [Bengali](http://www.codechef.com/download/translated/S19PETST/bengali/HPIRATES.pdf) as well.

For a binary matrix with $R$ rows and $C$ columns (each cell in a binary matrix contains either $0$ or $1$), we define the *associated graph* of this matrix as follows:
- each $8$-connected component of cells containing the same value corresponds to one node of the graph
- for each pair of adjacent $8$-connected components, there is an edge between their corresponding nodes

A cell in 8-connected terminology is neighboring to another cell if they have a common side or a common corner.

You are given a graph $G$ with $N$ vertices (numbered $1$ through $N$) and $M$ edges. Construct a binary matrix such that its associated graph is isomorphic to $G$ or determine that it does not exist.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- Each of the next $M$ lines contains two space-separated integers $u$ and $v$ denoting an edge between vertices $u$ and $v$.

### Output
- If there is no solution, print a single line containing one integer $-1$.
- Otherwise:
    - Print one line containing two space-separated integers $R$ and $C$ - the number of rows and the number of columns of your matrix.
    - Then, print $R$ lines. For each $i$ ($1 \le i \le R$), the $i$-th of these lines should contain a string with length $C$ describing the $i$-th row of the matrix. Each character of this string should be either '0' or '1'.

The number of cells of your matrix must be at most $10^5$.

### Constraints
- $2 \le N \le 100$
- $1 \le u, v \le N$
- the graph does not contain any self-loops or duplicate edges

### Example Input
```
3 2
1 2
1 3
```

### Example Output
```
1 3
101
```

### Example Input
```
3 3
1 2
1 3
2 3
```

### Example Output
```
-1
```
