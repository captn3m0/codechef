---
{"category_name":"medium","problem_code":"TABRARRAY","problem_name":"Tree and Brilliant Array","problemComponents":{"constraints":"- $2 \\leq N \\leq 10^3$\n- $1 \\leq K \\leq 10^{12}$\n- $1 \\leq P_i \\leq i - 1$","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line contains two integers $N$ and $K$.\n- The second line contains $N-1$ integers $P_2, P_3, ..., P_{N}$.","inputFormatState":true,"outputFormat":"Print the number of **brilliant** arrays. As it can be large, print it modulo $998244353$.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3 6\n1 1\n","output":8,"explanation":"All possible **brilliant** arrays are $\\{1,1,1\\}$, $\\{2,1,1\\}$, $\\{2,1,2\\}$, $\\{2,2,1\\}$, $\\{3,1,1\\}$, $\\{4,1,1\\}$, $\\{5,1,1\\}$, $\\{6,1,1\\}$.","isDeleted":false},"1":{"id":2,"input":"5 100000\n1 1 3 3\n","output":477942,"explanation":"Some possible **brilliant** arrays are $\\{10,10,10,10,10\\}$, $\\{24,2,4,2,4\\}$, $\\{12,3,12,3,12\\}$. \n\nDon\u0027t forget to take the answer modulo $998244353$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"tabr","problem_tester":"aryanc403","date_added":"13-12-2021","tags":{"0":"cook136","1":"dynamic","2":"medium","3":"tabr"},"problem_difficulty_level":"Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/TABRARRAY","time":{"view_start_date":1639933200,"submit_start_date":1639933200,"visible_start_date":1639933200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TABRARRAY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
This is an example statement in markdown. This is the statement of the problem [TANDC](https://codechef.com/problems/TANDC) on CodeChef. The main statement starts with the next paragraph. Please make sure to remove this paragraph from your statement before publishing your problem. If your problem doesn't contain Subtasks, you should remove the section subtask too. We are using markdown the syntax of which can be seen [at](https://github.com/showdownjs/showdown/wiki/Showdown's-Markdown-syntax). We request you to not use any HTML tags in the statement, e.g. no p, ul, li, pre, br or b tags. If you face any issue, please contact admins or email us at help@codechef.com.

Tracy is teaching Charlie maths via a game called $N$-Cube, which involves three sections involving $N$.

Tracy gives Charlie a number $N$, and Charlie makes a list of $N$-th powers of integers in increasing order $1^N, 2^N, 3^N, \dot, \text{so on}$. This teaches him exponentiation.

Then Charlie performs the following subtraction game $N$ times: Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if $N$ was 6, the list proceeds as $[1, 64, 729, 4096 ... ]$ to $[63, 685, 3367 ...]$, and so on $5$ more times.

After the subtraction game, Charlie has to correctly tell Tracy the $N$-th element of the list. This number is the *value of the game*.

After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers $M$ (where $M$ is a prime) and $R$ instead of just a single number $N$, and the game must start from $M_R - 1$ instead of $N$. Since the *value of the game* can now become large, Charlie just have to tell the largest integer $K$ such that $M_K$ divides this number. Since even $K$ can be large, output $K$ modulo 1000000007 ($10^9 + 7$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>