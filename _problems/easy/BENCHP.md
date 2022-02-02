---
{"category_name":"easy","problem_code":"BENCHP","problem_name":"Bench Press","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 5 10 \r\n2 2\r\n7 100 50\r\n100 10 10 10 10 10 90 \r\n6 100 40 \r\n10 10 10 10 10 10","output":"YES\r\nNO\r\nYES","explanation":"**Test case 1:** Since the weight of the rod is at least the required weight to be lifted, Chef will feel satisfied after the workout.\r\n\r\n**Test case 2:** The configuration having maximum weight is:\r\n\r\n$10$ $10$ $|$Rod Center$|$ $10$ $10$\r\n\r\nSo the maximum total weight Chef can lift is $50 + 4 \\cdot 10 = 90$ which is less than the required amount to get satisfied.\r\n\r\n**Test case 3:** The configuration having maximum weight is:\r\n\r\n$10$ $10$ $10$ $|$Rod Center$|$ $10$ $10$ $10$\r\n\r\nSo the maximum total weight Chef can lift is $40 + 6\\cdot 10 = 100$ which is equal to the required amount to get satisfied.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/vjKt7sK0ctI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"2-04-2021","tags":{"0":"daanish_adm","1":"ltime95","2":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BENCHP","time":{"view_start_date":1619802000,"submit_start_date":1619802000,"visible_start_date":1619802000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BENCHP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
In the gym, Chef prefers to lift at least $W$ grams during a bench press and if that's impossible, Chef considers his workout to be incomplete and feels bad.

The rod weighs $W_r$ grams and there are $N$ other weights lying on the floor that weigh $w_1, w_2, ..., w_N$ grams. To maintain balance and to ensure that there is no unnecessary load due to torque, it's important that the weights added to the left side are symmetric to the weights added to the right side. It is not required to use all of the weights. It is also not required to use any weights at all, if Chef feels satisfied lifting only the rod.

For example:

 - $1$ $2$ $2$ $1$ $|$Rod Center$|$ $1$ $1$ $1$ $3$ is a wrong configuration, but

 - $1$ $2$ $3$ $1$ $|$Rod Center$|$ $1$ $3$ $2$ $1$ is a right configuration.

Find whether Chef will be able to collect the required weights to feel satisfied.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains two lines of input.
- The first line contains three space-separated integers $N, W, W_r$.
- The second line contains $N$ space-separated integers $w_1, w_2, \ldots, w_N$.

###Output
For each test case, output the answer in a single line: "YES" if Chef will be satisfied after his workout and "NO" if not (without quotes).

You may print each character of each string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 10^5$
- $1 \leq W \leq 2\cdot 10^5$
- $1 \leq w_i \leq 10^5$
- $1 \leq W_r \leq 2\cdot 10^4$

###Subtasks
**Subtask #1 (30 points):** $w_i = 1$ for all valid $i$ 

**Subtask #2 (70 points):** original constraints

###Sample Input
```
3
2 5 10 
2 2
7 100 50
100 10 10 10 10 10 90 
6 100 40 
10 10 10 10 10 10
```

###Sample Output
```
YES
NO
YES
```
	
###Explanation
**Test case 1:** Since the weight of the rod is at least the required weight to be lifted, Chef will feel satisfied after the workout.

**Test case 2:** The configuration having maximum weight is:

$10$ $10$ $|$Rod Center$|$ $10$ $10$

So the maximum total weight Chef can lift is $50 + 4 \cdot 10 = 90$ which is less than the required amount to get satisfied.

**Test case 3:** The configuration having maximum weight is:

$10$ $10$ $10$ $|$Rod Center$|$ $10$ $10$ $10$

So the maximum total weight Chef can lift is $40 + 6\cdot 10 = 100$ which is equal to the required amount to get satisfied.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>