---
{"category_name":"easy","problem_code":"UWCOI21D","problem_name":"Efficient Delivery","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"smjleo","problem_tester":"","date_added":"13-12-2020","tags":{"0":"easy","1":"smjleo","2":"uwcoi21"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UWCOI21D","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UWCOI21D","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Salmon runs a fish delivery company in Fish City. Fish City has $N$ vertical roads numbered $1, 2, ..., N$ from left to right, each spaced 1 unit apart; similarly, there are $M$ horizontal roads numbered $1, 2, ..., M$ from bottom to top, each spaced 1 unit apart. We will denote the intersection between the $x$-th vertical road and the $y$-th horizontal road as $(x, y)$. 

Salmon has to make $K$ deliveries, with the $i$-th delivery starting at $(x_i, y_i)$ and ending at $(x'_i, y'_i)$. He can also travel every road with speed $0.5$ (meaning it would take him $2$ units of time to travel $1$ unit of distance). However, Salmon can bribe the mayor of Fish City and make the mayor change **exactly one horizontal** road to a highway, meaning the speed on that road would increase to $1$.

He wants to choose a road to be a highway such that the sum of durations of all the deliveries is minimum possible. Help him find this minimum sum!

Note that each delivery starts exactly at $(x_i, y_i)$ and ends at $(x'_i, y'_i)$, i.e., we don't count the time taken to travel from $(x'_{i-1}, y'_{i-1})$ to $(x_i, y_i)$ in our answer.

###Input:
The first line contains 3 integers, $N$, $M$ and $K$ ($1 \le N, M, K \le 10^5$).

The next $K$ lines describe deliveries. Each line contains 4 space-separated integers $x_i$, $y_i$, $x'_i$, $y'_i$ ($1 \le x_i, x'_i \le N$, $1 \le y_i, y'_i \le M$), describing the $i$-th delivery.

###Output:
Print one integer -- the minimum sum of durations possible.

###Subtasks
* Subtask 1 [17 points]: $y_i = y_{i-1}$ for all $i>0$. 
*  Subtask 2 [34 points]: $K \le 10$.
* Subtask 3 [49 points]: No additional constraints.

###Sample Input 1:
	5 4 3
	2 3 4 1
	1 4 5 2
	3 3 5 3

###Sample Output 1:
	16
	
###Explanation:

![fig2](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/UWCOI21/sample1.png =600x400)

Salmon can turn the 3rd horizontal road into a highway.

- For the first delivery, we can go 2 units to the right taking 2 units of time, and 2 units down taking 4 units of time. The time taken is $2 + 4 = 6$.
- For the second delivery, we can go 1 unit down taking 2 units of time, 4 units right taking 4 units of time, and 1 unit down taking 2 units of time. The time taken is $2 + 4 + 2 = 8$.
- For the third delivery, we can go 2 units right taking 2 units of time.

Therefore, the total time taken is $6 + 8 + 2 = 16$.

###Sample Input 2:
	10 2 3
	1 2 10 2
	2 1 9 1
	4 1 7 1

###Sample Output 2:
	23

###Explanation:
![fig1](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/UWCOI21/sample2.png =600x300)

Salmon can turn the 1st horizontal road into a highway.

- For the first delivery, we can go 1 unit down taking 2 units of time, 9 units right taking 9 units of time, and 1 unit up taking 2 units of time. The time taken is $2 + 9 + 2 = 13$.
- For the second delivery, we can go 7 units right taking 7 units of time.
- For the third delivery, we can go 3 units to the right taking 3 units of time.

Therefore, the total time taken is $13 + 7 + 3 = 23$.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>