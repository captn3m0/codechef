---
{"category_name":"medium","problem_code":"BENDSPF4","problem_name":"4 - Minimum Division Permutations","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"bhvdsi","problem_tester":"","date_added":"6-01-2021","tags":{"0":"bhvdsi"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1612018800,"submit_start_date":1612018800,"visible_start_date":1612018800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BENDSPF4","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Given two arrays $A$ and $B$, both of length $N$ and consisting of only positive integers, your task is to find the number of permutations $P$ of length $N$ such that $\sum_{i=1}^{N} A_{i}/B_{P_{i}}$ is minimum. Since the number of such permutations can be large, print the answer modulo $998244353$.

The sequence of $N$ integers is called a permutation if it contains all integers from $1$ to $N$ exactly once.

Please note the that division here does $\textbf{NOT}$ refer to floor division. It refers to the normal arithmetic divison involving decimals.

###Input:

- The first line of input contains the number of test cases $T$.
- For each test case, the first line contains the integer $N$, the length of the given arrays.
- The second line of each test case contains $N$ integers $A_1$, $A_2$, $...$, $A_N$.
- The third line of each test case contains $N$ integers $B_1$, $B_2$, $...$, $B_N$.

###Output:
For each test case, print a single integer - the number of such permutations modulo $998244353$.

###Constraints 
- $1 \leq T \leq 2 \cdot 10^5$
- $1 \leq N \leq 2 \cdot 10^5$
- $1 \leq A_i, B_i \leq N$
- Sum of $N$ across all test cases is less than $2 \cdot 10^5$

### Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input:
	3
	2
	1 1
	2 2
	3
	1 2 3
	3 2 1
	1
	1
	1

###Sample Output:
	2
	1
	1
	
###Explanation:
In the first test case, the possible permutations are:
$[1, 2]$ and $[2, 1]$. Both of these permutations minimise the given expression. Hence the output for this test case is $2$.

In the second test case, the possible permutations are:
$[1, 2, 3], [1, 3, 2], [2, 1, 3], [2, 3, 1], [3, 1, 2], [3, 2, 1]$. Only the permutation $[3, 2, 1]$ minimises the given expression among all these permutations. Hence the output is $1$ for this test case. Here, the minimum value of the expression comes out to be $1/1 + 2/2 + 3/3 = 3$. Any other permutation gives a higher value for the expression.

In the third test case, only 1 permutation is possible:
$[1]$. Hence the output for this test case is $1$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>