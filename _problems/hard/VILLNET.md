---
{"category_name":"hard","problem_code":"VILLNET","problem_name":"Village Road Network","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n7 5 7 5\r\n1 1 -1 1\r\n3 7 5 9\r\n113 167 361765 170831\r\n24844359 74532371 14673633991 3057007029","output":"0\r\n1\r\n6\r\n78\r\n278031","explanation":"In the first test case, the start and end village co-ordinates are both $(7,5)$, so the cost is 0.\r\n\r\nIn the second test case:  \r\nFrom $(1,1)$ go West to $(-1,1)$ in one step. So the cost is 1.  \r\nNote that the South road from $(1,1)$ also goes to $(-1,1)$.\r\n\r\nIn the third test case:  \r\nFrom $(3,7)$ go South to $(3,1)$.  \r\nFrom $(3,1)$ go West to $(1,1)$.  \r\nFrom $(1,1)$ go West to $(-1,1)$.  \r\nFrom $(-1,1)$ go West to $(-3,1)$.  \r\nFrom $(-3,1)$ go West to $(-5,1)$.  \r\nFrom $(-5,1)$ go North to $(5,9)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"john_smith_3","problem_tester":"","date_added":"29-09-2020","tags":{"0":"binary","1":"hard","2":"john_smith_3","3":"lowest","4":"oct20"},"problem_difficulty_level":"Hard","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/VILLNET","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=VILLNET","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT20/hindi/VILLNET.pdf), [Bengali](https://www.codechef.com/download/translated/OCT20/bengali/VILLNET.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT20/mandarin/VILLNET.pdf), [Russian](https://www.codechef.com/download/translated/OCT20/russian/VILLNET.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT20/vietnamese/VILLNET.pdf) as well.

In the nation of Chefland there are villages at co-ordinates $(x,y)$ whenever $x$ and $y$ are non-zero odd co-prime integers. $x$ can be either positive or negative, but $y$ is always positive.

In each village $(x,y)$ there is a crossroads, with the roads marked North, South, East, West.

Road East leads to $(x+2y, y)$.  
Road West leads to $(x-2y, y)$.  
Road North leads to either $(x, y+2x)$ or $(-x, -(y+2x))$,  chosen so that the new $y$ co-ordinate is positive.  
Road South leads to either $(x, y-2x)$ or $(-x, -(y-2x))$, chosen so that the new $y$ co-ordinate is positive.  

Some citizens of Chefland prefer these equivalent definitions for the North and South roads:  
Road North leads to $\left\{ \begin{array} {ll} (x,y+2x) & \quad {\tt when}\ y+2x > 0 \\ (-x,-(y+2x)) & \quad {\tt when}\  y+2x < 0\end{array} \right.$  

Road South leads to $\left\{ \begin{array} {ll} (x,y-2x) & \quad {\tt when}\ y-2x > 0 \\ (-x,-(y-2x)) & \quad {\tt when}\  y-2x < 0\end{array} \right.$ 

The cost to travel a road between two adjacent villages is 1 pound.
Determine the minimum cost to travel between villages at $(x_1,y_1)$ and $(x_2,y_2)$. 

Notes:
- The road network is defined so that the villages form an undirected graph.
- There are two roads joining $(-1,1)$ and $(1,1)$, but otherwise there is a single road between any adjacent pair of villages.
- The road network does not form a simple grid - that would be too easy!

###Input:

- First line will contain $T$, the number of testcases. Then the testcases follow. 
- Each testcase contains a single line of input, which has four integers $x_1, y_1, x_2, y_2$. 

###Output:
For each testcase, output in a single line, the answer. That is, the minimum cost in pounds to travel from $(x_1,y_1)$ to $(x_2, y_2)$.

###Constraints 
- $T \le 1000$  

The co-ordinates $(x_1,y_1)$ and $(x_2,y_2)$ of the villages satisfy
- $-10^{15} < x_1,x_2 < 10^{15}$ and
- $0 < y_1,y_2 < 10^{15}$

###Subtasks
- 10 points : $-10 < x_1,x_2 < 10$ and $0 < y_1,y_2 < 10$ 
- 10 points : original constraints, but the villages are selected so that the minimum cost for each testcase is $ < 6$
- 30 points: $-10^6 < x_1,x_2 < 10^6$ and $0 < y_1,y_2 < 10^6$
- 50 points: original constraints

###Sample Input:
```
5
7 5 7 5
1 1 -1 1
3 7 5 9
113 167 361765 170831
24844359 74532371 14673633991 3057007029
```

###Sample Output:
```
0
1
6
78
278031
```
	
###Explanation:
In the first test case, the start and end village co-ordinates are both $(7,5)$, so the cost is 0.

In the second test case:  
From $(1,1)$ go West to $(-1,1)$ in one step. So the cost is 1.  
Note that the South road from $(1,1)$ also goes to $(-1,1)$.

In the third test case:  
From $(3,7)$ go South to $(3,1)$.  
From $(3,1)$ go West to $(1,1)$.  
From $(1,1)$ go West to $(-1,1)$.  
From $(-1,1)$ go West to $(-3,1)$.  
From $(-3,1)$ go West to $(-5,1)$.  
From $(-5,1)$ go North to $(5,9)$.  

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>