---
{"category_name":"easy","problem_code":"ADDNDIV","problem_name":"Add and Divide","problemComponents":{"constraints":"- $1 \\leq T \\leq 100000$\n- $1 \\leq a, b \\leq 10^9$\n","constraintsState":true,"subtasks":"","subtasksState":true,"inputFormat":"- First line of input will contain $T$, the number of test cases. Then the test cases follow.\n- Each test case contains a single line, two positive integers $a, b$.\n","inputFormatState":true,"outputFormat":"For each test case, output on one line YES if it is possible to make $x$ , or NO if it is not possible to do so. \n\nOutput is case insensitive, which means that \u0022yes\u0022, \u0022Yes\u0022, \u0022YEs\u0022, \u0022no\u0022, \u0022nO\u0022 - all such strings will be acceptable.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"4\n3 10\n9 6\n7 30\n8 12","output":"NO\nYES\nNO\nYES","explanation":"**Test case $2$:** We initially have $x$ set to $0$. Add $a = 9$ to $x$ for $4$ times to make $x$ equal to $36$. And then divide $x$ by $b = 6$ for $2$ times to make $x$ equal to $1$.\n\n**Test case $4$:** We initially have $x$ set to $0$. Add $a = 8$ to $x$ for $18$ times to make $x$ equal to $144$. And then divide $x$ by $b = 12$ for $2$ times to make $x$ equal to $1$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/lkxyHRjKf6U","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"utkarsh_adm","problem_tester":"","date_added":"15-09-2021","tags":{"0":"easy","1":"greatest","2":"start13","3":"utkarsh_adm"},"problem_difficulty_level":"Unavailable","best_tag":"Greatest Common Divisor","editorial_url":"https://discuss.codechef.com/problems/ADDNDIV","time":{"view_start_date":1632663002,"submit_start_date":1632663002,"visible_start_date":1632663002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ADDNDIV","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given two positive integers $a$ and $b$. You also have a number $x$, which is initially set to $0$. At first, you can add $a$ to $x$ any number of times. After that, you can divide $x$ by $b$ any number of times as long as $x$ is divisible by $b$.

Print **YES** if you can make $x$ equal to $1$, otherwise print **NO**.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>