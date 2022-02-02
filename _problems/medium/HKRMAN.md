---
{"category_name":"medium","problem_code":"HKRMAN","problem_name":"Hackerman","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n\t10 3 3\r\n\t7 4\r\n\t7 8\r\n\t4 10\r\n\t10 2 5\r\n\t1 3\r\n\t4 1\r\n\t4 3\r\n\t4 5\r\n\t7 3\r\n\t10 2 4\r\n\t1 3\r\n\t2 2\r\n\t2 4\r\n\t4 3","output":"Yes\r\n\t0 1 1\r\n\tYes\r\n\t0 1 1 1 0\r\n\tNo","explanation":"**Note:** In the images below, the coordinates are given on a 2D plane, with (0, 0) being the bottom left corner\r\n\r\n**Test Case 1:**\r\nThe image below shows the positions of the lasers denoted by red dots.\r\n\r\n\u003Cimg src=\u0022https://s3.amazonaws.com/codechef_shared/download/Images/LTIME95/HKRMAN/HKRMAN_1.png\u0022\u003E\r\n\r\nNow this second image shows the orientations of the lasers (satisfying the conditions). Black dots represent the positions lit by the laser (positions with red dots are also lit and represents that it is the centre of a laser)\r\n\r\n\u003Cimg src=\u0022https://s3.amazonaws.com/codechef_shared/download/Images/LTIME95/HKRMAN/HKRMAN_2.png\u0022\u003E\r\n\r\n**Test Case 2:**\r\nThe image below shows the positions of the lasers denoted by red dots.\r\n\r\n\u003Cimg src=\u0022https://s3.amazonaws.com/codechef_shared/download/Images/LTIME95/HKRMAN/HKRMAN_3.png\u0022\u003E\r\n\r\nNow this second image shows the orientations of the lasers (satisfying the conditions). Black dots represent the positions lit by the laser (positions with red dots are also lit and represents that it is the centre of a laser)\r\n\r\n\u003Cimg src=\u0022https://s3.amazonaws.com/codechef_shared/download/Images/LTIME95/HKRMAN/HKRMAN_4.png\u0022\u003E\r\n\r\n**Test Case 3:**\r\nThere is no possible combination of orientations satisfying all the conditions, therefore the answer is \u0022No\u0022\r\n\r\n\u003Cimg src=\u0022https://s3.amazonaws.com/codechef_shared/download/Images/LTIME95/HKRMAN/HKRMAN_5.png\u0022\u003E","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"zankanotachi","problem_tester":"","date_added":"18-04-2021","tags":{"0":2,"1":"disjoint","2":"ltime95","3":"medium","4":"sliding","5":"zankanotachi"},"problem_difficulty_level":"Medium","best_tag":"Sliding Window","editorial_url":"https://discuss.codechef.com/problems/HKRMAN","time":{"view_start_date":1619802000,"submit_start_date":1619802000,"visible_start_date":1619802000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HKRMAN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Hacker-man's crew is trying to get into Swiss bank's locker, but in order to do so, hacker-man has to bypass a really tough laser lock.

He can see a square matrix with $N$ rows and $N$ columns. Inside it, he sees $K$ lasers in fixed coordinates. Each laser can be oriented vertically or horizontally, but not both. If placed horizontally, a laser will light up all cells in its row with distance at most $d$ from the laser's cell. If placed vertically, it will light up all cells in its column with distance at most $d$ from the laser's cell. A laser always lights up its own cell, so the number of cells it will light up is always $2d+1$ (including the ones lit outside the matrix).

Hacker-man can choose the orientation (horizontal or vertical) of each laser.

In order to bypass the lock, the lasers should be in such a configuration that no cell in the matrix is lit up by more than one laser. You should find one such configuration, or report that it is impossible.

###Input
- The first line contains $T$, the number of test cases. Then the test cases follow. 
- For every test case:
	- The first line contains three space-separated integers, $N$, $d$, and $K$, where $N$ is the length of one side of the square matrix, $d$ is the maximum reach of a laser, and $K$ is the number of lasers.
	- Each of the next $K$ lines contains two space-separated integers $x_i$ and $y_i$ denoting the coordinates of the $i$-th laser, where $x_i$ is the distance from the left edge and $y_i$ is the distance from the bottom edge.

**Note:** No two lasers are at the same coordinates

###Output
For each test case, print "Yes" or "No" (without quotes) depending on whether a configuration as described in the question is possible or not. If a configuration is possible, then in the next line print $K$ space-separated integers representing the orientations of the $K$ lasers respectively ($0$ for vertical and $1$ for horizontal)

**Case is sensitive. For example, "yEs" and "NO" are incorrect.**

###Constraints 
- $1 \leq N \leq 10^5$
- $1 \leq d \leq 10^5$
- $1 \leq x_i, y_i \leq N$
###Subtasks

**Subtask #1 (25 points):**
- $1 \leq T \leq 10$
- $1 \leq K \leq 10^3$  

**Subtask #2 (40 points):**
- $1 \leq T \leq 30$
- $1 \leq K \leq 3\cdot 10^4$
- The sum of $K$ over all test cases does not exceed $3\cdot 10^4$  

**Subtask #3 (35 points):**
- $1 \leq T \leq 100$
- $1 \leq K \leq 3\cdot 10^5$
- The sum of $K$ over all test cases does not exceed $3\cdot 10^5$  

###Sample Input
	3
	10 3 3
	7 4
	7 8
	4 10
	10 2 5
	1 3
	4 1
	4 3
	4 5
	7 3
	10 2 4
	1 3
	2 2
	2 4
	4 3

###Sample Output
	Yes
	0 1 1
	Yes
	0 1 1 1 0
	No

###Explanation
**Note:** In the images below, the coordinates are given on a 2D plane, with (0, 0) being the bottom left corner

**Test Case 1:**
The image below shows the positions of the lasers denoted by red dots.

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/LTIME95/HKRMAN/HKRMAN_1.png">

Now this second image shows the orientations of the lasers (satisfying the conditions). Black dots represent the positions lit by the laser (positions with red dots are also lit and represents that it is the centre of a laser)

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/LTIME95/HKRMAN/HKRMAN_2.png">

**Test Case 2:**
The image below shows the positions of the lasers denoted by red dots.

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/LTIME95/HKRMAN/HKRMAN_3.png">

Now this second image shows the orientations of the lasers (satisfying the conditions). Black dots represent the positions lit by the laser (positions with red dots are also lit and represents that it is the centre of a laser)

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/LTIME95/HKRMAN/HKRMAN_4.png">

**Test Case 3:**
There is no possible combination of orientations satisfying all the conditions, therefore the answer is "No"

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/LTIME95/HKRMAN/HKRMAN_5.png">

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>