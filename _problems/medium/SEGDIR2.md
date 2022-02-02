---
{"category_name":"medium","problem_code":"SEGDIR2","problem_name":"Direct Segments","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"deva2802","problem_tester":null,"date_added":"2-12-2019","tags":{"0":"deva2802"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1575801000,"submit_start_date":1575801000,"visible_start_date":1575801000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SEGDIR2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
$N$ line segments (numbered $1$ through $N$) are placed on the $2D$-plane. For each valid $i$, the $i$-th segment starts at $\vec{A_i} = (x_i, y_i)$ and ends at $\vec{B_i} = (X_i, Y_i)$. Line segments can move with a velocity of  magnitude 1 unit/sec along the direction of vector $(\vec{A_i} - \vec{B_i})$ or  $(\vec{B_i} - \vec{A_i})$. 

At the time $t = 0$, all segments start moving for each valid $i$. You need to assign a direction to the movement of each segment (not necessarily the same for all segments), such that there is no time from $t = 0$ to $t = 10^{10000}$ (both inclusive) when any two segments touch or intersect each other. 

Decide if it is possible to assign directions to the segments in such a way that the above condition is satisfied. 

###Input:
- The first line of input contains a single integer $T$, the number of testcases.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow,. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains four space-separated integers $x_i$, $y_i$, $X_i$, $Y_i$.

###Output:
For each test case, print a single line containing the string `"YES"` if it is possible to assign the directions in a valid way or `"NO"` if it is impossible.

###Constraints 
- $1 \leq T \leq 1000$
- $1 \leq N \leq 2000$
- Sum of $N$ over all testcases $\leq 2000$
- Absolute value of coordinates of all points $\leq 10^6$
- All input points in a single testcase are distinct

###Sample Input:
	2
	3
	0 0 0 10
	1 10 5 10
	6 0 6 10
	4
	0 0 0 10
	1 10 5 10
	6 0 6 10
	-2 -1 8 -1

###Sample Output:
	YES
	NO

	
###EXPLANATION:
<strong>Example case 1:</strong> There are two ways to assign directions to segments, one of them is:
<a href="https://s3.amazonaws.com/codechef_shared/download/ICPCKH19/SEGDIR2Example1.png">
  <img src="https://s3.amazonaws.com/codechef_shared/download/ICPCKH19/SEGDIR2Example1.png" width="300" height="400" >
</a>

<strong>Example case 2:</strong> : There is no valid way to assign directions to segments.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>