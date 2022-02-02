---
{"category_name":"school","problem_code":"TOTSCR","problem_name":"Total Score","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"19-02-2021","tags":{"0":"ccrc2021","1":"daanish_adm","2":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TOTSCR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TOTSCR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/CCRC2021/hindi/TOTSCR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/CCRC2021/mandarin/TOTSCR.pdf), [Vietnamese](https://www.codechef.com/download/translated/CCRC2021/vietnamese/TOTSCR.pdf), and [Bengali](https://www.codechef.com/download/translated/CCRC2021/bengali/TOTSCR.pdf) as well.

There are $K$ problems in a contest with $N$ participants. All the problems don't necessarily have the same points assigned to them - you are given an array $A$ of integers, where $A_i$ denotes the points assigned to the $i^{th}$ problem. If a participant solves the $i^{th}$ problem, they will get $A_i$ points added to their total score. Note that there are no partial points - they can get only $0$ or $A_i$ points on the $i^{th}$ problem. For each participant $i$, you are also given their final verdict in each problem in the form of a binary string $S_i$ - a $1$ denotes that they solved that problem, and a $0$ denotes that they did not. 

Your job is to find the total score of each participant.

###Input:

- The first line of input contains a single integer $T$, denoting the number of testcases. Then the testcases follow. 
- First line of each testcase contains $2$ space separated integers, $N$ and $K$, denoting the number of participants and the number of problems in the contest respectively.
- The second line contains $K$ space separated integers - $A_1, A_2, \ldots, A_K$, where $A_i$ denotes the points assigned to the $i^{th}$  problem.
- The $i^{th}$ of the next $N$ lines contains a binary string $S_i$ of length $K$, where $S_{ij}$ represents the verdict of the $j^{th}$ problem for $i^{th}$ participant. $S_{ij} = 1$ if they solved that problem, and $S_{ij} = 0$ otherwise.

###Output:
For each testcase, output $N$ lines, with the $i^{th}$ line containing a single integer denoting the total score of the $i^{th}$ participant.

###Constraints 
- $1 \leq T \leq 5$
- $1 \leq A_i \leq 10^5$
- $0 \leq S_{ij} \leq 1$
- Sum of $N * K$ over all tests is atmost $10^6$

###Sample Input:
```
3
2 2
1 2
01
10
2 2
1 2
11
00
2 1
100
0
1
```

###Sample Output:
```
2
1
3
0
0
100
```
	
###Explanation:
**Case 1:** The first participant's binary string is "$01$", which means that they did not solve the first problem, but they solved the second problem. And as the points assigned to the two problems are $1$ and $2$, the total score of the first participant is $2$. Hence the first output is $2$.

Similarly, the second participant's binary string is "$10$", which means that they solved the first problem, but did not solve the second problem. So their total score is $1$. Hence the second output is $1$.

**Case 2:** The first participant's binary string is "$11$", which means that they solved both the first and second problems. And as the points assigned to the two problems are $1$ and $2$, the total score of the first participant is $1 + 2 = 3$. Hence the third output is $3$.

Similarly, the second participant's binary string is "$00$", which means that they did not solve any problem. So their total score is $0$. And hence the fourth output is $0$.

**Case 3:** The first participant's binary string is "$0$", which means that they did not solve the only problem of the contest. Hence the total score of the first participant is $0$. Hence the fifth output is $0$.

Similarly, the second participant's binary string is "$1$", which means that they solved the only problem in the contest. And as the points assigned to that problem is $100$, the total score of the second participant is $100$. Hence the last output is $100$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>