---
{"category_name":"medium","problem_code":"SRVR","problem_name":"Servers","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"6 5\r\n8 2 5 3 6 2\r\n1 6\r\n2 4\r\n2 3\r\n4 1\r\n4 2","output":"19\r\n27\r\n16\r\n3\r\n8","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"30-11-2019","tags":{"0":"deadwing97","1":"dynamic","2":"easy","3":"kmaaszraa","4":"ltime78"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/SRVR","time":{"view_start_date":1575133202,"submit_start_date":1575133202,"visible_start_date":1575133202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SRVR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME78/mandarin/SRVR.pdf) and [Russian](https://www.codechef.com/download/translated/LTIME78/russian/SRVR.pdf).

Roger wants to start a cloud computing company. First, he went to some companies to promote his cloud computing system and $N$ of them (numbered $1$ through $N$) showed interest. Each of these $N$ clients has one task, which consists of a number of processes that needs to be executed every second. Let's denote the number of processes for the $i$-th client by $D_i$.

Roger, happy to have a bunch of clients, went to buy a server for his system. Unfortunately, there are $Q$ different servers on sale (numbered $1$ through $Q$), but Roger can only afford one. For each valid $i$, Roger knows that the $i$-th server's performance is described by two integers $C_i$ and $P_i$ with the following meaning:
- Let's split a second into $P_i$ equal *time segments*.
- The server has $C_i$ cores. During each time segment, each core may execute a process or do nothing.
- During each second, each process must be executed exactly once ― by exactly one core during exactly one time segment.
- If two processes belong to the same task, they may not be executed by different cores during the same time segment due to synchronisation issues.
- Processes that belong to the same task do not have to be executed by the same core or in any particular order. They also do not have to be executed during contiguous time segments.

Since tasks can be extreme sometimes, all the servers are equipped with a new technology named *Exclusive Processing*. Initially, we may choose one task which should run in exclusive processing mode (since it demands a lot of power). Then, instead of executing one process, each core may execute two processes **belonging to this task** during any time segment. Executing just one process belonging to this task during one time segment is also allowed. However, it is still not allowed for different cores to execute processes belonging to the same task during the same time segment.

Now Roger needs your help. For each server, he wants to know the number of subsets of the $N$ clients that can be served by this server. Since these numbers can be very large, compute them modulo $987,654,319$.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $D_1, D_2, \ldots, D_N$.
- $Q$ lines follow. For each $i$ ($1 \le i \le Q$), the $i$-th of these lines contains two space-separated integers $C_i$ and $P_i$.

### Output
For each server, print a single line containing one integer ― the number of subsets it can serve modulo $987,654,319$.

### Constraints
- $1 \le N \le 600$
- $1 \le Q \le 360,000$
- $1 \le D_i \le 600$ for each valid $i$
- $1 \le C_i \le 600$ for each valid $i$
- $1 \le P_i \le 360,000$ for each valid $i$

### Subtasks
**Subtask #1 (50 points):**
- $N, Q \le 50$
- $D_i \le 50$ for each valid $i$
- $C_i, P_i \le 50$ for each valid $i$

**Subtask #2 (50 points):** original constraints

### Example Input
```
6 5
8 2 5 3 6 2
1 6
2 4
2 3
4 1
4 2
```

### Example Output
```
19
27
16
3
8
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>