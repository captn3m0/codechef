---
{"category_name":"easy","problem_code":"PARPERM","problem_name":"Partition It","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^4$\n- $2 \\leq N \\leq 10^5$\n- $1 \\leq K \\leq N - 1$\n- Sum of $N$ over all test cases does not exceed $5*10^5$","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- The first line of input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.\n- The first and only line of each test case contains two space-separated integers $N$ and $K$. \n","inputFormatState":true,"outputFormat":"For each test case first output a single line containing \u0022YES\u0022 (without quotes) if a set of size $K$ satisfying Chef\u0027s condition exists; and \u0022NO\u0022 if no such set exists. This line is not case-sensitive so \u0022YeS\u0022, \u0022nO\u0022, etc. are also acceptable. \n\nNext, if the answer is \u0022YES\u0022, print another line containing $K$ distinct space-separated integers from $1$ to $N$ denoting the numbers which Chef will give to his friend. The integers can be printed in any order.\n\nIf there are multiple solutions, you may print any of them.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n4 1\n4 2\n6 3\n","output":"Yes\n3\nYes\n4 2\nNo\n","explanation":"**Test case $1$:** Chef can give $[3]$ to his friend and keep $[1, 2, 4]$ for himself. $3$ is coprime with $1, 2$ and $4$ so the condition is satisfied. Another possible solution is Chef giving $[1]$ to his friend.\n\n**Test case $2$:** Chef can give $[2, 4]$ and keep $[1, 3]$ (or vice versa). It can be seen that $\\gcd(2, 1) = 1$, $\\gcd(2, 3) = 1$, $\\gcd(4, 1) = 1$, $\\gcd(4, 3) = 1$ and so the condition is satisfied.\n\n**Test case $3$:** There is no set of 3 numbers that can satisfy the given condition.\n","isDeleted":false}}},"video_editorial_url":"https://youtu.be/iX8lWERKigg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tejas10p","problem_tester":"","date_added":"14-11-2021","tags":{"0":"easy","1":"easy","2":"start17","3":"start17","4":"tejas10p"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PARPERM","time":{"view_start_date":1637170200,"submit_start_date":1637170200,"visible_start_date":1637170200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PARPERM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
This is an example statement in markdown. This is the statement of the problem [TANDC](https://codechef.com/problems/TANDC) on CodeChef. The main statement starts with the next paragraph. Please make sure to remove this paragraph from your statement before publishing your problem. If your problem doesn't contain Subtasks, you should remove the section subtask too. We are using markdown the syntax of which can be seen [at](https://github.com/showdownjs/showdown/wiki/Showdown's-Markdown-syntax). We request you to not use any HTML tags in the statement, e.g. no p, ul, li, pre, br or b tags. If you face any issue, please contact admins or email us at help@codechef.com.

Tracy is teaching Charlie maths via a game called $N$-Cube, which involves three sections involving $N$.

Tracy gives Charlie a number $N$, and Charlie makes a list of $N$-th powers of integers in increasing order $1^N, 2^N, 3^N, \dot, \text{so on}$. This teaches him exponentiation.

Then Charlie performs the following subtraction game $N$ times: Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if $N$ was 6, the list proceeds as $[1, 64, 729, 4096 ... ]$ to $[63, 685, 3367 ...]$, and so on $5$ more times.

After the subtraction game, Charlie has to correctly tell Tracy the $N$-th element of the list. This number is the *value of the game*.

After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers $M$ (where $M$ is a prime) and $R$ instead of just a single number $N$, and the game must start from $M_R - 1$ instead of $N$. Since the *value of the game* can now become large, Charlie just have to tell the largest integer $K$ such that $M_K$ divides this number. Since even $K$ can be large, output $K$ modulo 1000000007 ($10^9 + 7$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>