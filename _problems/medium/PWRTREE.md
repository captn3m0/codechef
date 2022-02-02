---
{"category_name":"medium","problem_code":"PWRTREE","problem_name":"Power Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"1-09-2018","tags":{"0":"alei","1":"constructive","2":"cook99","3":"directed","4":"easy","5":"taran_1407","6":"tree"},"editorial_url":"https://discuss.codechef.com/problems/PWRTREE","time":{"view_start_date":1540146602,"submit_start_date":1540146602,"visible_start_date":1540146602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK99/hindi/PWRTREE.pdf), [Spanish](http://www.codechef.com/download/translated/COOK99/spanish/PWRTREE.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/COOK99/mandarin/PWRTREE.pdf), [Russian](http://www.codechef.com/download/translated/COOK99/russian/PWRTREE.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK99/vietnamese/PWRTREE.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK99/bengali/PWRTREE.pdf) as well.

Ada is one of the best hairdressers in ChefLand. She invented a very cool hair style and named it "power tree".

A power tree with degree $l$ — let's denote it by $PT(l)$ — is a directed graph, which can be constructed recursively as follows:
- $PT(0)$ consists of a single node.
- For $l \gt 0$:
    - Create one node $u$ — the *root* of power tree $PT(l)$.
    - Construct all power trees with smaller degrees, i.e. $PT(0), PT(1), \dots, PT(l-1)$.
    - For each of the tree created in the previous step, add a directed edge from $u$ to its root.

Today, Ada is going to cut the hair of some customers. Of course, all of them want to have a power tree hair style!

A customer's uncut hair is represented by a directed graph with $N$ vertices (numbered $1$ through $N$) and exactly one edge between each pair of vertices. Ada should remove some edges (possibly none) from this graph in such a way that the resulting graph is a power tree. Note that she is not allowed to remove vertices!

Can you help Ada find the edges she should remove?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N \choose 2$ lines contains two space-separated integers $u$ and $v$ describing a directed edge from vertex $u$ to vertex $v$. The edges are numbered $1$ through $N \choose 2$ in this order.

### Output
For each test case:
- If it is impossible to create a power tree, print a single line containing one integer $-1$.
- Otherwise, print two lines. The first of these lines should contain a single integer $e$ denoting the number of edges to remove. The second line should contain $e$ space-separated integers denoting the numbers of the edges to remove.

If there are multiple answers, you may print any one.

### Constraints 
- $1 \le T \le 128$
- $2 \le N \le 256$
- $1 \le u, v \le N$
- there is exactly one edge between each pair of vertices

### Example Input
```
1
4
1 4
2 1
2 4
3 1
3 2
3 4
```

### Example Output
```
3
1 3 4
```
	
### Explanation
**Example case 1:** Ada should remove edges $(1, 4)$, $(2, 4)$ and $(3, 1)$. The resulting graph is a power tree with degree $l=2$.
