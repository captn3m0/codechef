---
{"category_name":"easy","problem_code":"DRIVE","problem_name":"Cleaning Drive","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n10 3\r\n1 10\r\n1 5\r\n6 10\r\n10 1\r\n2 10\r\n10 2\r\n5 10\r\n1 5","output":"3\r\n-1\r\n5","explanation":"**Case $1$**: The first worker cleans the segment $[4, 7]$, the second cleans $[1, 4]$ and the third cleans $[7, 10]$ each taking $3$ units of time. So the minimum time required is $3$ units.\r\n\r\n**Case $2$**: Segment $[1, 2]$ is not covered by any worker and hence the entire hallway can\u0027t be cleaned.\r\n\r\n**Case $3$**: The first worker cleans the segment $[5, 10]$ taking $5$ units of time, and the second cleans $[1, 5]$ taking $4$ units of time. So the minimum time required is $max(5, 4) = 5$ units.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/0b_lexIUQfc","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"5-01-2021","tags":{"0":"binary","1":"daanish_adm","2":"easy","3":"multiset","4":"priority","5":"sorting","6":"start3","7":"vichitr"},"problem_difficulty_level":"Easy-Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/DRIVE","time":{"view_start_date":1619357400,"submit_start_date":1619357400,"visible_start_date":1619357400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DRIVE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
There is a hallway of length $N-1$ and you have $M$ workers to clean the floor. Each worker is responsible for segment $[L_i, R_i]$, i.e., the segment starting at $L_i$ and ending at $R_i$. The segments might overlap. 

Every unit of length of the floor should be cleaned by at least one worker. A worker can clean $1$ unit of length of the floor in $1$ unit of time and can start from any position within their segment. A worker can also choose to move in any direction. However, the flow of each worker should be continuous, i.e, they can’t skip any portion and jump to the next one, though they can change their direction. What’s the minimum amount of time required to clean the floor, if the workers work simultaneously?

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of $M + 1$ lines of input.
- First line contains $2$ space separated integers $N$, $M$, length of the hallway and number of workers.
- Each of the next $M$ lines contain $2$ space separated integers $L_i$, $R_i$, endpoints of the segment under $i^{th}$ worker.

###Output:
For each testcase, output in a single line minimum time required to clean the hallway or $-1$ if it's not possible to clean the entire floor.

###Constraints 
- $1 \leq T \leq 10^5$
- $2 \leq N \leq 10^9$
- $1 \le M \le 10^5$
- $1 \leq L_i \lt R_i \leq N$
- The sum of $M$ over all tests is atmost $2*10^5$

###Sample Input:
```
3
10 3
1 10
1 5
6 10
10 1
2 10
10 2
5 10
1 5
```

###Sample Output:
```
3
-1
5
```
	
###Explanation:
**Case $1$**: The first worker cleans the segment $[4, 7]$, the second cleans $[1, 4]$ and the third cleans $[7, 10]$ each taking $3$ units of time. So the minimum time required is $3$ units.

**Case $2$**: Segment $[1, 2]$ is not covered by any worker and hence the entire hallway can't be cleaned.

**Case $3$**: The first worker cleans the segment $[5, 10]$ taking $5$ units of time, and the second cleans $[1, 5]$ taking $4$ units of time. So the minimum time required is $max(5, 4) = 5$ units.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>