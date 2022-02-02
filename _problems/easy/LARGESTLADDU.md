---
{"category_name":"easy","problem_code":"LARGESTLADDU","problem_name":"Largest Laddu","problemComponents":{"constraints":"- $1 \\leq T \\leq 2 \\cdot 10^4$\n- $0 \\leq N \\leq 13$\n- $0 \\leq A_i \\leq 10^9$\n- Sum of $|A|$ over all test cases does not exceed $2 \\cdot 10^5$\n","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line contains a single integer $T$, denoting the number of testcases. The description of $T$ testcases follows.\n- Each testcase consists of two lines:\n- The first line contains an integer $N$, denoting that Chef starts with $2^N$ laddus.\n- The next line contains $2^N$ space-separated integers, denoting the initial sizes of the laddus.\n","inputFormatState":true,"outputFormat":"For each testcase, output in a single line `\u0022YES\u0022` or `\u0022NO\u0022`; the answer to the problem.   \nYou may print each character of the answer in uppercase or lowercase (for example, the strings \u0022yEs\u0022, \u0022yes\u0022, \u0022Yes\u0022 and \u0022YES\u0022 will all be treated as identical).\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"4\n1\n1 1\n2\n2 1 1 1\n2\n2 3 3 4\n0\n3\n","output":"YES\nYES\nNO\nYES","explanation":"- **Test Case $1$**: Pairing up both laddus, we get a new laddu of size $2$. There is only only one laddu left so Chef is successful.\n- **Test Case $2$**: One way to get a single laddu is:   \n    * $[2,1,1,1] \\rightarrow [(2+1),(1+1)] \\rightarrow [3,2] \\rightarrow [(3+2)] \\rightarrow [5]$\n- **Test Case $3$**: There are two possible initial pairings, neither of which allow Chef to reach a single laddu at the end:\n    * $[2,3,3,4] \\rightarrow [(2+3),(3+4)] \\rightarrow [5,7]$   \n    Now Chef cannot pair up the laddus due to the condition given in Step 1.\n    * $[(2+4),(3+3)]$, which is already an invalid pairing.\n\n- **Test Case $4$**: Chef already has one laddu, he is satisfied\n","isDeleted":false}}},"video_editorial_url":"https://youtu.be/QKFKHFFm8YI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nandeesh_adm","problem_tester":"","date_added":"27-10-2021","tags":{"0":"nandeesh_adm","1":"simple","2":"snck1b21"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/LARGESTLADDU","time":{"view_start_date":1635694200,"submit_start_date":1635694200,"visible_start_date":1635694200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LARGESTLADDU","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
This is an example statement in markdown. This is the statement of the problem [TANDC](https://codechef.com/problems/TANDC) on CodeChef. The main statement starts with the next paragraph. Please make sure to remove this paragraph from your statement before publishing your problem. If your problem doesn't contain Subtasks, you should remove the section subtask too. We are using markdown the syntax of which can be seen [at](https://github.com/showdownjs/showdown/wiki/Showdown's-Markdown-syntax). We request you to not use any HTML tags in the statement, e.g. no p, ul, li, pre, br or b tags. If you face any issue, please contact admins or email us at help@codechef.com.

Tracy is teaching Charlie maths via a game called $N$-Cube, which involves three sections involving $N$.

Tracy gives Charlie a number $N$, and Charlie makes a list of $N$-th powers of integers in increasing order $1^N, 2^N, 3^N, \dot, \text{so on}$. This teaches him exponentiation.

Then Charlie performs the following subtraction game $N$ times: Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if $N$ was 6, the list proceeds as $[1, 64, 729, 4096 ... ]$ to $[63, 685, 3367 ...]$, and so on $5$ more times.

After the subtraction game, Charlie has to correctly tell Tracy the $N$-th element of the list. This number is the *value of the game*.

After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers $M$ (where $M$ is a prime) and $R$ instead of just a single number $N$, and the game must start from $M_R - 1$ instead of $N$. Since the *value of the game* can now become large, Charlie just have to tell the largest integer $K$ such that $M_K$ divides this number. Since even $K$ can be large, output $K$ modulo 1000000007 ($10^9 + 7$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>