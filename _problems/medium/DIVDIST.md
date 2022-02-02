---
{"category_name":"medium","problem_code":"DIVDIST","problem_name":"Divisible Distances","problemComponents":{"constraints":"- $1 \\le T \\le 100\\,000$\n- $1 \\le K \u0026lt; N \\le 500\\,000$\n- The sum of $N$ over all test cases in one input does not exceed $1000\\,000$.","constraintsState":true,"subtasks":"**Subtask 1 (15 points):** $N \\le 1000$, $\\sum N \\le 5000$, $K$ **is odd**.\n\n**Subtask 2 (20 points):** $N \\le 1000$, $\\sum N \\le 5000$.\n\n**Subtask 3 (25 points):** $N \\le 100\\,000$, $\\sum N \\le 200\\,000$, $K$ **is odd**.\n\n**Subtask 4 (20 points):** $N \\le 100\\,000$, $\\sum N \\le 200\\,000$.\n\n**Subtask 5 (10 points):** $K$ **is odd**.\n\n**Subtask 6 (10 points):** no additional constraints.\n","subtasksState":true,"inputFormat":"The first line of input contains a single integer $T$ $-$ the number of test cases. The descriptions of $T$ test cases follow.\n\nThe first line of each test case contains two integers $N$ and $K$. Each of the next $(N-1)$ lines contains two integers $u$, $v$ ($1 \\le u, v \\le N$, $u \\ne v$), denoting that there is an edge between vertices $u$ and $v$. It is guaranteed that the described graph is a tree.","inputFormatState":true,"outputFormat":"For each test case output one integer $-$ the maximum possible number of vertices you can choose so that the distance between any two of them is divisible by $K$.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n5 2\n1 2\n1 3\n1 4\n1 5\n10 3\n1 2\n2 3\n3 4\n4 5\n5 6\n6 7\n3 8\n8 9\n9 10\n10 3\n1 2\n2 3\n3 4\n4 5\n5 6\n6 7\n4 8\n8 9\n9 10\n","output":"4\n3\n4\n","explanation":"In the first test case, the only optimal set is $\\{2, 3, 4, 5\\}$.\n\nIn the second test case, one of the optimal sets is $\\{3, 6, 10\\}$.\n\nIn the third test case, the only optimal set is $\\{1, 4, 7, 10\\}$.\n\nNote that sample input does not satisfy the constraints of the first, third, and fifth subtasks as it contains even $K$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"anton_trygub","problem_tester":"tabr","date_added":"28-01-2022","tags":{"0":"anton_trygub","1":"ltime104","2":"medium"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DIVDIST","time":{"view_start_date":1643477400,"submit_start_date":1643477400,"visible_start_date":1643477400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DIVDIST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
This is an example statement in markdown. This is the statement of the problem [TANDC](https://codechef.com/problems/TANDC) on CodeChef. The main statement starts with the next paragraph. Please make sure to remove this paragraph from your statement before publishing your problem. If your problem doesn't contain Subtasks, you should remove the section subtask too. We are using markdown the syntax of which can be seen [at](https://github.com/showdownjs/showdown/wiki/Showdown's-Markdown-syntax). We request you to not use any HTML tags in the statement, e.g. no p, ul, li, pre, br or b tags. If you face any issue, please contact admins or email us at help@codechef.com.

Tracy is teaching Charlie maths via a game called $N$-Cube, which involves three sections involving $N$.

Tracy gives Charlie a number $N$, and Charlie makes a list of $N$-th powers of integers in increasing order $1^N, 2^N, 3^N, \dot, \text{so on}$. This teaches him exponentiation.

Then Charlie performs the following subtraction game $N$ times: Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if $N$ was 6, the list proceeds as $[1, 64, 729, 4096 ... ]$ to $[63, 685, 3367 ...]$, and so on $5$ more times.

After the subtraction game, Charlie has to correctly tell Tracy the $N$-th element of the list. This number is the *value of the game*.

After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers $M$ (where $M$ is a prime) and $R$ instead of just a single number $N$, and the game must start from $M_R - 1$ instead of $N$. Since the *value of the game* can now become large, Charlie just have to tell the largest integer $K$ such that $M_K$ divides this number. Since even $K$ can be large, output $K$ modulo 1000000007 ($10^9 + 7$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>