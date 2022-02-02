---
{"category_name":"easy","problem_code":"EXUND","problem_name":"Chipped Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"shashwatchandr","problem_tester":null,"date_added":"26-09-2019","tags":{"0":"expp2019","1":"shashwatchandr","2":"trees"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EXUND","time":{"view_start_date":1571142600,"submit_start_date":1571142600,"visible_start_date":1571142600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXUND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a tree with $N$ nodes, which are numbered from $1$ to $N$. It is rooted at Node $1$. We define a single $operation$ as follows :- 
- Put a chip on the root.
- Within an operation, you can "move" as many times as you like.
- A move is defined as picking a node which has a chip on it and then removing the chip from that node and placing a chip on all of its children. 

A node is covered if it has at least $1$ chip placed on it.
You can do at most $K$ operations. What is the maximum number of covered nodes that you can obtain?  

Note that there is no constraint on the amount of chips placed on any node.

###Input:

- The input contains a single integer, $T$, which denotes the number of testcases.
- The first line of each testcase will contain two integers, $N$ and $K$, denoting the number of nodes and operations allowed, respectively.
- The next $N-1$ lines contain two integers $u$ and $v$ indicating that there is an edge between nodes $u$ and $v$ in the tree.

###Output:
- The output should consist of $T$ integers printed on separate lines. The integer on the i-th line should be the maximum number of nodes which can be covered in that testcase.

###Constraints 
- $1 \leq T \leq 5$
- $2 \leq N \leq 5*10^5$
- $1 \leq K \leq N$
- Sum of $N$ over all testcases $ \leq 5*10^5$
- $1 \leq u,v \leq N$
- The given graph is a tree

###Subtasks
- 30 points : Sum of $N$ of over all testcases $ \leq 5000 $
- 70 points : Original Constraints. 

###Sample Input:
```
1
7 2
1 2
1 3
2 4
2 5
3 6
3 7
```
###Sample Output:
```
6
```
###Explanation:
You can cover nodes 4,5,6,7 in the first operation and 2,3 in the second. 
2,3 for example can be covered by placing the chip on the root and then moving it to its children. 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>