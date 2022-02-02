---
{"category_name":"easy","problem_code":"MAXDIVER","problem_name":"Maximize Diversity of an Array","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/g676vlB4IXI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"dpraveen_adm","problem_tester":"","date_added":"4-12-2019","tags":{"0":"dpraveen_adm"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MAXDIVER","time":{"view_start_date":1575801000,"submit_start_date":1575801000,"visible_start_date":1575801000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXDIVER","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given an array $A$. The diversity of the array $A$ is defined as number of pairs $i, j, i < j $ such that $A_i \neq A_j$. 

You want to maximize the diversity of the array. For that, you are allowed to make at most $K$ operations on it, in any of which, you can select a particular element and change its value to any integer in the range 1 to $10^9$, both inclusive.

Find out the maximum diversity of the array that you can obtain.


###Input:

- First line will contain $T$, number of testcases. Then the testcases follow.
- The first line of each testcase contains two integers $N, K$. where $N$ denotes the length of array $A$.
- The next line of each testcase contains $N$ space separated integers, the i-th of which denotes $A_i$.

###Output:
For each testcase, output in a single line, the answer corresponding to the testcase, which should be an integer denoting the maximum possible diversity.

###Constraints
- $1 \leq T \leq 20$
- $0 \leq K \leq 10^9$
- $2 \leq N \leq 10^5$
- $1 \leq A_i \leq 10^9$

###Sample Input:
    3
    3 10
    1 2 3
    4 2
    1 1 2 2
    6 2
    2 3 3 2 4 4

###Sample Output:
    3
    6
    14

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>