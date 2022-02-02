---
{"category_name":"medium","problem_code":"HOTMEALS","problem_name":"Hot Meals and Queues","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n\t0 0 0 2 1\r\n\t6\r\n\t2 4 4 -1\r\n\t2 3 4 1\r\n\t1 2 4\r\n\t1 2 5\r\n\t2 4 5 1\r\n\t1 1 5","output":"2\r\n\t2\r\n\t2\r\n\t3","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 3","source_sizelimit":50000,"problem_author":"fairy_winx","problem_tester":"","date_added":"23-02-2021","tags":{"0":"binary","1":"fairy_winx","2":"ltime93","3":"medium","4":"segment","5":"square"},"problem_difficulty_level":"Medium-Hard","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/HOTMEALS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HOTMEALS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME93/mandarin/HOTMEALS.pdf), and [Russian](https://www.codechef.com/download/translated/LTIME93/russian/HOTMEALS.pdf) as well.

As you know, there is a big problem in the educational system of Chefland - impudent students who cuts in line in the cafeteria. Chef wants to assess the problem. He was able to understand how the queue works:

- Each student has value of discontent, which is initially equal to $0$;

- Initially the queue is empty;

- Students arrive at the queue one by one. Each student can either enter the queue in the end, or \textit{cut in line}, by which we mean stand in front of one or more students already in the queue;

- When someone cuts in line, the value of discontent of every student who ended up behind the new one is increased by $1$.

For example, if the students will enter the queue in the following order:

$[] \rightarrow [1] \rightarrow [1,2] \rightarrow [1,3,2] \rightarrow [1,3,2,4] \rightarrow [1,3,5,2,4]$

The discontent of the students in the queue will change as follows:

$[] \rightarrow [0] \rightarrow [0,0] \rightarrow [0,0,1] \rightarrow [0,0,1,0] \rightarrow [0,0,0,2,1]$

Note that the values of discontent are given in the same order as students are in the queue in the end of the process, not in order they were entering the queue.

Let's call the array of discontent values in the same order as students are in the queue in the end of the process \textit{the array of discontent}. Chef notices that if one knows the array of discontent then it is possible to find out how many students cut in line. And then Chef decides to make a competitive programming problem out of it!

You are given array $a_{1}, a_{2}, \ldots, a_{n}$. You have to process queries of two types:

- Find the number of students who cut in line if the array of discontent is $[a_{l}, a_{l+1}, \ldots, a_{r}]$ - that is, the subsegment of the array $a$;

- Add a number $w$ to $a_{l}, a_{l+1}, \ldots, a_{r}$ - that is, the subsegment of the array $a$.

You also have to find the number of students who cut in line using the initial $a$ as array of discontent.

###Input:

- The first line of input contains one integer $n$ ($3 \le n \le 5 \cdot 10^5$) - the size of the array $a$.

- The second line of input contains $n$ integers $a_1, a_2, \ldots, a_n$ separated by spaces - the array $a$ itself.

- The third line on input contains one integer $q$ ($0 \le q \le 5 \cdot 10^5$) - the number of queries.

- Then $q$ lines describing the queries follow.

- Each line starts with integer $t$ - the type of the query.

- If $t = 1$, then two more integers $l, r$ follow ($1 \le l \le r \le n$). For this query you have to print the number of students who cut in line if the array of discontent is $[a_{l}, a_{l+1}, \ldots, a_{r}]$.

- If $t = 2$, then three more numbers $l, r, w$ follow ($1 \le l \le r \le n$, $|w| < n$). For this query you have to add $w$ to numbers $a_{l}, a_{l+1}, \ldots, a_{r}$.

It is guaranteed that at any given time $|a_{i}| \le 10^9$, and also that every time you have to find the number of students who cut in line the corresponding array of discontent will be consistent, that is, there exists at least one process which results in the given array of discontent.

###Output:
In the first line of output you should print the answer for the initial array $a$. Then print answers for each query of type $1$ in the order they are given in input.

###Constraints 
- $3 \leq N \leq 5 \cdot 10^5$
- $0 \leq Q \leq 5 \cdot 10^5$
- $0 \leq a_i < n$
- $0 \leq |w_i| < n$

###Subtasks
- 10 points : $3 \leq N \leq 10^5$, $q = 0$
- 10 points : $3 \leq N \leq 10^5$, $q \leq 1000$
- 40 points : $3 \leq N \leq 10^5$, $q \leq  10^5$
- 40 points : $3 \leq N \leq 5 \cdot 10^5$, $q \leq 5\cdot 10^5$

###Sample Input:
	5
	0 0 0 2 1
	6
	2 4 4 -1
	2 3 4 1
	1 2 4
	1 2 5
	2 4 5 1
	1 1 5

###Sample Output:
	2
	2
	2
	3
	
###EXPLANATION:

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>