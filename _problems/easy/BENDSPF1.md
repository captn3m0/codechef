---
{"category_name":"easy","problem_code":"BENDSPF1","problem_name":"1 - Binary Distance","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"utkarsh_25dec","problem_tester":"","date_added":"22-01-2021","tags":{"0":"utkarsh_25dec"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1612018800,"submit_start_date":1612018800,"visible_start_date":1612018800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BENDSPF1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef is given two integers $N$ and $X$. He has been challenged to find 2 binary strings each of length $N$ such that the hamming distance between the strings is exactly $X$. 

Hamming distance is the number of positions in which the two strings differ. Let $cnt_1$ denotes the number of $1$'s used in both strings combined and $cnt_0$ denotes the number of $0$'s used in both strings. Chef is also required to minimise $\mid cnt_1 - cnt_0 \mid$. 

Print any two binary strings satisfying the above conditions.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, two integers $N, X$. 

###Output:
For each testcase, output the two binary strings satisfying the conditions. If there are multiple possible answers, you can output any.

###Constraints 
- $1 \leq T \leq 1000$
- $2 \leq N \leq 10^6$
- $0 \leq X \leq N$
- Sum of N over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input:
	1
	3 1

###Sample Output:
	010
	110

###Explanation:

The hamming distance between the two strings is exactly $1$ because they differ only at the starting position. $cnt_1$ = $3$ and $cnt_0$ = 3, so $\mid cnt_1 - cnt_0 \mid = 0$ is minimized.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>