---
{"category_name":"easy","problem_code":"MIRTREE","problem_name":"Weirwood Trees","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aashu_k","problem_tester":null,"date_added":"4-04-2019","tags":{"0":"aashu_k"},"time":{"view_start_date":1554669000,"submit_start_date":1554669000,"visible_start_date":1554669000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Given a Complete Binary Tree of ‘n’ depth, you can perform 4 types of mirror operation on the tree:-   
Mirror on the right. The tree is mirrored to the right and rightmost node on every level is connected with the mirrored corresponding node.   
Mirror on the left. The tree is mirrored to the left and leftmost node on every level is connected with the mirrored corresponding node.    
Mirror on the top. The tree is mirrored to the top and topmost nodes are connected with corresponding nodes.    
Mirror on the bottom. The tree is mirrored to the bottom and bottom most nodes are connected with the corresponding nodes.    
See the image for details.   

Mirror Right:  

<img src="https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/ALKH2019/MIRTREE/Mirror%20Right.jpg" alt="Mirror Left" width="400"/>

Mirror Bottom:   

<img src="https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/ALKH2019/MIRTREE/Mirror%20Bottom.jpg" alt="Mirror Bottom" width="400"/>
  
You are given ‘q’ queries, each performing this type of operation or asking for the no of edges in the produced graph.   
Queries are of the form “1 x” or “2” where x is 1 for right, 2 for left, 3 for top or 4 for bottom.    
1 x:  Perform x operation on the result graph.    
2:     Print the no of edges in the graph. Since it can be very large, print it modulo 1000000007.   

###Input:

- First line will contain $n$, the depth of the initial tree and $q$, the number of queries.    
-  Next $q$ lines contain queries of the form "1 $x$" or "2".

###Output:
For each query of type "2", output a single line containing the no of edges in the graph modulo 1000000007.


###Constraints 
- $1 \leq n \leq 1000$
- $1 \leq q \leq 10^5$
- $1 \leq x \leq 4$

###Sample Input:
	2 3
	1 1
	1 4
	2


###Sample Output:
	38
	
###EXPLANATION:
Initial no of edges = 6   
After the operation 1 1, no of edges = 15   
After the operation 1 4, no of edges = 38   
At operation 2, we print the no of edges that is 38.   
