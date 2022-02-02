---
{"category_name":"easy","problem_code":"TREE3","problem_name":"Triple-tree decomposition","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"altruist_","problem_tester":"kingofnumbers","date_added":"20-04-2018","tags":{"0":"altruist_"},"editorial_url":"https://discuss.codechef.com/problems/TREE3","time":{"view_start_date":1524934802,"submit_start_date":1524934802,"visible_start_date":1524934802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/mandarin/TREE3.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/russian/TREE3.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/vietnamese/TREE3.pdf">Vietnamese</a> as well.</h3>

Kefaa has developed a novel decomposition of a tree. He claims that this decomposition solves many difficult problems related to trees. However, he doesn't know how to find it quickly, so he asks you to help him.

You are given a tree with $N$ vertices numbered $1$ through $N$. Let's denote an edge between vertices $u$ and $v$ by $(u, v)$. The *triple-tree decomposition* is a partition of edges of the tree into unordered triples of edges $(a, b), (a, c), (a, d)$ such that $a \neq b \neq c \neq d$. Each edge must belong to **exactly one** triple.

Help Kefaa with this problem — find a triple-tree decomposition of the given tree or determine that no such decomposition exists.
 
### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ describing an edge between vertices $u$ and $v$ of the tree.

### Output
- For each test case, print a line containing the string `"YES"` if a triple-tree decomposition of the given tree exists or `"NO"` otherwise.
- If it exists, print $\frac{N-1}{3}$ more lines describing a decomposition.
- Each of these lines should contain four space-separated integers $a$, $b$, $c$ and $d$ describing a triple of edges $(a, b), (a, c), (a, d)$.

If more than one triple-tree decomposition exists, you may output any one.

### Constraints 
- $1 \le T \le 100$
- $2 \le N \le 2 \cdot 10^5$
- $1 \le u, v \le N$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (20 points):** $2 \le N \le 10$

**Subtask #2 (30 points):** 
$2 \le N \le 5000$ and the sum of $N$ overall testcases doesn't exceed $5000$

**Subtask #3 (50 points):** original constraints

### Example Input
```
2
4
1 2
1 3
1 4
7
1 2
2 3
1 4
4 5
1 6
6 7
```

### Example Output
```
YES
1 2 3 4
NO
```
