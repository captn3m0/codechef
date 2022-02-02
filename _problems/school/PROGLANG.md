---
{"category_name":"school","problem_code":"PROGLANG","problem_name":"Programming Languages","problemComponents":{"constraints":"- $1 \\leq T \\leq 288$\n- $1 \\leq A, B, A_1, B_1, A_2, B_2 \\leq 4$\n- $A, B$ are distinct\n- $A_1, B_1, A_2, B_2$ are pairwise distinct\n","constraintsState":true,"subtasks":"**Subtask #1 (100 points):** original constraints","subtasksState":true,"inputFormat":"- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.\n- The first and only line of each test case contains six space-separated integers $A, B, A_1, B_1, A_2, B_2$.\n","inputFormatState":true,"outputFormat":"For each test case, print a single line containing the integer $1$ if Chef should switch to the first language, or $2$ if Chef should switch to the second language, or $0$ if Chef cannot switch to either language.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n1 2 2 1 3 4\n3 4 2 1 4 3\n1 2 1 3 2 4","output":"1\n2\n0","explanation":"**Example case 1:** The first language has the required features --- features $1$ and $2$.\n\n**Example case 2:** The second language has the required features --- features $3$ and $4$.\n\n**Example case 3:** Neither language has both features $1$ and $2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/LUHxure9ua8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"25-08-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"ltime99"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PROGLANG","time":{"view_start_date":1630170002,"submit_start_date":1630170002,"visible_start_date":1630170002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PROGLANG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME99/mandarin/PROGLANG.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME99/bengali/PROGLANG.pdf), [Russian](https://www.codechef.com/download/translated/LTIME99/russian/PROGLANG.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME99/vietnamese/PROGLANG.pdf) as well.

Chef is a software developer, so he has to switch between different languages sometimes. Each programming language has some features, which are represented by integers here.

Currently, Chef has to use a language with two given features $A$ and $B$. He has two options --- switching to a language with two features $A_1$ and $B_1$, or to a language with two features $A_2$ and $B_2$. All four features of these two languages are pairwise distinct.

Tell Chef whether he can use the first language, the second language or neither of these languages (if no single language has all the required features).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>