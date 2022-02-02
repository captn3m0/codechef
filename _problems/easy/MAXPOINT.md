---
{"category_name":"easy","problem_code":"MAXPOINT","problem_name":"Maximum Points","problemComponents":{"constraints":"- $1 \\leq T \\leq 100$\n- $1 \\leq A, B, C \\leq 10$\n- $1 \\leq X, Y, Z \\leq 10^6$\n","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- The first line of input contains a single integer $T$, denoting the number of testcases. The description of the $T$ testcases follows.\n- The first line of each testcase contains $3$ space separated integers $A, B$ and $C$.\n- The second line of each testcase contains $3$ space separated integers $X, Y$ and $Z$.","inputFormatState":true,"outputFormat":"For each testcase, output a single line containing an integer $P$, which denotes the maximum points that the Chef can score in O.C.L.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n4 4 4\n5 5 5\n5 5 5\n10 8 6\n5 6 7\n5 6 7\n","output":"300\n408\n240\n","explanation":"**Test Case $1$:** Chef can correctly solve all the problems within the time limit, resulting in total $300$ points. \n\n**Test Case $2$:** Chef can correctly solve $20$ problems on Appearance, $20$ problems on Flavor and $8$ problems on Texture, resulting in total $408$ points. We can prove that the Chef cannot get more than $408$ points. ","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"lavish315","problem_tester":"","date_added":"19-09-2021","tags":{"0":"brute","1":"lavish315","2":"simple","3":"start12"},"problem_difficulty_level":"Unavailable","best_tag":"Brute Force","editorial_url":"https://discuss.codechef.com/problems/MAXPOINT","time":{"view_start_date":1632331800,"submit_start_date":1632331800,"visible_start_date":1632331800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXPOINT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Cooking Examinations Authority (C.E.A.) is conducting an Ordinary Cooking Level (O.C.L.) test, which tests the candidate skills on three different aspects - Appearance, Flavor and Texture. Chef is planning to appear in this coveted test.

O.C.L. is a **$240$** $\textbf{minute}$ test consisting of $20$ $\textbf{problems}$ on $\textbf{each aspect}$ (and hence total $60$ problems).

Chef figured out that for $\textbf{each}$ problem on Appearance, Flavor and Texture
- He requires $A, B$ and $C$ minutes respectively to correctly solve that problem. 
- He will be awarded $X, Y$ and $Z$ points respectively when correctly solved that problem. 

Chef wonders what are the maximum points $P$ that he can get in O.C.L.? Can you help the Chef? 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>