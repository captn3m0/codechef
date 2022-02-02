---
{"category_name":"school","problem_code":"CHSFORMT","problem_name":"Chess Format","problemComponents":{"constraints":"- $1 \\leq T \\leq 1100$\n- $1 \\leq a \\leq 100$\n- $0 \\leq b \\leq 10$\n","constraintsState":true,"subtasks":"\n","subtasksState":false,"inputFormat":"- First line will contain $T$, number of testcases. Then the testcases follow.\n- Each testcase contains a single line of input, two integers $a, b$.\n","inputFormatState":true,"outputFormat":"For each testcase, output in a single line, answer $1$ for bullet, $2$ for blitz, $3$ for rapid, and $4$ for classical format.\n\n \n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"4\n1 0\n4 1\n100 0\n20 5\n","output":"1\n2\n4\n3","explanation":"**TestCase $1$:** Since $a + b = 1 \\lt 3$, it belongs to bullet format.\n\n**TestCase $2$:** Since $3 \\leq (a + b = 5) \\leq 10$, it belongs to blitz format.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/GleW_E_iH9o","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"19-07-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"start7","3":"vichitr"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHSFORMT","time":{"view_start_date":1627219800,"submit_start_date":1627219800,"visible_start_date":1627219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHSFORMT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/START7/russian/CHSFORMT.pdf) and [Mandarin Chinese](https://www.codechef.com/download/translated/START7/mandarin/CHSFORMT.pdf).

Given the time control of a chess match as $a + b$, determine which format of chess out of the given $4$ it belongs to. 

$1)$ Bullet if $a + b \lt 3$  

$2)$ Blitz if $3 \leq a + b \leq 10$

$3)$ Rapid if $11 \leq a + b \leq 60$  

$4)$ Classical if $60 \lt a + b$



<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>