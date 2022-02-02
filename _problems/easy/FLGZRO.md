---
{"category_name":"easy","problem_code":"FLGZRO","problem_name":"Falling Zero","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/oPYoK1EEOVQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"mexomerf","problem_tester":"","date_added":"8-05-2021","tags":{"0":"cook129","1":"dsu","2":"easy","3":"mexomerf"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dsu On Tree","editorial_url":"https://discuss.codechef.com/problems/FLGZRO","time":{"view_start_date":1621794602,"submit_start_date":1621794602,"visible_start_date":1621794602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FLGZRO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK129/mandarin/FLGZRO.pdf), [Russian](https://www.codechef.com/download/translated/COOK129/russian/FLGZRO.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK129/vietnamese/FLGZRO.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK129/bengali/FLGZRO.pdf) as well.

You are given a tree of $N$ nodes rooted at node $1$. Each node $u$ initially has a positive value $a_u$ associated with it.

You randomly choose one node in the tree and change its value to zero. If any node $u$ has a value equal to $0$, a random node $v$ will be chosen in the subtree of $u$ ($u \neq v$), and the values $a_u$ and $a_v$ will be swapped, hence the value of the node $v$ will become zero and the process will continue until the zero is on a leaf node. At this point, we will call the tree a final tree.

**Note**: there is exactly one node with a value equal to zero in a final tree and that node is a leaf node.

Your task is to tell how many different final trees are possible. Two final trees are different if there exists at least one node $u$, such that the value of the node $u$ in one final tree differs from the value of the node $u$ in the other final tree. Since the answer can be large, print it modulo $10^9 +7$.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- The first line of each test case contains an integer $N$, the number of nodes.
- Each of the next $N-1$ lines contains two integers $u$ and $v$, denoting that there is an undirected edge between the node $u$ and the node $v$.
- The next line contains $N$ integers $a_1,\ldots, a_N$.

###Output
For each test case, output on a new line, number of different final trees possible, modulo $10^9+7$.

###Constraints 
- $1 \leq T \leq 10^5$
- $1 \leq N \leq 10^5$
- $1 \leq u, v \leq N$
- $1\le a_i\le 10^9$
- The edges form a tree structure.
- The sum of $N$ over all test cases does not exceed $10^6$.

###Sample Input
```
3
1
1
4
1 2
2 3
2 4
1 1 1 2
7
1 2
1 3
2 4
2 5
3 6
3 7
1 2 3 4 1 2 1
```


###Sample Output
```
1
4
14
```
	
###Explanation
- For the first test case, the only possible final tree is when node $1$ is chosen and its value becomes 0.
- For the second test case, the four possible final trees are:
    - [ 1, 1, 1, 0 ]
    - [ 1, 1, 0, 2 ]
    - [ 1, 2, 1, 0 ]
    - [ 2, 1, 1, 0 ]

    ( The $i$-th number in the array denotes the value of node $i$ in the final tree).


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>