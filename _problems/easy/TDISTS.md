---
{"category_name":"easy","problem_code":"TDISTS","problem_name":"Tree Distances","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/O6t2L-Dlnzg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"zoooma13","problem_tester":"","date_added":"10-04-2021","tags":{"0":"cook128","1":"easy","2":"greedy","3":"trees","4":"zoooma13"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TDISTS","time":{"view_start_date":1618772404,"submit_start_date":1618772404,"visible_start_date":1618772404,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TDISTS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK128/mandarin/TDISTS.pdf), [Russian](https://www.codechef.com/download/translated/COOK128/russian/TDISTS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK128/bengali/TDISTS.pdf) as well.

A tree is defined as a connected, undirected graph with $n$ vertices and $n−1$ edges. The distance between two vertices in a tree is equal to the number of edges on the unique simple path between them.

You are given two integers $x$ and $y$. Construct a tree with the following properties:
- The number of pairs of vertices with an **even** distance between them equals $x$.
- The number of pairs of vertices with an **odd** distance between them equals $y$.

By a pair of vertices, we mean an ordered pair of two (possibly, the same or different) vertices.

### Input
The first line of the input contains a single integer $T$ denoting the number of test cases. Each test case consists of one line containing two space-separated integers $x$ and $y$.

### Output
For each test case, if there is no tree satisfying the given properties, print ``"NO"`` (without quotes).

Otherwise, on the first line print ``"YES"`` (without quotes). Then print integer $n$ denoting the number of vertices in the tree, followed by $n−1$ lines describing the edges of the tree in any order. Vertices are numbered from $1$ to $n$. If there are multiple answers, print any of them.

### Constraints
- $1 \leq T \leq 100$
- $1 \leq x,y \leq 10^9$
- $x + y \leq 10^9$

### Example Input
```
4
2 2
29 20
3 12
6 3
```

### Example Output
```
YES
2
1 2
YES
7
1 2
1 3
2 4
2 5
3 6
3 7
NO
NO
```

### Explanation
In the first test case,  the pairs $(1 ,1)$ and $(2 ,2)$ have an even distance, while the pairs $(1 ,2)$ and $(2 ,1)$ have an odd distance.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>