---
{"category_name":"easy","problem_code":"SHROUTE","problem_name":"Shortest Route","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 1\r\n1 0 0 0 0\r\n5\r\n5 1\r\n1 0 0 0 2\r\n4\r\n5 2\r\n2 0 0 0 1\r\n3 1","output":"4\r\n1\r\n-1 0","explanation":"**Test Case $1$:** The only person takes the train from station $1$ and hence takes $|5 - 1| = 4$ minutes to reach his destination.\r\n\r\n**Test Case $2$:** The only person takes the train from station $5$ and hence takes $|5 - 4| = 1$ minute to reach his destination.\r\n\r\n**Test Case $3$:** Since no train passes station $3$, it\u0027s impossible for the first person to reach his destination and since the second person is already at station $1$, it takes him $0$ minutes to reach his destination.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/xaKGxrklpH8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"iscsi","date_added":"22-04-2021","tags":{"0":"akashbhalotia","1":"daanish_adm","2":"june21","3":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SHROUTE","time":{"view_start_date":1623663000,"submit_start_date":1623663000,"visible_start_date":1623663000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SHROUTE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Vietnamese](https://www.codechef.com/download/translated/JUNE21/vietnamese/SHROUTE.pdf),
[Bengali](https://www.codechef.com/download/translated/JUNE21/bengali/SHROUTE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE21/mandarin/SHROUTE.pdf), and [Russian](https://www.codechef.com/download/translated/JUNE21/russian/SHROUTE.pdf) as well. 

There are $N$ cities in Chefland numbered from $1$ to $N$ and every city has a railway station. Some cities have a train and each city has at most one train originating from it. The trains are represented by an array $A$, where $A_i = 0$ means the $i$-th city doesn't have any train originating from it, $A_i = 1$ means the train originating from the $i$-th city is moving right (to a higher numbered city), and $A_i = 2$ means the train originating from the $i$-th city is moving left (to a lower numbered city).

Each train keeps on going forever in its direction and takes $1$ minute to travel from the current station to the next one. There is a special station at city $1$ which lets travellers instantaneously teleport to any other station that currently has a train. Teleportation and getting on a train once in the city both take $0$ minutes and all trains start at time $0$.

There are $M$ travellers at city $1$, and the $i$-th traveller has destination city $B_i$. They ask Chef to guide them to teleport to a particular station from which they can catch a train to go to their destination in the least time possible. In case it's not possible for a person to reach his destination, print $-1$.

**Note:** The input and output of this problem are large, so prefer using fast input/output methods.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains three lines of input.
- The first line contains two integers $N$, $M$.
- The second line contains $N$ integers $A_1, A_2, \ldots, A_N$.
- The third line contains $M$ integers $B_1, B_2, \ldots, B_M$.

###Output
For each test case, output $M$ space-separated integers $C_1, C_2, \ldots, C_M$, where $C_i$ is the minimum time required by the $i$-th traveller to reach his destination and if the $i$-th traveller can't reach his destination, $C_i = -1$.

###Constraints 
- $1 \leq N, M \leq 10^5$
- $0 \leq A_i \leq 2$
- $1 \leq B_i \leq N$
- The sum of $N$ over all test cases is at most $10^6$.
- The sum of $M$ over all test cases is at most $10^6$.

###Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input
```
3
5 1
1 0 0 0 0
5
5 1
1 0 0 0 2
4
5 2
2 0 0 0 1
3 1
```

###Sample Output
```
4
1
-1 0
```

###Explanation
**Test Case $1$:** The only person takes the train from station $1$ and hence takes $|5 - 1| = 4$ minutes to reach his destination.

**Test Case $2$:** The only person takes the train from station $5$ and hence takes $|5 - 4| = 1$ minute to reach his destination.

**Test Case $3$:** Since no train passes station $3$, it's impossible for the first person to reach his destination and since the second person is already at station $1$, it takes him $0$ minutes to reach his destination.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>