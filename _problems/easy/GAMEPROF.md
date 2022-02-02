---
{"category_name":"easy","problem_code":"GAMEPROF","problem_name":"Gamer","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 2\r\n    1 3 3\r\n    1 2 5\r\n    4 7 1","output":4,"explanation":"It is optimal to enter at time $1$ and exit at time $3$ to get item number $1$ and $2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/G5uaD0oGSto","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nhdtxdy","problem_tester":"","date_added":"2-01-2021","tags":{"0":"easy","1":"ltime94","2":"nhdtxdy","3":"segment"},"problem_difficulty_level":"Easy-Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/GAMEPROF","time":{"view_start_date":1616864402,"submit_start_date":1616864402,"visible_start_date":1616864402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GAMEPROF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/LTIME94/russian/GAMEPROF.pdf)

In a game, you can choose when to enter and exit, but you can only do this exactly once. Choosing to enter and exit the game at time $l$ and $r$ respectively will cost you $k\cdot (r-l)$ coins.

The game has $n$ items. Item $i$ is valued at $v_i$ coins. You can only collect item $v_i$ if you are in the game during the whole time period of $[x_i,y_i]$; that is, $l \le x_i \le y_i \le r$. Your profit after the game is the total value of the items collected minus the cost of entering and exiting the game.

You want to enter and exit the game so that your profit is maximized. Find that maximized profit.

###Input:
- The first line contains two integers, $n$ and $k$.
- Then, $n$ lines follow. The $i$-th line of these contains three integers, $x_i,y_i,v_i$.

###Output:
Print a single line containing the maximized profit.

###Constraints 
- $1\le n\le 10^5$
- $1 \le v_i ,k\le 10^9$
- $-10^9 \le x_i,y_i\le 10^9$
- $x_i \le y_i$

###Subtasks:
**Subtask #1 (15 points):** $n \le 20$

**Subtask #2 (25 points):** $n \le 1000$

**Subtask #3 (60 points):** original constraints

###Sample Input:
    3 2
    1 3 3
    1 2 5
    4 7 1

###Sample Output:
    4

###Explanation:
It is optimal to enter at time $1$ and exit at time $3$ to get item number $1$ and $2$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>