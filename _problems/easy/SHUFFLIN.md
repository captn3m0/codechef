---
{"category_name":"easy","problem_code":"SHUFFLIN","problem_name":"Shuffling Parities","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^4$\n- $1 \\leq N \\leq 10^5$\n- $1 \\leq A_i \\leq 10^9$\n- Sum of $N$ over all test cases does not exceed $3 \\cdot 10^5$.","constraintsState":true,"subtasks":"**Subtask #1 (100 points):** Original constraints\n","subtasksState":true,"inputFormat":"- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.\n- Each test case contains two lines of input.\n- The first line of each test case contains an integer $N$.\n- The second line of each test case contains $N$ space-separated integers $A_1, A_2, \\dots, A_N$.","inputFormatState":true,"outputFormat":"For each test case, print a single line containing one integer - the maximum sum of integers of the array $B$.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n3\n1 2 3\n3\n2 4 5\n2\n2 4\n","output":"2\n3\n1","explanation":"**Test case $1$:** One of the optimal ways to shuffle the array $A$ is $[2, 1, 3]$. Then the array $B = [(2 + 1) \\bmod 2,\\;(1 + 2) \\bmod 2,\\;(3 + 3) \\bmod 2] = [1, 1, 0]$. So the sum of integers of array $B$ is $2$. There is no other possible way to shuffle array $A$ such that the sum of integers of array $B$ becomes greater than $2$.\n\n\n**Test case $2$:** One of the optimal ways to shuffle the array $A$ is $[2, 5, 4]$. Then the array $B = [(2 + 1) \\bmod 2,\\;(5 + 2) \\bmod 2,\\;(4 + 3) \\bmod 2] = [1, 1, 1]$. So the sum of integers of array $B$ is $3$ . ","isDeleted":false}}},"video_editorial_url":"https://youtu.be/0e8l9Nxl9SQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"soumyadeep_21","problem_tester":"","date_added":"20-07-2021","tags":{"0":"math","1":"observation","2":"sept21","3":"simple","4":"soumyadeep_21"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SHUFFLIN","time":{"view_start_date":1631525400,"submit_start_date":1631525400,"visible_start_date":1631525400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SHUFFLIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/SEPT21/bengali/SHUFFLIN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT21/mandarin/SHUFFLIN.pdf), [Russian](https://www.codechef.com/download/translated/SEPT21/russian/SHUFFLIN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT21/vietnamese/SHUFFLIN.pdf) as well.

Chef is given an array $A$ consisting of $N$ positive integers. Chef shuffles the array $A$ and creates a new array $B$ of length $N$, where $B_i = (A_i + i) \bmod 2$, for each $i\;(1 \leq i \leq N)$.

Find the maximum possible sum of integers of the array $B$, if Chef shuffles the array $A$ optimally.




<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>