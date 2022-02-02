---
{"category_name":"easy","problem_code":"KTREE","problem_name":"Morosoph Todd","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nishitsharma03","problem_tester":"","date_added":"13-10-2020","tags":{"0":"bitwise","1":"depth","2":"easy","3":"infy20","4":"nishitsharma03"},"problem_difficulty_level":"Easy-Medium","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/KTREE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KTREE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
_"Say my Name"_.

Todd Alquist is being taught the process of cooking methamphetamine, but to see whether he's really capable of learning it, Walt gives him a problem to solve. Since he can't solve it, he asks you for help.

You are given a tree with $N$ vertices (numbered $1$ through $N$), rooted at the vertex $1$. There is an integer written at each vertex; for each valid $i$, the value of vertex $i$ is $A$<sub>$i$</sub>.There also exists a _special_ integer $K$. 

Choose any leaf node, denoted by $X$, and go down a simple path from $root$ to $X$.
 
Let $S$ denote the set of all nodes lying on the simple path from $root$ to $X$.
 
For all $ i $ $\epsilon $ $ S $, choose an integer $D$ $\epsilon$ $[2^{A[i]-1},2^{A[i]})$.    
Informally, for every node $i$ lying on the simple path from $root$ to $X$, you have to choose an integer $D$ such that  $2^{A[i]-1}\leq D \lt 2^{A[i]}$.  

You now have to perform one of the two following operations :   
  1. Bitwise **XOR** of all chosen integers.  
  2. Bitwise **AND** of all chosen integers.   

You have to determine whether you can choose the values in such a way that after performing one of the given operations you can get an integer equal to $K$.  

- **Note** : A leaf is a node of the tree without any child nodes.

Determine if it is possible to obtain the value $K$ by performing the given operations.


###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- First line of each testcase contains two space separated integers $N, K$ denoting the number of nodes and the value of the special integer .
- $N-1$ lines follow , each line contains two space separated integers $u,v$ denoting an edge between $u$ and $v$. 
- A single line follows containing $N$ space separated integers denoting the value of nodes.

###Output:
For each testcase, output in a single line "YES"(without quotes) or "NO"(without quotes).

###Constraints 
- $1 \leq T \leq 10000$
- $2 \leq N \leq 5*10^5$
- $1 \leq K \leq 10^{18}$
- $1 \leq u,v \leq N$
- $ 1\leq A[i] \leq 64$
- Sum of $N$ over all test cases does not exceed 1e6.
###Sample Input:
    1
    6 85
    1 2
    2 3
    2 4
    4 5
    3 6
    3 5 4 7 1 9

###Sample Output:
	YES
	
###EXPLANATION:
There are two leaf nodes, 5 and 6
considering path from root to 5
we have nodes
1->2->4->5
we can select the values
5,26,75,1 and perform operation 1 that is XOR of all numbers to get 85

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>