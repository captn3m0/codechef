---
{"category_name":"easy","problem_code":"ARRFILL","problem_name":"Array Filling","problemComponents":{"constraints":"- $1 \\leq T \\leq 12600$\n- $1 \\leq N \\leq 10^9$\n- $1 \\leq M \\leq 10^5$\n- $1 \\leq x_i \\leq 10^9$\n- $2 \\leq y_i \\leq 10^9$\n- The sum of $M$ over all test cases does not exceed $10^6$.\n","constraintsState":true,"subtasks":"**Subtask #1 (100 points):** original constraints","subtasksState":true,"inputFormat":"- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.\n- Each testcase contains $M + 1$ lines of input.\n- The first line of each test case contains two space-separated integers $N, M$.\n- $M$ lines follow. For each valid $i$, the $i^{th}$ of these lines contains two space-separated integers $x_i, y_i$ - parameters of the $i^{th}$ operation.\n\n","inputFormatState":true,"outputFormat":"For each test case, output in a single line the maximum sum of integers of the array $A$ after $M$ operations.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n10 1\n5 2\n8 2\n5 2\n6 3\n3 2\n2 2\n1 3","output":"25\n41\n5","explanation":"**Test case $1$:** Optimal filling is $[5, 0, 5, 0, 5, 0, 5, 0, 5, 0]$.\n\n**Test case $2$:** Optimal filling is $[6, 6, 5, 6, 6, 0, 6, 6]$.\n\n**Test case $3$:** Optimal filling is $[2, 1, 2]$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/VoSp7opX4dA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"14-07-2021","tags":{"0":"aug21","1":"daanish_adm","2":"easy","3":"number"},"problem_difficulty_level":"Unavailable","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/ARRFILL","time":{"view_start_date":1629117000,"submit_start_date":1629117000,"visible_start_date":1629117000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ARRFILL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/AUG21/bengali/ARRFILL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG21/mandarin/ARRFILL.pdf), [Russian](https://www.codechef.com/download/translated/AUG21/russian/ARRFILL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG21/vietnamese/ARRFILL.pdf) as well.

You are given an array $A$ of size $N$. Initially, the array is filled with $0$-s.

There are $M$ types of operations that you can perform on array $A$. The $i^{th}$ operation can be described by two integers $(x_i, y_i)$. In this operation, you choose a set of indices $S$ such that 

- $1 \leq j \leq N$,
- $(j \bmod y_i) \neq 0$,
- $A_j = 0$, 

, then you set $A_j = x_i$ for all $j \in S$.


You can perform the operations in any order, but one type of operation can't be done more than once. What is the maximum sum of integers of the array $A$ you obtain if you perform the $M$ operations optimally?



For example, consider the array $A = [0, 0, 0, 0]$.
- Suppose $x = 3, y = 2$. Here you can choose indices $1$ and $3$ and set $A_1 = A_3 = 3$. So the array A becomes $[3, 0, 3, 0]$. In this operation you can't choose the indices $2$ and $4$ because $(2 \bmod 2) = 0$, $(4 \bmod 2) = 0$. 
- Suppose $x = 5, y = 3$ and you set $A_2 = 5$. So the array $A$ becomes $[3, 5, 3, 0]$. Here you can't choose index $1$ because $A_1 \gt 0$ and index $3$ because $(3 \bmod 3) = 0$ and $A_3 \gt 0$. However, you could also set $A_4 = 5$.

- Suppose $x = 4, y = 4$. Now you can't choose any index because $A_j \gt 0$  for all $1 \leq j \leq 3$ and $(4 \bmod 4) = 0$. So the array remains same.


**Note:** Since input-output is large, prefer using fast input-output methods.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>