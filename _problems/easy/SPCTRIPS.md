---
{"category_name":"easy","problem_code":"SPCTRIPS","problem_name":"Special Triplets","problemComponents":{"constraints":"- $1 \\leq T \\leq 10$\n- $2 \\leq N \\leq 10^5$","constraintsState":true,"subtasks":"**Subtask #1 (5 points):** $2 \\le N \\le 10^3$\n\n**Subtask #2 (20 points):** $2 \\le N \\le 10^4$\n\n**Subtask #3 (75 points):**  Original constraints","subtasksState":true,"inputFormat":"- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.\n- The first and only line of each test case contains a single integer $N$. ","inputFormatState":true,"outputFormat":"- For each testcase, output in a single line the number of special triplets.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n3\n4\n5","output":"3\n6\n9","explanation":"**Test case $1$**: It is explained in the problem statement.\n\n**Test case $2$**: The special triplets are $(1, 3, 1)$, $(1, 2, 1)$, $(3, 2, 1)$, $(1, 4, 1)$,  $(4, 3, 1)$, $(2, 4, 2)$. Hence the answer is $6$.\n\n**Test case $3$**: The special triplets are $(1, 3, 1)$, $(1, 2, 1)$, $(3, 2, 1)$, $(1, 4, 1)$, $(4, 3, 1)$, $(1, 5, 1)$, $(5, 4, 1)$, $(5, 2, 1)$, $(2, 4, 2)$. Hence the answer is $9$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/skCZN_zLzVw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"nlather","problem_tester":"","date_added":"19-04-2021","tags":{"0":"aug21","1":"easy","2":"nlather","3":"sieve"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SPCTRIPS","time":{"view_start_date":1629117000,"submit_start_date":1629117000,"visible_start_date":1629117000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SPCTRIPS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/AUG21/bengali/SPCTRIPS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG21/mandarin/SPCTRIPS.pdf), [Russian](https://www.codechef.com/download/translated/AUG21/russian/SPCTRIPS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG21/vietnamese/SPCTRIPS.pdf) as well.

Gintoki has been very lazy recently and he hasn't made enough money to pay the rent this month. So the old landlady has given him a problem to solve instead, if he can solve this problem the rent will be waived. 
The problem is as follows:

A triplet of integers $(A, B, C)$ is considered to be special if it satisfies the following properties for a given integer $N$ :

- $A \bmod B = C$
- $B \bmod C = 0$
- $1 \le A, B, C \le N$

**Example**: There are three special triplets for $N = 3$.
- $(1, 3, 1)$ is a special triplet, since $(1 \bmod 3) = 1$ and $(3 \bmod 1) = 0$. 
- $(1, 2, 1)$ is a special triplet, since $(1 \bmod 2) = 1$ and $(2 \bmod 1) = 0$.
- $(3, 2, 1)$ is a special triplet, since $(3 \bmod 2) = 1$ and $(2 \bmod 1) = 0$.


The landlady gives Gintoki an integer $N$. Now Gintoki needs to find the number of special triplets. Can you help him to find the answer?

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>