---
{"category_name":"medium","problem_code":"VALET","problem_name":"Valet Parking","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 8 11\r\n3 10 4\r\n1 0 1\r\n11 13 5","output":24,"explanation":"It is optimal to start parking the first car at $5$ seconds. We finish parking at $8$ seconds, and immediately start parking the second car.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/LG093nBigB8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"yash_daga","problem_tester":"","date_added":"13-04-2021","tags":{"0":"cook128","1":"dynamic","2":"medium","3":"yash_daga"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/VALET","time":{"view_start_date":1618772404,"submit_start_date":1618772404,"visible_start_date":1618772404,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=VALET","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK128/mandarin/VALET.pdf), [Russian](https://www.codechef.com/download/translated/COOK128/russian/VALET.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK128/bengali/VALET.pdf) as well.

Your friend works as a valet where $N$ cars show up in a shift. The $i$-th car will arrive $T_i$ seconds after the current moment, and the car can wait for at most $Y_i$ seconds. That is, your friend can only start parking the car from time $T_i$ to $T_i+Y_i$ (inclusive).

Additionally, it takes $X_i$ time to park the $i$-th car, which means he cannot park any other cars for $X_i$ seconds starting from the time he starts parking the $i$-th car. It is known that no driver would like to wait for more time than it takes to park his car, so that $Y_i  < X_i$ for all $i$. The driver of the $i$-th car will pay $A_i$ coins as a tip to your friend if his car is parked. Note that he can start parking the next car immediately after he finishes parking the previous car.

Your friend has asked you what will be the maximize possible earnings if he optimally chooses which cars to park and at what times.

###Input:

- The first line contains one single integer $N$ $(1 \le N \le 3 \cdot 10^5)$ $-$ the number of cars.

- The second line contains $N$ integers $T_1, T_2, \ldots, T_n$ $-$ the time (in seconds) at which $i$-th car arrives.

- The third line contains $N$ integers $X_1, X_2, \ldots, X_n$ $-$ the time (in seconds) required to park the $i$-th car.

- The fourth line contains $N$ integers $Y_1, Y_2, \ldots, Y_n$ $-$ the maximum time (in seconds) for which the $i$-th car can wait.

- The fifth line contains $N$ integers $A_1, A_2, \ldots, A_n$ $-$ the tip which the $i$-th car driver gives after the car is parked.



###Output:
Print a single integer $-$ the answer to the problem.

###Constraints 
- $1\le N\le 3\cdot 10^5$

- $1\le T_i\le 4\cdot 10^3$

- $0\le Y_i < X_i\le 4\cdot 10^3$

- $1\le A_i\le 10^9$


###Sample Input:
```
3
5 8 11
3 10 4
1 0 1
11 13 5
```

###Sample Output:
```
24
```
	
###Explanation:
It is optimal to start parking the first car at $5$ seconds. We finish parking at $8$ seconds, and immediately start parking the second car.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>