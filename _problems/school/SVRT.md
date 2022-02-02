---
{"category_name":"school","problem_code":"SVRT","problem_name":"Server Trouble","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n6 3\r\n10 6\r\n10 4","output":"2 3\r\n2 4\r\n3 2","explanation":"- **Sample Test $1$:** Let the locations be numbered from $1$ to $6$. We can place the servers at locations $1$, $3$ and $5$. Thus, the distances between locations $1$ and $3$, $3$ and $5$, and $5$ and $1$ are all $=2$, which is the lowest possible maximum distance that can be achieved here. There are $3$ pairs of locations separated by this distance.\r\n\r\n- **Sample Test $2$:** Let the locations be numbered from $1$ to $10$. We can place the servers at locations $1,2,4,6,8$ and $10$. Thus, the minimum possible maximum distance between any two adjacent servers is $2$. There shall be at least $4$ pairs of servers separated by this distance. Here, they are $(2,4)$, $(4,6)$, $(6,8)$ and $(8,10)$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/ZvGLFq3hOCw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"akash_adm","problem_tester":"","date_added":"19-02-2021","tags":{"0":"akash_adm","1":"easy","2":"math","3":"start2"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SVRT","time":{"view_start_date":1616938200,"submit_start_date":1616938200,"visible_start_date":1616938200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SVRT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are the Chief Engineer of a fast growing start-up. You wish to place $K$ servers in some distinct locations from among $N$ locations. The locations, numbered $1, 2, \ldots, N$ are arranged in a circular manner. The distance between every adjacent location is 1 unit. $1$ and $N$ are adjacent. 

You want to place the servers such that the maximum shortest distance between any two adjacent servers is as less as possible. Find this minimum possible distance that can be achieved, and also the minimum number of pairs of adjacent servers separated by this distance.

###Input:

- The first line contains a single integer, $T$, denoting the number of test cases.
- Each test case consists of a single line containing two space-separated integers $N$ and $K$, denoting the number of locations, and the number of servers, respectively.

###Output:

For test case, output two space-separated integers $D$ and $X$, denoting the minimum possible maximum shortest distance that can be achieved between any two adjacent servers, and the minimum number of pairs of servers separated by this distance, respectively, in a separate line.

###Constraints 
- $1 \le T \le 10^5$
- $3 \le K \le N \le 10^9$

###Sample Input:
```
3
6 3
10 6
10 4
```
###Sample Output:
```
2 3
2 4
3 2
```
###EXPLANATION:
- **Sample Test $1$:** Let the locations be numbered from $1$ to $6$. We can place the servers at locations $1$, $3$ and $5$. Thus, the distances between locations $1$ and $3$, $3$ and $5$, and $5$ and $1$ are all $=2$, which is the lowest possible maximum distance that can be achieved here. There are $3$ pairs of locations separated by this distance.

- **Sample Test $2$:** Let the locations be numbered from $1$ to $10$. We can place the servers at locations $1,2,4,6,8$ and $10$. Thus, the minimum possible maximum distance between any two adjacent servers is $2$. There shall be at least $4$ pairs of servers separated by this distance. Here, they are $(2,4)$, $(4,6)$, $(6,8)$ and $(8,10)$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>