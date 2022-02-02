---
{"category_name":"easy","problem_code":"CCBTS05","problem_name":"Tree paths sum","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"","date_added":"17-01-2019","tags":{"0":"admin3"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CCBTS05","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a weighted tree with $N$ nodes, rooted at node $R$. The nodes are numbered from 1 to $N$. There are $Q$ queries of the form ($U$, $V$), and you should output the sum of the weights on all the edges on the shortest path from node $U$ to $V$.

###Input: 

- The first line contains $T -$ Number of test cases in a file.
- The first line of each test case has $3$ integers $-$ $N$ $Q$ and $R$ - denoting Number of nodes, Number of Queries and the root node respectively. 
- Next $N-1$ lines have $3$ integers each - $u$ $v$ $w$ - denoting that there is an edge between $u$ and $v$ with weight $w$.
- Next $Q$ lines contain $2$ integers - $U$ and $V$.

**Note- Input can be huge. Prefer fast IO methods.**

###Output:

For every query, print the answer on a new line.

###Constraints 

- $1 \leq T \leq 10000$
- $1 \leq N,Q \leq 10^5$
- $1 \leq R,u,v,U,V \leq N$
- $1 \leq w \leq 10^9$
- **Sum of $N$, $Q$ over all $T$ is $\leq 10^6$**

###Sample Input:
```
1
3 1 1
1 2 5
1 3 4
2 3
```
###Sample Output:
```
9
```


###Explanation:

We see that its a simple graph of $3$ nodes rooted at Node $1$ with Node $1$ connected to Node $2$ with edge of weight $5$, and to node $3$ with an edge of weight $4$. The query asks for sum of weights on the shortest path from $2$ to $3$ which is $5+4=9$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>