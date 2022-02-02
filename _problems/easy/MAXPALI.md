---
{"category_name":"easy","problem_code":"MAXPALI","problem_name":"Maximum Palindrome","problemComponents":{"constraints":"- $1 \\leq T \\leq 1000$\n- $2 \\leq N \\leq 2 \\cdot 10^5$\n- Sum of $N$ over all tests is atmost $2 \\cdot 10^5$.\n- $S$ must contain only lowercase Latin alphabets.\n- $S$ must contain at least $2$ distinct characters.","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line of input contains a single integer $T$, denoting the number of test cases. The description of $T$ test cases follows.\n- Each test case consists of a single line of input, containing one integer $N$ - the length of the string to be constructed.\n","inputFormatState":true,"outputFormat":"For each test case, output in a single line the string $S$ you construct.\n\n**Note:** You will get a `Wrong Answer` verdict if any of the following cases occur:\n- The length of the output string is not equal to $N$.\n- The output string has characters other than lowercase Latin alphabets, i.e, $[a-z]$.\n- The output string has all characters the same.\n- There exists a string $S\u0027$ of length $N$ with at least $2$ distinct characters, such that the output string has strictly fewer circular shifts being palindromes than $S\u0027$ does.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n2\n3\n6","output":"ab\ngcc\nabccba","explanation":"**Test Case $1$:** No palindrome is possible with a string of length $2$ having $2$ distinct characters.\n\n**Test Case $2$:** At most one circular shift of a string of length $3$ can be a palindrome. For the given string $\\verb+gcc+$, the circular shifts are $\\{\\verb+gcc, cgc, ccg+\\}$ of which only $\\verb+cgc+$ is a palindrome.\n\n**Test Case $3$:** At most two circular shifts of a string of length $6$ can be a palindrome. For the given string $\\verb+abccba+$, the circular shifts are $\\{\\verb+abccba, aabccb, baabcc, cbaabc, ccbaab, bccbaa+\\}$, out of which only the first and fourth strings are palindromes.\n","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"4-12-2021","tags":{"0":"daanish_adm","1":"easy","2":"sdelp21"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MAXPALI","time":{"view_start_date":1638723600,"submit_start_date":1638723600,"visible_start_date":1638723600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXPALI","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
This is an example statement in markdown. This is the statement of the problem [TANDC](https://codechef.com/problems/TANDC) on CodeChef. The main statement starts with the next paragraph. Please make sure to remove this paragraph from your statement before publishing your problem. If your problem doesn't contain Subtasks, you should remove the section subtask too. We are using markdown the syntax of which can be seen [at](https://github.com/showdownjs/showdown/wiki/Showdown's-Markdown-syntax). We request you to not use any HTML tags in the statement, e.g. no p, ul, li, pre, br or b tags. If you face any issue, please contact admins or email us at help@codechef.com.

Tracy is teaching Charlie maths via a game called $N$-Cube, which involves three sections involving $N$.

Tracy gives Charlie a number $N$, and Charlie makes a list of $N$-th powers of integers in increasing order $1^N, 2^N, 3^N, \dot, \text{so on}$. This teaches him exponentiation.

Then Charlie performs the following subtraction game $N$ times: Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if $N$ was 6, the list proceeds as $[1, 64, 729, 4096 ... ]$ to $[63, 685, 3367 ...]$, and so on $5$ more times.

After the subtraction game, Charlie has to correctly tell Tracy the $N$-th element of the list. This number is the *value of the game*.

After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers $M$ (where $M$ is a prime) and $R$ instead of just a single number $N$, and the game must start from $M_R - 1$ instead of $N$. Since the *value of the game* can now become large, Charlie just have to tell the largest integer $K$ such that $M_K$ divides this number. Since even $K$ can be large, output $K$ modulo 1000000007 ($10^9 + 7$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>