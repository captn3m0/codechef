---
{"category_name":"school","problem_code":"GRIDXOR","problem_name":"Sarthak and his Magic Grid","problemComponents":{"constraints":"- $1 \\leq T \\leq 100$\n- $1 \\leq N \\leq 100$","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line of each input contains $T$ - the number of test cases. The test cases then follow.\n- The only line of each test case contains an integer $N$ - the size of the grid.","inputFormatState":true,"outputFormat":"For each test case, output $N$ lines, each containing $N$ space-separated integers, such that the grid satisfies the condition given in the statement.\n\nEach integer should be positive and $\\leq 10^9$.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"1\n3","output":"1 1 1\n1 1 1\n1 1 1\n","explanation":"The bitwise XOR of all rows, columns and main diagonals in the grid is $1$. Therefore, this satisfies the condition.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/tAF7wce7JEE","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"vishesh_s","problem_tester":"","date_added":"3-01-2022","tags":{"0":"bitwise","1":"bitwise","2":"cakewalk","3":"exun2021","4":"vishesh_s"},"problem_difficulty_level":"Unavailable","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/GRIDXOR","time":{"view_start_date":1642008600,"submit_start_date":1642008600,"visible_start_date":1642008600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GRIDXOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
This is an example statement in markdown. This is the statement of the problem [TANDC](https://codechef.com/problems/TANDC) on CodeChef. The main statement starts with the next paragraph. Please make sure to remove this paragraph from your statement before publishing your problem. If your problem doesn't contain Subtasks, you should remove the section subtask too. We are using markdown the syntax of which can be seen [at](https://github.com/showdownjs/showdown/wiki/Showdown's-Markdown-syntax). We request you to not use any HTML tags in the statement, e.g. no p, ul, li, pre, br or b tags. If you face any issue, please contact admins or email us at help@codechef.com.

Tracy is teaching Charlie maths via a game called $N$-Cube, which involves three sections involving $N$.

Tracy gives Charlie a number $N$, and Charlie makes a list of $N$-th powers of integers in increasing order $1^N, 2^N, 3^N, \dot, \text{so on}$. This teaches him exponentiation.

Then Charlie performs the following subtraction game $N$ times: Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if $N$ was 6, the list proceeds as $[1, 64, 729, 4096 ... ]$ to $[63, 685, 3367 ...]$, and so on $5$ more times.

After the subtraction game, Charlie has to correctly tell Tracy the $N$-th element of the list. This number is the *value of the game*.

After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers $M$ (where $M$ is a prime) and $R$ instead of just a single number $N$, and the game must start from $M_R - 1$ instead of $N$. Since the *value of the game* can now become large, Charlie just have to tell the largest integer $K$ such that $M_K$ divides this number. Since even $K$ can be large, output $K$ modulo 1000000007 ($10^9 + 7$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>