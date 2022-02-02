---
{"category_name":"medium","problem_code":"DDIMMST","problem_name":"D-Dimensional MST","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2 2  \r\n1 1  \r\n2 2","output":2,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"28-09-2020","tags":{"0":"ildar_adm","1":"minimum","2":"oct20"},"problem_difficulty_level":"Medium","best_tag":"Minimum Spanning Tree","editorial_url":"https://discuss.codechef.com/problems/DDIMMST","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DDIMMST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT20/hindi/DDIMMST.pdf), [Bengali](https://www.codechef.com/download/translated/OCT20/bengali/DDIMMST.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT20/mandarin/DDIMMST.pdf), [Russian](https://www.codechef.com/download/translated/OCT20/russian/DDIMMST.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT20/vietnamese/DDIMMST.pdf) as well.

You are given $N$ points in $D$-dimensional space. The $i^{th}$ point has $D$ coordinates - $x_{i, 1}, x_{i, 2}, \ldots, x_{i, D}$.

Consider a weighted undirected complete graph with these $N$ points as its vertices. Weight of the edge between points $i$ and $j$ is $|x_{i,1} - x_{j, 1}| + |x_{i,2} - x_{j, 2}| + \ldots + |x_{i, D} - x_{j,D}|$.

Find the weight of the [maximum spanning tree](https://mathworld.wolfram.com/MaximumSpanningTree.html) of this graph.

###Input:

- The first line contains two integers $N, D$.
- The $i$-th of the next $N$ lines contains a description of the $i$-th point. It has $D$ integers: $x_{i, 1}, x_{i, 2}, \ldots, x_{i,D}$.

###Output:
Output a single line which contains a single integer - the Maximum Spanning Tree Weight

###Constraints 
- $1 \leq D \leq 5$
- $1 \leq N \leq 200\,000$
- $0 \leq x_{i, j} \leq 100\,000$

###Subtasks
- 10 points, $N \leq 5000$

- 90 points, $N \leq 200\,000$


###Sample Input:
```
2 2  
1 1  
2 2  
```

###Sample Output:
```
2
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>