---
{"category_name":"medium","problem_code":"UNRUPD","problem_name":"Unreasonable Updates","problemComponents":{"constraints":"- $1 \\le N \\le 2\\times10^5$\n- $1 \\le Q \\le 3\\times10^5$\n- $0 \\le A_i \\le 2^{30}-1$\n- For queries of type $1$ and $2$, $1 \\le L \\le R \\le N$\n- For queries of type $3$, $1 \\le x \\le N$","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line contains $2$ integers, $N$ and $Q$ - the number of elements in the array $A$ and the number of queries, respectively.\n- The next line contains $N$ integers - $A_1$, $A_2$, $\\ldots$, $A_N$, the elements of the array $A$.\n- $i$-th line of the next $Q$ lines contains the description of the $i$-th query.","inputFormatState":true,"outputFormat":"For each query of type $3$, output the value of $A_x$.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3 7\n1 2 3\n2 2 3\n3 2\n3 3\n1 1 3\n3 1\n3 2\n3 3","output":"0\n2\n1\n0\n3","explanation":"Initially, $A = [1,2,3]$\n- Query $1$: $A$ becomes $[1, 2$ $\\\u0026amp;$ $(2-1), 3$ $\\\u0026amp;$ $(3-1)] = [1, 0, 2]$.\n- Query $2$: The value of $A_2 = 0$.\n- Query $3$: The value of $A_3 = 2$.\n- Query $4$: $A$ becomes $[1, 0, 2$ $|$ $(2-1)] = [1, 0, 3]$.\n- Query $5$: The value of $A_1 = 1$.\n- Query $6$: The value of $A_2 = 0$.\n- Query $7$: The value of $A_3 = 3$.\n","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"mohammed200218","problem_tester":"tabr","date_added":"24-12-2021","tags":{"0":"mohammed200218"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1642957200,"submit_start_date":1642957200,"visible_start_date":1642957200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UNRUPD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
This is an example statement in markdown. This is the statement of the problem [TANDC](https://codechef.com/problems/TANDC) on CodeChef. The main statement starts with the next paragraph. Please make sure to remove this paragraph from your statement before publishing your problem. If your problem doesn't contain Subtasks, you should remove the section subtask too. We are using markdown the syntax of which can be seen [at](https://github.com/showdownjs/showdown/wiki/Showdown's-Markdown-syntax). We request you to not use any HTML tags in the statement, e.g. no p, ul, li, pre, br or b tags. If you face any issue, please contact admins or email us at help@codechef.com.

Tracy is teaching Charlie maths via a game called $N$-Cube, which involves three sections involving $N$.

Tracy gives Charlie a number $N$, and Charlie makes a list of $N$-th powers of integers in increasing order $1^N, 2^N, 3^N, \dot, \text{so on}$. This teaches him exponentiation.

Then Charlie performs the following subtraction game $N$ times: Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if $N$ was 6, the list proceeds as $[1, 64, 729, 4096 ... ]$ to $[63, 685, 3367 ...]$, and so on $5$ more times.

After the subtraction game, Charlie has to correctly tell Tracy the $N$-th element of the list. This number is the *value of the game*.

After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers $M$ (where $M$ is a prime) and $R$ instead of just a single number $N$, and the game must start from $M_R - 1$ instead of $N$. Since the *value of the game* can now become large, Charlie just have to tell the largest integer $K$ such that $M_K$ divides this number. Since even $K$ can be large, output $K$ modulo 1000000007 ($10^9 + 7$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>