---
{"category_name":"easy","problem_code":"CLOSCHEF","problem_name":"Chef and Closure","problemComponents":{"constraints":"- $1 \\leq T, N \\leq 10^5$\n- $-10^9 \\leq A_i  \\leq 10^9$\n- The sum of $N$ across all test cases does not exceed $10^6$","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- The first line of the input contains $T$ - the number of test cases. Then the test cases follow.\n- The first line of each test case contains a single integer - $N$\n- The second line of each test case contains $N$ space-separated integers - the $i^{th}$ of which is $A_i$","inputFormatState":true,"outputFormat":"For each test case, output the answer on a new line. Output $1$ if $A$ is closed under multiplication, and $0$ otherwise. ","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n3\n1 0 3\n3\n1 -1 -1\n3\n1 3 3","output":"1\n1\n0\n","explanation":"**Test case $1$:** $[1, 0, 3]$ is closed under multiplication.\n\n$A_1 \\cdot A_2 = 1 \\cdot 0 = 0 = A_2$\n\n$A_1 \\cdot A_2 \\cdot A_3 = 1 \\cdot 0 \\cdot 3 = 0 = A_2$\n\n\n$A_1 \\cdot A_3 = 1 \\cdot 3 = 3 = A_3$\n\n\n$A_2 \\cdot A_3 = 0 \\cdot 3 = 0 = A_2$\n\n\nTherefore, the answer for the first test case is $1$.\n\n**Test case $2$:** $[1, -1, -1]$ is closed under multiplication.\n\n$A_1 \\cdot A_2 = 1 \\cdot -1 = -1 = A_2$\n\n$A_1 \\cdot A_2 \\cdot A_3 = 1 \\cdot -1 \\cdot -1 = 1 = A_1$\n\n$A_1 \\cdot A_3 = 1 \\cdot -1 = -1 = A_2$\n\n$A_2 \\cdot A_3 = -1 \\cdot -1 = 1 = A_1$\n\nTherefore, the answer for the second test case is $1$.\n\n**Test case $3$:** $A_2 \\cdot A_3 = 3 \\cdot 3 = 9$ is not present in the array. Therefore, $[1, 3, 3]$ is not closed under multiplication, and the answer is $0$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/HMXecL4qbc8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"aryanag_adm","problem_tester":"","date_added":"11-07-2021","tags":{"0":"ad","1":"aryanag_adm","2":"cook132","3":"simple"},"problem_difficulty_level":"Unavailable","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/CLOSCHEF","time":{"view_start_date":1629658802,"submit_start_date":1629658802,"visible_start_date":1629658802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CLOSCHEF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK132/mandarin/CLOSCHEF.pdf), [Russian](https://www.codechef.com/download/translated/COOK132/russian/CLOSCHEF.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK132/bengali/CLOSCHEF.pdf) as well.

You are given an array $A$ with $N$ integers. You have to tell Chef whether this array is closed under multiplication. 

We say that an array is closed under multiplication if, for all sequences $1 \leq S_1 \lt S_2 \lt \dots \lt S_k \leq N$,  there exists $1 \leq x \leq N$ such that $A_{S_1} \cdot A_{S_2} \cdot \dots \cdot A_{S_k} = A_x$. 

Output 1 if it is closed, and 0 otherwise.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>