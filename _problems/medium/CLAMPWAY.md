---
{"category_name":"medium","problem_code":"CLAMPWAY","problem_name":"Clamp Paths on Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"demidenko","problem_tester":"","date_added":"19-06-2021","tags":{"0":"cook130","1":"demidenko","2":"eulerian","3":"fenwick","4":"medium","5":"union"},"problem_difficulty_level":"Medium-Hard","best_tag":"Fenwick Tree","editorial_url":"https://discuss.codechef.com/problems/CLAMPWAY","time":{"view_start_date":1624214702,"submit_start_date":1624214702,"visible_start_date":1624214702,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CLAMPWAY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK130/mandarin/CLAMPWAY.pdf), [Russian](https://www.codechef.com/download/translated/COOK130/russian/CLAMPWAY.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK130/vietnamese/CLAMPWAY.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK130/bengali/CLAMPWAY.pdf) as well.

You are given a tree with $N$ vertices (numbered $1$ through $N$).

A simple path between two different vertices $a$ and $b$ ($a \lt b$) is called a *clamp path* if it does not contain any vertices with numbers smaller then $a$ or greater than $b$.

Calculate the number of clamp paths in the given tree.

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $p_1, p_2, \ldots, p_N$. For each valid $i$, if $p_i \neq 0$, then there is an edge between vertices $i$ and $p_i$.

### Output
Print a single line containing one integer - the number of clamp paths.

### Constraints
- $2 \leq N \leq 2^{20}$
- $0 \leq p_i \leq N$ for each valid $i$
- there is exactly one vertex $i$ with $p_i = 0$
- the graph described on the input is a tree

### Example Input
```
7
0 5 5 1 4 1 4
```

### Example Output
```
10
```

### Explanation
The clamp paths are 1 - 4, 1 - 5, 1 - 6, 1 - 7, 2 - 5, 2 - 7, 3 - 5, 3 - 7, 4 - 5 and 4 - 7.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>