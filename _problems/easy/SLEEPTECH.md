---
{"category_name":"easy","problem_code":"SLEEPTECH","problem_name":"Sleep Technique ","problemComponents":{"constraints":"- $1 \\leq T \\leq 3 \\cdot 10^5$\n- $1 \\le N \\le 3 \\cdot 10^5$\n- $1 \\leq A \\leq B \\leq 10^9$\n- $1 \\leq L_i \\leq R_i \\leq 10^{18}$\n- Sum of $N$ over all test cases does not exceed $3 \\cdot 10^5$","constraintsState":true,"subtasks":"- **Subtask $1$ (30 points):** $1 \\leq L_i \\leq R_i \\leq 10^9$\n- **Subtask $2$ (10 points):** $A = 1$\n- **Subtask $3$ (60 points):** Original constraints","subtasksState":true,"inputFormat":"- The first line of the input contains the number $T$ - the number of test cases. The test cases then follow.\n- The first line of each test case contains integers $N$, $A$, and $B$ - the number of tasks and $A, B$ values described in the statement.\n- The next $N$ lines give you a description of the problems. Each line contains two numbers $L_i, R_i$ - a segment of joy for every task.","inputFormatState":true,"outputFormat":"For each test case, print the **maximum** level of joy at which Egor can wake up.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n3 1 5\n1 5\n3 9\n6 9\n3 7 54\n54 228\n228 1337\n69 213\n3 1 9\n100 100\n99 99\n98 98\n","output":"2\n2\n0\n","explanation":"- **Test case $1$:** We can use techniques $1$ and $2$ to wake up at minute $1 + 2 = 3$. At that time, there are $2$ tasks that give Egor joy: task $1$ (which gives joy during the range $[1, 5]$), and task $2$ (which gives joy during the range $[3, 9]$). It can be proven that Egor cannot acquire joy from all $3$ tasks at the same time, so $2$ is the maximum joyfulness Egor can wake up to.\n- **Test case $2$:** We can use techniques $15$, $22$, and $32$ to wake up at minute $15 + 22 + 32 = 69$. At that time. there are $2$ tasks that give Egor joy: task $1$ and task $3$.\n- **Test case $3$:** The maximum minute we can wake up to is $1 + 2 + \\dots + 9 = 45$, which means we cannot acquire joy from any task.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/v7Dilv-uV8g","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"vaaven","problem_tester":"","date_added":"23-12-2021","tags":{"0":"binary","1":"easy","2":"ltime103","3":"vaaven"},"problem_difficulty_level":"Easy-Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/SLEEPTECH","time":{"view_start_date":1640453400,"submit_start_date":1640453400,"visible_start_date":1640453400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SLEEPTECH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
This is an example statement in markdown. This is the statement of the problem [TANDC](https://codechef.com/problems/TANDC) on CodeChef. The main statement starts with the next paragraph. Please make sure to remove this paragraph from your statement before publishing your problem. If your problem doesn't contain Subtasks, you should remove the section subtask too. We are using markdown the syntax of which can be seen [at](https://github.com/showdownjs/showdown/wiki/Showdown's-Markdown-syntax). We request you to not use any HTML tags in the statement, e.g. no p, ul, li, pre, br or b tags. If you face any issue, please contact admins or email us at help@codechef.com.

Tracy is teaching Charlie maths via a game called $N$-Cube, which involves three sections involving $N$.

Tracy gives Charlie a number $N$, and Charlie makes a list of $N$-th powers of integers in increasing order $1^N, 2^N, 3^N, \dot, \text{so on}$. This teaches him exponentiation.

Then Charlie performs the following subtraction game $N$ times: Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if $N$ was 6, the list proceeds as $[1, 64, 729, 4096 ... ]$ to $[63, 685, 3367 ...]$, and so on $5$ more times.

After the subtraction game, Charlie has to correctly tell Tracy the $N$-th element of the list. This number is the *value of the game*.

After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers $M$ (where $M$ is a prime) and $R$ instead of just a single number $N$, and the game must start from $M_R - 1$ instead of $N$. Since the *value of the game* can now become large, Charlie just have to tell the largest integer $K$ such that $M_K$ divides this number. Since even $K$ can be large, output $K$ modulo 1000000007 ($10^9 + 7$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>