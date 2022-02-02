---
{"category_name":"school","problem_code":"COLGLF5","problem_name":"College Life 5","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 2\r\n1 3\r\n2 4\r\n3 1\r\n100 200 300\r\n1\r\n1 2\r\n1\r\n100 200","output":"3\r\n2\r\n1","explanation":"**Case 1:** At $T = 0$, we are watching El Clasico. At $T = 1$ there is an important event in football match and since we are already watching the same channel we won\u0027t switch. At $T = 2$,\r\nthere is an important event in cricket match and we switch the channel for the first time. At $T = 3$, there is an important event in football match and we switch the channel for the second time. At $T = 4$, there is an important event in cricket match and we switch the channel for the third time. So in total we switch three times.\r\n\r\n**Case 2:** At $T = 0$, we are watching El Clasico. At $T = 1$ there is an important event in cricket match and we switch the channel for the first time. At $T = 100$, there is an important event in football match and we switch the channel for the second time. At $T = 200$, there is an important event in football match and since we are on the same channel, we don\u0027t switch. At $T = 300$, there is an important event in football match and since we are on the same channel, we don\u0027t switch. So in total we switch two times.\r\n\r\n**Case 3:** At $T = 0$, we are watching El Clasico. At $T = 1$ there is an important event in football match and since we are on the same channel, we don\u0027t switch. At $T = 100$, there is an important event in cricket match and we switch the channel for the first time. At $T = 200$, there is an important event in cricket match and since we are on the same channel, we don\u0027t switch. So in total we switch only one time.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/xwGwxTyBLm0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"18-01-2021","tags":{"0":"daanish_adm","1":"simple","2":"start2","3":"two"},"problem_difficulty_level":"Simple","best_tag":"Two Pointers","editorial_url":"https://discuss.codechef.com/problems/COLGLF5","time":{"view_start_date":1616938200,"submit_start_date":1616938200,"visible_start_date":1616938200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COLGLF5","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
There is only $1$ TV in the common room, and as luck would have it, both the El Clasico football match and the India-Pakistan cricket match are happening simultaneously.

There is one football fan who is looking at the live commentary online and will scream whenever an 'important' event takes place in the El Clasico. Similarly, there is a cricket fan who will do so for every important event in the cricket match.

You are given two arrays - $F_1, F_2, \ldots, F_n$, which denote the times when an important event happens in the football match. And similarly $C_1, C_2, \ldots, C_m$ for cricket.
You sadly have the remote in hand. You start out by watching the El Clasico. But whenever an Important event happens in the sport which isn't on the TV right now, you will be forced to switch to that sport's channel, and this continues, i.e., you switch channels if and only if when an important event in the other sport happens.
Find the total number of times you will have to switch between the channels.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of $3$ lines of input.
- First line contain $2$ space separated integers $N$ and $M$, number of important events in football and cricket match respectively.
- Second line contain $N$ space separated integers $F_i$, where the $i^{th}$ index represents $i^{th}$ important event in the football match.
- Third line contain $M$ space separated integers $C_i$, where the $i^{th}$ index represents $i^{th}$ important event in the cricket match.


###Output:
For each testcase, output in a single line answer to the problem.

###Constraints 
- $1 \leq N, M \leq 2.5*10^4$
- $1 \leq F_i, C_i \leq 10^9$
- $F_i > F_{i - 1}$  $\forall i > 0$
- $C_i > C_{i - 1}$  $\forall i > 0$
- $F_i$  !=  $C_j$   $\forall i, j$
- Sum of $N$ over all tests is atmost $2*10^5$
- Sum of $M$ over all tests is atmost $2*10^5$

###Sample Input:
```
3
2 2
1 3
2 4
3 1
100 200 300
1
1 2
1
100 200
```

###Sample Output:
```
3
2
1
```
	
###Explanation:
**Case 1:** At $T = 0$, we are watching El Clasico. At $T = 1$ there is an important event in football match and since we are already watching the same channel we won't switch. At $T = 2$,
there is an important event in cricket match and we switch the channel for the first time. At $T = 3$, there is an important event in football match and we switch the channel for the second time. At $T = 4$, there is an important event in cricket match and we switch the channel for the third time. So in total we switch three times.

**Case 2:** At $T = 0$, we are watching El Clasico. At $T = 1$ there is an important event in cricket match and we switch the channel for the first time. At $T = 100$, there is an important event in football match and we switch the channel for the second time. At $T = 200$, there is an important event in football match and since we are on the same channel, we don't switch. At $T = 300$, there is an important event in football match and since we are on the same channel, we don't switch. So in total we switch two times.

**Case 3:** At $T = 0$, we are watching El Clasico. At $T = 1$ there is an important event in football match and since we are on the same channel, we don't switch. At $T = 100$, there is an important event in cricket match and we switch the channel for the first time. At $T = 200$, there is an important event in cricket match and since we are on the same channel, we don't switch. So in total we switch only one time.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>