---
{"category_name":"easy","problem_code":"PRMPRT","problem_name":"B - Prime-partite Graph","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"msi_cse_buet","problem_tester":null,"date_added":"5-12-2019","tags":{"0":"msi_cse_buet"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1578249000,"submit_start_date":1578249000,"visible_start_date":1578249000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PRMPRT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
We have a graph with $N$ nodes (numbered $1$ through $N$). For each valid $u$ and $v$, there is an undirected edge between nodes $u$ and $v$ if $v$ is a prime divisor of $u$ or $u$ is a prime divisor of $v$.

You should answer $Q$ queries. In each query, you should find the length of the shortest path between two given nodes $a$ and $b$ or determine that there is no path between them.

**Note**: Because of large I/O, please use fast I/O methods.

### Input
- The first line of the input contains a single integer $N$.
- The second line contains a single integer $Q$.
- Each of the next $Q$ lines contains two space-separated integers $a$ and $b$ describing a query.

### Output
For each query, print a single line containing one integer - the distance between the nodes or $-1$ if the nodes are not connected.

### Constraints 
- $1 \le N, Q \le 10^6$
- $2 \le a, b \le N$

### Example Input
```
20
3
2 3
2 6
2 9
```

### Example Output
```
2
1
3
```

### Explanation
For $a = 2$ and $b = 9$, one possible shortest path is $2 \rightarrow 6 \rightarrow 3 \rightarrow 9$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>