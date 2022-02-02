---
{"category_name":"school","problem_code":"BILLRD","problem_name":"Point Of Impact","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5 5 4 4\r\n5 2 3 1","output":"5 5\r\n3 5","explanation":"- **Sample Case $1$ :**     \r\n\r\nWe are given a $5$ by $5$ board. We shoot the ball from coordinates $(4,4)$, and we need to find its coordinates after it has collided with sides $5$ times. However, after shooting, the ball goes directly to the corner $(5,5)$, and stops there. So we report the coordinates $(5,5)$.\r\n\r\n![fig1](https://codechef_shared.s3.amazonaws.com/download/Images/JAN21/BILLRD/BILLRD_1.png =400x396)\r\n\r\n- **Sample Case $2$ :**    \r\n\r\nWe are given a $5$ by $5$ board. We shoot the ball from the coordinates $(3,1)$, and we need to find its coordinates after it has collided with the sides twice. After shooting, it first hits the right side at $(5,3)$, and then the top side at $(3,5)$. So, we report $(3,5)$.\r\n\r\n![fig1](https://codechef_shared.s3.amazonaws.com/download/Images/JAN21/BILLRD/BILLRD_2.png =450x378)","isDeleted":false}}},"video_editorial_url":"https://youtu.be/bUb3fItMfAg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"31-12-2020","tags":{"0":"ad","1":"daanish_adm","2":"jan21","3":"simple"},"problem_difficulty_level":"Simple","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/BILLRD","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BILLRD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/BILLRD.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/BILLRD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/BILLRD.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/BILLRD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/BILLRD.pdf) as well.

You are playing a Billiards-like game on an $N \times N$ table, which has its four corners at the points $\{(0, 0), (0, N), (N, 0),$ and $(N, N)\}$. You start from a coordinate $(x,y)$,  $(0 < x < N, 0 <  y < N)$ and shoot the ball at an angle $45^{\circ}$ with the horizontal. On hitting the sides, the ball continues to move with the same velocity and ensuring that the angle of incidence is equal to the angle of reflection with the normal, i.e, it is reflected with zero frictional loss. On hitting either of the four corners, the ball stops there and doesn’t move any further. 

Find the coordinates of the point of collision, when the ball hits the sides for the $K^{th}$ time. If the ball stops before hitting the sides $K$ times, find the coordinates of the corner point where the ball stopped instead.

###Input:

- The first line of the input contains an integer $T$, the number of testcases.
- Each testcase contains a single line of input, which has four space separated integers - $N$, $K$, $x$, $y$, denoting the size of the board, the number of collisions to report the answer for, and the starting coordinates.

###Output:
For each testcase, print the coordinates of the ball when it hits the sides for the $K^{th}$ time, or the coordinates of the corner point if it stopped earlier.

###Constraints 
- $1 \leq T \leq 10^5$
- $2 \leq N \leq 10^9$
- $1 \leq K \leq 10^9$

###Subtasks
- **$30$ points :**  Sum of $K$ over all test cases $\le 10^7$
- **$70$ points :** Original constraints.

###Sample Input:
```
2
5 5 4 4
5 2 3 1
```

###Sample Output:
```
5 5
3 5
```
	
###Explanation:
- **Sample Case $1$ :**     

We are given a $5$ by $5$ board. We shoot the ball from coordinates $(4,4)$, and we need to find its coordinates after it has collided with sides $5$ times. However, after shooting, the ball goes directly to the corner $(5,5)$, and stops there. So we report the coordinates $(5,5)$.

![fig1](https://codechef_shared.s3.amazonaws.com/download/Images/JAN21/BILLRD/BILLRD_1.png =400x396)

- **Sample Case $2$ :**    

We are given a $5$ by $5$ board. We shoot the ball from the coordinates $(3,1)$, and we need to find its coordinates after it has collided with the sides twice. After shooting, it first hits the right side at $(5,3)$, and then the top side at $(3,5)$. So, we report $(3,5)$.

![fig1](https://codechef_shared.s3.amazonaws.com/download/Images/JAN21/BILLRD/BILLRD_2.png =450x378)

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>