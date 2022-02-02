---
{"category_name":"medium","problem_code":"EXUNF","problem_name":"Dipole Moment","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"shashwatchandr","problem_tester":null,"date_added":"25-09-2019","tags":{"0":"expp2019","1":"medium","2":"medium","3":"shashwatchandr","4":"trees"},"problem_difficulty_level":"Medium","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/EXUNF","time":{"view_start_date":1571142600,"submit_start_date":1571142600,"visible_start_date":1571142600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXUNF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a tree with $N$ nodes, numbered from $1$ to $N$. It is  rooted at node $1$.

We call the simple path between node $A$ and node $B$ to be vertical if node $A$ lies on the path from the root to $B$ or node $B$ lies on the path from the root to $A$. In other words, [LCA](https://en.wikipedia.org/wiki/Lowest_common_ancestor) ($A,B$) must be $A$ or $B$.  And in such cases, we define a node $A$ to lie **above** node $B$ in the tree if distance to $A$ from the root is less than the distance from the root to $B$. Otherwise we define it to lie **below** $B$.

You also have with you $1$ Proton and $E$ Electrons (together called as particles) .  And you need to place these in some nodes of the tree.

Suppose we fix the proton to be at some node $A$. We then call a placement of electrons **valid** if the following conditions are met  :-

- Each node can have at most one particle in it. Also, every particle should be placed in some node.
- Electrons can only be placed in nodes from which the simple path to $A$ is **vertical** (that is, they should either be above $A$, or below $A$).
- At least $X_A$ nodes **above** $A$ should contain an electron and at least $Y_A$ nodes **below** $A$ should contain an electron. 

The Dipole moment for a **valid placement** of electrons is calculated as follows :- 

- Consider the sum of distances from $A$ to nodes which contain an electron and lie **above** $A$. Let this sum be $S_1$.
- Similarly, consider the sum of distances from $A$ to nodes which contain an electron and lie **below** $A$. Let this sum be $S_2$.
- The Dipole Moment is then defined as |$S_1-S_2+Z_A$|, here $Z_A$ is the positive charge if the proton is placed at $A$. Here, |$X$| refers to the absolute value of $X$.


For every $A$ ($1 \leq A \leq N$) print the minimum dipole moment you can achieve among all valid placement in which the node $A$ contains the proton. 

In case there is no valid placement for a particular node $A$, print $-1$ for that.

Note that the distance between two nodes is the number of edges in the simple path between them.
 
###Input:
 
- The first line contains a single integer, $T$, which denotes the number of testcases.
- The first line of each testcase will contain two integers, $N$ and $E$, which denote the number of nodes and number of electrons respectively. 
- The next $N-1$ lines contain two integers $u$ and $v$ denoting that there’s an edge between $u$ and $v$ in the tree.
- The i-th of the next $N$ lines contain 3 space separated integers ,  $X_i,Y_i,Z_i$ 

 
###Output:
- Output $T$ lines, where each line should be containing $N$ space-separated integers, the $A^{th}$ integer should be the minimum dipole moment if the proton is placed at node $A$ , or -1 if there is no valid placement. 
  
###Constraints
- $1 \leq T \leq 5$
- $2 \leq N \leq 2*10^5$
- $1 \leq u,v \leq N$
- Sum of $N$ over all testcases $\leq 4*10^5$
- $1 \leq E \leq N-1$
- $ 0 \leq |Z_i|  \leq 10^6$
- $ 0 \leq X_i,Y_i  <  N$
- $ 0 \leq X_i+Y_i  \leq  E$
-  $X_A \leq $ number of nodes **above**  $A$, for all $A$. 
- $Y_A \leq $ number of nodes **below** $A$, for all $A$. 


###Subtasks
- 15 points : sum of $N$ over all testcases $ \leq 300$
- 25 points : sum of $N$ over all testcases $ \leq 3000$
- 60 points : Original Constraints. 
  
###Sample Input:
```
1
13 2
1 2
2 3
2 4
2 5
4 6
4 7
1 8
8 9
8 10
8 12
10 11
1 13
0 1 5
0 0 0
1 0 4
2 0 -3
1 0 -8
2 0 -6
2 0 3
0 2 0
1 0 -4
2 0 7
0 0 2
0 0 10
1 0 -2
```

###Sample Output:
```
0 0 7 0 5 1 6 2 1 10 5 13 -1
```

###Explanation:
With the proton fixed at node $1$, we can achieve a dipole moment of $0$ by placing the electrons at nodes $2$ and $12$ for instance.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>