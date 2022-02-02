---
{"category_name":"easy","problem_code":"EAREA","problem_name":"Expected Area","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"12-12-2019","tags":{"0":"easy","1":"expected","2":"geometry","3":"gw19mos","4":"icpc2019","5":"icpcgw19","6":"jtnydv25"},"problem_difficulty_level":"Easy","best_tag":"Expected Value","editorial_url":"https://discuss.codechef.com/problems/EAREA","time":{"view_start_date":1576781100,"submit_start_date":1576781100,"visible_start_date":1576781100,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EAREA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a convex polygon $P$ with vertices $P_0, P_1, \ldots, P_{n-1}$, each having integer coordinates. On each edge $P_{i} P_{(i+1) \% n}$ of the polygon, choose a point $R_i$ uniformly at random. What is the expected area of the convex hull of these $n$ chosen points $R_0, R_1, \ldots R_{n-1}$ ?

###Note
- Consider the area of the convex hull as zero if it contains less than 3 vertices.
- All the points $R_i$ are chosen independently of each other.
- Your answer is considered correct if and only if its absolute or relative error doesn't exceed $10^{-6}$.


### Input
- The first line contains $n$, the number of vertices in the convex polygon.
- The next $n$ lines contain the coordinates of the vertices of the polygon in anti-clockwise order. 

### Output
For each testcase, print the expected area of the convex hull of the $n$ randomly chosen points.

### Constraints 
- $3 \leq n \leq 10^5$
- The absolute values of all the coordinates $\leq 10^7$.
- All the points in the input are distinct.
- The described polygon $P$ is convex and the vertices of the polygon are given in anti-clockwise order. Also, no three vertices of the polygon are collinear.

### Example Input
```
3
0 0
1 0
0 1
```

### Example Output
```
0.1250000000
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>