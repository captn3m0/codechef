---
{"category_name":"easy","problem_code":"HMWPRB","problem_name":"Chefs Homework Dilemma","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^6$\n- $1 \\leq n \\leq 10^6$\n- $1 \\leq k \\leq n$\n- $0 \\leq H_i \\leq 10^3$ for all $1 \\leq i \\leq n$\n- The sum of $n$ over all test cases is at most $10^6$\n","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- The first line contains a single integer $T$, the number of test cases. The description of the $T$ test cases follow.\n- The first line of each test case contains two integers $n$ and $k$ - the number of days in Chef\u0027s semester and the maximum number of consecutive days Chef can hack the school\u0027s record system.\n- The second line of each test case contains $n$ integers, $H_1, H_2, \\dots H_n$, where $H_i$ is the number of minutes Chef needs to complete the homework given on the $i$-th day.\n","inputFormatState":true,"outputFormat":"- For each test case, print a single line containing an integer, the minimum number of minutes Chef needs to spend on homework.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n7 3\n213 124 156 263 149 6 62\n7 1\n476 457 232 130 849 95 749\n7 2\n601 35 45 304 449 452 190","output":"130\n682\n484","explanation":"\n- In the first test case, Chef does his homework on days $2$ and $6$, taking a total of $H_2 + H_6 = 124 + 6 = 130$ minutes. The maximum number of consecutive days that Chef hacks is $3$ (days $3$, $4$, and $5$), which is not more than $k=3$.\n\n- In the second test case, Chef does his homework on days $2$, $4$, and $6$, taking a total of $H_2 + H_4 + H_6 = 457 + 130 + 95 = 682$ minutes.\n\n- In the third test case, Chef does his homework on days $2$ and $5$, taking a total of $H_2 + H_5 = 35 + 449 = 484$ minutes.\n\nYou can verify that these are indeed the optimal solutions.\n","isDeleted":false}}},"video_editorial_url":"https://youtu.be/IP-tw5_AQH0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"srikkanth_adm","problem_tester":"","date_added":"28-06-2021","tags":{"0":"double","1":"dynamic","2":"easy","3":"srikkanth_adm","4":"start6"},"problem_difficulty_level":"Easy","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/HMWPRB","time":{"view_start_date":1627126200,"submit_start_date":1627126200,"visible_start_date":1627126200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HMWPRB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/START6/russian/HMWPRB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START6/mandarin/HMWPRB.pdf), [Bengali](https://www.codechef.com/download/translated/START6/bengali/HMWPRB.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START6/vietnamese/HMWPRB.pdf) as well.

Chef's school semester lasts for $n$ days. Chef's teacher gives the students some homework every day and it is compulsory to turn in the homework by the very next day. Chef knows that the number of minutes needed to complete the homework on the $i$-th day is $H_i$.

Chef hates homework and wants to spend the minimum amount of time possible in doing homework. Luckily, he has a few tricks up his sleeve. Chef can hack the school records on any given day to make it show that the assigned homework is complete. However to avoid suspicion, Chef will not hack the records strictly more than $k$ days consecutively.

Can you help Chef find the minimum possible total number of minutes that Chef needs to spend on homework?

Note: 
- There are multiple test cases in a single file, refer to Input section for more details.
- Since the input is large, it is recommended to use fast input/output methods.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>