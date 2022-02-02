---
{"category_name":"easy","problem_code":"MINIKILL","problem_name":"Corruption in Freedonia","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"panik","problem_tester":null,"date_added":"21-12-2019","tags":{"0":"graphs","1":"panik"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MINIKILL","time":{"view_start_date":1578942000,"submit_start_date":1578942000,"visible_start_date":1578942000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MINIKILL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Corruption is on the rise in the country of Freedonia, Gru's home. 

This corruption network can be represented in the form of a tree having $N$ nodes and $N-1$ edges. The nodes are numbered from $1$ to $N$, and the tree is rooted at node $1$. These nodes represent the corrupt officials and each corrupt official works under some other corrupt official (except the Boss, who is represented by node $1$).

Gru believes in divide and conquer and thinks that this network needs to be divided into as many sub-networks as possible. To achieve this, the following operation can be applied by the minions any number of times (even 0):

In one operation, the minions can select any one leaf node official (that is, an official who does not have any other official beneath him) in the graph and kill him along with all his _ancestors_. This operation deletes those _nodes_, along with all of their _edges/connections_ from the graph. Hence after applying this operation on any tree, it breaks into some connected components which are also trees, which are the new sub-networks.

Now the minions are a bit lazy and will do the task someday, but they need to submit a report to Gru as soon as possible. Help the minions by finding out the **maximum** number of _connected components_ that can be achieved.

###Input:

- First line will contain $N$, number of nodes in the tree. 
- Next $N-1$ lines contains 2 integers $U$, $V$ denoting the endpoints of the $i^{th}$ edge.

###Output:

- Print the maximum number of connected components you can obtain after doing the operation any number of times.

###Constraints 
- $1 \leq N \leq 10^6$
- $1 \leq U,V \leq N$

###Sample Input:
```
7
1 2
1 3
2 4
2 5
3 6
3 7
```
###Sample Output:
```
2
```

###EXPLANATION:

We have $4$ leaf nodes in this tree: $4$ $5$ $6$ $7$. 

Suppose we delete nodes $5$, $2$, and $1$. After these deletions we are left with $2$ trees -
- One consisting of only node $4$
- One consisting of nodes $3$, $6$, and $7$

This can also be achieved by deleting any of the other leaf nodes, and it can be proven that we cannot obtain more than $2$ connected components in this example.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>