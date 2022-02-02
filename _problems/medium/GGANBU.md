---
{"category_name":"medium","problem_code":"GGANBU","problem_name":"From Your GGANBU","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^4$\n- $2 \\leq N \\leq 10^5$\n- $1 \\leq Q \\leq 10^5$\n- $0 \\leq M \\leq N-1$\n- $1 \\leq K \\leq 30$\n- $1 \\leq P_i \\leq N$\n- $-10^9 \\leq A_i \\leq 10^9$\n- $1 \\leq u, v \\leq N$\n- $S$ will always contain only edges which are a part of the tree.\n- Sum of $N$ over all test cases does not exceed $10^5$\n- Sum of $Q$ over all test cases does not exceed $10^5$","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line of input contains a single integer $T$, denoting the number of test cases. The description of $T$ test cases follows.\n- The first line of each test case contains two space-separated integers $N$ and $Q$, denoting the number of nodes of the tree and the number of queries respectively.\n- The second line contains $N-1$ space-separated integers $P_2, P_3, \\ldots, P_N$, where $P_i$ is the parent of node $i$.\n- The third line contains $N$ space-separated integers $A_1, A_2, \\ldots, A_N$ — the values of the nodes.\n- The fourth line contains a single integer $M$, denoting the number of edges in the set $S$.\n- The next $M$ lines describe the set $S$. The $i$-th of these $M$ lines contains two integers $u_i$ and $v_i$, denoting that edge $u_i-v_i$ is present in $S$.\n- The next $Q$ lines each contain $3$ integers describing the queries as given in the statement.","inputFormatState":true,"outputFormat":"For each query of type $1$, output on a new line the maximum value of $\\sum_{v\\in T_u} Z_v\\cdot A_v$, or `IMPOSSIBLE` if there doesn\u0027t exist a way to remove $K-1$ non-special edges.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"1\n5 9\n1 1 2 2\n1 -3 4 -6 10\n1\n1 3\n1 1 3\n3 1 3\n1 1 3\n1 2 2\n2 2 5\n1 2 3\n1 1 4\n1 1 5\n1 2 1","output":"17\n20\n11\nIMPOSSIBLE\n5\nIMPOSSIBLE\n1\n","explanation":"![](https://i.ibb.co/sRQwTdD/chart.png)\n\n**Query 1:** $S = \\{(1, 3)\\}$. Remove edges $(1, 2)$ and $(2, 5)$. The $Z$-values of the nodes are $[1, 2, 1, 2, 3]$. This gives us $\\sum_{v\\in T_1} Z_v\\cdot A_v = 1\\cdot 1 + 2\\cdot (-3) + 1\\cdot 4 + 2\\cdot (-6) + 3\\cdot 10 = 17$.\n\n**Query 2:** Remove $(1, 3)$ from $S$. $S$ is now empty.\n\n**Query 3:** $S$ is empty. Remove edges $(1, 3)$ and $(2, 5)$. The $Z$-values of the nodes are $[1, 1, 2, 1, 2]$, which makes $\\sum_{v\\in T_1} Z_v\\cdot A_v = 20$.\n\n**Query 4:** - $S$ is empty. Remove the edge $(2, 5)$. This gives us $Z_2 = Z_4 = 1$ and $Z_5 = 2$, with the value being $1\\cdot (-3) + 1\\cdot (-6) + 2\\cdot 10 = 11$.\n\n**Query 5:** Add $(2, 5)$ to $S$. Now, $S = \\{(2, 5)\\}$.\n\n**Query 6:** It is impossible to remove two non-special edges from the subtree of $2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/zo5o3cXu5tg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"nishitsharma03","problem_tester":"","date_added":"17-12-2021","tags":{"0":"nishitsharma03"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1640194200,"submit_start_date":1640194200,"visible_start_date":1640194200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GGANBU","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
This is an example statement in markdown. This is the statement of the problem [TANDC](https://codechef.com/problems/TANDC) on CodeChef. The main statement starts with the next paragraph. Please make sure to remove this paragraph from your statement before publishing your problem. If your problem doesn't contain Subtasks, you should remove the section subtask too. We are using markdown the syntax of which can be seen [at](https://github.com/showdownjs/showdown/wiki/Showdown's-Markdown-syntax). We request you to not use any HTML tags in the statement, e.g. no p, ul, li, pre, br or b tags. If you face any issue, please contact admins or email us at help@codechef.com.

Tracy is teaching Charlie maths via a game called $N$-Cube, which involves three sections involving $N$.

Tracy gives Charlie a number $N$, and Charlie makes a list of $N$-th powers of integers in increasing order $1^N, 2^N, 3^N, \dot, \text{so on}$. This teaches him exponentiation.

Then Charlie performs the following subtraction game $N$ times: Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if $N$ was 6, the list proceeds as $[1, 64, 729, 4096 ... ]$ to $[63, 685, 3367 ...]$, and so on $5$ more times.

After the subtraction game, Charlie has to correctly tell Tracy the $N$-th element of the list. This number is the *value of the game*.

After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers $M$ (where $M$ is a prime) and $R$ instead of just a single number $N$, and the game must start from $M_R - 1$ instead of $N$. Since the *value of the game* can now become large, Charlie just have to tell the largest integer $K$ such that $M_K$ divides this number. Since even $K$ can be large, output $K$ modulo 1000000007 ($10^9 + 7$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>