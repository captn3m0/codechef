---
{"category_name":"easy","problem_code":"DEJAVU","problem_name":"Deja Vu","problemComponents":{"constraints":"- $1 \\leq T \\leq 10$\n- $1 \\leq N \\leq 200$\n- $1 \\leq A_i \\leq 10^6$\n","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- Each test file contains multiple test cases. The first line contains the number of test cases, $T$. Description of the test cases follows.\n- The first line of each test case contains a single integer $N$, the length of the array.\n- The second line of each test case contains $N$ space-separated integers, the elements of the array.","inputFormatState":true,"outputFormat":"For each test case, output in a single line, the minimum cost of operations that is required to sort the array according to the given scheme.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"2\n5\n1 2 4 5 3\n5\n1 2 3 4 5","output":"11\n0","explanation":"- In the first test case, we can achieve an optimal cost of $11$ with the following sequence of operations:\n- First split the sequence $[1, 2, 4, 5, 3]$ between $5$ and $3$ into two new sequences: $[1, 2, 4, 5]$ and $[3]$. We have two sequences now: $\\{[1, 2, 4, 5], [3]\\}$. The cost to perform this operation is $min(length([1, 2, 4, 5]),\\ length([3]))$ = $min(4, 1)$ = $1$.\n- Now, split the sequence $[1, 2, 4, 5]$ between $2$ and $4$ into two new sequences: $[1, 2]$ and $[4, 5]$. We have three sequences now: $\\{[1, 2], [4, 5], [3]\\}$. The cost to perform this operation is $min(length([1, 2]),\\ length([4, 5]))$ = $min(2, 2)$ = $2$.\n- Now, concatenate the sequences $[3]$ and $[4, 5]$ in this order to form a new sequence: $[3, 4, 5]$. We have two sequences now: $\\{[1, 2], [3, 4, 5]\\}$. The cost to perform this operation is $length([3]) + length([4, 5])$ = $1 + 2$ = $3$.\n- Now, concatenate the sequences $[1, 2]$ and $[3, 4, 5]$ in this order to form a new sequence: $[1, 2, 3, 4, 5]$. We have one sequence now: $[1, 2, 3, 4, 5]$, which is sorted as desired. The cost to perform this operation is $length([1, 2]) + length([3, 4, 5])$ = $2 + 3$ = $5$.\n- Hence, the total cost = $1 + 2 + 3 + 5$ = $11$.\n- In the second test case, we notice that the sequence is already in ascending order. Hence, we need not do any operations. The total cost is $0$, without a scratch.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hitch_hiker42","problem_tester":"","date_added":"12-08-2021","tags":{"0":"cdmn2021","1":"dynamic","2":"greedy","3":"hitch_hiker42","4":"medium"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/DEJAVU","time":{"view_start_date":1630603800,"submit_start_date":1630603800,"visible_start_date":1630603800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DEJAVU","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You're given a sequence of $N$ - **distinct** positive integers, not necessarily sorted in ascending order. Your task is pretty straightforward: sort the sequence in ascending order. At any point of time, you can perform one of the following operations:

- If there is only one sequence, with a length greater than $1$, **split** it at some point to divide it into two non-empty sequences. The cost to perform this operation is the minimum of the sizes of the two broken parts.

- If there are multiple sequences (due to one or more split operations in the past), you may choose one of them with a length greater than $1$ and split it at some point to divide it into two non-empty sequences. The cost to perform this operation is the minimum of the sizes of the two broken parts.

- If there are multiple sequences (due to one or more split operations in the past), you may choose two of them and **concatenate** them in any order. The cost to perform this operation is the length of the resulting sequence, i.e., the sum of the lengths of the first and the second part.

It turns out that there are a LOT of ways to sort the array by following this scheme! You need to find out the minimum cost of all the operations required to sort the array in the optimal manner.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>