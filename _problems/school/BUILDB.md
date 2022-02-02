---
{"category_name":"school","problem_code":"BUILDB","problem_name":"Bodybuilder","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 2\r\n10\r\n10\r\n2 2\r\n10 11\r\n10 10\r\n3 1\r\n1 2 3\r\n1 2 3","output":"10\r\n18\r\n4","explanation":"**Test Case 1:** Since there is only $1$ exercise, the maximum tension is equal to the tension provided by that exercise, i.e, $10$ units. \r\n\r\n**Test Case 2:** At time $t = 10$, Chef has $10$ units of tension. \r\n\r\nFrom $t = 10$ to $t = 11$, his muscles releases $2$ unit of tension and at $t = 11$, he further gains $10$ units of tension to have total of $10 - 2 + 10 = 18$ units of tension.\r\n\r\nSo the maximum tension Chef feels in his muscles is $18$ units.\r\n\r\n**Test Case 3:** At time $t = 1$, Chef has $1$ unit of tension. \r\n\r\nFrom $t = 1$ to $t = 2$, his muscles releases $1$ unit of tension and at $t = 2$, he further gains $2$ units of tension to have total of $1 - 1 + 2 = 2$ units of tension.\r\n\r\nFrom $t = 2$ to $t = 3$, his muscles releases $1$ unit of tension and at $t = 3$, he further gains $3$ units of tension to have total of $2 - 1 + 3 = 4$ units of tension. \r\n\r\nSo the maximum tension Chef feels in his muscles is $4$ units.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/pnLsvzWxj40","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"29-12-2020","tags":{"0":"cakewalk","1":"cook128","2":"daanish_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BUILDB","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BUILDB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK128/mandarin/BUILDB.pdf), [Russian](https://www.codechef.com/download/translated/COOK128/russian/BUILDB.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK128/bengali/BUILDB.pdf) as well.

After solving programming problems for years, Chef has become lazy and decided to get a better physique by doing some weight lifting exercises.

On any regular day, Chef does $N$ exercises at times $A_1, A_2, \ldots, A_N$ (in minutes, all distinct) and each exercise provides a tension of $B_1, B_2, \ldots, B_N$ units. In the period between two consecutive exercises, his muscles relax $R$ units of tension per minute.

More formally, Chef's tension is described by a number $x$. Before any workouts, $x=0$. When he does a workout at time $A_i$, the tension $x$ instantly increases by $B_i$. Between workouts, the number $x$ decreases by $R$ units per minute, maximized with $0$.

Considering the time of exercise and hence tension to be negligible, find the maximum tension he will be feeling in his muscles during the entire period of his workout.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains $3$ lines of input.
- The first line will contain $2$ space-separated integers $N, R$, number of timestamps at which Chef performs his exercise, and units of tension relaxed per minute.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.  

###Output:
For each testcase, output in a single line the maximum amount of tension Chef will have in his muscles.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 5\cdot 10^4$
- $1 \leq R, B_i \leq 10^5$
- $1 \leq A_i \leq 10^9$
- $A_{i - 1} \lt A_i$, for all $2\le i\le N$

###Sample Input:
```
3
1 2
10
10
2 2
10 11
10 10
3 1
1 2 3
1 2 3
```
###Sample Output:
```
10
18
4
```
	
###Explanation:
**Test Case 1:** Since there is only $1$ exercise, the maximum tension is equal to the tension provided by that exercise, i.e, $10$ units. 

**Test Case 2:** At time $t = 10$, Chef has $10$ units of tension. 

From $t = 10$ to $t = 11$, his muscles releases $2$ unit of tension and at $t = 11$, he further gains $10$ units of tension to have total of $10 - 2 + 10 = 18$ units of tension.

So the maximum tension Chef feels in his muscles is $18$ units.

**Test Case 3:** At time $t = 1$, Chef has $1$ unit of tension. 

From $t = 1$ to $t = 2$, his muscles releases $1$ unit of tension and at $t = 2$, he further gains $2$ units of tension to have total of $1 - 1 + 2 = 2$ units of tension.

From $t = 2$ to $t = 3$, his muscles releases $1$ unit of tension and at $t = 3$, he further gains $3$ units of tension to have total of $2 - 1 + 3 = 4$ units of tension. 

So the maximum tension Chef feels in his muscles is $4$ units.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>