---
{"category_name":"medium","problem_code":"UWCOI21E","problem_name":"City Mapping 2","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kimbj0709","problem_tester":"","date_added":"12-12-2020","tags":{"0":"kimbj0709","1":"medium","2":"uwcoi21"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UWCOI21E","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UWCOI21E","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Salmon is going on holiday, and he decides to go to Silvermill after taking the advice of his good friend Peanut. Unfortunately, his computer is broken, and so he cannot Google for the map.

Silvermill is a city consisting of $N$ road junctions, numbered from $1$ to $N$, and $N-1$ roads. The city is fully connected, meaning it is possible to travel from every road junction to every other road junction using the roads in the city. The government building is also at one road junction, which is considered a special road junction. Hence, the road network forms a rooted tree with nodes are road junctions and edges as roads. In addition, there are **no more than three roads connected to each junction** in the city.

Salmon needs to obtain a map of Silvermill. It suffices to find the parent of each node in the tree. If the node is the root, then its parent is -1.

To find the map of the city, he has hired a cartographer who can answer the following question: “what is the lowest common ancestor of nodes $X$ and $Y$?” The cartographer answers this question at most $Q$ times before quitting his job.

Help Salmon! Using at most $Q$ queries to the lowest common ancestor of two nodes, recover the tree!

### Interaction format

- The first line of input will contain $T$, number of testcases. Then the testcases follow.

- For each testcase, the input contains one line containing $N$, the number of nodes in the tree, and $Q$, the maximum number of queries you are allowed to ask.

- To query the lowest common ancestor of a pair of nodes $(x,y)$, output ? x y. This uses up one query. If either of the two nodes is out of the range $[1, N]$ or you have exceeded the query limit $Q$, the judge replies -1 exiting with a wrong answer verdict and you should terminate your program immediately. Otherwise, the judge outputs the LCA of the two nodes.

- When you have the answer, output !  followed by $N$ space-separated integers. The $i$-th integer should be the parent of node $i$ in the tree (-1 if $i$ is the root). Note that this is not counted as a query. If the parent values are correct, the judge outputs a single integer, $1$ and you should process the next testcase(if any). Otherwise, the judge outputs $-1$ and returns with a wrong answer verdict. In this case, you should terminate your program immediately.

### Constraints

- $T = 5$
- $1 \leq N \leq 1000$
- $1 \leq Q \leq 25000$
- For each query, the two nodes you query should be in the range $[1,N]$.
- For each answer, all the parent values should be in the range $[1,N]$ or equal to -1.
- There are at most three roads connected to each junction.
- The grader is not adaptive.

### Subtasks
- Subtask 1 [15 points] : $1 \leq N \leq 100, Q = 5000$
- Subtask 2 [25 points]: $Q = 25000$. Each junction has at most **two** roads connected to it.
- Subtask 3 [60 points]: $Q = 25000$.

### Sample Interaction:

Below is an example in which there are two testcases both with $N = 3$. In the first testcase, node $1$ is the root and nodes $2$  and $3$ are its children. In the second testcase, node $2$ is the root. The parent of node $1$ is node $2$ and that of node $3$ is node $1$.

```
You             Judge
                2          // T
                3 4        //  N, Q for the first testcase
? 1 2
                1          // LCA(1, 2) = 1
? 2 3
                1          // LCA(2, 3) = 1
! -1 1 1
                1          // Judge replies that your answer
                           // is correct
                
                3 3        //  N, Q for the second testcase
? 1 2
                2          // LCA(1, 2) = 2
? 2 3
                2          // LCA(2, 3) = 2
? 3 1
                1          // LCA(3, 1) = 1
! 2 -1 1
                1          // Judge replies that your answer
                           // is correct
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>