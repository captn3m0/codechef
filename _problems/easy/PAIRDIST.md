---
{"category_name":"easy","problem_code":"PAIRDIST","problem_name":"Chef and Pairwise Distances","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^4$\n- $1 \\leq N \\leq 2 \\cdot 10^5$\n- $1 \\leq A_i \\leq 10^9$\n- Sum of $N$ over all test cases does not exceed $2 \\cdot 10^5$\n","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line contains an integer $T$ denoting the number of test cases. The $T$ test cases then follow.\n- The first line of each test case contains a single integer $N$.\n- The second line of each test case contains $N$ space-separated integers $A_1, A_2, \\ldots, A_N$.\n","inputFormatState":true,"outputFormat":"For each test case, if there is no set of points satisfying the stated condition, output `NO`.\n\nOtherwise, output `YES` on one line, then output $N$ lines. Each line should contain two integers $X_i$ and $Y_i$ ($-10^{18} \\leq X_i, Y_i \\leq 10^{18}$) denoting the $x$ and $y$ coordinates of the point $P_i$ respectively.\n\nIt can be proven that if a solution exists, then a solution exists under the constraints above.\n\nOutput is case insensitive.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n2\n5 13\n3\n8 4 20\n5\n2 9 12 3 8\n","output":"YES\n3 9\n13 17\nYES\n18 5\n10 1\n1 16\nNO\n","explanation":"- For the first test case, we can choose $P_1 = (3,9)$ and $P_2 = (13,17)$. The Manhattan distance between $P_1$ and $P_2$ is $|3-13|+|9-17|=18$, and $A_1 + A_2 = 5 + 13 = 18$.\n\n- For the second test case, we can choose $P_1 = (18,5)$, $P_2 = (10,1)$, and $P_3 = (1,16)$.\n\n    - The Manhattan distance between $P_1$ and $P_2$ is $|18-10|+|5-1|=12$, and $A_1 + A_2 = 8 + 4 = 12$.\n    - The Manhattan distance between $P_1$ and $P_3$ is $|18-1|+|5-16|=28$, and $A_1 + A_3 = 8 + 20 = 28$.\n    - The Manhattan distance between $P_2$ and $P_3$ is $|10-1|+|1-16|=24$, and $A_2 + A_3 = 4 + 20 = 24$.\n\n- For the third test case, it can be proven that there does not exist $5$ points satisfying these constraints.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"flamestorm153","problem_tester":"","date_added":"17-09-2021","tags":{"0":"cook133","1":"easy","2":"flamestorm153"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PAIRDIST","time":{"view_start_date":1632078002,"submit_start_date":1632078002,"visible_start_date":1632078002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PAIRDIST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Russian](https://www.codechef.com/download/translated/COOK133/russian/PAIRDIST.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK133/bengali/PAIRDIST.pdf).

Chef has an array $A$ with $N$ elements. He wants to find $N$ points $P_1, \dots, P_N$ with integer coordinates on the 2D coordinate plane such that, for all pairs of indices $i$ and $j$ ($1 \leq i \lt j \leq N$), the Manhattan distance from $P_i$ to $P_j$ is $A_i+A_j$. Help him find any $N$ points satisfying the condition, or state that no such points exist.

As a reminder, the **Manhattan distance** between the points $(x_1, y_1)$ and $(x_2, y_2)$ is defined as $|x_1 - x_2| + |y_1 - y_2|$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>