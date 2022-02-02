---
{"category_name":"medium","problem_code":"TRGAME","problem_name":"Game on Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"10-12-2019","tags":{"0":"game","1":"gw19mos","2":"icpc2019","3":"icpcgw19","4":"jtnydv25","5":"math","6":"medium"},"problem_difficulty_level":"Medium","best_tag":"Game Theory","editorial_url":"https://discuss.codechef.com/problems/TRGAME","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRGAME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a tree with $n$ vertices numbered $1, 2, \ldots, n$. There are two players Alice and Bob who play a game on this tree, taking turns alternatively.  Alice starts.

In their turn a participant has to remove a leaf (and the edge adjacent to it) from the tree. A leaf is a node with degree $1$. Please note, that the tree changes with the game progressing, and a node which is not a leaf in the beginning can become a leaf later and become eligible to be removed.

Alice likes the vertex $x$ and wants it be the last node remaining. Bob hates node $x$ and doesn't want it to be the last node remaining.

For all the choices of vertex $x$, find who wins assuming both play optimally.

### Input
There are multiple independent testcases.
- The first line contains $T$, the number of testcases.
- The first line of each testcase contains a single interger $n$, the number of vertices.
- Each of the next $n - 1$ lines contains two integers denoting the endpoints of an edge. Each edge is present only once.

### Output
For each testcase, print a string of length $n$ on a new line. The $i^{\text{th}}$ character in this string should be $1$ if Alice wins the game for $x=i$, and $0$ if Bob wins.

### Constraints 
- $1 \le T \le 10^5$
- $2 \le n \le 10^5 $
- The sum of $n$ over all testcases doesn't exceed $10^5$.

### Example Input
```
2
2
1 2
5
1 2
1 3
3 4
3 5
```

### Example Output
```
11
00000
```
	
### Explanation
In the first testcase. If $x = 1$, Alice removes node $2$ and wins. If $x = 2$, Alice removes node $1$ and wins.

In the second testcase, consider $x=1$. If Alice removes node $2$, Bob can remove node $1$ in his turn and win. If Alice removes node $4$, Bob then removes node $2$. Then in her turn, Alice can only remove node $5$ leaving two nodes $1$ and $3$. Bob can now remove node $1$ and win. The game proceeds similarly if Alice removes node $5$ first. So, Bob wins the game.
One can see that for other choices of $x$ as well, Bob wins.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>