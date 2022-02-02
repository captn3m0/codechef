---
{"category_name":"easy","problem_code":"REMONE","problem_name":"Remove One Element","problemComponents":{"constraints":"- $1 \\leq T \\leq 7$\n- $2 \\leq N \\leq 10^5$\n- $1 \\leq A_i \\leq 10^9$\n- $1 \\leq B_i \\leq 2 \\cdot 10^9$\n- $A_1, A_2, \\dots, A_N$ are pairwise distinct.\n- $B_1, B_2, \\dots, B_{N-1}$ are pairwise distinct.\n- Sum of $N$ over all test cases does not exceed $5 \\cdot 10^5$.","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- The first line of input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.\n- Each test case contains $3$ lines of input.\n- The first line contains an integer $N$ - the length of array $A$.\n- The second line contains $N$ space-separated integers $A_1, A_2, \\dots, A_N$, denoting the array $A$.\n- The third line contains $N - 1$ space-separated integers $B_1, B_2, \\dots, B_{N-1}$, denoting the array $B$.","inputFormatState":true,"outputFormat":"For each test case, output the value of $X$ chosen by Bob. In case there are multiple possible values of $X$, print the smallest of them.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n4\n1 4 3 8\n15 8 11\n2\n4 8\n10\n2\n2 4\n3","output":"7\n2\n1","explanation":"**Test case $1$:** Bob takes the elements $\\{1, 4, 8\\}$ and adds $7$ to them to obtain a new sequence $\\{8, 11, 15\\}$. There is no other value of $X$ that can be added to the elements of $A$ to get $B$.\n\n**Test case $3$:** There is only one option with Bob to consider, i.e. to take element $\\{2\\}$ and add $1$ to it to get array $B$. If he takes element $\\{4\\}$, he will have to add $-1$ which is not allowed.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/MY8sxk9nDUw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"utkarsh_adm","problem_tester":"","date_added":"26-08-2021","tags":{"0":"greedy","1":"simple","2":"start10","3":"utkarsh_adm"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/REMONE","time":{"view_start_date":1630243800,"submit_start_date":1630243800,"visible_start_date":1630243800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=REMONE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Alice has an array $A$ consisting of $N$ **distinct** integers. Bob takes exactly $N - 1$ elements from this array and adds a positive integer $X$ (i.e. $X \gt 0$) to each of these numbers and then shuffles them to form a new array $B$ of length $N - 1$. 

You are given both arrays $A$ and $B$. You have to identify the value of $X$ chosen by Bob. If there are multiple possible values of $X$, print the **smallest** of them. It is guaranteed that for the given input, there exists at least one possible value of $X$.

**Note:** Since the input is large, prefer using fast input methods.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>