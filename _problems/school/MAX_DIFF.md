---
{"category_name":"school","problem_code":"MAX_DIFF","problem_name":"The Two Dishes","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^3$\n- $1 \\leq N \\leq 10^5$\n- $1 \\leq S \\leq 2 \\cdot 10^5$\n","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- The first line of input contains a single integer $T$, denoting the number of testcases. The description of the $T$ testcases follows.\n- The first and only line of each test case contains two space-separated integers $N$, $S$, denoting the maximum tastiness and the sum of tastiness of the two dishes, respectively.\n","inputFormatState":true,"outputFormat":"For each testcase, output a single line containing the maximum absolute difference between the tastiness of the two dishes.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n3 1\n4 4\n2 3","output":"1\n4\n1","explanation":"**Test Case $1$:** The possible pairs of $\\{T_1, T_2\\}$ are $\\{0, 1\\}$ and $\\{1, 0\\}$. Difference in both the cases is $1$, hence the maximum possible absolute difference is $1$.\n\n**Test Case $2$:** The possible pairs of $\\{T_1, T_2\\}$ are $\\{0, 4\\}$, $\\{1, 3\\}$, $\\{2, 2\\}$, $\\{3, 1\\}$ and $\\{4, 0\\}$. The maximum possible absolute difference is $4$.\n\n**Test Case $3$:** The possible pairs of $\\{T_1, T_2\\}$ are $\\{1, 2\\}$ and $\\{2, 1\\}$. Difference in both the cases is $1$, and hence the maximum possible absolute difference is $1$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/8BskcW61h1I","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"lavish315","problem_tester":"","date_added":"12-09-2021","tags":{"0":"cakewalk","1":"lavish315","2":"math","3":"start11"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MAX_DIFF","time":{"view_start_date":1631727002,"submit_start_date":1631727002,"visible_start_date":1631727002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAX_DIFF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef prepared two dishes yesterday. Chef had assigned the $\textbf{tastiness}$ $T_1$ and $T_2$ to the first and to the second dish respectively. The tastiness of the dishes can be any $\textbf{integer}$ between $0$ and $N$ (both inclusive).

Unfortunately, Chef has forgotten the values of $T_1$ and $T_2$ that he had assigned to the dishes. However, he remembers the sum of the tastiness of both the dishes - denoted by $S$.

Chef wonders, what can be the maximum possible absolute difference between the tastiness of the two dishes. Can you help the Chef in finding the maximum absolute difference?

It is guaranteed that at least one pair $\{T_1, T_2\}$ exist such that $T_1 + T_2 = S, 0 \leq T_1, T_2 \leq N$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>