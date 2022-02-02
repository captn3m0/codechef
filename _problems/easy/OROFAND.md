---
{"category_name":"easy","problem_code":"OROFAND","problem_name":"OR of ANDs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n\t3 2\r\n\t1 2 3\r\n\t1 4\r\n\t3 0\r\n\t4 1\r\n\t1 2 3 4\r\n\t4 0","output":"3\r\n\t7\r\n\t6\r\n\t7\r\n\t3","explanation":"**Example case 1:** For the original array, all possible subarrays and their scores are as follows.\r\n\r\n$AND(1) = 1$, $AND(2) = 2$, $AND(3) = 3$, $AND(1,2) = 0$, $AND(2,3) = 2$, $AND(1,2,3) = 0$.\r\n\r\nThe bitwise OR of all possible subarray\u0027s score is $OR(1,2,3,0,2,0) = 3$.\r\n\r\nAfter the first query new array will be $[4,2,3]$ and the answer will be $7$.\r\n\r\nAfter the second query new array will be $[4,2,0]$ and the answer will be $6$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/oekJqtUVpQs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"harshil41","problem_tester":"","date_added":"11-04-2021","tags":{"0":"bitwise","1":"cook128","2":"harshil41","3":"observation","4":"simple"},"problem_difficulty_level":"Simple","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/OROFAND","time":{"view_start_date":1618772404,"submit_start_date":1618772404,"visible_start_date":1618772404,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=OROFAND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK128/mandarin/OROFAND.pdf), [Russian](https://www.codechef.com/download/translated/COOK128/russian/OROFAND.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK128/bengali/OROFAND.pdf) as well.

You are given an array $A$ with $N$ integers. An array's score is defined as the bitwise AND of all its elements. You need to find the bitwise OR of the scores of all possible non-empty subarrays of $A$.

Furthermore, there are $Q$ queries. Each query consists of two integers $X$ and $V$. You need to change the value of the element at index $X$ to $V$. After each query, you again need to find the bitwise OR of the scores of all possible non-empty subarrays.

See the example for more clarification.

###Input:
The first line of the input contains a single integer $T$ - the number of test cases. The description of $T$ test cases follows.

The first line of each test case contains two space-separated integers $N$ and $Q$ - the size of the array and the number of queries, respectively.

The second line contains $N$ space-separated integers $A_1,\ldots,A_N$.

Each of the next $Q$ lines contains two space-separated integers $X$ and $V$ - the position and the new value of the query, respectively.

###Output:
For each test case print $Q+1$ lines. In the first line print the answer for the original array and in the next $Q$ lines print the answer after every query.

###Constraints 
$1 \le T \le 100$

$1 \le N, Q \le 10^5$

$0 \le A_i \le 2^{31}-1$

$1 \le X \le N$

$0 \le V \le 2^{31}-1$

The sum of $N$ over all test cases does not exceed $10^5$

The sum of $Q$ over all test cases does not exceed $10^5$

###Sample Input:
	2
	3 2
	1 2 3
	1 4
	3 0
	4 1
	1 2 3 4
	4 0

###Sample Output:
	3
	7
	6
	7
	3
	
###EXPLANATION:
**Example case 1:** For the original array, all possible subarrays and their scores are as follows.

$AND(1) = 1$, $AND(2) = 2$, $AND(3) = 3$, $AND(1,2) = 0$, $AND(2,3) = 2$, $AND(1,2,3) = 0$.

The bitwise OR of all possible subarray's score is $OR(1,2,3,0,2,0) = 3$.

After the first query new array will be $[4,2,3]$ and the answer will be $7$.

After the second query new array will be $[4,2,0]$ and the answer will be $6$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>