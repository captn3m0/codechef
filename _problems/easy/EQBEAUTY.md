---
{"category_name":"easy","problem_code":"EQBEAUTY","problem_name":"Equal Beauty","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^5$\n- $2 \\leq N \\leq 10^5$\n- $-10^9 \\leq A_i  \\leq 10^9$\n- Sum of $N$ does not exceeds $5⋅10^5$ over all testcases\n","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line of input contains a single integer $T$, denoting the number of test cases. The description of $T$ test cases follow.\n- Each testcase contains two lines.\n- The first line contains $N$, the length of the array.\n- The second line contains $N$ space-separated integers $A_1,A_2,...,A_N$ representing the initial array.","inputFormatState":true,"outputFormat":"For each testcase, output in a single line, the minimum number of moves required to make the given array good.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"2\n3\n4 2 6\n4\n-2 4 -2 4","output":"2\n0\n","explanation":"**Test Case 1:** We can increase the first element($A_1$) by $2$ in two moves. Now, the array $A$ becomes $[6, 2, 6]$, and is good, since it can be partitioned into two arrays, ($[2], [6, 6]$), each with beauty $0$. \n\n**Test Case 2:** The given array ($[-2, 4, -2, 4]$) is good since it can be partitioned into two arrays ($[-2, -2], [4, 4]$), each with beauty $0$. Alternatively, it is also possible to partition it into ($[-2, 4], [-2, 4]$), each with beauty $6$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/L01E5FbcE3w","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"satyam_343","problem_tester":"","date_added":"17-10-2021","tags":{"0":"binary","1":"easy","2":"satyam_343","3":"snck1a21"},"problem_difficulty_level":"Unavailable","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/EQBEAUTY","time":{"view_start_date":1635003000,"submit_start_date":1635003000,"visible_start_date":1635003000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EQBEAUTY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/SNCK1A21/mandarin/EQBEAUTY.pdf), [Russian](https://www.codechef.com/download/translated/SNCK1A21/russian/EQBEAUTY.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SNCK1A21/vietnamese/EQBEAUTY.pdf) as well.

The **beauty** of an (non-empty) array of integers is defined as the difference between its largest and smallest element.
 
For example, the **beauty** of the array $[2,3,4,4,6]$ is $6 - 2 = 4$.

An array $A$ is said to be **good** if it is possible to partition the elements of $A$ into two non-empty arrays $B_1$ and $ B_2$  such that 
- $B_1$ and $ B_2$ have the same beauty.
- Each element of array $A$ should be in exactly one array: either in $B_1$ or in $B_2$.

For example, the array $[6, 2, 4, 4, 4]$ is good because its elements can be partitioned into two arrays $B_1 = [6, 4, 4]$ and $B_2 = [2, 4]$, where both $B_1$ and $B_2$ have the same beauty ($6-4 = 4-2 = 2$).  

You are given an array $A$ of length $N$. In one move you can:
- Select an index $i$ $(1\leq i \leq N)$ and either increase $A_i$ by $1$ or decrease $A_i$ by $1$.

Find the minimum number of moves required to make the array $A$ good.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>