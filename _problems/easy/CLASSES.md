---
{"category_name":"easy","problem_code":"CLASSES","problem_name":"Minimal Travel Time","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 3 2 2\r\n0 1\r\n1 2\r\n2 0\r\n1 2\r\n2 2 2 2\r\n0 1\r\n1 2\r\n1 2\r\n6 7 5 3\r\n0 1\r\n0 2\r\n0 4\r\n1 3\r\n1 4\r\n2 5\r\n2 6\r\n1 2 3 5 6","output":"4\r\n6\r\n8","explanation":"**TestCase 1:** First Chef attends the subject in the building $2$ and he travels $1$ units to go there and $1$ units to come back during the break to the hostel.\r\n\r\nSecond subject he attends in the building $1$ and he travels $1$ unit to go there and $1$ unit to come back during the break to the hostel.\r\n\r\nIn total the total minimum distance to be travelled is $2 + 2  = 4$ units. \r\n\r\n**TestCase 2:** First Chef attends the subject in the building $2$ and he travels $2$ units to go there and $2$ units to come back during the break to the hostel.\r\n\r\nSecond subject he attends in the building $1$ and he travels $1$ unit to go there and $1$ unit to come back during the break to the hostel.\r\n\r\nIn total the total minimum distance to be travelled is $4 + 2  = 6$ units. \r\n\r\n**TestCase 3:** First Chef attends the subject in the building $3$ and he travels $2$ units to go there and $2$ units to come back during the break to the hostel.\r\n\r\nSecond subject he attends in the building $1$ and he travels $1$ unit to go there and $1$ unit to come back during the break to the hostel.\r\n\r\nFinal subject he attends in the building $2$ and he travels $1$ unit to go there and $1$ unit to come back during the break to the hostel.\r\n\r\nIn total the total minimum distance to be travelled is $4 + 2 + 2  = 8$ units.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/DykJ7x31Jn8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"30-12-2020","tags":{"0":"breadth","1":"daanish_adm","2":"easy","3":"graphs","4":"start2"},"problem_difficulty_level":"Easy","best_tag":"Breadth First Search","editorial_url":"https://discuss.codechef.com/problems/CLASSES","time":{"view_start_date":1616938200,"submit_start_date":1616938200,"visible_start_date":1616938200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CLASSES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef's college is starting next week. There are $S$ subjects in total, and he needs to choose $K$ of them to attend each day, to fulfill the required number of credits to pass the semester. There are $N + 1$ buildings. His hostel is in building number $0$. Subject $i$ is taught in building $A_i$. After each subject, there is a break, during which he goes back to his hostel. There are $M$ bidirectional paths of length $1$ which connects building $u$ to building $v$. Find the minimum possible total distance Chef needs to travel each day if he chooses his subjects wisely.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contain $M + 2$ lines of input.
- First line will contain $4$ space separated integers $N$, $M$, $S$, $K$, number of buildings other than hostel building, number of edges, total number of subjects taught, number of subjects required to pass the semester.
- Next $M$ lines have $2$ space separated integers $u$, $v$ representing the path connecting buildings $u$ and $v$.
- Next line has $S$ space separated integers $A_1, A_2, \ldots A_S$ representing the building in which $i^{th}$ subject is taught.

###Output:
For each testcase, output in a single line answer to the problem.

###Constraints 
- $1 \leq T \leq 3$
- $1 \leq N, S \leq 10^5$
- $1 \leq M \leq 2*10^5$
- $1 \leq K \leq S$
- $1 \leq A_i \leq N$
- $0 \leq u, v \leq N$

Its guaranteed that the graph is connected and has no self loops.

###Sample Input:
```
3
2 3 2 2
0 1
1 2
2 0
1 2
2 2 2 2
0 1
1 2
1 2
6 7 5 3
0 1
0 2
0 4
1 3
1 4
2 5
2 6
1 2 3 5 6
```

###Sample Output:
```
4
6
8
```
	
###Explanation:
**TestCase 1:** First Chef attends the subject in the building $2$ and he travels $1$ units to go there and $1$ units to come back during the break to the hostel.

Second subject he attends in the building $1$ and he travels $1$ unit to go there and $1$ unit to come back during the break to the hostel.

In total the total minimum distance to be travelled is $2 + 2  = 4$ units. 

**TestCase 2:** First Chef attends the subject in the building $2$ and he travels $2$ units to go there and $2$ units to come back during the break to the hostel.

Second subject he attends in the building $1$ and he travels $1$ unit to go there and $1$ unit to come back during the break to the hostel.

In total the total minimum distance to be travelled is $4 + 2  = 6$ units. 

**TestCase 3:** First Chef attends the subject in the building $3$ and he travels $2$ units to go there and $2$ units to come back during the break to the hostel.

Second subject he attends in the building $1$ and he travels $1$ unit to go there and $1$ unit to come back during the break to the hostel.

Final subject he attends in the building $2$ and he travels $1$ unit to go there and $1$ unit to come back during the break to the hostel.

In total the total minimum distance to be travelled is $4 + 2 + 2  = 8$ units. 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>