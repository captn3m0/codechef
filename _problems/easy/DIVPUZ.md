---
{"category_name":"easy","problem_code":"DIVPUZ","problem_name":"3 - Puzzle with division","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":"","date_added":"6-08-2020","tags":{"0":"isaf27"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1605438000,"submit_start_date":1605438000,"visible_start_date":1605438000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DIVPUZ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given an array of positive integers $a_1, a_2, \ldots, a_n$.

You should find another array of positive integers $b_1, b_2, \ldots, b_n$ that satisfies the following conditions:

- For all $1 \leq i \leq n$, $b_i\le 10^{18}$.
- For all $1 \leq i \leq n$, $a_i$ divides $b_i$.
- For all $1 \leq i \leq n$, $b_i$ divides $b_{i-1} \cdot b_{i + 1}$ (we consider $b_0 = b_n$ and $b_{n+1}=b_1$).

###Input:
The first line contains an integer $t$ - the number of test cases. The next $2t$ lines describe test cases.

The first line of each test case contains a positive integer $n$.

The second line of each test case contains $n$ positive integers $a_1, a_2, \ldots, a_n$ - the given array.

###Output:
For each test case print $n$ positive integers $b_1, b_2, \ldots, b_n$ that satisfy all the conditions above.

The constraints guarantee that an answer always exists. If there exist multiple answers you can print any.

###Constraints
- $1 \leq t \leq 10^5$
- $3 \leq n \leq 100\,000$
- $1 \leq a_i \leq 10^9$
- the sum of $n$ for all test cases does not exceed $300\,000$

###Subtasks
**Subtask #1 (30 points):**
- $n$ is even
- $a_i = 1$ for all even $i$

**Subtask #2 (70 points):** Original Constraints

###Sample Input:
    4
    3
    2 3 9
    5
    1 1 1 1 1
    3
    6 10 15
    4
    2 3 4 5

###Sample Output:
    54 54 54
    2 4 2 4 2
    6 10 15
    30 6 4 10
	
###Explanation:
Let's consider the fourth test case. For all $i$, $a_i$ divides $b_i$, as

- $2$ divides $30$
- $3$ divides $6$
- $4$ divides $4$
- $5$ divides $10$

For all $i$, $b_i$ divides $b_{i-1} \cdot b_{i+1}$, as

- $30$ divides $10 \cdot 6 = 60$
- $6$ divides $30 \cdot 4 = 120$
- $4$ divides $6 \cdot 10 = 60$
- $10$ divides $4 \cdot 30 = 120$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>