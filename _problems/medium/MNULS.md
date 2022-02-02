---
{"category_name":"medium","problem_code":"MNULS","problem_name":"Counting manuls","problemComponents":{"constraints":"- $3 \\leq N \\leq 10^{18}$\n- $3 \\leq K \\leq 10^4$\n","constraintsState":true,"subtasks":"- **Subtask $1$ (20 points)**: $3 \\leq K \\leq 300$, TL - $2$ sec\n- **Subtask $2$ (40 points)**: $3 \\leq K \\leq 1900$, TL - $8$ sec\n- **Subtask $3$ (10 points)**: $3 \\leq K \\leq 3000$, TL - $3$ sec\n- **Subtask $4$ (30 points)**: Original constraints, TL - $3$ sec\n","subtasksState":true,"inputFormat":"The only line of input contains two space-separated integers $N$ and $K$.","inputFormatState":true,"outputFormat":"Print the answer to the problem - the **minimum** number of pictures that can be used.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"4 3","output":3,"explanation":"Consider the following sequence, where each element is the number of manuls in each picture: $[1, 2, 4]$.\n\n- For the second picture with $2$ manuls:\n    - $\\mathbf{lcm}(1, 2) = 2 \\le 1 \\cdot (1 + 1)$\n    - $1 \\lt 2 \\le 1 + 3$\n- For the third picture with $4$ manuls:\n    - $\\mathbf{lcm}(2, 4) = 4 \\le 2 \\cdot (2 + 1)$\n    - $2 \\lt 4 \\le 2 + 3$\n\nNo shorter sequence of pictures is possible.","isDeleted":false},"1":{"id":2,"input":"29 7","output":7,"explanation":"One of the shortest sequences of pictures is $[1, 2, 6, 12, 18, 24, 30]$.","isDeleted":false},"2":{"id":3,"input":"228 17","output":17,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"2 - 8","source_sizelimit":50000,"problem_author":"fairy_winx","problem_tester":"","date_added":"22-12-2021","tags":{"0":"fairy_winx"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1640453400,"submit_start_date":1640453400,"visible_start_date":1640453400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MNULS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
This is an example statement in markdown. This is the statement of the problem [TANDC](https://codechef.com/problems/TANDC) on CodeChef. The main statement starts with the next paragraph. Please make sure to remove this paragraph from your statement before publishing your problem. If your problem doesn't contain Subtasks, you should remove the section subtask too. We are using markdown the syntax of which can be seen [at](https://github.com/showdownjs/showdown/wiki/Showdown's-Markdown-syntax). We request you to not use any HTML tags in the statement, e.g. no p, ul, li, pre, br or b tags. If you face any issue, please contact admins or email us at help@codechef.com.

Tracy is teaching Charlie maths via a game called $N$-Cube, which involves three sections involving $N$.

Tracy gives Charlie a number $N$, and Charlie makes a list of $N$-th powers of integers in increasing order $1^N, 2^N, 3^N, \dot, \text{so on}$. This teaches him exponentiation.

Then Charlie performs the following subtraction game $N$ times: Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if $N$ was 6, the list proceeds as $[1, 64, 729, 4096 ... ]$ to $[63, 685, 3367 ...]$, and so on $5$ more times.

After the subtraction game, Charlie has to correctly tell Tracy the $N$-th element of the list. This number is the *value of the game*.

After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers $M$ (where $M$ is a prime) and $R$ instead of just a single number $N$, and the game must start from $M_R - 1$ instead of $N$. Since the *value of the game* can now become large, Charlie just have to tell the largest integer $K$ such that $M_K$ divides this number. Since even $K$ can be large, output $K$ modulo 1000000007 ($10^9 + 7$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>