---
{"category_name":"school","problem_code":"DIV3","problem_name":"2 - Sums divisible by 3","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":"","date_added":"6-08-2020","tags":{"0":"isaf27"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1605438000,"submit_start_date":1605438000,"visible_start_date":1605438000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DIV3","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Let's consider some multiset $A$ consisting of $0$s, $1$s, and $2$s. Define $S(A)$ to be the sum of the elements in $A$.

It is guaranteed that $S(A)$ is divisible by $3$. You need to partition $A$ into some number of nonempty multisets $A_1, A_2, \ldots, A_k$ such that:

- $A_1 \cup A_2 \cup \ldots \cup A_k = A$
- for all $1 \leq i \leq k$, $S(A_i)$ is divisible by $3$

You are given $s_0$, $s_1$,  and $s_2$, where $s_i$ is equal to the number of occurrences of $i$ in $A$. Find the maximum possible value of $k$.

###Input:
The first line contains one integer number $t$ - the number of test cases. The next $t$ lines describe test cases.

The only line of each test case contains three integers $s_0$, $s_1$, and $s_2$ - the number of $0$s, $1$s, and $2$s in $A$, respectively.

###Output:
For each test case print the maximum number of nonempty multisets with sum divisible by $3$ into which the multiset $A$ can be partitioned.

###Constraints 
- $1 \leq t \leq 10^5$
- $0 \leq s_0, s_1, s_2 \leq 10^9$

###Subtasks
**Subtask #1 (30 points):**
- $t \leq 1000$
- $s_0, s_1, s_2 < 10$

**Subtask #2 (70 points):** original constraints

###Sample Input:
    4
    239 0 0
    2 4 1
    0 0 3
    7 3 3

###Sample Output:
    239
    4
    1
    10
	
###Explanation:
In the first test case, we can divide our set into $239$ sets with one zero in each set because all numbers are divisible by $3$. It is obvious that the number of sets can't be bigger.

In the second test case we can divide our set $A = \{0, 0, 1, 1, 1, 1, 2\}$  into four sets $\{0\}, \{0\}, \{1, 1, 1\}, \{1, 2\}$. It can be proven that $4$ is the maximum possible answer.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>