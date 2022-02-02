---
{"category_name":"easy","problem_code":"DEMTREE","problem_name":"Maximize Walk Value","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vishal_nnd0","problem_tester":null,"date_added":"17-04-2019","tags":{"0":"vishal_nnd0"},"time":{"view_start_date":1556307900,"submit_start_date":1556307900,"visible_start_date":1556307900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>There's a tree and every one of its nodes has a cost associated with it. Some of these nodes are labelled special nodes. You are supposed to answer a few queries on this tree. In each query, a source and destination node ($SNODE$ and $DNODE$) is given along with a value $W$. For a walk between $SNODE$ and $DNODE$ to be valid you have to choose a special node and call it the pivot $P$. Now the path will be $SNODE$ ->$ P$ -> $DNODE$. For any valid path, there is a path value ($PV$) attached to it. It is defined as follows:

Select a subset of nodes(can be empty)  in the path from $SNODE$ to $P$ (both inclusive) such that sum of their costs ($CTOT_{1}$) doesn't exceed $W$.

Select a subset of nodes(can be empty) in the path from $P$ to $DNODE$ (both inclusive) such that sum of their costs ($CTOT_{2}$) doesn't exceed $W$.

Now define $PV = CTOT_{1} + CTOT_{2}$ such that the absolute difference  $x = |CTOT_{1} - CTOT_{2}|$ is as low as possible. If there are multiple pairs of subsets that give the same minimum absolute difference, the pair of subsets which maximize $PV$ should be chosen.

For each query, output the path value $PV$ minimizing $x$ as defined above. 

Note that the sum of costs of an empty subset is zero.

###Input 

- First line contains three integers $N$ - number of vertices in the tree, $NSP$ - number of special nodes in the tree and $Q$ - number of queries to answer.   
- Second line contains $N-1$ integers. If the $i$th integer is $V_i$ then there is an undirected edge between $i + 1$ and $V_i$ ($i$ starts from $1$ and goes till $N-1$).          
- Third line contains $N$ integers, the $i$th integer represents cost of the $i$th vertex.    
- Fourth line contains $NSP$ integers - these represent which nodes are the special nodes.    
- Following $Q$ lines contains three integers each - $SNODE$, $DNODE$ and $W$ for each query.

###Output

For each query output a single line containing a single integer - the path value $PV$ between $SNODE$ and $DNODE$.

###Constraints:

- $1 \leq $ Number of nodes $ \leq 1000 $     
- $ 0 \leq W \leq 1000 $     
- $ 1 \leq $ Number of special nodes $ \leq 10 $     
- $ 0 \leq $ Cost of each node $ \leq 1000 $     
- $ 1 \leq $ Number of queries $ \leq 1000 $

###Sample Input

7 1 5    
1 1 2 2 3 3      
3 5 4 2 7 9 1     
1     
2 3 100        
1 1 100      
2 1 100       
4 5 100     
4 7 100      

###Sample Output:

6    
6     
6       
20    
16       

###Explanation:

Consider query $4$. The only path is $4->2->1->2->5$. The two sets defined for this path are {${3,2,5}$} and {${3,5,7}$}. Pick subsets {${3,2,5}$} and {${3,7}$} from each set which minimizes $PV$. Note that node $2$ can repeat as it is in different paths (both to and from the pivot).