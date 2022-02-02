---
{"category_name":"school","problem_code":"GOODWEAT","problem_name":"Good Weather","problemComponents":{"constraints":"- $1 \\leq T \\leq 20$\n- $0 \\leq A_i \\leq 1$\n","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- First line will contain $T$, number of testcases. Then the testcases follow.\n- Each testcase contains of a single line of input, $7$ space separated integers $A_1, A_2, A_3, A_4, A_5, A_6, A_7$.\n","inputFormatState":true,"outputFormat":"For each testcase, print \u0022YES\u0022 if the weather report of Chefland is Good, otherwise print \u0022NO\u0022. Print the output without quotes.\n\nYou may print each character of the string in uppercase or lowercase (for example, the strings \u0022yEs\u0022, \u0022yes\u0022, \u0022Yes\u0022 and \u0022YES\u0022 will all be treated as identical).","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"4\n1 0 1 0 1 1 1\n0 1 0 0 0 0 1\n1 1 1 1 1 1 1\n0 0 0 1 0 0 0\n","output":"YES\nNO\nYES\nNO","explanation":"**Test case $1$:** The number of sunny days is $5$ and the number of rainy days is $2$. Hence the weather report of Chefland is Good.\n\n**Test case $2$:** The number of sunny days is $1$ and the number of rainy days is $6$. Hence the weather report of Chefland is not Good.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"soumyadeep_21","problem_tester":"","date_added":"17-09-2021","tags":{"0":"cakewalk","1":"soumyadeep_21","2":"start12"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/GOODWEAT","time":{"view_start_date":1632331800,"submit_start_date":1632331800,"visible_start_date":1632331800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GOODWEAT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
The weather report of Chefland is *Good* if the number of sunny days in a week is strictly greater than the number of rainy days. 

Given $7$ integers $A_1, A_2, A_3, A_4, A_5, A_6, A_7$ where $A_i = 1$ denotes that the $i^{th}$ day of week in Chefland is a sunny day, $A_i = 0$ denotes that the $i^{th}$ day in Chefland is a rainy day. Determine if the weather report of Chefland is *Good* or not.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>