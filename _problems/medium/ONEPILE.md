---
{"category_name":"medium","problem_code":"ONEPILE","problem_name":"One Pile ","problemComponents":{"constraints":"- $1 \\leq T \\leq 100$\n- $2 \\leq N \\leq 500$\n- $1 \\leq B_i \\leq 10^9$\n- Sum of $N$ over all test cases does not exceed $500$","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- First line will contain $T$, number of testcases. Then the testcases follow.\n- First line of each test case consists of an integer $N$.\n- Second line consists of $N$ space separated integers denoting the array $B$.\n","inputFormatState":true,"outputFormat":"For each testcase, output the number of games Utkarsh wins modulo $998244353$.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"2\n2\n3 3\n3\n2 3 4\n","output":"7\n17\n","explanation":"- For the first test case, Utkarsh wins the game for following arrays:\n\n$[1,1]$, $[1,2]$, $[1,3]$, $[2,1]$, $[3,1]$, $[2,3]$, $[3,2]$.\n\nSo there are total $7$ possibilities.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"utkarsh_25dec","problem_tester":"","date_added":"17-09-2021","tags":{"0":"cook133","1":"medium","2":"utkarsh_25dec"},"problem_difficulty_level":"Unavailable","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/ONEPILE","time":{"view_start_date":1632078002,"submit_start_date":1632078002,"visible_start_date":1632078002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ONEPILE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Russian](https://www.codechef.com/download/translated/COOK133/russian/ONEPILE.pdf).

Utkarsh is forced to play another game with Ashish.

In this game there are $N$ piles, $i^{th}$ pile contains $A_i$ stones. **Utkarsh moves first**.

In his turn a player can choose any pile with non-zero stones and remove exactly one stone from that pile. The game ends when there is exactly one pile containing non-zero stones and the player who made the last move wins the game.

Now you are given an array $B$ of length $N$. Utkarsh wants to know for how many arrays A such that $1 \leq A_i \leq B_i$ for every $i$, he will win the game assuming that both players play optimally.

Since the answer can be large output it modulo $998244353$. 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>