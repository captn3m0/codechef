---
{"category_name":"medium","problem_code":"DICITIES","problem_name":"Disconnecting Cities","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"10-12-2019","tags":{"0":"bitmasking","1":"dynamic","2":"gw19mos","3":"icpc2019","4":"icpcgw19","5":"jtnydv25"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/DICITIES","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DICITIES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chefland consists of $n$ cities numbered $1$, $2$, $\ldots n$. The cities numbered $1$, $2$, $\ldots k$ are special cities. For each unordered pair $i, j$, there exists a bidirectional road, destroying which has a cost of $w_{i, j}$. Find the minimum cost of destroying some subset of roads so that no two special cities have a path between them after the removal of these roads.

### Input
There are multiple independent testcases.
- First line will contain $T$, number of testcases.
- The first line of each testcase contains $n$ and $k$, the number of cities and the number of special cities respectively.
- The $j^{\text{th}}$ integer in $i^{\text{th}}$ of the next $n$ lines is $w_{ij}$.

### Output
For each testcase, output the minimum cost of destroying some subset of roads so that no two special cities have a path between them after the removal of these roads.

### Constraints 
- $1 \leq T \leq 5$
- $3 \leq n \leq 20$
- $ 3 \leq k \leq n$
- The sum of $n$ over all testcases doesn't exceed $20$.
- For all $i$, $w_{ii} = 0$
- For all $i \neq j$, $w_{ij} = w_{ji}$, $1 \leq w_{ij} \leq 10^6$

### Example Input
```
1
4 3
0 1 4 2
1 0 2 2
4 2 0 3
2 2 3 0
```

### Example Output
```
11
```

### Explanation
Remove the roads $(1, 2)$, $(1, 3)$, $(1, 4)$, $(2, 3)$, $(2, 4)$ to get a cost of $1 + 4 + 2 + 2 + 2 = 11$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>