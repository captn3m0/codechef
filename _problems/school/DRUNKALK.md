---
{"category_name":"school","problem_code":"DRUNKALK","problem_name":"Drunk Alcoholic","problemComponents":{"constraints":"- $1 \\leq T \\leq 100000$\n- $0 \\leq k \\leq 100000$\n- The sum of $k$ over all test cases does not exceed $1000000$\n","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line of input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.\n- The first line of each test case contains a single integer $k$, the number of seconds after which Faizal\u0027s position is to be calculated. \n","inputFormatState":true,"outputFormat":"- For each test case, output a single line containing one integer - Faizal\u0027s position after $k$ seconds.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n5\n11\n23\n","output":"7\n13\n25\n","explanation":"**1st Test Case**\n- Faizal walks $3$ steps forward in the $1^{st}$ second, ending up at $3$\n- Faizal walks $1$ step backward in the $2^{nd}$ second, ending up at $2$\n- Faizal walks $3$ steps forward in the $3^{rd}$ second, ending up at $5$\n- Faizal walks $1$ step backward in the $4^{th}$ second, ending up at $4$\n- Faizal walks $3$ steps forward in the $5^{th}$ second, ending up at $7$","isDeleted":false}}},"video_editorial_url":"https://youtu.be/CA_XVR3zaYg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"rag_hav13","problem_tester":"","date_added":"24-09-2021","tags":{"0":"cakewalk","1":"cakewalk","2":"csns2021","3":"csns2021","4":"rag_hav13"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DRUNKALK","time":{"view_start_date":1635960600,"submit_start_date":1635960600,"visible_start_date":1635960600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DRUNKALK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Faizal is very sad after finding out that he is responsible for Sardar's death. He tries to drown his sorrow in alcohol and gets very drunk. Now he wants to return to his home but can not walk straight. For every 3 steps, he ends up walking one step backward.


Formally, in the first second he moves 3 steps forward, in the 2nd second he moves 1 step backwards, in the 3rd second he moves 3 steps forward and in 4th second 1 step backwards and so on.


Can you tell how far from his initial position Faizal will be after $k$ seconds?


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>