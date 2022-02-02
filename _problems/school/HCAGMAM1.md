---
{"category_name":"school","problem_code":"HCAGMAM1","problem_name":"Chef And Salary Pay","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^4$\n- $1 \\leq X \\leq 999$\n- $1 \\leq Y \\leq 999$\n- $|S| = 30$","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- The first line contains an integer $T$ denoting the number of test cases. The $T$ test cases then follow.\n- The first line of each test case contains $X$ and $Y$.\n- Second line contains a binary string (i.e it contains only `‘0’` / `‘1’`), where `\u00270\u0027` denotes that Chef was on leave and `\u00271\u0027` denotes Chef was working on that day.\n","inputFormatState":true,"outputFormat":"- For each testcase, output in a single line answer to the problem. i.e The salary received by Chef (including the bonus).","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n6 3\n111100110101100000101100011111\n8 2\n111010111101001010100100111101\n5 6\n011101010100101000001101000010","output":"117\n152\n78","explanation":"**Testcase $1$:** Chef\u0027s actual pay comes out $17 \\cdot 6 = 102-$ Rs and the length of longest continuous working streak comes out $5$ (the last $5$ working days), so bonus reward becomes $5 \\cdot 3 = 15-$ Rs. Hence Chef\u0027s salary comes out to be $102 + 15 = 117-$ Rs. \n\n**Testcase $2$:** Chef\u0027s actual pay comes out $144-$ Rs and the length of longest continuous working streak comes out $4$ (here there are multiple occurrences of the longest working streak, so company selects any one of them), so bonus reward becomes $8-$ Rs. Hence Chef\u0027s salary comes out to be $152-$ Rs. ","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Xky9xz7u4uo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"tm_sky11","problem_tester":"mexomerf","date_added":"23-09-2021","tags":{"0":"cakewalk","1":"start16","2":"tm_sky11"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/HCAGMAM1","time":{"view_start_date":1634751002,"submit_start_date":1634751002,"visible_start_date":1634751002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HCAGMAM1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Given the schedule of Chef for $30$ days (A binary string of length $30$ where `'0'` denotes that Chef was on leave and `'1'` denotes Chef was working on that day). Chef gets $X-$ Rs for every day he worked. As working continuously for a long time is hectic so Company introduced the following policy to give a bonus to its employees.

The company will check the longest streak for which an employee has worked and will award $Y-$ Rs for every day of that streak as a bonus. Calculate the salary received by Chef (including the bonus).

**Note:** Rs represents the currency of Chefland, and if there are two or more longest streaks of the same length, only one is counted for the bonus.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>